<?php 
session_start(); 

$db= mysqli_connect("localhost","root","","doctors_appointment_db","3308");
// variable declaration
$name = "";
$email    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['buttonadd'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $name, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$name    =  e($_POST['name']);
    $contact =  e($_POST['contact']);
    $address =  e($_POST['address']);
	$email =  e($_POST['email']);
	$password =  e($_POST['password']);
    
 




	// form validation: ensure that the form is correctly filled
	if (empty($name)) { 
		array_push($errors, "Câmp nume gol"); 
	}
    if (empty($contact)) { 
		array_push($errors, "Câmp contact gol"); 
	}
    if (empty($address)) { 
		array_push($errors, "Câmp adresa gol"); 
	}
	if (empty($email)) { 
		array_push($errors, "Câmp email gol"); 
	}
	if (empty($password)) { 
		array_push($errors, "Câmp parola gol"); 
	}
	

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password);//encrypt the password before saving in the database

		if (isset($_POST['type'])) {
			$type = e($_POST['type']);
			$query = "INSERT INTO users (`id`, `doctor_id`, `name`, `address`, `contact`, `username`, `password`, `type`) 
					  VALUES('$name', '$contact', '$address','$email', '$password', '$type')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "Utilizator creat cu succes!!";
			header('location: home.php');
		}else{
			$query = "INSERT INTO users (`id`, `doctor_id`, `name`, `address`, `contact`, `username`, `password`, `type`) 
					  VALUES('$name','$contact', '$address', '$email', '$password', '3')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "Te-ai autentificat cu succes";
			header('location: index.php');				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	

function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
} 

function isLoggedIn()
{
	if (isset($_SESSION['3'])) {
		return true;
	}else{
		return false;
	}
}
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $name, $errors;

	// grap form values
	$email =  e($_POST['email']);
	$password =  e($_POST['password']);

	// make sure form is filled properly
	if (empty($email)) {
		array_push($errors, "Email necesar");
	}
	if (empty($password)) {
		array_push($errors, "Parola necesara");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['type'] == '1') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: admin/index.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: index.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}