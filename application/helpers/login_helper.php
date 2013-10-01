<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    function logged_or_redirect(){
        $inst =& get_instance();
        $id = $inst->session->userdata('user_id');
        $inst->load->helper('url');
        
        if($id == FALSE){
            $data['title'] = 'Login';
	        $data['login_message'] = '';
	        $data['success_message'] = '';
	        
            redirect('user/login','refresh');
        }
         
        return $id;
    }
    
    function not_logged_or_redirect(){
        $inst =& get_instance();
        $id = $inst->session->userdata('user_id');
        $inst->load->helper('url');
        
        if($id != FALSE){
            $data['title'] = 'Login';
	        $data['login_message'] = '';
	        $data['success_message'] = '';
	        
            redirect('home','refresh');
        }
    }
    
?>
