<?php
class User_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }
    
    public function create(){
        $data = array(
		    'email' => $this->input->post('email'),
		    'username' => $this->input->post('usernameC'),
		    'password' => sha1($this->input->post('passwordC'))
	    );

	    return $this->db->insert('users', $data);
    }
    
    public function check_credentials(){
	    $user = $this->input->post('username');
	    $password = sha1($this->input->post('password'));
        $query = $this->db->get_where('users', array('username' => $user, 'password' => $password));
        if ($query->num_rows() == 0){
            $query = $this->db->get_where('users', array('email' => $user, 'password' => $password));
        } 
        if ($query->num_rows() == 0){
            return FALSE;
        } else {
            $row = $query->row(); 
            return $row->id;
        }
    }
    
    public function get(){
        $id = $this->session->userdata('user_id');
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row();
    }
    
    public function edit(){
        $id = $this->session->userdata('user_id');
        $password = sha1($this->input->post('password'));
        $email_query = $this->db->get_where('users', array('email' => $this->input->post('email')));
        if ($email_query->num_rows() != 0){
            if ($email_query->row()->id != $id){
                return 'Email Address already in use';
            }
        }
        $query = $this->db->get_where('users', array('id' => $id, 'password' => $password));
        if ($query->num_rows() == 0){
            return 'Wrong Password';
        } else {
            $data = array(
               'email' => $this->input->post('email'),
               'password' => sha1($this->input->post('new_password')),
            );

            $this->db->where('id', $id);
            $this->db->update('users', $data);
            return TRUE;
        }
    }
}
?>
