<?php

class Receiver extends CI_Controller {

	// function for receiver registration
	public function registration() {	

			// checking if mobile number already registered
			$contact = $this->input->post('contact');
			$this->load->model('data_model');
			$check_result = $this->data_model->check_details($contact);
			if(!$check_result) {
				$data = array(
					'first_name'=>$this->input->post('fname'),
					'last_name'=>$this->input->post('lname'),
					'dob'=>$this->input->post('dob'),
					'blood_group'=>$this->input->post('bgroup'),
					'contact'=>$this->input->post('contact'),
					'email'=>$this->input->post('email'),
					'city'=>$this->input->post('city'),
					'state'=>$this->input->post('state'),
					'address'=>$this->input->post('address')
					);

				$this->load->model('data_model');
				$success = $this->data_model->register_receiver($data); // loading model function for inserting values
				if($success) {
					$this->session->set_flashdata('msg', 'Success! Registration completed successfully.');
				}
				
			}
			else{
				$this->session->set_flashdata('msg', 'Alert! Contact number already registered.', ['class'=>'text-danger']);
			}

			return redirect('registration/receiver_registration');
	}



	public function login() {
		$this->load->view('receiver_login');
	}

	public function login_success() {
		echo $username = $this->input->post('mobile');
		echo $password = $this->input->post('password');
		
		$this->load->model('data_model');
		$mobile_check = $this->data_model->receiver_login_usercheck($username);
		if($mobile_check) {
			$this->load->model('data_model');
			$passwordcheck = $this->data_model->receiver_login_password($password);
			if($passwordcheck) {
				$session_val = [					
					'contact' => $mobile_check->contact,
					'email' => $mobile_check->email,					
				];

				$this->session->set_userdata($session_val);
				// echo $user = $this->session->userdata('contact');
				// return redirect('receiver/load_demo');			
				

				$this->load->model('data_model');
				$result = $this->data_model->display_blood_info();		
				// $this->load->view('hospital/hospital_dashboard', ['result'=>$result]);

				return redirect('welcome/blood_samples', ['result'=>$result]);

				
			}
			else{
				$this->session->set_flashdata('msg', 'Alert! Password is not valid');
			}

		}
		else{
			$this->session->set_flashdata('msg', 'Alert! User is not registered.');
		}
		return redirect('receiver/login');
	}


	// request sample
	public function request_sample($id, $user) {
		$date = date('Y-m-d');
		$time = date('h:m:s');
		$data = array(
			'id'=>'',
			'blood_id'=>$id,
			'user_contact'=>$user,
			'date'=>$date,
			'time'=>$time
		);
		$this->load->model('data_model');
		$request_status = $this->data_model->save_request($data);
		if($request_status) {
			$this->session->set_flashdata('msg', "You have requested for the sample.");
		}
		else {
			$this->session->set_flashdata('msg', "Request failed.");
		}
		return redirect('welcome/blood_samples');
	}




	// Logout function

	public function logout() {
		$this->session->sess_destroy();
		return redirect('receiver/login');
	}

}
?>