<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<!--  <?php include('header.php'); ?>-->
<!--  <?php include('uptomenu.php'); ?>-->

<!-- <?php include('function.php'); ?> -->



	<!-- this is for donor registraton -->
	<div class="search" style="background-color:;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Caută aici</h3>

		 <div class="formstyle" style="padding:70px;border: 1px solid lightgrey;margin-right: 293px;margin-bottom: 30px;background-color:#f3f3f8;color:#141313;width: 530px;margin-left: 400px;">
					<form action="search_result.php" method="post" class="form-group">

					<label>
						 Categorie:<select name="medical_speciality" type="text" style="width: 110px;margin-right: 175px;" />
												<option>-Select-</option>
												<option>[1]</option>
												<option>3</option>
											</select>

					</label>
					<button name="submit" type="submit" style="border-radius: 3px;color:#000;margin-left: 145px;margin-top: 8px;">Caută</button>
					<br>
					
					</form>



					
		 	</div>
	</div>
	
	

	
 <?php include('includes/footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>




</body>
</html>