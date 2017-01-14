<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pay extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model("UserModel");
    }

    public function redeem()
    {
        $username = $this->input->get('user');
        $points['points'] = $this->UserModel->getPoints($username);
        $points['total'] = $this->input->get('total');;
        $this->load->view('redeem_points',$points);
    }

}