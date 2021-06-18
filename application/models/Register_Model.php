<?php

class Register_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();

		$this->load->database();
	}

	public function getdata($table)
	{
		$this->db->select('*');
		$this->db->from($table);
		$query = $this->db->get();
		return $query->result();
	}

	public function getbranches($table)
	{
		$this->db->select('*');
		$this->db->from($table);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_cast($religion)
	{
		$this->db->where('religion_id', $religion);
		$this->db->order_by('cast', 'ASC');
		$query = $this->db->get('cast');
		$output = '<option value="">Select Cast</option>';
		foreach ($query->result() as $row) {
			$output .= '<option value="' . $row->cast_id . '">' . $row->cast . '</option>';
		}
		return $output;
	}

	public function get_country($country)
	{
		$this->db->where('country_id', $country);
		$query = $this->db->get('states_dist');

		// $output = '<option value="">Select Location</option>';
		$output = '';
		foreach ($query->result() as $row) {
			$output .= '<option value="' . $row->id . '">' . $row->name . '</option>';
		}
		return $output;
	}

	public function get_dist($state)
	{
		$this->db->where('state_id', $state);
		$this->db->order_by('district', 'ASC');
		$query = $this->db->get('districts');
		$output = '<option value="">Select district</option>';
		foreach ($query->result() as $row) {
			$output .= '<option value="' . $row->id . '">' . $row->district . '</option>';
		}
		return $output;
	}

	public function get_edu($edu)
	{
		$this->db->where('edu_category', $edu);
		$this->db->order_by('education', 'ASC');
		$query = $this->db->get('education');
		$output = '<option value="">Select Education</option>';
		foreach ($query->result() as $row) {
			$output .= '<option value="' . $row->education_id . '">' . $row->education . '</option>';
		}
		return $output;
	}

	public function get_job($job)
	{
		$this->db->where('job_cat_id', $job);
		$this->db->order_by('job_title', 'ASC');
		$query = $this->db->get('job');
		$output = '<option value="">Select Job</option>';
		foreach ($query->result() as $row) {
			$output .= '<option value="' . $row->job_id . '">' . $row->job_title . '</option>';
		}
		return $output;
	}

	public function insert_user($data)
	{
		if ($this->db->insert("users", $data)) {
			return true;
		}
	}

	public function getstatedist($st_dt_id)
	{
		$result = $this->db->query("SELECT * from states_dist WHERE id='$st_dt_id'");
		// $str = $this->db->last_query();
		// echo $str;

		if ($result->num_rows() > 0) {
			return $result;
		} else {
			return false;
		}
	}

	public function check_email($email)
	{

		$this->db->select('id');
		$this->db->from('users');
		$this->db->where('email', $email);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {

			return TRUE;
		} else {

			return FALSE;

		}
	}

	public function insert($data)
	{
		if ($this->db->insert("register", $data)) {
			return true;
		}
	}

	public function get_staff($religion, $status, $gender)
	{

		$query = $this->db->query("SELECT COUNT( assignto.staff_id ) AS COUNTSTAFF, staff_id FROM assignto WHERE staff_id IN (SELECT  staff_id FROM prefferences WHERE pref_religion=$religion AND pref_status=$status AND pref_gender=$gender)  
		ORDER BY COUNTSTAFF ASC LIMIT 1");

		//$query = $this->db->get();

		//
		$staff = $query->result();
		if (!$staff[0]->staff_id == NULL) {
			//print_r($this->db->last_query());
			return $staff;
		} else {

			$query = $this->db->query("SELECT staff_id FROM prefferences WHERE pref_religion=$religion AND pref_status=$status AND pref_gender=$gender ORDER BY staff_id ASC LIMIT 1");
			$staff = $query->result();
			//print_r($staff);
			// print_r($this->db->last_query());
			return $staff;
		}
	}

	public function insert_asign($data)
	{

		if ($this->db->insert("assignto", $data)) {
			return true;
		}
	}

	public function CheckUser($username)
	{
		$result = $this->db->query("SELECT * from users WHERE id='$username' OR phone='$username' OR email='$username'");
		// $str = $this->db->last_query();
		// echo $str;

		if ($result->num_rows() > 0) {
			return $result;
		} else {
			return false;
		}
	}

	public function get_status($id)
	{
		$this->db->select('registration_status');
		$this->db->from('register');
		$this->db->where('web_id', $id);

		$query = $this->db->get();

		return $query->result();
	}

	public function update_user($id, $data)
	{
		$this->db->where('id', $id);
		$result = $this->db->update('users', $data);
		if ($result) {
			return true;
		} else {
			return false;
		}
	}

	public function update($data, $id)
	{

		$this->db->set($data);
		$this->db->where("web_id", $id);
		$this->db->update("register", $data);
	}

	public function get_forgot($email)
	{

		$this->db->select('id,first_name');
		$this->db->from('users');
		$this->db->where('email', $email);

		$query = $this->db->get();

		return $query->result();
	}

	public function update_user1($data, $id)
	{
		$this->db->set($data);
		$this->db->where("id", $id);
		$this->db->update("users", $data);

	}

	/*
   * Returns the proprietary user_id for user_token received by OneAll.
   * The goal is to check if there is an existing user account for a user_token received by OneAll.
   */
	function get_user_id_for_user_token($user_token)
	{

		$result = $this->db->query("SELECT * FROM oneall_user WHERE user_token = '$user_token' ");

		if ($result->num_rows() > 0) {
			return $result;
		} else {
			return;
		}
	}

	/*
	 * Returns the OneAll user_token for a proprietary user_id.
	 * The goal is to check if the given user has already been linked to a OneAll user_token.
	 */
	function get_user_token_for_user_id($user_id)
	{
		// Example Query: SELECT user_token FROM oneall_user WHERE user_id = <user_id>
		// Return the user_token or null if none found.
	}

	/*
	 * Links a OneAll user_token to a proprietary user_id.
	 * The goal is to store the user_token for a given user_id so that you can can recognize the user on subsequent logins.
	 */
	function link_user_token_to_user_id($user_token, $user_id)
	{
		$result = $this->db->query("INSERT INTO oneall_user SET user_token = '$user_token', user_id = '$user_id'");
		$id = $this->db->insert_id();

		return $id;
	}


	public function insert_last_login($id)
	{
		$this->db->where('id', $id);
		$this->db->update('users', array('last_login' => date('Y-m-d H:i:s')));
		return true;
	}

	public function insertabout($data, $id)
	{
		$this->db->set($data);
		$this->db->where("web_id", $id);
		$this->db->update("register", $data);
	}


	public function update_partner($data, $id)
	{

		$this->db->select('id');
		$this->db->from('partner_prefferences');
		$this->db->where('web_id', $id);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {

			$this->db->update("partner_prefferences", $data);

			return true;
		} else {

			$this->db->insert('partner_prefferences', $data);
			return true;

		}
	}

	function getRegisteredUsersWithOutUserId($userId)
	{
//		Kint::dump($userId);
//		exit(0);
		$query = $this->db->query("SELECT * FROM `register` WHERE `register`.`web_id`='" . $userId . "'");
//		echo $this->db->last_query();
//		exit(0);
		return $query->result();
	}

	function getRegisteredUsersWithOutUserIdAndHeightRanges($userId, $minimumHeight, $maximumHeight)
	{
//		Kint::dump($userId);
//		exit(0);
		$query = $this->db->query("SELECT `register`.*,`users`.*,`documents`.`img_name`,`packages`.`title`,`states`.*,`country`.*,`religion`.*,`cast`.*,`education`.*,`job`.* FROM `register`,`documents`,`users`,`customer_package`,`packages`,`states`,`country`,`religion`,`cast`,`education`,`job` WHERE `register`.`web_id`=`users`.`id` AND `register`.`p_state_id` = `states`.`id` AND `register`.`jobtitle_id` = `job`.`job_id` AND `register`.`web_id`= `documents`.`web_id`  AND `register`.`highest_education_id` = `education`.`education_id` AND `register`.`cast_id` = `cast`.`cast_id`AND `register`.`p_country_id` = `country`.`id` AND `register`.`religion_id` = `religion`.`religion_id` AND `documents`.`type`= 'profile_photo' AND `register`.`web_id`=`customer_package`.`web_id` AND `customer_package`.`sub_id` = `packages`.`id` AND `register`.`web_id`!='" . $userId . "' AND `register`.`height` BETWEEN $minimumHeight AND $maximumHeight");
//		echo $this->db->last_query();
//		exit(0);
		return $query->result();
	}

}
