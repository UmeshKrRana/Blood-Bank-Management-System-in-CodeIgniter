<?php
	
	class Data_model extends CI_Model {

		/* --------------------------------------------------------------------
						 		functions for Receiver 
		-----------------------------------------------------------------------*/

		// checking if receiver mobile number is already registered
		public function check_details($contact) {
			echo $contact;
			$query = $this->db->get_where('receiver_registration', array('contact' => $contact));
			if($query-> num_rows() > 0) {
				return $query->row();
			}
		}

		// registering receiver details
		public function register_receiver($data) {
			print_r($data);
			return $this->db->insert('receiver_registration', $data);
		}

		// function for checking the username is valid or not
		public function receiver_login_usercheck($username) {
			$query = $this->db->get_where('receiver_registration', array('contact' => $username));
			if($query->num_rows() > 0) {
				return $query->row();
			}
		}

		// function for checking the password is valid or not
		public function receiver_login_password($password) {
			$myquery = $this->db->get_where('receiver_registration', array('password'=>$password));
			if($myquery->num_rows() > 0) {
				return $myquery->row();
			}
		}


		// Requesting for blood
		public function save_request($data) {
			return $this->db->insert('blood_request', $data);
		}


		/*-----------------------------------------------------------
						   functions for hospital 
		-------------------------------------------------------------*/


		// function for inserting the hospital registration form values
		public function save_hospital_registration($data) {
			return $this->db->insert('hospital_registration', $data);
		}
		
		// function for checking the username is valid or not
		public function hospital_login_usercheck($username) {
			$query = $this->db->get_where('hospital_registration', array('username' => $username));
			if($query->num_rows() > 0) {
				return $query->row();
			}
		}

		// function for checking the password is valid or not
		public function hospital_login_password($password) {
			$myquery = $this->db->get_where('hospital_registration', array('password'=>$password));
			if($myquery->num_rows() > 0) {
				return $myquery->row();
			}
		}


		// inserting blood info 
		public function save_blood($data) {
			return $this->db->insert('blood_info', $data);
		}

		// displaying blood info
		public function display_blood_info()
		 {
			$res = $this->db->get('blood_info');
			return $res->result();
		}


		// fetching blood requested details

		public function fetch_blood_request() {
			$record = $this->db->get('blood_request');
			if($record->num_rows() > 0) {
				return $record->result();
			}
		}

		public function display_blood_request() {
			$blood_details = $this->db->get('blood_request');
			if($blood_details->num_rows() > 0) {
				return $blood_details->result();
			}
		}
	}
?>