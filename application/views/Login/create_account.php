<div>
	
<?php echo validation_errors(); ?>
	
<form action="<?php echo base_url(); ?>/Login/create_account" method="post">
	
	
	
	<div>
		<label for="fname"> First Name: </label>
		<input type="text" name="fname" id="fname" />
	</div>
	<div>
		<label for="lname"> Last Name: </label>
		<input type="text" name="lname" id="lname" />
	</div>
	
	
	<div>
		<label for="email"> Email: </label>
		<input type="text" name="email" id="email" />
	</div>
	
	<div>
		<label for="passwd"> Password: </label>
		<input type="password" name="passwd" id="passwd" />
	</div>
	
	<div>
		<label for="re_passwd"> Retype Password: </label>
		<input type="password" name="re_passwd" id="re_passwd" />
	</div>
	
		
	<input type="reset" name="reset" value="Reset"/>
	<input type="submit" name="send" value="Create" />
	
	
	
</form>
</div>