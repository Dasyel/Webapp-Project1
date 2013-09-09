<?php

class Init_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }
    
    function create_users_table(){
        $fields = array(
                        'id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 9, 
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE,
                                          ),
                        'username' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '16',
                                          ),
                        'email' => array(
                                                 'type' =>'VARCHAR',
                                                 'constraint' => '128',
                                          ),
                        'password' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '128',
                                          ),
                        'answered' => array(
                                                 'type' => 'INT',
                                                 'default' => '0',
                                                 'unsigned' => TRUE,
                                          ),
                        'correct' => array(
                                                 'type' => 'INT',
                                                 'default' => '0',
                                                 'unsigned' => TRUE,
                                          ),
                );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users', TRUE);
    }
    
    function create_questions_table(){
        $fields = array(
                        'id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 9, 
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE,
                                          ),
                        'name' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '64',
                                          ),
                        'question' => array(
                                                 'type' =>'VARCHAR',
                                                 'constraint' => '128',
                                          ),
                        'right_answer' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '32',
                                          ),
                        'wrong_answer1' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '32',
                                          ),
                        'wrong_answer2' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '32',
                                          ),
                        'wrong_answer3' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '32',
                                          ),
                        'type' => array(
                                                 'type' => 'CHAR',
                                                 'constraint' => '1',
                                          ),
                        'resource' => array(
                                                 'type' => 'TEXT',
                                          ),
                        'done' => array(
                                                 'type' => 'INT',
                                                 'default' => '0',
                                                 'unsigned' => TRUE,
                                          ),
                        'reports' => array(
                                                 'type' => 'INT',
                                                 'default' => '0',
                                                 'unsigned' => TRUE,
                                          ),
                );
                
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('questions', TRUE);
    }
}

?>
