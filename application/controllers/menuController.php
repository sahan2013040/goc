<?php


class MenuController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model("eventModel");
    }

    public function index()
    {
        $this->load->view('intro_view');
    }

    public function createTH()
    {
        $this->load->view('map_view');
    }

    public function allTH()
    {
        $data["happenings"] = $this->eventModel->fetch_happenings();
        $this->load->view('happenings', $data);
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