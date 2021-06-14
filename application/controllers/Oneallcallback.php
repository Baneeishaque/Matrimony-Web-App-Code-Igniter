<?php ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Oneallcallback extends CI_Controller {

function __construct() { 
      parent::__construct();

      $this->load->helper('url');
      $this->load->helper(['url', 'language']);

      $this->load->model('Register_Model');
      $this->load->model('User_Model');
      $this->load->library('email');
      $this->load->library('form_validation');
      $this->load->helper('form');
      $this->load->library('session'); 
      }
public function index()
     { 
            // Check if we have received a connection_token
            if ( ! empty ($_POST['connection_token']))
            {
              // Get connection_token
              $token = $_POST['connection_token'];

              // Your Site Settings
              $site_subdomain = 'app-1046502-1';
              $site_public_key = '16b435c1-636d-4ccf-9191-b89835edf1ec';
              $site_private_key = 'e8d0667e-573d-457d-8eb8-16a3c8e73c51';

              // API Access domain
              $site_domain = $site_subdomain.'.api.oneall.com';

              // Connection Endpoint
              // http://docs.oneall.com/api/resources/connections/read-connection-details/
              $resource_uri = 'https://'.$site_domain.'/connections/'.$token .'.json';

              // Setup connection
              $curl = curl_init();
              curl_setopt($curl, CURLOPT_URL, $resource_uri);
              curl_setopt($curl, CURLOPT_HEADER, 0);
              curl_setopt($curl, CURLOPT_USERPWD, $site_public_key . ":" . $site_private_key);
              curl_setopt($curl, CURLOPT_TIMEOUT, 15);
              curl_setopt($curl, CURLOPT_VERBOSE, 0);
              curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
              curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 1);
              curl_setopt($curl, CURLOPT_FAILONERROR, 0);

              // Send request
              $result_json = curl_exec($curl);

              // Error
              if ($result_json === false)
              {
                //You may want to implement your custom error handling here
                echo 'Curl error: ' . curl_error($curl). '<br />';
                echo 'Curl info: ' . curl_getinfo($curl). '<br />';
                curl_close($curl);
              }
              // Success
              else
              {
                // Close connection
                curl_close($curl);

                // Decode
                $json = json_decode ($result_json);

                // Extract data
                $data = $json->response->result->data;

                // Check for service
                switch ($data->plugin->key)
                {
                  // Social Login
                  case 'social_login':

                    // Operation successfull
                  if ($data->plugin->data->status == 'success')
                  {
                      // The user_token uniquely identifies the user 
                      // that has connected with the social network account.
                    $user_token = $data->user->user_token;

                      // The identity_token uniquely identifies the social network account 
                      // that the user has used to connect with,
                    $identity_token = $data->user->identity->identity_token;    

                      // 1) Check if you have a user_id for this token in your database
                    $user_id['id'] = $this->Register_Model->get_user_id_for_user_token($user_token);

                    if($user_id['id'])
                    {
                        foreach ($user_id['id']->result() as $key) {

                          $user_id=   $key->id;

                          $this->session->set_userdata('user_id', $user_id);
                        }

                        $this->LoginCheck($user_id);
                    }
                    else
                    {              
                        $userid = rand(10000,20000);
                        $user_id = $userid;

                        $id = $this->Register_Model->link_user_token_to_user_id ($user_token, $user_id);
                        $this->register($id);
                    }

                  }
                  // break;
                }
              }
            }

    }
    public function register($id){
      $data = array( 
            'web_id' => $id,
            'registration_status' => 2,
            'varification_status' => 0
        );
      $this->Register_Model->insert($data);

      $package = array(
          'web_id' => $id,
          'subscription_for' => 1,
          'sub_id' => 13,
          'date' => date('Y-m-d'),
          'discount' => '0'
          );
        $this->load->model('User_Model');
        $this->User_Model->insert_package($package);

        $user_id=   $id;
        $this->session->set_userdata('user_id', $user_id);

        $rstatus = $this->Register_Model->get_status($id);
        $status = $rstatus[0]->registration_status;
        //echo $status;
        if($status == 2){

          $this->Register_Model->insert_last_login($this->session->userdata('user_id'));
          redirect('User', 'refresh');
        }

    }
    public function LoginCheck($user_id)
    { 
        $id=   $user_id;

        $rstatus = $this->Register_Model->get_status($id);
        $status = $rstatus[0]->registration_status;
        //echo $status;
        if($status == 2){
           $this->Register_Model->insert_last_login($this->session->userdata('user_id'));
          redirect('User', 'refresh');
        }


    }




}
?>