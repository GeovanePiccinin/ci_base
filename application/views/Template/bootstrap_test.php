<?php $this->load->view('Template/header');?> 

<body>

<div class="container">
  <h2>Login</h2>
  <form role="form" action="<?php echo base_url(); ?>Login/validate_credentials" method="post" >
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

</body>
</html>


<?php
/*
  <body>
  <div class="container">

      <form class="form-signin" action="<?php echo base_url(); ?>Login/validate_credentials" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="email" class="sr-only">Email address</label>
        <input type="email" id="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="passwd" class="sr-only">Password</label>
        <input type="passwd" id="passwd" class="form-control" placeholder="Password" required>
      
      
        <input type="reset" name="reset" value="Reset" class="btn btn-lg btn-primary btn-block"/>
    	<input type="submit" class="btn btn-lg btn-primary btn-block" value="Submit">
      </form>

    </div> <!-- /container -->
    
    

  
  </body>
</html>
*/
?>
