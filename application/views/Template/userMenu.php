<?php 
if ($this->session->userdata('is_logged_in')) {  ?>
	<ul class="dropdown-menu nav navbar-nav navbar-inverse navbar-right" role="menu"> 
		<li><a href="<?php echo base_url()?>Login/update_password">Change Password</a></li>
		<li><a href="<?php echo base_url()?>Login/logout">Logout</a></li>
	</ul>
<?php } ?>


</li>