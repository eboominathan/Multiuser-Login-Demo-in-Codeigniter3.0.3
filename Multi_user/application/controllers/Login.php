<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

           $this->load->model('login/login_model');         

    }
    /*
    *Showing  Login page here 
    */
    function index()
    {
        
        $this->load->view('login/login'); 
    }
    

    /**
    * check the username and the password with the database
    * @return void
    */
    
    function validate()
    {  
    
       
         $username = $this->input->post('username');
         $password = $this->input->post('password');

         $is_valid = $this->login_model->validate($username, $password);



        
         if($is_valid)/*If valid username and password set */
         {
             $get_id = $this->login_model->get_id($username, $password);                
					
            foreach($get_id as $val)
                { 
                    	$id=$val->id;
                     $name = $val->username;                  
                     $password = $val->password;                 
                     $type=$val->type;

                     if($type=='admin')
                     {
                        $data = array(
                        'admin_name' =>$name, 
                        'admin_password' => $password,
                        'admin_type'=>$type,
                        'admin_id'=>$id,
                        'is_logged_in' => true
                        );
                          $this->session->set_userdata($data); /*Here  setting the Admin datas in session */
                          redirect('admin/dashboard');
                     }
                    if($type=='staff')
                     {
                        
                        $data = array(
                        'staff_name' =>$name, 
                        'staff_password' =>$password,
                        'staff_type'=>$type,
                        'staff_id'=>$id,
                        'staff_is_logged_in' => true
                        );
                          $this->session->set_userdata($data); /*Here  setting the  staff datas values in session */
                          redirect('staff/dashboard');
                     }
                   
                    
            }       

         
        }
        else // incorrect username or password
        {

          
            $this->session->set_flashdata('msg1', 'Username or Password Incorrect!');
            redirect('login');
        }
   
    }

    /**
        * Unset the session, and logout the user.
        * @return void
    */      
    public function admin_logout()
    {
           
				$array_items = array(
				'admin_name', 
				'admin_password',
				'admin_type',
				'admin_id',
				'is_logged_in',
				);



        $this->session->unset_userdata($array_items);
         $this->session->set_flashdata('msg', 'Admin Signed Out Now!');
            redirect('login');

       
    }

    public function staff_logout()
    {
            $array_items = array(   
		
                        'staff_name',
                        'staff_password' ,
                        'staff_type',
                        'staff_id',
                        'staff_is_logged_in'
                        );



        $this->session->unset_userdata($array_items);
         $this->session->set_flashdata('msg', 'Staff Signed Out Now!');
            redirect('login');

       
    }

Public function next_demo()
{
  $this->load->view('next_demo');

}

    
    
}    
  