<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invite extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
         include 'ChromePhp.php';
    }

    /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $event = $this->input->get('event');
        $venue = $this->input->get('venue');
         ChromePhp::log("venue");
         ChromePhp::log($venue);
		$this->load->view('invite_friends_view', array('event'=> $event, 'venue'=> $venue));
	}

	public function menu()
	{
		$this->load->view('iphone_menu');
	}
	

}
