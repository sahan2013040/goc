<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class pubModel extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function addFavourites($pub_id, $status){
        $data = array(
            'favourite' => $status

        );

        $this->db->where('id', $pub_id);
        $this->db->update('pubs', $data);

    }

//    public function getFavourites($pub_id){
//        $query = $this->db->query("SELECT * FROM pubs where id='".$pub_id."'");
//        $row = $query->row_array();
//        $favourite = $row['favourite'];
//        return $favourite;
//    }
}
