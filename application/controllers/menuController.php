<?php


class MenuController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
         include('PHPMailerAutoload.php');
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
        $this->load->model('User');
        $data["users"] = $this->User->get_user_info();
        $data["pubs"] =  $this->User->get_fav_pub_info();
		$this->load->view('profile_view', $data);
    }

    public function help()
    {
        $this->load->view('help_view');
    }
    
      public function email(){
        $data = $this->input->post('result');
        $favouritepubs= $this->input->post('pubs');
    
        $msgbody="<html> <body> Hello!!!! These are my favourite pubs. Check them out <br> <ul>";
        foreach($favouritepubs as $item) { //foreach element in $arr
           $msgbody=$msgbody."<li>". $item ."</li>";
        }
        
        $msgbody= $msgbody . "</ul> </body> </html>";
        
        // $msgbody=substr($msgbody, 1);;
        // send email
        mail("gamesofcheers@gmail.com","My subject",$msg, $headers);
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = "gamesofcheers@gmail.com";
        $mail->Password = "Tharindu";
        $mail->SetFrom("gamesofcheers@gmail.com","Jon Snow");
        foreach($data as $item) { //foreach element in $arr
            $mail->addAddress($item);
        }
       
        $mail->Subject = "Games of Cheers Event Invitation";
        $mail->msgHTML($msgbody);
        if (!$mail->send()) {
        $error = "Mailer Error: " . $mail->ErrorInfo;
        } else {           
        }
        
     
    }
    
    public function selectCharacter()
	{
		$this->load->view('select_character_view');
        
	}
    
    public function updateCharacter()
    {
        $this->load->model('User');
        $img = $this->input->post('imgurl');
        $update = $this->User->updateCharacter($img);
    }
    
     public function newsletter()
    {
        $this->load->view('newsletter_view');
    }
}