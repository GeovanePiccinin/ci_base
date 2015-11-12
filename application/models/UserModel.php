<?php 

class UserModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }   
    
    /*
     * This function validates the login of the users into the system. It collects the UserID, Role,
     * First_Name, and Last_Name from the database where the email and password are the same to a user in the database.
     */
    
    function validate()
    {
        $this->db->select('userID,email,fname,lname,role');
        $this->db->where('email',$this->input->post('email'));
		$this->db->where('active', 'Y');
        $this->db->where('userpass',hash('sha256',$this->input->post('passwd')));
        //$this->db->where('userpass',$this->input->post('passwd'));
        $query = $this->db->get('users');

        if ($query->num_rows() == 1) {
        	
			//echo "it found the record";
			
            return $query->row();
        } 
        else 
        {
        	//echo "it didn't find the record";
            return false;
        }
    } /*end of validate*/
    
    function create_account()
	{
		
		$new_user = array(
		
			'email' => $this->input->post('email'),
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'role' => 'user',
			//'userpass' => $this->input->post('passwd')
			'userpass' => hash('sha256',$this->input->post('passwd'))
		);
		
		try
		{
			$this->db->insert('users', $new_user);
			return  TRUE;
		}
		catch(Exception $e)
		{
			return FALSE;
		}
		
		return FALSE; 
	}
	
	function update_password()
	{
		//new password
		$data = array( 
			'userpass' => hash('sha256',$this->input->post('new_passwd')) 
		);

		$this->db->where('email', $this->session->userdata('email'));
		$this->db->where('userpass',hash('sha256',$this->input->post('passwd')));
		
		$update = $this->db->update('users', $data);

		return $update;
	}
	
	function recover_password()
	{
		
	}
	
	function list_users()
	{
		
	}
    
	function delete_user()
	{
		
	}
} /* end of class LoginModel*/
