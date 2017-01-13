<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model("userModel");
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
		$this->load->view('intro_view');
	}

	public function home()
    {
        $this->load->view('template');
    }

    public function signIn()
    {
//        $postData["clues"] = $this->userModel->createUser();
        $username = $this->input->get('username');
        $password = $this->input->get('password');

        if($this->userModel->signIn($username, $password) === false){
            $postData["signIn"] = 'Invalid Credentials';
            $this->load->view('signIn',$postData);
        }
        else if($this->userModel->signIn($username, $password) === true){
            $postData["signIn"] = 'Signed in successfully';
            $this->load->view('template');
        }
    }

    public function normalSignIn()
    {
        $this->load->view('signIn');
    }

    public function signUp()
    {
        $email = $this->input->get('email');
        $username = $this->input->get('username');
        $password = $this->input->get('password');

        if($this->userModel->createUser($email, $username, $password) === false){
            $postData["signUp"] = 'User already exists';
            $this->load->view('signIn',$postData);
        }
        else{
            $postData["signUp"] = 'Signed up successfully';
            $this->load->view('signIn',$postData);
        }


    }
}
