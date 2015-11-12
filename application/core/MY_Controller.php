<?php
/**
 * Controller with methods to send message (feedback to the user) and validates
 * authorization
 * 
 * @author Geovane Piccinin (geovane.piccinin@gmail.com)
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
        }

        /*
         * this function loads a message in the message page
         * @param string $status the status of the message
         * @param string $operation
         * @param string $redirection
         * @param string $rediretion_title
         * @param int $time time in seconds to redirect to the next page
         * @return void
         */
		public function message($status='Fail',$operation='1001',$redirection='',$redirection_title='',$time=2)
		{
			$data['message'] = array(
								'status' => $status , 
								'operation'=>$operation,
								'time'=> $time, 
								'redirection' => base_url() . $redirection, 
								'redirection_title' => $redirection_title 
								);
			
			$this->load->view("Messages/message",$data);
		}


		/*
         * function checks if user is logged in and have permission for the page
         * @param array $list_authorizes_roles array with string of auth roles
         * @param string $by_userID email ou ID that identifies specific user
         * return boolean
         */
		public function is_authorized($list_authorized_roles = null, $by_userID = null)
		{
			$is_logged_in = $this->session->userdata('is_logged_in');
			$user_role = $this->session->userdata('role');
			
            $condition1 = isset($is_logged_in) ? true : false;
            $condition2 = isset($user_role) ? true : false;
            $condition3 = is_array($list_authorized_roles) ? true : false;
            $condition4 = in_array($user_role,$list_authorized_roles) ? true : false; 
            
            if($condition1 && $condition2 && $condition3 && $condition4)
                return true;
			else
               	show_error('You don\' have permision to access this page. <a href="'. base_url() . '">Login</a>');
 				die();
		}
       
}