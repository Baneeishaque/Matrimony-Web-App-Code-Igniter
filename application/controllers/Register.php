<?php ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper(['url', 'language']);

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
		$data['country'] = $this->Register_Model->getdata('country');

		$this->load->view('headers/header_log');
		$this->load->view('register/register', $data);

	}

	function get_cast()
	{

		if ($this->input->post('religion_id')) {
			echo $this->Register_Model->get_cast($this->input->post('religion_id'));
		}
	}

	function get_country()
	{
		if ($this->input->post('country_id')) {
			echo $this->Register_Model->get_country($this->input->post('country_id'));
		}
	}

	function get_dist()
	{
		if ($this->input->post('state_id')) {
			echo $this->Register_Model->get_dist($this->input->post('state_id'));
		}
	}

	function get_edu()
	{
		if ($this->input->post('edu_id')) {
			echo $this->Register_Model->get_edu($this->input->post('edu_id'));
		}
	}

	function get_job()
	{
		if ($this->input->post('job_id')) {
			echo $this->Register_Model->get_job($this->input->post('job_id'));
		}
	}

	public function check_email()
	{

		$email = $this->input->post('email');

		if ($this->Register_Model->check_email($email) == TRUE) {

			echo 0;

		} else {

			echo 1;
		}
	}

	public function free_reg()
	{

		$password = rand(1000, 10000);

		$data = array(
			'first_name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('mobile'),
			'active' => '1',
			'created_on' => date('y-m-d'),
			'password' => password_hash($password, PASSWORD_DEFAULT)
		);

		$this->Register_Model->insert_user($data);
		$id = $this->db->insert_id();


		echo $password;
		echo "webid" . $id;

		// $name = strtoupper($this->input->post('name'));
		// $message="<b>Dear ".$name."</b>
		// <p>Welcome To Malayali Marriages,
		// Here Is Your Web ID And Password
		// Web ID : ".$id."
		// Password : ".$password."</p>";

		// $this->email->from('malayalimarriages@gmail.com');
		// $this->email->set_mailtype("html");
		// $this->email->to($this->input->post('email'));
		// $this->email->subject('Malayali Marriages Email Varification');
		// $this->email->message($message);
		// if($this->email->send())
		// {
		//         echo ".";
		$this->register($id);
		// }
		// else
		// {
		// show_error($this->email->print_debugger());
		// }

	}


	public function register($id)
	{


		$dist = $this->input->post('district');
		if ($dist == NULL) {
			$location = $this->input->post('locationText');
			$state = "";
			$district = "";
		} else {
			$st_dt_id = $this->input->post('district');

			$login['st_dt'] = $this->Register_Model->getstatedist($st_dt_id);

			foreach ($login['st_dt']->result() as $key) {

				$state = $key->state;
				$district = $key->districts;
				$location = $key->name;

			}


		}
		// echo $location;


		$data = array(
			'web_id' => $id,
			'profilefor_id' => $this->input->post('profilefor'),
			'gender_id' => $this->input->post('gender'),
			'dob' => $this->input->post('dob'),
			'mothertoungue_id' => $this->input->post('mothertoungue'),
			'religion_id' => $this->input->post('religion'),
			'cast_id' => $this->input->post('cast'),
			'country_code' => $this->input->post('country_code'),
			'c_country_id' => $this->input->post('country'),
			'c_state_id' => $state,
			'c_district_id' => $district,
			'location' => $location,
			'registration_status' => 1,
			'varification_status' => 0
		);

		//inserting data inserting to database
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

		if ($this->input->post('gender') == 1) {

			$avatar = array('img_name' => 'avatar_male.jpg',
				'web_id' => $id,
				'type' => 1,
				'date' => date('Y-m-d'));
		} else {

			$avatar = array('img_name' => 'avatar_fmale.jpg',
				'web_id' => $id,
				'type' => 1,
				'date' => date('Y-m-d'));
		}

		$this->User_Model->insert_image($avatar);

		$religion = $this->input->post('religion');
		$gender = $this->input->post('gender');
		$staff = $this->Register_Model->get_staff($religion, 13, $gender);
		if (!$staff == NULL) {
			if (!$staff[0]->staff_id == NULL) {
				$data = array(
					'web_id' => $id,
					'staff_id' => $staff[0]->staff_id,
					'date' => date('y-m-d'),
					'status' => 1
				);
				$this->Register_Model->insert_asign($data);
			}
		}
		$data = 1;
		$this->login_view($data);
		//$this->personal();
	}


	public function login_view($data = NULL)
	{
		if ($data != NULL) {

			$this->load->view('register/email');
		}
		//print_r($this->ion_auth->hash_password(1212));

		$this->load->view('headers/header_log');
		$this->load->view('register/login');
		if ($this->session->flashdata('message') != NULL) {

			//print_r($this->session->flashdata('message'));
			$data['error'] = $this->session->flashdata('message');
			$this->load->view('profile/warning', $data);
			//$this->load->view('register/email');
		}
		$this->load->view('footers/footer_log');
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('name');

		redirect('Home', 'refresh');

	}

	public function LoginCheck()
	{
		// if( $this->session->userdata('name'))
		// {

		//  $this->load->view('admin/header');
		//  $this->load->view('admin/index.html');
		//  $this->load->view('admin/footer');
		// }
		// else
		// {

		$data = array();
		$username = $this->input->get_post('username');
		$password = $this->input->get_post('password');


		$this->load->model('Register_Model');
		$login['log'] = $this->Register_Model->CheckUser($username);


		if ($login['log']) {
			foreach ($login['log']->result() as $key) {
				if (password_verify($password, $key->password)) {

					$name = $key->username;
					$user_id = $key->id;
					// $branch=$key->branch;
					// $role =$key->role;
					$this->session->set_userdata('user_id', $user_id);
					$this->session->set_userdata('name', $name);
					// $this->session->set_userdata('branch', $branch);
					// $this->session->set_userdata('role', $role);
					?>
					<script type="text/javascript">
						alert('Login Successfully');
					</script> <?php

					$rstatus = $this->Register_Model->get_status($this->session->userdata('user_id'));
					$status = $rstatus[0]->registration_status;
					//echo $status;
					if ($status == 1) {
						$this->resetpass();
					} else if ($status == 2) {

						$this->Register_Model->insert_last_login($this->session->userdata('user_id'));

						redirect('User', 'refresh');
						// redirect('Register/user', 'refresh');
					}
					// else if($status == 3){
					//    redirect('Register/education', 'refresh');
					// }
					// else if($status == 4){
					//    redirect('Register/family', 'refresh');
					// }
					// else if($status == 5){
					//    redirect('Register/lifestyle', 'refresh');
					// }
					// else if($status == 6){
					//    redirect('Register/partner', 'refresh');
					// }
					// else if($status == 7){

					//  redirect('user', 'refresh');
					// }

				} else {
					?>
					<script type="text/javascript">
						alert('Incorrect Username or Password');
					</script> <?php
					redirect('register/login_view', 'refresh');
				}

			}

		} else {
			?>
			<script type="text/javascript">
				alert('Incorrect Username');
			</script> <?php
			$this->index();
		}

		// }
	}

	public function resetpass()
	{
		if (!$this->session->userdata('user_id')) {
			// redirect them to the login page
			redirect('register/login_view', 'refresh');
		} else {

			$this->load->view('headers/header_log');
			$this->load->view('register/resetpass');
			$this->load->view('footers/footer_log');
		}

	}

	public function update_Changepassword()
	{
		$newpassword = $this->input->get_post('newpassword');
		$confirmpassword = $this->input->get_post('confirmpassword');

		if ($newpassword == $confirmpassword) {

			$id = $this->session->userdata('user_id');

			$pass = $this->input->post('newpassword');
			$data = array(
				'password' => password_hash($pass, PASSWORD_DEFAULT)
			);

			$update = $this->Register_Model->update_user($id, $data);
			if ($update) {
				$id = $this->session->userdata('user_id');

				$data = array(
					'registration_status' => 2
				);

				$this->Register_Model->update($data, $id);

				?>
				<script type="text/javascript">
					alert('Password Changed Successfully...');
				</script>
				<?php
			} else {
				?>
				<script type="text/javascript">
					alert('Updation failed!!!Please check the inputs.');
				</script>
				<?php
			}

			redirect('User', 'refresh');
		} else {
			?>
			<script type="text/javascript">
				alert('New Password doesn\'t match with Confirm Password');
			</script> <?php

			$this->load->view('headers/header_log');
			$this->load->view('register/resetpass');
			$this->load->view('footers/footer_log');

		}
	}

	public function forgot()
	{

		$this->load->view('headers/header_log');
		$this->load->view('register/forgot_password');
		$this->load->view('footers/footer_log');

	}

	public function forgot_pass()
	{

		$email = $this->input->post('email');

		$d = $this->Register_Model->get_forgot($email);

		if (!$d == NULL) {

			$password = rand(1000, 10000);
			echo $password;

			$data = array(

				"password" => password_hash($password, PASSWORD_DEFAULT)

			);


			// $name = strtoupper($d[0]->first_name);
			// $message="Dear ".$name."
			// Welcome To Malayali Marriages,
			// Here Is Your Web ID And Password
			// Web ID : ".$d[0]->id."
			// Password : ".$password;

			// $this->email->from('malayalimarriages@gmail.com');
			// $this->email->to($this->input->post('email'));
			// $this->email->subject('Forgot Password');
			// $this->email->message($message);
			// if($this->email->send())
			// {
			//echo "Check Your Email For ID and Password ";
			echo ". ";


			$id = $d[0]->id;
			$data = array(
				"password" => password_hash($password, PASSWORD_DEFAULT)

			);

			$this->Register_Model->update_user1($data, $id);

			// redirect('/Register/login_view');
			//    }
			//    else
			//    {
			//     show_error($this->email->print_debugger());
			// }


		} else {
			$data['message'] = "Unknown Account";
			$this->load->view('headers/header_log');
			$this->load->view('register/forgot_password');
			$this->load->view('register/fail_message', $data);
			$this->load->view('footers/footer_log');

		}


	}

	public function aboutme()
	{
		$id = $this->session->userdata('user_id');
		$about = array('aboutme' => $this->input->post('aboutme'));
		$this->Register_Model->insertabout($about, $id);
		redirect('user/edit');

	}

	public function reg_personaldetails()
	{


		$id = $this->session->userdata('user_id');
		$data = NULL;


		if ($this->input->post('name') != NULL) {
			if ($data1 != NULL) {
				$data1 = array_merge($data1, array(
					'first_name' => $this->input->post('name')));
			} else {

				$data1 = array(
					'first_name' => $this->input->post('name'));
			}
		}
		$this->Register_Model->update_user($id, $data1);


		if ($this->input->post('dob') != NULL) {
			if ($data != NULL) {
				$data = array_merge($data, array(
					'dob' => $this->input->post('dob')));
			} else {

				$data = array(
					'dob' => $this->input->post('dob'));
			}
		}

		if ($this->input->post('height') != NULL) {
			if ($data != NULL) {
				$data = array_merge($data, array(
					'height' => $this->input->post('height')));
			} else {

				$data = array(
					'height' => $this->input->post('height'));
			}
		}


		if ($this->input->post('body_type') != NULL) {
			if ($data != NULL) {
				$data = array_merge($data, array(
					'body_type_id' => $this->input->post('body_type')));
			} else {

				$data = array(
					'body_type_id' => $this->input->post('body_type'));
			}
		}

		if ($this->input->post('complexion') != NULL) {
			if ($data != NULL) {
				$data = array_merge($data, array(
					'complexion_id' => $this->input->post('complexion')));
			} else {

				$data = array(
					'complexion_id' => $this->input->post('complexion'));
			}
		}

		if ($this->input->post('marital_status') != NULL) {
			if ($data != NULL) {
				$data = array_merge($data, array(
					'marital_status_id' => $this->input->post('marital_status')));
			} else {

				$data = array(
					'marital_status_id' => $this->input->post('marital_status'));
			}
		}

		if ($this->input->post('phonecode') != NULL) {
			if ($data != NULL) {
				$data = array_merge($data, array(
					'country_code' => $this->input->post('phonecode')));
			} else {

				$data = array(
					'country_code' => $this->input->post('phonecode'));
			}
		}


		if ($this->input->post('adhar_no') != NULL) {
			if ($data != NULL) {
				$data = array_merge($data, array(
					'adhar_no' => $this->input->post('adhar_no')));
			} else {

				$data = array(
					'adhar_no' => $this->input->post('adhar_no'));
			}
		}


		if ($this->input->post('gender_id') != NULL) {
			if ($data != NULL) {
				$data = array_merge($data, array(
					'gender_id' => $this->input->post('gender_id')));
			} else {

				$data = array(
					'gender_id' => $this->input->post('gender_id'));
			}
		}


		if ($this->input->post('weight') != NULL) {
			if ($data != NULL) {
				$data = array_merge($data, array(
					'weight' => $this->input->post('weight')));
			} else {

				$data = array(
					'weight' => $this->input->post('weight'));
			}
		}


		if ($this->input->post('blood_group') != NULL) {
			if ($data != NULL) {
				$data = array_merge($data, array(
					'bloodgroup_id' => $this->input->post('blood_group')));
			} else {

				$data = array(
					'bloodgroup_id' => $this->input->post('blood_group'));
			}
		}


		if ($this->input->post('physical_status') != NULL) {
			if ($data != NULL) {
				$data = array_merge($data, array(
					'physical_status_id' => $this->input->post('physical_status')));
			} else {

				$data = array(
					'physical_status_id' => $this->input->post('physical_status'));
			}
		}


		if ($this->input->post('no_of_child') != NULL) {
			if ($data != NULL) {
				$data = array_merge($data, array(
					'no_of_child' => $this->input->post('no_of_child')));
			} else {

				$data = array(
					'no_of_child' => $this->input->post('no_of_child'));
			}
		}

		if ($this->input->post('whatsapp') != NULL) {
			if ($data != NULL) {
				$data = array_merge($data, array(
					'whatsapp' => $this->input->post('whatsapp')));
			} else {

				$data = array(
					'whatsapp' => $this->input->post('whatsapp'));
			}
		}

		$this->Register_Model->update($data, $id);
		redirect('/User/edit');

	}

	public function reg_addressdetails()
	{

		$id = $this->session->userdata('user_id');

		if ($this->input->post('same_pernt') == "1") {

			$data = array(
				'permnt_address' => $this->input->post('permnt_address'),
				'presnt_address' => $this->input->post('permnt_address'),
				'route_recidence' => $this->input->post('route_recidence'),
				'reci_landline' => $this->input->post('reci_lanline'),
				'reci_mobile' => $this->input->post('reci_mobile'),
				'reci_whatsapp' => $this->input->post('reci_whstp'),
				'contact_time' => $this->input->post('contact_time'),
				'contact_name' => $this->input->post('reci_name'),
				'reci_relation_candinate' => $this->input->post('reci_relat')

			);

		} else {

			$data = array(
				'permnt_address' => $this->input->post('permnt_address'),
				'presnt_address' => $this->input->post('presnt_address'),
				'route_recidence' => $this->input->post('route_recidence'),
				'reci_landline' => $this->input->post('reci_lanline'),
				'reci_mobile' => $this->input->post('reci_mobile'),
				'reci_whatsapp' => $this->input->post('reci_whstp'),
				'contact_time' => $this->input->post('contact_time'),
				'contact_name' => $this->input->post('reci_name'),
				'reci_relation_candinate' => $this->input->post('reci_relat')

			);

		}
		$this->Register_Model->update($data, $id);


		if ($this->input->post('commu') == "perm") {

			$data1 = array(
				'comm_address' => $this->input->post('permnt_address')
			);

		} elseif ($this->input->post('commu') == "pres") {

			$data1 = array(
				'comm_address' => $this->input->post('presnt_address')
			);

		}

		$this->Register_Model->update($data1, $id);

		redirect('/User/edit');
	}

	public function reg_religioninfo()
	{

		$id = $this->session->userdata('user_id');

		if ($this->input->post('cast_bar') == "1") {
			$cast_bar = "Yes";
		} else {
			$cast_bar = "No";
		}

		$data = array(
			'religion_id' => $this->input->post('religion'),
			'sub_cast' => $this->input->post('sub_cast'),
			'cast_bar' => $cast_bar,
			'star_id' => $this->input->post('star'),
			'jathakam_id' => $this->input->post('jathakam'),
			'cast_id' => $this->input->post('cast'),
			'rassi_id' => $this->input->post('rassi'),
			'religion_area_id' => $this->input->post('religion_area'),
			'religion_requirement' => $this->input->post('religion_requirement')

		);

		$this->Register_Model->update($data, $id);
		redirect('/User/edit');
	}


	public function reg_addressdetails1()
	{

		$id = $this->session->userdata('user_id');

		$data = array(
			'p_country_id' => $this->input->post('p_country'),
			'p_state_id' => $this->input->post('p_state'),
			'p_district_id' => $this->input->post('p_district'),
			'p_city' => $this->input->post('p_city')

		);

		$this->Register_Model->update($data, $id);

		redirect('/User/edit');
	}

	public function reg_education()
	{

		$id = $this->session->userdata('user_id');

		$data = array(
			'edu_cat_id' => $this->input->post('edu_cat'),
			'highest_education_id' => $this->input->post('highest_education'),
			'education_details' => $this->input->post('edu_details'),
			'education_addition' => $this->input->post('edu_addition'),
			'job_cat_id' => $this->input->post('job_cat'),
			'jobtitle_id' => $this->input->post('job'),
			'pro_career' => $this->input->post('pro_career'),
			'work_country' => $this->input->post('work_country'),
			'work_state' => $this->input->post('work_state'),
			'work_district' => $this->input->post('work_district'),
			'work_city' => $this->input->post('work_city'),
			'income_id' => $this->input->post('annual_income'),
		);

		$this->Register_Model->update($data, $id);

		redirect('/User/edit');
	}

	public function reg_family()
	{

		$id = $this->session->userdata('user_id');
		$data = array(
			'father_name' => $this->input->post('father_name'),
			'father_familyname' => $this->input->post('father_house_name'),
			'father_nativeplace' => $this->input->post('father_nativeplace'),
			'father_job_cat' => $this->input->post('father_job_cat'),
			'father_job' => $this->input->post('father_job'),
			'father_edu_cat' => $this->input->post('father_edu_cat'),

			'mother_name' => $this->input->post('mother_name'),
			'mother_familyname' => $this->input->post('mother_house_name'),
			'mother_nativeplace' => $this->input->post('mother_nativeplace'),
			'mother_job_cat' => $this->input->post('mother_job_cat'),
			'mother_job' => $this->input->post('mother_job'),
			'mother_edu_cat' => $this->input->post('mother_edu_cat'),


			'no_of_brothersmarried' => $this->input->post('numberofbrotherM'),
			'no_of_brothers_unmarried' => $this->input->post('numberofbrotherUM'),
			'no_of_sistersmarried' => $this->input->post('numberofsisterM'),
			'no_of_sisters_unmarried' => $this->input->post('numberofsisterUM'),

			'guardian' => $this->input->post('guardian'),
			'family_mother_tongue' => $this->input->post('mother_tongue'),
			'family_type_id' => $this->input->post('family_type'),
			'profile_sibling' => $this->input->post('profile_sibling'),
			'family_value_id' => $this->input->post('family_value'),
			'family_status_id' => $this->input->post('family_status')

		);

		$this->Register_Model->update($data, $id);
		redirect('/User/edit');
	}

	public function reg_lifestyle()
	{

		$id = $this->session->userdata('user_id');

		$data = array(
			'drinking_id' => $this->input->post('drinking'),
			'smoking_id' => $this->input->post('smoking'),
			'eating_id' => $this->input->post('eating'),
			'hobbies' => $this->input->post('hobbies'),
			'interests' => $this->input->post('interest'),
			'language_known' => $this->input->post('languages_known'),
			'blog' => $this->input->post('blog'),
			'othe_social' => $this->input->post('othe_social'),
			'facebook' => $this->input->post('facebook')
		);

		$this->Register_Model->update($data, $id);
		redirect('/User/edit');


	}


	public function reg_basicpartner()
	{

		$id = $this->session->userdata('user_id');

		$body_ty = $this->input->post('body_type');
		if ($body_ty) {
			$body_type = "";
			foreach ($body_ty as $body_type1) {
				$body_type .= $body_type1 . ",";
			}
		} else {
			$body_type = '0';
		}


		$complexion = $this->input->post('complexion');
		if ($complexion) {
			$complexion_type = "";
			foreach ($complexion as $complexion1) {
				$complexion_type .= $complexion1 . ",";
			}
		} else {
			$complexion_type = '0';
		}

		$marital_status = $this->input->post('marital_status');
		if ($marital_status) {
			$marital_status_type = "";
			foreach ($marital_status as $marital_status1) {
				$marital_status_type .= $marital_status1 . ",";
			}
		} else {
			$marital_status_type = '0';
		}

		$physical_status_id = $this->input->post('physical_status_id');
		if ($physical_status_id) {
			$physical_status_type = "";
			foreach ($physical_status_id as $physical_status_id1) {
				$physical_status_type .= $physical_status_id1 . ",";
			}
		} else {
			$physical_status_type = '0';
		}

		$family_status_id = $this->input->post('family_status_id');
		if ($family_status_id) {
			$family_status_type = "";
			foreach ($family_status_id as $family_status_id1) {
				$family_status_type .= $family_status_id1 . ",";
			}
		} else {
			$family_status_type = '0';
		}


		$id = $this->session->userdata('user_id');
		$data = array(
			'web_id' => $id,
			'age_from' => $this->input->post('agefrom'),
			'age_to' => $this->input->post('ageto'),
			'height_from' => $this->input->post('height_from'),
			'height_to' => $this->input->post('height_to'),
			'body_type_id' => $body_type,
			'complexion_id' => $complexion_type,
			'marital_status_id' => $marital_status_type,
			'physical_status_id' => $physical_status_type,
			'family_status_id' => $family_status_type

		);

		$this->Register_Model->update_partner($data, $id);


		redirect('/User/edit');
	}


	public function reg_profession_partner()
	{

		$id = $this->session->userdata('user_id');

		$education = $this->input->post('h_education_id');
		$education_type = "";
		foreach ($education as $education1) {
			$education_type .= $education1 . ",";
		}

		$job = $this->input->post('job_id');
		$job_type = "";
		foreach ($job as $job1) {
			$job_type .= $job1 . ",";
		}

		$edu_cat_id = $this->input->post('edu_cat_id');
		$edu_cat_type = "";
		foreach ($edu_cat_id as $edu_cat1) {
			$edu_cat_type .= $edu_cat1 . ",";
		}

		$job_cat_id = $this->input->post('job_cat_id');
		$job_cat_type = "";
		foreach ($job_cat_id as $job_cat1) {
			$job_cat_type .= $job_cat1 . ",";
		}


		$id = $this->session->userdata('user_id');
		$data = array(
			'web_id' => $id,
			'h_education_id' => $education_type,
			'job_title_id' => $job_type,
			'edu_cat' => $edu_cat_type,
			'job_cat' => $job_cat_type
		);

		$this->Register_Model->update_partner($data, $id);


		redirect('/User/edit');
	}


	public function reg_religion_partner()
	{

		$id = $this->session->userdata('user_id');

		$star = $this->input->post('star');
		$star_type = "";
		foreach ($star as $star1) {
			$star_type .= $star1 . ",";
		}

		$cast_id = $this->input->post('cast');
		$cast_type = "";
		foreach ($cast_id as $cast1) {
			$cast_type .= $cast1 . ",";
		}

		$jathakam_id = $this->input->post('jathakam');
		$jathakam_type = "";
		foreach ($jathakam_id as $jathakam1) {
			$jathakam_type .= $jathakam1 . ",";
		}


		$id = $this->session->userdata('user_id');
		$data = array(
			'web_id' => $id,
			'religion_id' => $this->input->post('religion'),
			'sub_cast' => $this->input->post('sub_cast'),
			'star_id' => $star_type,
			'cast_id' => $cast_type,
			'jathakam_id' => $jathakam_type
		);

		$this->Register_Model->update_partner($data, $id);


		redirect('/User/edit');
	}

	public function reg_location_partner()
	{

		$id = $this->session->userdata('user_id');

		$partner_dist = $this->input->post('partner_dist');
		$partner_dist_type = "";
		foreach ($partner_dist as $partner_dist1) {
			$partner_dist_type .= $partner_dist1 . ",";
		}


		$id = $this->session->userdata('user_id');
		$data = array(
			'web_id' => $id,
			'country_id' => $this->input->post('partner_country'),
			'state_id' => $this->input->post('partner_state'),
			'district_id' => $partner_dist_type
		);

		$this->Register_Model->update_partner($data, $id);


		redirect('/User/edit');
	}

	public function reg_looking_partner()
	{

		$id = $this->session->userdata('user_id');
		$data = array(
			'web_id' => $id,
			'looking_for' => $this->input->post('looking_for')
		);

		$this->Register_Model->update_partner($data, $id);
		redirect('/User/edit');
	}
}

?>
