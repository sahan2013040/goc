<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {

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
        $guests = $this->input->get('guests');
        $invitees = $this->input->get('invitees');
        $venue = $this->input->get('venue');        
		$this->load->view('reservation_view', array('event'=>$event, 'guests'=>$guests, 'invitees' => $invitees, 'venue' => $venue));
	}

	public function menu()
	{
		$this->load->view('iphone_menu');
	}
    
    public function addevent()
    {
      $invitees = $this->input->post('invitees');
   
      $eventobject = array(
        'name' => $this->input->post('eventname'),  
        'venue' =>  $this->input->post('venue'),
        'dateTime' => $this->input->post('dateD') . ' '. $this->input->post('timeT')
        );
        $this->load->model('eventModel');
        $this->eventModel->insertEvent($eventobject);
    }
    
}
