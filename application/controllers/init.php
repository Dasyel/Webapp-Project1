<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Init extends CI_Controller {

    public function __construct()
       {
            parent::__construct();
            $this->load->model('Init_model');
       }
       
	public function index()
	{
	    $this->Init_model->create_users_table();
	    $this->Init_model->create_questions_table();
		$this->load->view('succes');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
