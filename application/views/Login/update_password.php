<?php echo validation_errors(); ?>

<form action="<?php echo base_url(); ?>Login/update_password" method="post">


<div>
		<label for="passwd"> Current Password: </label>
		<input type="password" name="passwd" id="passwd" />
	</div>
	
	<label for="new_passwd"> Password: </label>
		<input type="password" name="new_passwd" id="new_passwd" />
	</div>
	
	<div>
		<label for="re_new_passwd"> Retype Password: </label>
		<input type="password" name="re_new_passwd" id="re_new_passwd" />
	</div>
	
	<input type="reset" name="reset" value="Reset"/>
	<input type="submit" name="submit" value="Submit" />
	
</div>