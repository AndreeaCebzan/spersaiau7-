<?php session_start() ?>
<div class="container-fluid">
	<form action="" id="signup-frm">
		<div class="form-group">
			<label for="" class="control-label">Nume</label>
			<input type="text" name="name" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Nr. de contact</label>
			<input type="text" name="contact" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Adresă</label>
			<textarea cols="30" rows="3" name="address" required="" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Email</label>
			<input type="email" name="email" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Parolă</label>
			<input type="password" name="password" required="" class="form-control">
			<input type="hidden" name="doctor_id" >
        	<input type="hidden" name="type" >
		</div>
		<button class="button btn btn-info btn-sm">Crează</button>
	</form>
</div>

<style>
	#uni_modal .modal-footer{
		display:none;
	}
</style>
<script>
	$('#signup-frm').submit(function(e){
		e.preventDefault()
		$('#signup-frm button[type="submit"]').attr('disabled',true).html('Saving...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'admin/ajax.php?action=signup',
			action:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#signup-frm button[type="submit"]').removeAttr('disabled').html('Crează');
		
			},
			success:function(resp){
				if(resp == 1){
					location.href ='<?php echo isset($_GET['redirect']) ? $_GET['redirect'] : 'index.php?page=home' ?>';
					//location.reload();
				}
				else{
					$('#signup-frm').prepend('<div class="alert alert-danger">Email already exist.</div>')
					$('#signup-frm button[type="submit"]').removeAttr('disabled').html('Crează');
				}
			}
		})
	})
</script>