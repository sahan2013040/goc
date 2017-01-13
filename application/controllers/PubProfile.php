<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PubProfile extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('pubModel');
        $this->load->database();
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
        $id = $this->input->get('pub_id');

        $query = $this->db->query("SELECT * FROM pubs WHERE pub_id=$id");

        $d1 = [];
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $d1 = $row;
            }
        }
        $data['pub'] = $d1;
		$this->load->view('pub_profile_view', $data);
	}

	public function updateFavourites(){
        $pub_id = $this->input->get('pub_id');


//        echo $pub_id." ".$status;
//        $value =  array('status' => $status );
//        echo json_encode($value);

        echo $this->pubModel->addFavourites($pub_id);
    }
	
}
