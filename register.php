
<?php
   $DATABASE_HOST='localhost';
   $DATABASE_USER='root';
   $DATABASE_PASS='';
   $DATABASE_NAME='doctors_appointment_db';

   $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME, "3308");
   
    if(mysqli_connect_error()){
        exit('Error connecting to the database' . mysqli_connect_error());
    }

    if(!isset($_POST['name'],$_POST['address'],$_POST['contact'], $_POST['username'], $_POST['password'])){
        exit('Camp gol!');
    }

    if(empty($_POST['name']) || empty($_POST['address']) || empty($_POST['contact']) || empty( $_POST['username'] || empty( $_POST['password']))){
        exit("values empty");
    }
    if ($stmt= $con->prepare('SELECT id, doctor_id, name, address, contact, password, type FROM users WHERE username=?'))
    { $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();

        if($stmt->num_rows>0){
            echo 'Utilizatorul exista deja in baza de date';
        }
        else{
            if($stmt= $con->prepare('INSERT INTO users (doctor_id ,name, address, contact, username, password, type) VALUES (0,?, ?, ? ,?, ?,3)' )){
                $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
                $stmt->bind_param('sssss',$_POST['name'],$_POST['address'],$_POST['contact'],$_POST['username'], $password);
                $stmt->execute();
                //echo 'Succes';
                header('location: index.php');
            }
            else{
                echo 'Error';
            }
        }
        $stmt->close();
    }
    else{
        echo 'Error';
    }
    $con->close();
    ?>