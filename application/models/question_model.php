<?php
class Question_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }
    
    public function create(){
        $resource = $this->input->post('res');
        if (strpos($resource,'youtube.com') !== FALSE){
            $type = 1;
            $resource = substr($resource, strpos($resource, 'watch') + 8);
        } else {
            $type = 0;
        }
        
        $data = array(
            'user_id' => $this->session->userdata('user_id'),
		    'name' => $this->input->post('name'),
		    'question' => $this->input->post('question'),
		    'right_answer' => $this->input->post('right'),
		    'wrong_answer1' => $this->input->post('wrong1'),
		    'wrong_answer2' => $this->input->post('wrong2'),
		    'wrong_answer3' => $this->input->post('wrong3'),
		    'type' => $type,
		    'resource' => $resource,
	    );

	    return $this->db->insert('questions', $data);
    }
    
    public function get($q_id = FALSE){
        $id = $this->session->userdata('user_id');
        
        if ($q_id == FALSE){
            $query = $this->db->get_where('questions', array('user_id' => $id));
            return $query->result();
        } else {
            $query = $this->db->get_where('questions', array('user_id' => $id, 'id' => $q_id));
            
            if ($query->num_rows() != 0){
                return $query->row();
            } else {
                return FALSE;
            }
        }
    }
    
    public function delete($id){
        $user_id = $this->session->userdata('user_id');
        $query = $this->db->get_where('questions', array('user_id' => $user_id, 'id' => $id));
        if ($query->num_rows() != 0){
            $this->db->delete('questions', array('id' => $id, 'user_id' => $user_id)); 
        }
        return TRUE;
    }
    
    public function edit($id){
        $user_id = $this->session->userdata('user_id');
        
        $resource = $this->input->post('res');
        if (strpos($resource,'youtube.com') !== FALSE){
            $type = 1;
            $resource = substr($resource, strpos($resource, 'watch') + 8);
        } else {
            $type = 0;
        }
        
        $data = array(
            'user_id' => $this->session->userdata('user_id'),
		    'name' => $this->input->post('name'),
		    'question' => $this->input->post('question'),
		    'right_answer' => $this->input->post('right'),
		    'wrong_answer1' => $this->input->post('wrong1'),
		    'wrong_answer2' => $this->input->post('wrong2'),
		    'wrong_answer3' => $this->input->post('wrong3'),
		    'type' => $type,
		    'resource' => $resource,
	    );

        $this->db->where('id', $id);
        $this->db->where('user_id', $user_id);
        $this->db->update('questions', $data);
        return TRUE;
    }
}
?>
