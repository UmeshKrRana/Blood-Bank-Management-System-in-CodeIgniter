<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function receiver_registration()
	{
		$this->load->view('receiver_registration_form');
	}

	public function hospital_registration() {
		$this->load->view('hospital_registration');
	}
}
