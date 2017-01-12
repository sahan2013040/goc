<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    
    public function insertUser($data) {

        return $this->db->insert('user', $data);
    }

    public function get_user_info() {
      
        $this->db->select("*");
        $this->db->from('user');
       $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    
    }
    
     public function get_fav_pub_info() {
        $this->db->where('favourite', '1');
        $this->db->select("*");
        $this->db->from('pubs');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    
    public function updateCharacter($data) {
       $data = array(
               'imgurl' => $data
            );

        $this->db->where('user_id', 'user001');
        $this->db->update('user', $data); 
    }
    
}

?>