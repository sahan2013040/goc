<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pay extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function redeem()
    {
        $this->load->view('redeem_points');
    }

}