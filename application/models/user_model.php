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
}
?>
