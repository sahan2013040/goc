<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UserModel extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function createUser($email, $username, $password)
    {
        $query = $this->db->query("SELECT * FROM users where email='".$email."'");
        if ($query->num_rows() > 0) {
            return false;
        }
        else{
            $data = array('name' => $username, 'password' => $password, 'email' => $email);
            $this->db->insert('users', $data);
        }

    }

    public function signIn($username, $password)
    {
        $query = $this->db->query("SELECT * FROM users where name='".$username."' AND password ='".$password."'");
        if ($query->num_rows() > 0) {
            return true;
        }
        else{
            return false;
        }
    }

    public function addPoints($username,$points){
        $query = $this->db->query("SELECT * FROM users where name='".$username."'");

        $row = $query->row_array();
        $currentPoints = $row['points'];
        $newPoints = $currentPoints + $points;
        $data=array('points'=>$newPoints);
        $this->db->where('name',$username);
        $this->db->update('users',$data);
    }

    public function getPoints($username)
    {
        $query = $this->db->query("SELECT * FROM users where name='".$username."'");
        $row = $query->row_array();
        $currentPoints = $row['points'];
        return $currentPoints;
    }
}