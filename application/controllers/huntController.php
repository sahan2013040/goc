<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HuntController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    public function getEvent()
    {
        $id = $this->input->get('id');

        $query = $this->db->query("SELECT * FROM event WHERE id=$id");

        $d1 = [];
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $d1 = $row;
            }
        }
        $data['event'] = $d1;
        $this->load->view('startTreasureHunt', $data);

    }

}