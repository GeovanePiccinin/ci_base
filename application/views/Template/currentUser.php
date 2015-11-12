<?php
if($this->session->userdata('is_logged_in')) { ?>
	<li class="dropdown" role="presentation">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
			<?php echo $this->session->userdata('fname'). " - ". $this->session->userdata('role');?> &#9660;
		</a>
<?php } ?>	