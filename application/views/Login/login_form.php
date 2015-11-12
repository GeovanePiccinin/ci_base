
<div class="container">

      <div class="starter-template">
        <h1>Welcome</h1>
        <p class="lead">This interface will permit you create questions to be used on trivia games based on Construct2!</p>
      </div>
</div>

<?php echo validation_errors(); ?>

 <div class="container">
  <h2>Login</h2>
  <form role="form" class="form-horizontal" action="<?php echo base_url(); ?>Login/validate_credentials" method="post" >
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="passwd">Password:</label>
      <input type="password" class="form-control" id="passwd" name="passwd" placeholder="Enter password">
    </div>
    
    <input type="reset" name="reset" value="Reset" class="btn btn-default"/>
    <input type="submit" class="btn btn-default" value="Submit">
  </form>
  
 
</div>
    

<?php
/*
<div>
	
	
<form action="<?php echo base_url(); ?>Login/validate_credentials" method="post">
	
	<div>
		<label for="email"> Email: </label>
		<input type="text" name="email" id="email" />
	</div>
	
	<div>
		<label for="passwd"> Password: </label>
		<input type="password" name="passwd" id="passwd" />
	</div>
	
	<input type="reset" name="reset" value="Reset"/>
	<input type="submit" name="send" value="Login" />
	
</form>
</div>
 * */
 
 ?>