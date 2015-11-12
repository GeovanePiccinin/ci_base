<?php $this->load->view('Template/header');?>
<?php if(isset($message))
{
?>
<div class="container" >
	
	
	<h2><?php echo $message['status'] ?></h2>
	
	<p>
		
		<p><?php echo $message['operation'] ?></p>
		<p>The page will be redirected automatically in <strong id="timeLeft" value="<?php echo $message['time'] ?>"><?php echo $message['time'] ?> </strong> seconds...</p>
		<p>Or click the link bellow to be redirect.</p>
	<?php 
	
		//header('Location:'.$message['redirection'],$message['time']);
	
	?>
	<p><a href="<?php echo $message['redirection'];?>" id="relocation" value="<?php echo $message['redirection'];?>" > <?php echo $message['redirection_title'];?> </a></p>
	</p>
	
</div>
<?php
}

else{
	redirect(base_url());
}

?>

<script>
	
	$(document).ready(function() {  
    window.setInterval(function() {
    var timeLeft    = $("#timeLeft").html();
       
    var relocation = $('#relocation').attr('value');
                                       
        if(eval(timeLeft) == 0){
                window.location= (relocation);                 
        }else{              
            $("#timeLeft").html(eval(timeLeft)- eval(1));
        }
    }, 1000); 
});   
	
</script>
