<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Question extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Question_model');
        $this->load->helper('login');
        $this->load->helper('url');
        logged_or_redirect();
    }

	public function index(){  
	    $data['user'] = $this->User_model->get();
	    $data['title'] = 'My Questions';
	    $data['questions'] = $this->Question_model->get();
	    
		$this->load->view('templates/header', $data);
		$this->load->view('templates/top_bar');
		$this->load->view('pages/questions');
		$this->load->view('templates/footer');
	}
	
	public function create(){
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    $data['title'] = 'Create question';
	    $data['error_message'] = '';

        $this->form_validation->set_rules('name', 'Name', 'required');
	    $this->form_validation->set_rules('res', 'Resource Link', 'required');
	    $this->form_validation->set_rules('question', 'The Question', 'required');
	    $this->form_validation->set_rules('right', 'The Right Answer', 'required');
	    $this->form_validation->set_rules('wrong1', 'First Wrong Answer', 'required');
	    $this->form_validation->set_rules('wrong2', 'Second Wrong Answer', 'required');
	    $this->form_validation->set_rules('wrong3', 'Third Wrong Answer', 'required');

	    if ($this->form_validation->run() != FALSE)
	    {
	        if ($this->Question_model->create()){
	            redirect('question','location');
            } else {
                $data['error_message'] = 'Something went wrong, please try again';
            }
	    }
	    
	    $this->load->view('templates/header', $data);
	    $this->load->view('templates/top_bar');
	    $this->load->view('pages/create_question');
	    $this->load->view('templates/footer');
	}
	
	public function delete($id = FALSE){
	    if ($id !== FALSE){
	        $this->Question_model->delete($id);
	    }	
	        
	    redirect('question','location');
	}
	
	public function edit($id = FALSE){
	    if ($id === FALSE){
	        redirect('question','location');
	    }
        
        $this->load->helper('form');
	    $this->load->library('form_validation');

	    $data['title'] = 'Edit question';
	    $data['error_message'] = '';
	    $data['question'] = $this->Question_model->get($id);
	    
	    if($data['question']->type == 1){
	        $data['question']->resource = 'http://www.youtube.com/watch?v='.$data['question']->resource;
	    }
	    
	    if($data['question'] === FALSE){
	        redirect('question','location');
	    }

        $this->form_validation->set_rules('name', 'Name', 'required');
	    $this->form_validation->set_rules('res', 'Resource Link', 'required');
	    $this->form_validation->set_rules('question', 'The Question', 'required');
	    $this->form_validation->set_rules('right', 'The Right Answer', 'required');
	    $this->form_validation->set_rules('wrong1', 'First Wrong Answer', 'required');
	    $this->form_validation->set_rules('wrong2', 'Second Wrong Answer', 'required');
	    $this->form_validation->set_rules('wrong3', 'Third Wrong Answer', 'required');

	    if ($this->form_validation->run() != FALSE)
	    {
	        if ($this->Question_model->edit($id)){
	            redirect('question','location');
            } else {
                $data['error_message'] = 'Something went wrong, please try again';
            }
	    }
	    
	    $this->load->view('templates/header', $data);
	    $this->load->view('templates/top_bar');
	    $this->load->view('pages/edit_question');
	    $this->load->view('templates/footer');
	}
}

