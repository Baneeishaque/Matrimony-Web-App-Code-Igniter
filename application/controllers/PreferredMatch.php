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
		$result_unique = $this->getPreferredMatches();

		$data['mydata'] = $this->getUserData();
		$data['package'] = $this->User_Model->get_package($this->getUserId());
		$data['search_results_unique'] = $result_unique;

//		var_dump($data);

		$this->load->view('headers/header_user', $data);
		$this->load->view('user/preferredMatches', $data);
		$this->load->view('footers/footer_user');
	}

	public function getMatchesLevel1()
	{


	}

	public function getHeightMatches()
	{

		$result_unique = $this->getPreferredMatches();

		$heightenResults = array();

		foreach ($result_unique as $result) {

			if ($result->height >= $this->input->post('minHeight') && $result->height <= $this->input->post('maxHeight')) {

				array_push($heightenResults, $result);
			}
		}
		if (count($heightenResults) > 0) {

			echo json_encode(array('status' => 0, 'data' => $heightenResults));

		} else {

			echo json_encode(array('status' => 1));
		}
	}

	public function getUserId()
	{

		return $this->session->userdata('user_id');
	}

	public function getUserData()
	{

		return $this->User_Model->get_my($this->getUserId());
	}

	public function getPreferredMatches()
	{
		return $this->getPreferredMatchesFromUserData($this->getUserData());
	}

	public function getPreferredMatchesFromUserData($userData)
	{
//		Kint::dump($userData);
//		exit(0);

		$preferenceData = $this->PreferredMatchModel->getPreferences($userData[0]->web_id);
//		Kint::dump($preferenceData);
//		exit(0);

//		$userDOB = $preferenceData[0]->dob;
		$userHeightFrom = $preferenceData[0]->height_from;
		$userHeightTo = $preferenceData[0]->height_to;
		$userMaritalStatusId = $preferenceData[0]->marital_status_id;
		$userPhysicalStatusId = $preferenceData[0]->physical_status_id;
		$userReligionId = $preferenceData[0]->religion_id;
		$userCastId = $preferenceData[0]->cast_id;
		$userJobTitleId = $preferenceData[0]->job_title_id;
		$userHighestEducationId = $preferenceData[0]->h_education_id;
		$userStateId = $preferenceData[0]->state_id;
		$userDistrictId = $preferenceData[0]->district_id;
		$userIncomeId = $preferenceData[0]->income_id;
		$userComplexionId = $preferenceData[0]->complexion_id;
		$userBodyTypeId = $preferenceData[0]->body_type_id;
		$userFamilyStateId = $preferenceData[0]->family_status_id;
		$userCountryId = $preferenceData[0]->country_id;

		$matchLevel2 = $this->PreferredMatchModel->getMatchesLevel2($userData[0]->web_id, $userHeightFrom, $userHeightTo, $userMaritalStatusId, $userPhysicalStatusId, $userReligionId, $userCastId, $userJobTitleId, $userHighestEducationId, $userStateId, $userDistrictId, $userIncomeId, $userComplexionId, $userBodyTypeId, $userFamilyStateId, $userCountryId);
//		Kint::dump($matchLevel2);
//		exit(0);

		$matchLevel3 = $this->PreferredMatchModel->getMatchesLevel3($userData[0]->web_id, $userHeightFrom, $userHeightTo, $userMaritalStatusId, $userPhysicalStatusId, $userReligionId, $userCastId, $userJobTitleId, $userHighestEducationId, $userStateId, $userDistrictId, $userIncomeId, $userComplexionId, $userBodyTypeId, $userFamilyStateId);
//		Kint::dump($matchLevel3);

		$matchLevel4 = $this->PreferredMatchModel->getMatchesLevel4($userData[0]->web_id, $userHeightFrom, $userHeightTo, $userMaritalStatusId, $userPhysicalStatusId, $userReligionId, $userCastId, $userJobTitleId, $userHighestEducationId, $userStateId, $userDistrictId, $userIncomeId, $userComplexionId, $userBodyTypeId);
//		Kint::dump($matchLevel4);

		$matchLevel5 = $this->PreferredMatchModel->getMatchesLevel5($userData[0]->web_id, $userHeightFrom, $userHeightTo, $userMaritalStatusId, $userPhysicalStatusId, $userReligionId, $userCastId, $userJobTitleId, $userHighestEducationId, $userStateId, $userDistrictId, $userIncomeId, $userComplexionId);
//		Kint::dump($matchLevel5);

		$matchLevel6 = $this->PreferredMatchModel->getMatchesLevel6($userData[0]->web_id, $userHeightFrom, $userHeightTo, $userMaritalStatusId, $userPhysicalStatusId, $userReligionId, $userCastId, $userJobTitleId, $userHighestEducationId, $userStateId, $userDistrictId, $userIncomeId);
//		Kint::dump($matchLevel6);

		$matchLevel7 = $this->PreferredMatchModel->getMatchesLevel7($userData[0]->web_id, $userHeightFrom, $userHeightTo, $userMaritalStatusId, $userPhysicalStatusId, $userReligionId, $userCastId, $userJobTitleId, $userHighestEducationId, $userStateId, $userDistrictId);
//		Kint::dump($matchLevel7);

		$matchLevel8 = $this->PreferredMatchModel->getMatchesLevel8($userData[0]->web_id, $userHeightFrom, $userHeightTo, $userMaritalStatusId, $userPhysicalStatusId, $userReligionId, $userCastId, $userJobTitleId, $userHighestEducationId, $userStateId);
//		Kint::dump($matchLevel8);

		$matchLevel9 = $this->PreferredMatchModel->getMatchesLevel9($userData[0]->web_id, $userHeightFrom, $userHeightTo, $userMaritalStatusId, $userPhysicalStatusId, $userReligionId, $userCastId, $userJobTitleId, $userHighestEducationId);
//		Kint::dump($matchLevel9);

		$matchLevel10 = $this->PreferredMatchModel->getMatchesLevel10($userData[0]->web_id, $userHeightFrom, $userHeightTo, $userMaritalStatusId, $userPhysicalStatusId, $userReligionId, $userCastId, $userJobTitleId);
//		Kint::dump($matchLevel10);

		$matchLevel11 = $this->PreferredMatchModel->getMatchesLevel11($userData[0]->web_id, $userHeightFrom, $userHeightTo, $userMaritalStatusId, $userPhysicalStatusId, $userReligionId, $userCastId);
//		Kint::dump($matchLevel11);

		$matchLevel12 = $this->PreferredMatchModel->getMatchesLevel12($userData[0]->web_id, $userHeightFrom, $userHeightTo, $userMaritalStatusId, $userPhysicalStatusId, $userReligionId);
//		Kint::dump($matchLevel12);

		$matchLevel13 = $this->PreferredMatchModel->getMatchesLevel13($userData[0]->web_id, $userHeightFrom, $userHeightTo, $userMaritalStatusId, $userPhysicalStatusId);
//		Kint::dump($matchLevel13);

		$result = array_merge($matchLevel2, $matchLevel3, $matchLevel4, $matchLevel5, $matchLevel6, $matchLevel7, $matchLevel8, $matchLevel9, $matchLevel10, $matchLevel11, $matchLevel12, $matchLevel13);

		$result_unique = array_unique($result, SORT_REGULAR);
//		Kint::dump($result_unique);
//		exit(0);

		return $result_unique;
	}
}
