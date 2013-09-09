<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
       {
            parent::__construct();
            $this->load->model('User_model');
       }
       
	public function index()
	{
	    $this->Init_model->create_users_table();
	    $this->Init_model->create_questions_table();
		$this->load->view('succes');
	}
	
	public function create()
    {
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    $data['title'] = 'Login';
	    $data['success_message'] = '';

        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[users.email]');
	    $this->form_validation->set_rules('usernameC', 'Username', 'required|is_unique[users.username]');
	    $this->form_validation->set_rules('passwordC', 'Password', 'required');
	    $this->form_validation->set_rules('passwordCRepeat', 'Repeat Password', 'required|matches[passwordC]');

	    if ($this->form_validation->run() != FALSE)
	    {
	        //$this->news_model->set_news();
	        $data['success_message'] = 'Successfully created account! You can now login.';
	    }
	    
	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/login');
	    $this->load->view('templates/footer');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
