<?php
/*
 
 array(
		'field' => '',
		'label' => '',
		'rules' => ''
  )
 
 */


	$config = array (
	
		'signup' => array(	
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'trim|required|valid_email'
			),
			array(
				'field' => 'passwd',
				'label' => 'Password',
				'rules' => 'trim|required|min_length[4]|max_length[40]'
			)	
		),
			
		'new_account' => array(
			array(
				'field' => 'fname',
				'label' => 'First Name',
				'rules' => 'trim|required'
  			),
			array(
				'field' => 'lname',
				'label' => 'Last Name',
				'rules' => 'trim|required'
  			),
  			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'trim|required|valid_email|is_unique[users.email]'
			),
			array(
				'field' => 'passwd',
				'label' => 'Password',
				'rules' => 'trim|required|min_length[4]|max_length[40]'
			),
			array(
				'field' => 're_passwd',
				'label' => 'Repeated Password',
				'rules' => 'trim|required|matches[passwd]'
			)
		),
		
		'update_password' => array(
			array(
				'field' => 'passwd',
				'label' => 'Password',
				'rules' => 'trim|required|min_length[4]|max_length[40]'
			),
			array(
				'field' => 'new_passwd',
				'label' => 'New Password',
				'rules' => 'trim|required|min_length[4]|max_length[40]'
			),
			array(
				'field' => 're_new_passwd',
				'label' => 'Repeated New Password',
				'rules' => 'trim|required|matches[new_passwd]'
			)
		)
		
			
	);

?>
