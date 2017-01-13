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

    public function addFavourites($pub_id){
//        $data = array(
//            'id' => $pub_id,
//            'favourite' => $status
//        );
//        $this->db->set();
//        $this->db->where('id', $pub_id);
//        $this->db->set('favourite', $status);
//        $this->db->update('pubs');
//        return $pub_id." ".$status;


        $query = $this->db->query("SELECT * FROM pubs where pub_id='".$pub_id."'");

        $row = $query->row_array();
        $fav = $row['favourite'];
        if($fav == 1){
            $data=array('favourite'=>0);
            $this->db->where('pub_id',$pub_id);
            $this->db->update('pubs',$data);
        }
        else{
            $data=array('favourite'=>1);
            $this->db->where('pub_id',$pub_id);
            $this->db->update('pubs',$data);
        }


    }

//    public function getFavourites($pub_id){
//        $query = $this->db->query("SELECT * FROM pubs where id='".$pub_id."'");
//        $row = $query->row_array();
//        $favourite = $row['favourite'];
//        return $favourite;
//    }
}
