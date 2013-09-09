<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct(){
            parent::__construct();
            $this->load->model('User_model');
       }
       
	public function index(){
	    $this->Init_model->create_users_table();
	    $this->Init_model->create_questions_table();
		$this->load->view('succes');
	}
	
	public function create(){
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    $data['title'] = 'Login';
	    $data['success_message'] = '';
	    $data['login_message'] = '';

        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[users.email]');
	    $this->form_validation->set_rules('usernameC', 'Username', 'required|is_unique[users.username]');
	    $this->form_validation->set_rules('passwordC', 'Password', 'required');
	    $this->form_validation->set_rules('passwordCRepeat', 'Repeat Password', 'required|matches[passwordC]');

	    if ($this->form_validation->run() != FALSE)
	    {
	        if ($this->User_model->create()){
	            $data['success_message'] = 'Successfully created account! You can now login.';
            } else {
                $data['success_message'] = 'Something went wrong, please try again';
            }
	    }
	    
	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/login');
	    $this->load->view('templates/footer');
    }
    
    public function login(){
        $this->load->helper('form');
	    $this->load->library('form_validation');

	    $data['title'] = 'Login';
	    $data['login_message'] = '';
	    $data['success_message'] = '';

	    $this->form_validation->set_rules('username', 'Username', 'required');
	    $this->form_validation->set_rules('password', 'Password', 'required');

	    if ($this->form_validation->run() != FALSE){
	        $user_id = $this->User_model->check_credentials();
	        if ($user_id == FALSE){
	            $data['login_message'] = 'Either the username/email or the password is not correct';
	            $this->load->view('templates/header', $data);
	            $this->load->view('pages/login');
	            $this->load->view('templates/footer');
            } else {
                $this->session->set_userdata('user_id', $user_id);
                $this->load->view('templates/header', $data);
	            $this->load->view('pages/home');
	            $this->load->view('templates/footer');
            }
	    } else {
	        $this->load->view('templates/header', $data);
            $this->load->view('pages/login');
            $this->load->view('templates/footer');
        }
	    
	    
    }
}
?>
