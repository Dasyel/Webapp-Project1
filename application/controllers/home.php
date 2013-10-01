<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('login');
        $this->load->helper('url');
        logged_or_redirect();
    }

	public function index()
	{  
	    $data['user'] = $this->User_model->get();
	    $data['title'] = 'Home';
	    
		$this->load->view('templates/header', $data);
		$this->load->view('templates/top_bar');
		$this->load->view('pages/home');
		$this->load->view('templates/footer');
	}
}

