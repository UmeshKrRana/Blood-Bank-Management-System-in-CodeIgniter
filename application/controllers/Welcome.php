<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function blood_samples() {

		$this->load->model('data_model');
		$result = $this->data_model->display_blood_info();		
		$this->load->view('blood_samples', ['result'=>$result]);
		
	}

	public function registration() {
		$this->load->view('receiver_registration_form.php');
	}
}
