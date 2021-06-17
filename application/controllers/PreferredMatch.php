<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once 'vendor/autoload.php';

class PreferredMatch extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper(['url', 'language']);

        $this->load->model('Onlinemodel');
        $this->load->model('Register_Model');
        $this->load->model('User_Model');
        $this->load->model('PreferredMatchModel');

        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('session');

        if (!$this->session->userdata('user_id')) {
            // redirect them to the login page
            redirect('register/login_view', 'refresh');
        }
    }

    public function index()
    {
        $id = $this->session->userdata('user_id');

        $userData = $this->User_Model->get_my($id);

        //		var_dump($userData);
//		Kint::dump($userData);
//		exit(0);

        $userDOB = $userData[0]->dob;
        $userHeight = $userData[0]->height;
        $userMaritalStatusId = $userData[0]->marital_status_id;
        $userPhysicalStatusId = $userData[0]->physical_status_id;
        $userReligionId = $userData[0]->religion_id;
        $userCastId = $userData[0]->cast_id;
        $userJobTitleId = $userData[0]->jobtitle_id;
        $userHighestEducationId = $userData[0]->highest_education_id;
        $userStateId = $userData[0]->p_state_id;
        $userDistrictId = $userData[0]->p_district_id;
        $userIncomeId = $userData[0]->income_id;
        $userComplexionId = $userData[0]->complexion_id;
        $userBodyTypeId = $userData[0]->body_type_id;
        $userFamilyStateId = $userData[0]->family_status_id;
        $userCountryId = $userData[0]->p_country_id;

        $matchLevel2 = $this->PreferredMatchModel->getMatchesLevel2($userHeight, $userMaritalStatusId, $userPhysicalStatusId, $userReligionId, $userCastId, $userJobTitleId, $userHighestEducationId, $userStateId, $userDistrictId, $userIncomeId, $userComplexionId, $userBodyTypeId, $userFamilyStateId, $userCountryId);

        $matchLevel3 = $this->PreferredMatchModel->getMatchesLevel3($userHeight, $userMaritalStatusId, $userPhysicalStatusId, $userReligionId, $userCastId, $userJobTitleId, $userHighestEducationId, $userStateId, $userDistrictId, $userIncomeId, $userComplexionId, $userBodyTypeId, $userFamilyStateId);

        $matchLevel4 = $this->PreferredMatchModel->getMatchesLevel4($userHeight, $userMaritalStatusId, $userPhysicalStatusId, $userReligionId, $userCastId, $userJobTitleId, $userHighestEducationId, $userStateId, $userDistrictId, $userIncomeId, $userComplexionId, $userBodyTypeId);

        $matchLevel5 = $this->PreferredMatchModel->getMatchesLevel5($userHeight, $userMaritalStatusId, $userPhysicalStatusId, $userReligionId, $userCastId, $userJobTitleId, $userHighestEducationId, $userStateId, $userDistrictId, $userIncomeId, $userComplexionId);

        $matchLevel6 = $this->PreferredMatchModel->getMatchesLevel6($userHeight, $userMaritalStatusId, $userPhysicalStatusId, $userReligionId, $userCastId, $userJobTitleId, $userHighestEducationId, $userStateId, $userDistrictId, $userIncomeId);

        $matchLevel7 = $this->PreferredMatchModel->getMatchesLevel7($userHeight, $userMaritalStatusId, $userPhysicalStatusId, $userReligionId, $userCastId, $userJobTitleId, $userHighestEducationId, $userStateId, $userDistrictId);

        $matchLevel8 = $this->PreferredMatchModel->getMatchesLevel8($userHeight, $userMaritalStatusId, $userPhysicalStatusId, $userReligionId, $userCastId, $userJobTitleId, $userHighestEducationId, $userStateId);

        $matchLevel9 = $this->PreferredMatchModel->getMatchesLevel9($userHeight, $userMaritalStatusId, $userPhysicalStatusId, $userReligionId, $userCastId, $userJobTitleId, $userHighestEducationId);

        $matchLevel10 = $this->PreferredMatchModel->getMatchesLevel10($userHeight, $userMaritalStatusId, $userPhysicalStatusId, $userReligionId, $userCastId, $userJobTitleId);

        $matchLevel11 = $this->PreferredMatchModel->getMatchesLevel11($userHeight, $userMaritalStatusId, $userPhysicalStatusId, $userReligionId, $userCastId);

        $result = array_merge($matchLevel2, $matchLevel3, $matchLevel4, $matchLevel5, $matchLevel6, $matchLevel7, $matchLevel8, $matchLevel9, $matchLevel10, $matchLevel11);
        $result_unique = array_unique($result, SORT_REGULAR);
		// Kint::dump($result_unique);
		// exit(0);

        $data['mydata'] = $userData;
        $data['package'] = $this->User_Model->get_package($id);
        $data['search_results_unique'] = $result_unique;

//		var_dump($data);

        $this->load->view('headers/header_user', $data);
        $this->load->view('user/preferredMatches', $data);
        $this->load->view('footers/footer_user');
    }

    public function getMatchesLevel1()
    {


    }

//	public function search()
//	{
//		$id = $this->session->userdata('user_id');
//
//		$data['mydata'] = $this->User_Model->get_my($id);
//		$data['package'] = $this->User_Model->get_package($id);
//
//		$this->load->view('headers/header_user', $data);
//		$this->load->view('user/search');
//		$this->load->view('footers/footer_user');
//	}

//	public function quicksearch()
//	{
//		$id = $this->session->userdata('user_id');
//
//		$data['mydata'] = $this->User_Model->get_my($id);
//		$data['package'] = $this->User_Model->get_package($id);
//
//		$this->load->view('headers/header_user', $data);
//		$this->load->view('user/quick_search');
//		$this->load->view('footers/footer_user');
//	}

//	public function advancedsearch()
//	{
//		$id = $this->session->userdata('user_id');
//
//		$data['mydata'] = $this->User_Model->get_my($id);
//		$data['package'] = $this->User_Model->get_package($id);
//
//		$this->load->view('headers/header_user', $data);
//		$this->load->view('user/advanced_search');
//		$this->load->view('footers/footer_user');
//	}

//	public function keysearch()
//	{
//		$id = $this->session->userdata('user_id');
//
//		$data['mydata'] = $this->User_Model->get_my($id);
//		$data['package'] = $this->User_Model->get_package($id);
//
//		$this->load->view('headers/header_user', $data);
//		$this->load->view('user/keyword_search');
//		$this->load->view('footers/footer_user');
//	}

//	public function webidsearch()
//	{
//		$id = $this->session->userdata('user_id');
//
//		$data['mydata'] = $this->User_Model->get_my($id);
//		$data['package'] = $this->User_Model->get_package($id);
//
//		$this->load->view('headers/header_user', $data);
//		$this->load->view('user/webid_search');
//		$this->load->view('footers/footer_user');
//	}

//	public function savedsearch()
//	{
//		$id = $this->session->userdata('user_id');
//
//		$data['mydata'] = $this->User_Model->get_my($id);
//		$data['package'] = $this->User_Model->get_package($id);
//
//		$this->load->view('headers/header_user', $data);
//		$this->load->view('user/saved_search');
//		$this->load->view('footers/footer_user');
//	}

//	public function edit()
//	{
//		$id = $this->session->userdata('user_id');
//
//		$data['mydata'] = $this->User_Model->get_my($id);
//		$data['package'] = $this->User_Model->get_package($id);
//		$data['personal_details'] = $this->User_Model->get_personal($id);
//		$data['education_details'] = $this->User_Model->get_education($id);
//		$data['address'] = $this->User_Model->get_address($id);
//		$data['permanent_address'] = $this->User_Model->get_permanent($id);
//		$data['current_address'] = $this->User_Model->get_current($id);
//		$data['family'] = $this->User_Model->get_family($id);
//		$data['lifestyle'] = $this->User_Model->get_life($id);
//		$data['partner'] = $this->User_Model->get_mypartner($id);
//		$data['body_type'] = $this->Register_Model->getdata('body_type');
//		$data['height'] = $this->Register_Model->getdata('height');
//		$data['complexion'] = $this->Register_Model->getdata('complexion');
//		$data['marital_status'] = $this->Register_Model->getdata('marital_status');
//		$data['country'] = $this->Register_Model->getdata('country');
//		$data['states'] = $this->Register_Model->getdata('states');
//		$data['districts'] = $this->Register_Model->getdata('districts');
//		$data['blood_group'] = $this->Register_Model->getdata('blood_group');
//		$data['physical_status'] = $this->Register_Model->getdata('physical_status');
//		$data['contact_time'] = $this->Register_Model->getdata('contact_time');
//		$data['religion'] = $this->Register_Model->getdata('religion');
//		$data['cast'] = $this->Register_Model->getdata('cast');
//		$data['star'] = $this->Register_Model->getdata('star');
//		$data['jathakam'] = $this->Register_Model->getdata('jathakam');
//		$data['rassi'] = $this->Register_Model->getdata('rassi');
//		$data['religion_area'] = $this->Register_Model->getdata('religion_area');
//		$data['education'] = $this->Register_Model->getdata('education');
//		$data['edu_category'] = $this->Register_Model->getdata('edu_category');
//		$data['employed_in'] = $this->Register_Model->getdata('employed_in');
//		$data['job'] = $this->Register_Model->getdata('job');
//		$data['job_category'] = $this->Register_Model->getdata('job_category');
//		$data['income'] = $this->Register_Model->getdata('income');
//		$data['languages'] = $this->Register_Model->getdata('languages');
//		$data['family_status'] = $this->Register_Model->getdata('family_status');
//		$data['family_value'] = $this->Register_Model->getdata('family_value');
//		$data['family_type'] = $this->Register_Model->getdata('family_type');
//		$data['eating_habbit'] = $this->Register_Model->getdata('eating_habbit');
//		$data['habbit_type'] = $this->Register_Model->getdata('habbit_type');
//		$data['hobbies'] = $this->Register_Model->getdata('hobbies');
//		$data['languages_known'] = $this->Register_Model->getdata('languages_known');
//		$data['interest'] = $this->Register_Model->getdata('interest');
//
//		$this->load->view('headers/header_user', $data);
//		$this->load->view('user/edit', $data);
//		$this->load->view('footers/footer_user');
//	}

//	public function matches()
//	{
//		$id = $this->session->userdata('user_id');
//
//		$data['mydata'] = $this->User_Model->get_my($id);
//		$data['package'] = $this->User_Model->get_package($id);
//		$data['marital_status'] = $this->Register_Model->getdata('marital_status');
//		$data['religion'] = $this->Register_Model->getdata('religion');
//		$data['education'] = $this->Register_Model->getdata('education');
//		$data['job_category'] = $this->Register_Model->getdata('job_category');
//		$data['states'] = $this->Register_Model->getdata('states');
//		$data['complexion'] = $this->Register_Model->getdata('complexion');
//		$data['star'] = $this->Register_Model->getdata('star');
//		$data['jathakam'] = $this->Register_Model->getdata('jathakam');
//		$data['languages'] = $this->Register_Model->getdata('languages');
//		$data['physical_status'] = $this->Register_Model->getdata('physical_status');
//		$data['income'] = $this->Register_Model->getdata('income');
//		$data['family_status'] = $this->Register_Model->getdata('family_status');

//		$this->load->view('headers/header_user', $data);
//		$this->load->view('user/matches', $data);
//		$this->load->view('footers/footer_user');
//
//	}
}
