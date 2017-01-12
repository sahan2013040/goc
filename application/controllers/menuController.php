<?php


class MenuController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('intro_view');
    }

    public function createTH()
    {
        $this->load->view('map_view');
    }

    public function startTH()
    {
        $this->load->view('startTreasureHunt');
    }

    public function profile()
    {
        $this->load->view('profile_view');
    }

    public function help()
    {
        $this->load->view('help_view');
    }
}