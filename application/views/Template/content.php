	<?php $this->load->view('Template/header');?>
	
	<div id="wrapper">
	
	 <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-inverse navbar-static-top ">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
          </div>
          
         
           
          
          	<?php $this->load->view("Template/menu"); ?>    
              
          
    
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
     

    </div> <!-- /container -->
	
	
	
	<div class="container">

		<?php if(isset($content)) $this->load->view($content); ?>

	</div>

	</div>
	
	
	<div id="footer">
		<div class="container">
			
			<div class="copyright col-md-6" id="copyright">
			
			
			</div>
        </div>
	</div>
	


