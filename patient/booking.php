<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>

	
<!-- result -->
<?php 
	$doc_id = isset($_GET['id'])?$_GET['id']:"";
	
 ?>
				<!-- fetching doctor info -->
					<?php 
					include('../config.php');
					

							$sql="SELECT * FROM doctors_list WHERE id = $id ";

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							        $id   = $row["id"];
							        $name 	= $row["name"];
							        $expertise 	= $row["expertise"];
							        $contact 	= $row["contact"];
							    }
							}
							
							$conn->close();

					?>
					<!-- fetching doctor info -->

	<!-- 	booking info-->
		<div class="login" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Book Appoinment</h3>
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group" enctype="multipath/form-data">
					

					<label>
						Dr. Name: <input type="text" name="doctor_id" value="<?php echo $id; ?>" >
					</label><br><br>

					<label>
						Pacient: <input type="text" name="pacient_id" value="<?php echo $pacient_id; ?>" >
					</label><br><br>

					orar: <input type="date" name="schedule" value="<?php echo $schedule; ?>" >
					</label><br><br>
						  
					status: <input type="number" name="status" value="<?php echo $status; ?>" >
					</label><br><br>

					<button name="submit" type="submit" style="padding-right:5px;border-radius:3px;margin-right:;">Confirm</button> 
					<a href="search_doctor.php"><button name="" type="" style="padding-right:5px;border-radius:3px;margin-right:-150px;">Cancel</button></a> <br>


				</form> <br><br>

			</div>
	
	
		</div>
				<!-- 	booking info-->
				
			<!-- confirming booking -->
					<?php

						include('../config.php');
						if(isset($_POST['submit'])){
							

						$sql = " INSERT INTO appointment_list (id, doctor_id, patient_id, schedule, status, date_created)
							VALUES ('" . $_POST["id"] . "','" . $_POST["patient_id"] . "','" . $_POST["schedule"] . "','" . $_POST["status"] . "',"2020-09-24 16:43:21" )";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('Your booking has been accepted!');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$conn->close();
						}
					?> 

				<!-- confirming booking -->

	
	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 


	
</body>
</html>
