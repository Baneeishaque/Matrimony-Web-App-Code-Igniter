<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	    function __construct() { 
        parent::__construct();
        
         $this->load->helper('url');
         $this->load->helper(['url', 'language']);
     	$this->load->model('Onlinemodel');
        $this->load->model('Register_Model');

		 $this->load->model('User_Model');
  //        $this->load->database();
  //       $this->load->library(['ion_auth', 'form_validation']);
  //       $this->lang->load('auth');
		$this->load->library('email');
		$this->load->library('form_validation');
		$this->load->helper('form');
        $this->load->library('session'); 
     }
    public function index()
     {
        $data['profilefor'] = $this->Register_Model->getdata('profilefor');
        $data['gender'] = $this->Register_Model->getdata('gender');
        $data['mothertoungue'] = $this->Register_Model->getdata('languages');
        $data['religion'] = $this->Register_Model->getdata('religion');
        $data['cast'] = $this->Register_Model->getdata('cast');
        $data['country'] =$this->Register_Model->getdata('country');
        
        $this->load->view('headers/header_home');
        $this->load->view('home/home',$data);
        $this->load->view('footers/footer_home');

     }

     public function check_webid(){

        $webid = $this->input->post('webid');

        echo "string";
        die();

        $this->load->model('User_Model');
        if($this->User_Model->check_webid($webid)==TRUE){

            echo 0;

        }
        else{

            echo 1;
        }
    }
    
    public function about_us()
     {
        $this->load->view('headers/header_log');
        $this->load->view('home/about_us');
        $this->load->view('footers/footer_log');

     }
    public function faq()
     {
        $key = $this->input->post('key');
        $data['results'] = $this->User_Model->key($key);
        $this->load->view('headers/header_log');
        $this->load->view('home/faq',$data);
        $this->load->view('footers/footer_log');

     }
    public function services()
     {
        $this->load->view('headers/header_log');
        $this->load->view('home/services');
        $this->load->view('footers/footer_log');

     }
    public function contact()
     {
         $data['locations'] =$this->Register_Model->getdata('locations');
        $this->load->view('headers/header_log');
        $this->load->view('home/contact');
        $this->load->view('home/branchmap',$data);
        $this->load->view('footers/footer_log');

     }
     public function privacy_policy()
     {
        $this->load->view('headers/header_log');
        $this->load->view('home/privacy-policy');
        $this->load->view('footers/footer_log');

     }
     public function terms_conditions()
     {
        $this->load->view('headers/header_log');
        $this->load->view('home/terms-conditions');
        $this->load->view('footers/footer_log');

     }
    public function Happy_couples()
     {
        $this->load->view('headers/header_log');
        $this->load->view('home/Happy_couples');
        $this->load->view('footers/footer_log');

     }
     public function add_story()
     {
        $this->load->view('headers/header_log');
        $this->load->view('home/success_story');
        $this->load->view('footers/footer_log');

     }
     public function help()
     {
        $this->load->view('headers/header_log');
        $this->load->view('home/help');
        $this->load->view('footers/footer_log');

     }
     public function branches()
     {
        $data['records'] = $this->Register_Model->getbranches('locations');
        $this->load->view('headers/header_log');
        $this->load->view('home/branches', $data);
        $this->load->view('footers/footer_log');

     }
     public function couples_add(){

        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;
        $config['file_name']= md5(time()).'.jpg';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('headers/header_log');
            $this->load->view('home/success_story',$error);
            $this->load->view('footers/footer_log');

        }else{
            $date=$this->input->post('date');
            $dateObj = date_create($date);

            $data = array(
            'b_webid' => $this->input->post('bride_id'),
            'g_webid' => $this->input->post('groom_id'),
            'name' => $this->input->post('name'),
            'date' =>$this->input->post('date'),
            'story' => $this->input->post('story'),

            "image"=>$this->upload->file_name

            );
            $this->User_Model->insert_couples($data);

            redirect('Home/Happy_couples');

            }

        }


     public function LoginCheck()
     { 
     	// if( $this->session->userdata('name'))
     	// { 

     	// 	$this->load->view('admin/header');
     	// 	$this->load->view('admin/index.html');
     	// 	$this->load->view('admin/footer');
     	// }
     	// else 
     	// {

     		$data=array(); 
     		$username = $this->input->get_post('username');
     		$password=$this->input->get_post('password');


     		$this->load->model('Onlinemodel');
     		$login['log']=$this->Onlinemodel->CheckUser($username);


     		if($login['log'])
     		{
     			foreach ($login['log']->result() as $key) {
     				if(password_verify($password,$key->password))
     				{

     					// $name=	$key->first_name;
     					// $user=	$key->userid;
     					// $branch=$key->branch;
     					// $role =$key->role;
     					// $this->session->set_userdata('user', $user);
     					// $this->session->set_userdata('name', $name);
     					// $this->session->set_userdata('branch', $branch);
     					// $this->session->set_userdata('role', $role);
     					?> <script type="text/javascript">
     						alert('succes');
     						</script> <?php

						$this->index();
     					// $this->load->view('admin/header');
     					// $this->load->view('admin/index.html');
     					// $this->load->view('admin/footer');

     				}
     				else
     				{              
     					?> <script type="text/javascript">
     						alert('incorrect username or password');
     						</script> <?php 
     						$this->index();
     					}

     				}

     			}else
     				{              
     					?> <script type="text/javascript">
     						alert('incorrect username or password');
     						</script> <?php 
     						$this->index();
     					}

     		// }
     	}
        public function contact_mail(){

        if(isset($_POST['g-recaptcha-response'])) {
    // RECAPTCHA SETTINGS
            $captcha = $_POST['g-recaptcha-response'];
            $ip = $_SERVER['REMOTE_ADDR'];
            $key = '6LeNubIaAAAAAD4LfwDCbIvFeigLCufdUdbEts7_';
            $url = 'https://www.google.com/recaptcha/api/siteverify';

    // RECAPTCH RESPONSE
            $recaptcha_response = file_get_contents($url.'?secret='.$key.'&response='.$captcha.'&remoteip='.$ip);
            $data = json_decode($recaptcha_response);

            if(isset($data->success) &&  $data->success === true) {
            }
            else {
                ?> <script type="text/javascript">
                alert('Please check the captcha form');
                </script> <?php

                redirect('home/contact', 'refresh');

                die('Your account has been logged as a spammer, you cannot continue!');
            }
        }

        $name = strtoupper($this->input->post('name'));
        $message = strtoupper($this->input->post('message'));
        $phone = strtoupper($this->input->post('phone'));
        $quiry = ($this->input->post('quiry'));

            $message="<b>Hello Malayali Marriages </b>
                      <p>My Name is ".$name.",
                  My Queries :  ".$quiry.",
                  My messasge : ".$message."
                  Mobile : ".$phone."</p>";

                $this->email->from($this->input->post('email'));
                $this->email->set_mailtype("html");
                $this->email->to('malayalimarriages@gmail.com');
                // $this->email->to('user13.wahylab@gmail.com'); 

                $this->email->subject('Customer Queiry');
                $this->email->message($message);
              if($this->email->send())
             {
                header("Location: http://malayalimarriages.com/demo/");
                exit;
             }
             else
            {
             show_error($this->email->print_debugger());
            }
                 
        }









}
?>