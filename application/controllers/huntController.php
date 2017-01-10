<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HuntController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function happenings()
    {
        $this->load->view('happenings');
    }
}