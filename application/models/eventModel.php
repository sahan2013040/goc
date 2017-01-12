<?php

class EventModel extends CI_Model
{
    public $id;
    public $name;
    public $venue;
    public $dateTime;

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function fetch_happenings() {
//        $this->db->limit($limit, $start);
//        $query = $this->db->get("post");
        $query = $this->db->get("event");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

}