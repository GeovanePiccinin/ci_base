<div id="navbar" class="navbar-collapse collapse">
   


<?php 
if ($this->session->userdata('is_logged_in')) { 
	if ($this->session->userdata('role') == 'admin') { ?>
		 <ul class="nav navbar-nav">
		 	
		 	<li><a href="<?php echo base_url();?>Question/index">Dashboard</a></li>
			
			<li class="dropdown">
				   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Quiz <span class="caret"></span></a>
          			<ul class="dropdown-menu" role="menu">
          				<li><a href="<?php echo base_url(); ?>Quiz/my_quiz">List quizzes</a></li>
          				<li role="presentation" class="divider"></li>
            			<li><a href="<?php echo base_url(); ?>Quiz/create_Quiz">New Quiz</a></li>
            			
            			
         			</ul>
			</li>
			
			
			<li class="dropdown">
				   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Question <span class="caret"></span></a>
          			<ul class="dropdown-menu" role="menu">
          				<li><a href="<?php echo base_url();?>Question/my_questions">My list of questions</a></li>
          				<li role="presentation" class="divider"></li>
            			<li><a href="<?php echo base_url(); ?>Question/create_question">New mult. Choice question</a></li>
            			<li><a href="<?php echo base_url(); ?>Question/create_question_true_false">New true-false question</a></li>
            			
         			</ul>
			</li>
			<li class="dropdown">
				   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories <span class="caret"></span></a>
          			<ul class="dropdown-menu" role="menu">
          				<li><a href="<?php echo base_url(); ?>Category/my_categories">List categories</a></li>
          				<li role="presentation" class="divider"></li>
            			<li><a href="<?php echo base_url(); ?>Category/create_category">New Category</a></li>
            			
            			
         			</ul>
			</li>
			
			
		</ul>
		
		 <ul class="nav navbar-nav navbar-inverse navbar-right">
             <?php $this->load->view("Template/currentUser"); ?>
             	<?php $this->load->view("Template/userMenu"); ?>
         </ul>
		
	
		
		
		
		
<?php } 
	else if ($this->session->userdata('role') == 'user') { ?>
		  <ul class="nav navbar-nav">
		  	
		  	<li><a href="<?php echo base_url();?>Question/index">Dashboard</a></li>
		  	
		  	<li class="dropdown">
				   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Quiz <span class="caret"></span></a>
          			<ul class="dropdown-menu" role="menu">
          				<li><a href="<?php echo base_url(); ?>Quiz/my_quiz">List quizzes</a></li>
          				<li role="presentation" class="divider"></li>
            			<li><a href="<?php echo base_url(); ?>Quiz/create_Quiz">New Quiz</a></li>
            			
            			
         			</ul>
			</li>
		  	
		  	
		  	
		  
			<li class="dropdown">
				   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Question <span class="caret"></span></a>
          			<ul class="dropdown-menu" role="menu">
          				<li><a href="<?php echo base_url();?>Question/my_questions">My list of questions</a></li>
          				<li role="presentation" class="divider"></li>
            			<li><a href="<?php echo base_url(); ?>Question/create_question">New mult. choice question</a></li>
            			<li><a href="<?php echo base_url(); ?>Question/create_question_true_false">New true-false question</a></li>
            			
         			</ul>
			</li>
			<li class="dropdown">
				   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories <span class="caret"></span></a>
          			<ul class="dropdown-menu" role="menu">
          				<li><a href="<?php echo base_url(); ?>Category/my_categories">List categories</a></li>
          				<li role="presentation" class="divider"></li>
            			<li><a href="<?php echo base_url(); ?>Category/create_category">New Category</a></li>
            			
            			
         			</ul>
			</li>

		</ul>
		
		 <ul class="nav navbar-nav navbar-inverse navbar-right">
             <?php $this->load->view("Template/currentUser"); ?>
             	<?php $this->load->view("Template/userMenu"); ?>
         </ul>
<?php }
}
?>

 </div>


 
        
         