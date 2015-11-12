<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller 
{
	function __construct()
 	{
 		parent::__construct(); 			
 	}
	
    public function bootstrap_test()
	{
		$this->load->view("Template/bootstrap_test");
	}
	
	public function index() 
	{
		if($this->session->userdata('is_logged_in'))// if the user is already logged in redirect to the main page
		{
			//echo "you are logged in already";
			//redirect(base_url().'Question/index');
		}
		
		$data['content'] = 'Login/login_form';
		$this->load->view('Template/content',$data);
		
		
	} /*end of index*/

	function validate_credentials() 
	{
		if ($this->form_validation->run('signup') == FALSE) 
		{
			$data['content'] = 'Login/login_form';
			$this->load->view('Template/content',$data);
		}
		else
			{		
				if($this->session->userdata('is_logged_in') !== TRUE) //nobody is logged yet
				{
					$this->load->model('UserModel');
					$row = $this->UserModel->validate();
					if ($row)
					{
						$data = array(
						'userID' => $row->userID,
						'email' => $row->email,
						'fname' => $row->fname,
						'lname' => $row->lname,
						'role' => $row->role,
						'is_logged_in' => TRUE
						);

						$this->session->set_userdata($data);
						redirect(base_url().'Question/index');
					}
					else 
					{
						$this->message("Failed", "Login invalid", 'Login/validate_credentials', 'Login Page');
					}
				}
				else //if someome is logged already, proceed logout
				{
					$this->message('Error', 'There is a current user for the session. Proceeding logout.', 'Login/logout', 'Logout');	
				}		 
			}
			
	} /*end of validate_credentials*/

	function create_account()
	{
		
		if ($this->form_validation->run('new_account') == false) 
		{
            $data['content'] = 'Login/create_account';
			$this->load->view("Template/content",$data);
		}
		else
			{
				$this->load->model('UserModel');
				if($this->UserModel->create_account())
				{
					//echo "user created with success";
					$this->message('Success', 'User was created with success.', 'Question/index', 'My list of questions');
				}
				
			}		
	}

	function update_password() 
	{
	
	
		$this->is_authorized(array('admin','user'));
			
		if ($this->form_validation->run('update_password') == FALSE) 
		{
			$data['content'] = 'Login/update_password';
			$this->load->view("Template/content",$data);
		} 
		else
		{
			$this->load->model('UserModel');
			$this->UserModel->update_password();
		}

	}
	
	
	function logout()
 	{
 		
		$this->session->sess_destroy();  
		
		//echo "logout - session was destroyed";
		
		$this->message('Success', 'Logout operation completed.', 'Login/index', 'Login');
		
		//redirect(base_url());
 	}
	
	
	function recover_password()
	{
		//load form to get the recovery email information
		//check the email in the database, if yes send password for this email, if not, error message
		
		$this->form_validation->set_rules('email','Email', 'trim|required|valid_email');
			
		if ($this->form_validation->run() == FALSE) 
		{
			$data['content'] = 'Login/recover_password';
			$this->load->view("Template/content",$data);
		} 
		else
		{
			$this->load->model('UserModel');
			$this->UserModel->recover_password();
		}
		
		
	}
} /*end of class login*/

