<?php

class PreferredMatchModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();

		$this->load->database();
	}

	function getMatchesLevel2($userHeight,$userMaritalStatusid,$userPhysicalStatusid,$userReligionid,$userCastid,$userJobTitleid,$userHighestEducationid,$userStateid,$userDistrictid,$userIncomeid,$userComplexionid,$userBodyTypeid,$userFamilyStatusid,$userCountryid)
	{

		$this->db->select(
		
			'register.`reg_id`,
			 register.`web_id`,
			 register. `profilefor_id`,
			 register.`gender_id`,
			 register.`dob`,
			 register.`mothertoungue_id`,
			 register.`religion_id`,
			 register.`cast_id`,
			 register.`sub_cast`,
			 register.`cast_bar`,
			 register.`religion_area_id`,
			 register.`religion_requirement`,
			 register.`country_code`,
			 register.`marital_status_id`, 
			 register.`height`,
			 register.`physical_status_id`,
			 register.`country_living_id`,
			 register.`star_id`,
			 register.`rassi_id`,
			 register.`jathakam_id`,
			 register.`native_place`,
			 register.`landline`,
			 register.`whatsapp`,
			 register.`preffered_cont_type_id`,
			 register.`contact_time`,
			 register.`contact_name`, 
			 register.`presnt_address`,
			 register.`permnt_address`,
			 register.`comm_address`,
			 register.`route_recidence`, 
			 register.`reci_landline`,
			 register.`reci_mobile`,
			 register.`reci_whatsapp`,
			 register.`reci_relation_candinate`,
			 register.`reci_contact_time`,
			 register.`p_housename`,
			 register.`p_country_id`,
			 register.`p_state_id`,
			 register.`p_city`, 
			 register.`p_district_id`,
			 register.`p_street`,
			 register.`p_landmark`,
			 register.`p_pincode`,
			 register.`c_housename`,
			 register.`c_country_id`,
			 register.`c_state_id`, 
			 register.`c_city`,
			 register.`c_district_id`,
			 register.`location`,
			 register.`c_street`,
			 register.`c_landmark`,
			 register.`c_pincode`,
			 register.`aboutme`, 
			 register.`edu_cat_id`,
			 register.`highest_education_id`,
			 register.`education_details`,
			 register.`education_addition`,
			 register.`unversity`,
			 register.`cource`,
			 register.`year`,
			 register.`employedin_id`,
			 register.`job_cat_id`,
			 register.`jobtitle_id`,
			 register.`pro_career`,
			 register.`company_name`,
			 register.`work_country`,
			 register.`work_state`,
			 register.`work_district`,
			 register.`work_city`,
			 register.`income_id`,
			 register.`father_name`,
			 register.`father_familyname`,
			 register.`father_edu_cat`, 
			 register.`father_ancestary_name`,
			 register.`father_nativeplace`,
			 register.`mother_name`,
			 register.`mother_familyname`,
			 register.`mother_edu_cat`,
			 register.`mother_ancestary_name`,
			 register.`mother_nativeplace`, 
			 register.`mother_employedin_id`, 
			 register.`mother_job_cat`,
			 register.`mother_job`,
			 register.`father_employedin_id`, 
			 register.`father_job_cat`,
			 register.`father_job`, 
			 register.`no_of_brothers_unmarried`, 
			 register.`no_of_brothersmarried`, 
			 register.`no_of_sisters_unmarried`, 
			 register.`no_of_sistersmarried`, 
			 register.`no_of_child`, 
			 register.`parents_mobile_number`, 
			 register.`family_type_id`,
			 register.`family_status_id`, 
			 register.`family_value_id`, 
			 register.`guardian`, 
			 register.`profile_sibling`, 
			 register.`family_mother_tongue`, 
			 register.`aboutfamily`,
			 register.`complexion_id`, 
			 register.`body_type_id`,
			 register.`weight`,
			 register.`bloodgroup_id`, 
			 register.`assets`,
			 register.`language_known`, 
			 register.`drinking_id`, 
			 register.`smoking_id`, 
			 register.`diet_id`, 
			 register.`eating_id`,
			 register.`hobbies`,
			 register.`interests`, 
			 register.`blog`, 
			 register.`othe_social`,
			 register.`facebook`, 
			 register.`adhar_no`, 
			 register.`registration_status`, 
			 register.`date`, 
			 register.`varification_status`, 
			 register.`profile_view`,
			 register.`matching`,
			 register.`staff_service`,
								  
			 users.`ip_address`,
			 users.`username`,
			 users.`password`,
			 users.`email`,
			 users.`activation_selector`,
			 users.`activation_code`,
			 users.`forgotten_password_selector`,
			 users.`forgotten_password_code`,
			 users.`forgotten_password_time`,
			 users.`remember_selector`,
			 users.`remember_code`,
			 users.`created_on`,
			 users.`last_login`,
			 users.`active`,
			 users.`first_name`,
			 users.`last_name`,
			 users.`company`, 
			 users.`phone`, 
			 users.`import`,
			 users.`import_pass`,
			 users.`registered_by`,
								  
			 states.`id`,
			 states.`state`,

			 religion.`religion_id`, 
			 religion.`religion`,

			 country.`id`,
			 country.`iso`,
			 country.`name`,
			 country.`nicename`,
			 country.`iso3`,
			 country.`numcode`,
			 country.`phonecode`,

			 income.`income_id`,
			 income.`income`,

		     marital_status.`marital_status_id`,
			 marital_status.`marital_status`,

			 physical_status.`physical_status_id`,
			 physical_status.`physical_status`,

			 job.`job_id`,
			 job.`job_cat_id`,
			 job.`job_title`,

			 education.`education_id`,
			 education.`edu_category`,
		     education.`education`,

			 districts.`id`,
			 districts.`state_id`,
			 districts.`district`,
								  
			 complexion.`complexion_id`,
			 complexion.`complexion`,

			 body_type.`body_type_id`,
			 body_type.`body_type`,

			 family_status.`family_status_id`,
			 family_status.`family_status`,

			 cast.`cast_id`,
			 cast.`religion_id`,
			 cast.`cast`

								 ');
		$this->db->from('register,users,states,country,income,marital_status,physical_status,job,education,districts,complexion,body_type,family_status,cast,religion');
		$this->db->where(array(
			'register.height' => $userHeight,
			'register.marital_status_id'=>$userMaritalStatusid,
			'register.physical_status_id'=>$userPhysicalStatusid,
			'register.religion_id'=>$userReligionid,
			'register.cast_id'=>$userCastid,
			'register.jobtitle_id'=>$userJobTitleid,
			'register.highest_education_id'=>$userHighestEducationid,
			'register.p_state_id'=>$userStateid,
			'register.p_district_id'=>$userDistrictid,
			'register.income_id'=>$userIncomeid,
			'register.complexion_id'=>$userComplexionid,
			'register.body_type_id'=>$userBodyTypeid,
			'register.family_status_id'=>$userFamilyStatusid,
			'register.p_country_id'=>$userCountryid,
			'register.web_id'=>'users.id',
			'register.p_state_id'=>'states.id',
			'register.religion_id'=>'religion.religion_id',
			'register.p_country_id'=>'country.id',
			'register.income_id'=>'income.income_id',
			'register.marital_status_id'=>'marital_status.marital_status_id',
			'register.jobtitle_id'=>'job.job_id',
			'register.highest_education_id'=>'education.education_id',
			'register.p_district_id'=>'districts.id',
			'register.complexion_id'=>'complexion.complexion_id',
			'register.body_type_id'=>'body_type.body_type_id',
			'register.family_status_id'=>'family_status.family_status_id',
			'register.cast_id'=>'cast.cast_id'
				));
				
		// $this->db->join('users','register.web_id=users.id');
		// $this->db->join('states','register.p_state_id=states.id');
		// $this->db->join('religion','register.religion_id=religion.religion_id');
		// $this->db->join('country','register.p_country_id=country.id');
		// $this->db->join('income','register.income_id=income.income_id');
		// $this->db->join('marital_status','register.marital_status_id=marital_status.marital_status_id');
		// $this->db->join('physical_status','register.physical_status_id=physical_status.physical_status_id');
		// $this->db->join('job','register.jobtitle_id=job.job_id');
		// $this->db->join('education','register.highest_education_id=education.education_id');
		// $this->db->join('districts','register.p_district_id=districts.id');
		// $this->db->join('complexion','register.complexion_id=complexion.complexion_id');
		// $this->db->join('body_type','register.body_type_id=body_type.body_type_id');
		// $this->db->join('family_status','register.family_status_id=family_status.family_status_id');
		// $this->db->join('cast','register.cast_id=cast.cast_id');



		$this->db->order_by('users.created_on','desc');
		$query=$this->db->get();
		echo $this->db->last_query();
		exit(0);
		return $query->result();
	}

	function getMatchesLevel3($userHeight,$userMaritalStatusid,$userPhysicalStatusid,$userReligionid,$userCastid,$userJobTitleid,$userHighestEducationid,$userStateid,$userDistrictid,$userIncomeid,$userComplexionid,$userBodyTypeid,$userFamilyStatusid)
	{
		$this->db->select('*');
		$this->db->from('register');
		$this->db->where(array(
			'height' => $userHeight,
			'marital_status_id'=>$userMaritalStatusid,
			'physical_status_id'=>$userPhysicalStatusid,
			'religion_id'=>$userReligionid,'cast_id'=>$userCastid,
			'jobtitle_id'=>$userJobTitleid,
			'highest_education_id'=>$userHighestEducationid,
			'p_state_id'=>$userStateid,
			'p_district_id'=>$userDistrictid,
			'income_id'=>$userIncomeid,
			'complexion_id'=>$userComplexionid,
			'body_type_id'=>$userBodyTypeid,
			'family_status_id'=>$userFamilyStatusid,
		));
		$this->db->join('users','register.web_id=users.id');
		$this->db->order_by('users.created_on','desc');
		$query=$this->db->get();
		return $query->result();
	}

	function getMatchesLevel4($userHeight,$userMaritalStatusid,$userPhysicalStatusid,$userReligionid,$userCastid,$userJobTitleid,$userHighestEducationid,$userStateid,$userDistrictid,$userIncomeid,$userComplexionid,$userBodyTypeid)
	{
		$this->db->select('*');
		$this->db->from('register');
		$this->db->where(array(
			'height' => $userHeight,
			'marital_status_id'=>$userMaritalStatusid,
			'physical_status_id'=>$userPhysicalStatusid,
			'religion_id'=>$userReligionid,'cast_id'=>$userCastid,
			'jobtitle_id'=>$userJobTitleid,
			'highest_education_id'=>$userHighestEducationid,
			'p_state_id'=>$userStateid,
			'p_district_id'=>$userDistrictid,
			'income_id'=>$userIncomeid,
			'complexion_id'=>$userComplexionid,
			'body_type_id'=>$userBodyTypeid,
		));
		$this->db->join('users','register.web_id=users.id');
		$this->db->order_by('users.created_on','desc');
		$query=$this->db->get();
		return $query->result();
	}

	function getMatchesLevel5($userHeight,$userMaritalStatusid,$userPhysicalStatusid,$userReligionid,$userCastid,$userJobTitleid,$userHighestEducationid,$userStateid,$userDistrictid,$userIncomeid)
	{
		$this->db->select('*');
		$this->db->from('register');
		$this->db->where(array(
			'height' => $userHeight,
			'marital_status_id'=>$userMaritalStatusid,
			'physical_status_id'=>$userPhysicalStatusid,
			'religion_id'=>$userReligionid,'cast_id'=>$userCastid,
			'jobtitle_id'=>$userJobTitleid,
			'highest_education_id'=>$userHighestEducationid,
			'p_state_id'=>$userStateid,
			'p_district_id'=>$userDistrictid,
			'income_id'=>$userIncomeid,
		));
		$this->db->join('users','register.web_id=users.id');
		$this->db->order_by('users.created_on','desc');
		$query=$this->db->get();
		return $query->result();
	}
	
	function getMatchesLevel6($userHeight,$userMaritalStatusid,$userPhysicalStatusid,$userReligionid,$userCastid,$userJobTitleid,$userHighestEducationid,$userStateid,$userDistrictid)
	{
		$this->db->select('*');
		$this->db->from('register');
		$this->db->where(array(
			'height' => $userHeight,
			'marital_status_id'=>$userMaritalStatusid,
			'physical_status_id'=>$userPhysicalStatusid,
			'religion_id'=>$userReligionid,'cast_id'=>$userCastid,
			'jobtitle_id'=>$userJobTitleid,
			'highest_education_id'=>$userHighestEducationid,
			'p_state_id'=>$userStateid,
			'p_district_id'=>$userDistrictid,
		));
		$this->db->join('users','register.web_id=users.id');
		$this->db->order_by('users.created_on','desc');
		$query=$this->db->get();
		return $query->result();
	}

	function getMatchesLevel7($userHeight,$userMaritalStatusid,$userPhysicalStatusid,$userReligionid,$userCastid,$userJobTitleid,$userHighestEducationid,$userStateid)
	{
		$this->db->select('*');
		$this->db->from('register');
		$this->db->where(array(
			'height' => $userHeight,
			'marital_status_id'=>$userMaritalStatusid,
			'physical_status_id'=>$userPhysicalStatusid,
			'religion_id'=>$userReligionid,'cast_id'=>$userCastid,
			'jobtitle_id'=>$userJobTitleid,
			'highest_education_id'=>$userHighestEducationid,
			'p_state_id'=>$userStateid,
		));
		$this->db->join('users','register.web_id=users.id');
		$this->db->order_by('users.created_on','desc');
		$query=$this->db->get();
		return $query->result();
	}

	function getMatchesLevel8($userHeight,$userMaritalStatusid,$userPhysicalStatusid,$userReligionid,$userCastid,$userJobTitleid,$userHighestEducationid)
	{
		$this->db->select('*');
		$this->db->from('register');
		$this->db->where(array(
			'height' => $userHeight,
			'marital_status_id'=>$userMaritalStatusid,
			'physical_status_id'=>$userPhysicalStatusid,
			'religion_id'=>$userReligionid,'cast_id'=>$userCastid,
			'jobtitle_id'=>$userJobTitleid,
			'highest_education_id'=>$userHighestEducationid,
		));
		$this->db->join('users','register.web_id=users.id');
		$this->db->order_by('users.created_on','desc');
		$query=$this->db->get();
		return $query->result();
	}

	function getMatchesLevel9($userHeight,$userMaritalStatusid,$userPhysicalStatusid,$userReligionid,$userCastid,$userJobTitleid)
	{
		$this->db->select('*');
		$this->db->from('register');
		$this->db->where(array(
			'height' => $userHeight,
			'marital_status_id'=>$userMaritalStatusid,
			'physical_status_id'=>$userPhysicalStatusid,
			'religion_id'=>$userReligionid,'cast_id'=>$userCastid,
			'jobtitle_id'=>$userJobTitleid,
		));
		$this->db->join('users','register.web_id=users.id');
		$this->db->order_by('users.created_on','desc');
		$query=$this->db->get();
		return $query->result();
	}

	function getMatchesLevel10($userHeight,$userMaritalStatusid,$userPhysicalStatusid,$userReligionid,$userCastid)
	{
		$this->db->select('*');
		$this->db->from('register');
		$this->db->where(array(
			'height' => $userHeight,
			'marital_status_id'=>$userMaritalStatusid,
			'physical_status_id'=>$userPhysicalStatusid,
			'religion_id'=>$userReligionid,
			'cast_id'=>$userCastid
		));
		$this->db->join('users','register.web_id=users.id');
		$this->db->order_by('users.created_on','desc');
		$query=$this->db->get();
		return $query->result();
	}

	function getMatchesLevel11($userHeight,$userMaritalStatusid,$userPhysicalStatusid,$userReligionid)
	{
		$this->db->select('*');
		$this->db->from('register');
		$this->db->where(array(
			'height' => $userHeight,
			'marital_status_id'=>$userMaritalStatusid,
			'physical_status_id'=>$userPhysicalStatusid,
			'religion_id'=>$userReligionid,
		));
		$this->db->join('users','register.web_id=users.id');
		$this->db->order_by('users.created_on','desc');
		$query=$this->db->get();
		return $query->result();
	}



//	public function insert_package($data)
//	{
//		if ($this->db->insert("customer_package", $data)) {
//			return true;
//		}
//	}

//	public function key($key)
//	{
//
//		if (!$key == NULL) {
//			$this->db->select('*');
//			$this->db->from('faq');
//			$this->db->where("word LIKE '%$key%'");
//			$this->db->group_by('id');
//
//			$query = $this->db->get();
//			return $query->result();
//		}
//
//	}

//	public function insert_couples($data)
//	{
//
//		$this->db->insert('happy_couples', $data);
//
//	}


//	public function check_webid($webid)
//	{
//
//		$this->db->select('id');
//		$this->db->from('users');
//		$this->db->where('id', $webid);
//		$query = $this->db->get();
//		if ($query->num_rows() == 1) {
//
//			return TRUE;
//		} else {
//
//			return FALSE;
//
//		}
//	}

//	public function insert_image($avatar)
//	{
//		if ($this->db->insert("documents", $avatar)) {
//			return true;
//		}
//	}

//	public function get_my($id)
//	{
//		$this->db->select('*');
//		$this->db->from('register');
//		$this->db->join('users', 'register.web_id=users.id');
//		$this->db->join('religion', 'register.religion_id=religion.religion_id', 'left');
//		$this->db->join('cast', 'register.cast_id=cast.cast_id', 'left');
//		$this->db->join('documents', 'register.web_id=documents.web_id', 'left');
//		$this->db->where('register.web_id', $id);
//		$this->db->where('documents.type', 'profile_photo');
//
//		$query = $this->db->get();
//		// echo $this->db->last_query();
//		// print_r($query->result());
//		return $query->result();
//
//	}

//	public function get_package($id)
//	{
//		$this->db->select('packages.id,title,customer_package.end_date');
//		$this->db->from('packages');
//		$this->db->join('customer_package', 'packages.id=customer_package.sub_id');
//		$this->db->where('customer_package.web_id', $id);
//		//$this->db->where('customer_package.end_date<=',date('y-m-d'));
//		$this->db->where('customer_package.subscription_for', 'package');
//		$this->db->order_by('packages.id');
//
//		$query = $this->db->get();
//		// print_r($this->db->last_query());
//
//		return $query->result();
//	}


//	public function get_personal($id)
//	{
//
//		$this->db->select('gender.gender,register.gender_id,register.aboutme,register.no_of_child,register.adhar_no,register.religion_requirement,profilefor.profilefor,register.marital_status_id,marital_status.marital_status,register.physical_status_id,physical_status.physical_status,country.name,country.phonecode,register.country_code,register.complexion_id,complexion.complexion,register.star_id,star.star,register.body_type_id,body_type.body_type,register.bloodgroup_id,blood_group.blood_group,register.religion_id,religion.religion,register.cast_id,cast.cast,register.jathakam_id,jathakam.typeof_jathakam,register.religion_area_id,religion_area.religion_area,register.whatsapp,register.weight,register.height,register.native_place,register.rassi_id,rassi.rassi,register.landline,register.preffered_cont_type_id,contact_type.contact_type,register.contact_time,contact_time.contact_time as cont_name,');
//		$this->db->from('register');
//		$this->db->join('profilefor', 'register.profilefor_id=profilefor.profilefor_id', 'left');
//		$this->db->join('gender', 'register.gender_id=gender.gender_id', 'left');
//		$this->db->join('marital_status', 'register.marital_status_id=marital_status.marital_status_id', 'left');
//		$this->db->join('complexion', 'register.complexion_id=complexion.complexion_id', 'left');
//		$this->db->join('physical_status', 'register.physical_status_id=physical_status.physical_status_id', 'left');
//		$this->db->join('blood_group', 'register.bloodgroup_id=blood_group.bloodgroup_id', 'left');
//		$this->db->join('country', 'register.country_code=country.phonecode', 'left');
//		$this->db->join('star', 'register.star_id=star.star_id', 'left');
//		$this->db->join('height', 'register.height=height.height_id', 'left');
//		$this->db->join('body_type', 'register.body_type_id=body_type.body_type_id', 'left');
//		$this->db->join('religion', 'register.religion_id=religion.religion_id', 'left');
//		$this->db->join('cast', 'register.cast_id=cast.cast_id', 'left');
//		$this->db->join('jathakam', 'register.jathakam_id=jathakam.jathakam_id', 'left');
//		$this->db->join('rassi', 'register.rassi_id=rassi.rassi_id', 'left');
//		$this->db->join('religion_area', 'register.religion_area_id=religion_area.area_id', 'left');
//		$this->db->join('contact_time', 'register.contact_time=contact_time.contact_time_id', 'left');
//		$this->db->join('contact_type', 'register.preffered_cont_type_id=contact_type.contact_type_id', 'left');
//		$this->db->where('register.web_id', $id);
//
//		$query = $this->db->get();
//		return $query->result();
//	}

//	public function get_education($id)
//	{
//
//		$this->db->select('education.education_id,country.id,register.education_details,register.education_addition,register.cource,country.name,register.work_state,states.state,register.work_district,districts.district,register.edu_cat_id,edu_category.edu_category, register.highest_education_id,education.education,register.unversity,register.cource,register.year,register.employedin_id,employed_in.employed_in,register.jobtitle_id,job.job_title,register.job_cat_id,job_category.job_cat,register.company_name,register.work_country,register.work_city,register.income_id,income.income');
//
//		$this->db->from('register');
//		$this->db->join('education', 'register.highest_education_id=education.education_id', 'left');
//		$this->db->join('edu_category', 'register.edu_cat_id=edu_category.cat_id', 'left');
//
//		$this->db->join('country', 'register.work_country=country.id', 'left');
//		$this->db->join('states', 'register.work_state=states.id', 'left');
//		$this->db->join('districts', 'register.work_district=districts.id', 'left');
//		$this->db->join('employed_in', 'register.employedin_id=employed_in.employedin_id', 'left');
//		$this->db->join('job_category', 'register.job_cat_id=job_category.job_cat_id', 'left');
//		$this->db->join('job', 'register.jobtitle_id=job.job_id', 'left');
//		$this->db->join('income', 'register.income_id=income.income_id', 'left');
//		$this->db->where('register.web_id', $id);
//
//		$query = $this->db->get();
//		// print_r($this->db->last_query());
//		return $query->result();
//	}

//	public function get_address($id)
//	{
//		$this->db->select('presnt_address,permnt_address,comm_address,route_recidence');
//		$this->db->from('register');
//		$this->db->where('register.web_id', $id);
//		$query = $this->db->get();
//		return $query->result();
//	}

//	public function get_permanent($id)
//	{
//		$this->db->select('country.id,register.p_housename,register.p_country_id,country.name,register.p_state_id,states.state,register.p_district_id,districts.district,districts.id AS district_id,register.p_pincode,register.p_city,register.p_street,register.p_landmark,');
//		$this->db->from('register');
//		$this->db->join('country', 'register.p_country_id=country.id', 'left');
//		$this->db->join('states', 'register.p_state_id=states.id', 'left');
//		$this->db->join('districts', 'register.;p_district_id=districts.id', 'left');
//		$this->db->where('register.web_id', $id);
//		$query = $this->db->get();
//		return $query->result();
//	}

//	public function get_current($id)
//	{
//		$this->db->select('register.c_housename,register.c_country_id,country.name,register.c_state_id,states.state,register.c_district_id,districts.district,register.c_pincode,register.c_city,register.c_street,register.c_landmark,');
//		$this->db->from('register');
//		$this->db->join('country', 'register.c_country_id=country.id', 'left');
//		$this->db->join('states', 'register.c_state_id=states.id', 'left');
//		$this->db->join('districts', 'register.c_district_id=districts.id', 'left');
//		$this->db->where('register.web_id', $id);
//		$query = $this->db->get();
//		return $query->result();
//	}


//	public function get_family($id)
//	{
//
//		$this->db->select('father_name,mother_name,father_familyname,mother_familyname,father_edu_cat,mother_edu_cat,father_education.edu_category AS f_education, mother_education.edu_category AS m_education,mother_ancestary_name, father_nativeplace,mother_nativeplace, father_job_cat,mother_job_cat,fatherjobcat.job_cat AS father_jobcat,motherjobcat.job_cat AS mother_jobcat, father_job,mother_job,fatherjob.job_title AS f_job,motherjob.job_title AS m_job,no_of_brothersmarried,no_of_brothers_unmarried,no_of_sistersmarried,no_of_sisters_unmarried,parents_mobile_number, register.family_type_id,family_type.family_type,register.family_status_id,family_status.family_status,register.family_value_id,family_value.family_value, guardian,family_mother_tongue, languages.name AS languages,profile_sibling, aboutfamily');
//
//		$this->db->from('register');
//		$this->db->join('edu_category AS mother_education', 'register.mother_edu_cat=mother_education.cat_id', 'left');
//		$this->db->join('edu_category AS father_education', 'register.father_edu_cat=father_education.cat_id', 'left');
//		$this->db->join('family_type', 'register.family_type_id=family_type.family_type_id', 'left');
//		$this->db->join('family_value', 'register.family_value_id=family_value.family_value_id', 'left');
//		$this->db->join('family_status', 'register.family_status_id=family_status.family_status_id', 'left');
//		$this->db->join('job_category AS fatherjobcat', 'register.father_job_cat=fatherjobcat.job_cat_id', 'left');
//		$this->db->join('job_category AS motherjobcat', 'register.mother_job_cat=motherjobcat.job_cat_id', 'left');
//		$this->db->join('job AS fatherjob', 'register.father_job= fatherjob.job_id', 'left');
//		$this->db->join('job AS motherjob', 'register.mother_job= motherjob.job_id', 'left');
//		$this->db->join('languages', 'register.family_mother_tongue=languages.id', 'left');
//
//
//		$this->db->where('register.web_id', $id);
//
//		$query = $this->db->get();
//		return $query->result();
//
//	}

//	public function get_life($id)
//	{
//
//		$this->db->select('register.complexion_id,complexion.complexion,
//
//      register.drinking_id, register.smoking_id,
//
//      smok_habbi.habbit_type as s_habbi,
//      drink_habbi.habbit_type as d_habbi,
//
//      register.language_known,languages_known.language, register.hobbies,hobbies.hobby, register.interests,interest.interest, register.eating_id,eating_habbit.eating_habbit, blog, facebook, othe_social
//
//      ');
//
//		$this->db->from('register');
//		$this->db->join('complexion', 'register.complexion_id=complexion.complexion_id', 'left');
//		$this->db->join('habbit_type as smok_habbi', 'register.smoking_id=smok_habbi.habbit_type_id', 'left');
//		$this->db->join('habbit_type as drink_habbi ', 'register.drinking_id=drink_habbi.habbit_type_id', 'left');
//		$this->db->join('languages_known', 'register.language_known=languages_known.id', 'left');
//		$this->db->join('hobbies', 'register.hobbies=hobbies.hobby_id', 'left');
//		$this->db->join('interest', 'register.interests=interest.interest_id', 'left');
//		$this->db->join('eating_habbit', 'register.eating_id = eating_habbit.eating_id', 'left');
//
//
//		$this->db->where('register.web_id', $id);
//
//		$query = $this->db->get();
//		return $query->result();
//	}

//	public function get_mypartner($id)
//	{
//		$this->db->select('smoking_habbit.habbit_type AS smoking,drinking_habbit.habbit_type AS drinking,languages.name AS language,age_from,age_to,
//      height_from,height_to,partner_prefferences.looking_for, partner_prefferences.body_type_id,partner_prefferences.complexion_id,sub_cast,mother_toungue_id,
//
//      partner_prefferences.marital_status_id,
//      partner_prefferences.religion_id,partner_prefferences.star_id,partner_prefferences.jathakam_id,
//
//      partner_prefferences.diet_id,
//      h_education_id,
//      partner_prefferences.employedin_id,job_title_id,country_id,partner_prefferences.state_id,partner_prefferences.family_value_id,drinking_id,smoking_id,
//      partner_prefferences.physical_status_id,partner_prefferences.family_status_id,partner_prefferences.income_id,
//
//      GROUP_CONCAT(DISTINCT body_type.body_type) as body_type,
//
//      GROUP_CONCAT(DISTINCT complexion.complexion) as complexion,
//
//      GROUP_CONCAT(DISTINCT marital_status.marital_status) as marital_status,
//
//      languages.name,religion.religion,GROUP_CONCAT(DISTINCT cast.cast) as cast, partner_prefferences.cast_id,
//
//      GROUP_CONCAT(DISTINCT star.star) as star,GROUP_CONCAT(DISTINCT jathakam.typeof_jathakam) as typeof_jathakam,diet.diet,
//
//      GROUP_CONCAT(DISTINCT education.education) as education, partner_prefferences.h_education_id,
//
//      education.education_id,employed_in.employedin_id,
//
//      GROUP_CONCAT(DISTINCT employed_in.employed_in) as employed_in,job.job_id,
//
//      GROUP_CONCAT(DISTINCT edu_category.edu_category) as edu_category, partner_prefferences.edu_cat,
//      GROUP_CONCAT(DISTINCT job_category.job_cat) as job_category, partner_prefferences.job_cat,
//
//
//      GROUP_CONCAT(DISTINCT job.job_title) as job_title,country.name,
//      states.state,districts.id,
//
//      GROUP_CONCAT(DISTINCT districts.district) as district,partner_prefferences.district_id,
//
//      smoking_habbit.habbit_type AS smoking,drinking_habbit.habbit_type AS drinking_habbit,
//      physical_status.physical_status,family_status.family_status,income.income');
//		$this->db->from('partner_prefferences');
//		$this->db->join('habbit_type AS smoking_habbit', 'partner_prefferences.smoking_id=smoking_habbit.habbit_type_id', 'left');
//		$this->db->join('habbit_type AS drinking_habbit', 'partner_prefferences.drinking_id=drinking_habbit.habbit_type_id', 'left');
//		$this->db->join('body_type', 'find_in_set(body_type.body_type_id,partner_prefferences.body_type_id) <> 0', 'left');
//		$this->db->join('complexion', 'find_in_set(complexion.complexion_id,partner_prefferences.complexion_id) <> 0', 'left');
//		$this->db->join('languages', 'partner_prefferences.mother_toungue_id=languages.id', 'left');
//
//		$this->db->join('marital_status', 'find_in_set(marital_status.marital_status_id,partner_prefferences.marital_status_id ) <> 0', 'left');
//
//		$this->db->join('religion', 'partner_prefferences.religion_id=religion.religion_id', 'left');
//		$this->db->join('cast', 'find_in_set(cast.cast_id,partner_prefferences.cast_id) <> 0', 'left');
//		$this->db->join('star', 'find_in_set(star.star_id,partner_prefferences.star_id) <> 0', 'left');
//		$this->db->join('jathakam', 'find_in_set(jathakam.jathakam_id,partner_prefferences.jathakam_id) <> 0', 'left');
//		$this->db->join('diet', 'partner_prefferences.diet_id=diet.diet_id', 'left');
//		$this->db->join('education', 'find_in_set(education.education_id,partner_prefferences.h_education_id) <> 0', 'left');
//		$this->db->join('edu_category', 'find_in_set(edu_category.cat_id,partner_prefferences.edu_cat) <> 0', 'left');
//
//		$this->db->join('employed_in', 'find_in_set(employed_in.employedin_id,partner_prefferences.employedin_id) <> 0', 'left');
//		$this->db->join('job', 'find_in_set(job.job_id,partner_prefferences.job_title_id) <> 0', 'left');
//		$this->db->join('job_category', 'find_in_set(job_category.job_cat_id,partner_prefferences.job_cat) <> 0', 'left');
//
//		$this->db->join('country', 'partner_prefferences.country_id=country.id', 'left');
//		$this->db->join('states', 'partner_prefferences.state_id=states.id', 'left');
//		$this->db->join('districts', 'find_in_set(districts.id,partner_prefferences.district_id) <> 0', 'left');
//		$this->db->join('physical_status', 'partner_prefferences.physical_status_id=physical_status.physical_status_id', 'left');
//		$this->db->join('family_status', 'partner_prefferences.family_status_id=family_status.family_status_id', 'left');
//		$this->db->join('income', 'partner_prefferences.income_id=income.income_id', 'left');
//		$this->db->where('partner_prefferences.web_id', $id);
//
//		$query = $this->db->get();
//		return $query->result();
//	}
}
