<?php 
    class Hospital extends CI_Controller {
	

	public function hospital_dashboard() {
		// $this->load->view('hospital_dashboard');

		$this->load->model('data_model');
		$result = $this->data_model->display_blood_info();		
		$fetch_record = $this->data_model->fetch_blood_request();

		$this->load->view('hospital_dashboard', ['result'=>$result, 'fetch_record'=>$fetch_record]);

	}

	public function registration() {
		$this->load->view('hospital_registration');
	}

	public function registration_success() {
		$hospital_name = $this->input->post('hname');
		$hospital_sub = substr($hospital_name, 0, 5);
	
		$pass =  $this->input->post('password');
		$cpass =  $this->input->post('cpassword');
		
		$random_id = rand(100, 540);
		echo $hospital_id = $hospital_sub.$random_id;

		// checking if password is confirmed or not
		if($pass == $cpass){
			$data = array(
			'id'=>$hospital_id,
			'hospital_name'=>$this->input->post('hname'),
			'specialization'=>$this->input->post('spec'),
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			'email'=>$this->input->post('email'),
			'contact'=>$this->input->post('contact'),
			'city'=>$this->input->post('city'),
			'address'=>$this->input->post('address')
		);

			$this->load->model('data_model');
			$result = $this->data_model->save_hospital_registration($data);
			if($result) {
				$this->session->set_flashdata('msg','Success! Registration completed.', ['class'=>'alert alert-success text-success']);
			}

		}
		else{
			$this->session->set_flashdata('msg','Alert! Password not confirmed.', ['class'=>'alert alert-danger text-danger']);
		}

		return redirect('registration/hospital_registration');
	}	



	// login area

	public function login() {
		$this->load->view('hospital_login');
	}

	public function login_success() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$this->load->model('data_model');
		$usernamecheck = $this->data_model->hospital_login_usercheck($username);
		if($usernamecheck) {
			$this->load->model('data_model');
			$passwordcheck = $this->data_model->hospital_login_password($password);
			if($passwordcheck) {				

				// creating session
				$session_data = [
					'user_id' => $usernamecheck->user_id,
					'username' => $usernamecheck->username,
					'email' => $usernamecheck->email,
					'role_id' => $usernamecheck->role_id
				];

				$this->session->set_userdata($session_data);

				$this->session->set_flashdata('msg', $user);

				$this->load->model('data_model');
				$result = $this->data_model->display_blood_info();		
				// $this->load->view('hospital/hospital_dashboard', ['result'=>$result]);

				return redirect('hospital/hospital_dashboard', ['result'=>$result]);
			}
			else{
				$this->session->set_flashdata('msg', 'Alert! Password is not valid');
			}

		}
		else{
			$this->session->set_flashdata('msg', 'Alert! User is not registered.');
		}
		return redirect('hospital/login');
	}



	/*-----------------------------------------------------------------------------
							Function for Blood details
-------------------------------------------------------------------------------*/

	// loading blood info view
	public function add_blood_info() {
		$this->load->view('add_blood_info');
	}

	// inserting blood info data
	public function save_blood_info() {
		$data = array(
			'id'=>'',
			'blood_name' => $this->input->post('bgroup'),
			'type' =>$this->input->post('type'),
			'hospital_name' => $this->input->post('hospitalname'),
			'quantity' => $this->input->post('quantity'),
			'price' => $this->input->post('price'),
		);

		$this->load->model('data_model');
		$save = $this->data_model->save_blood($data);
		if($save) {
			$this->session->set_flashdata('msg','Blood info saved successfully.');
		}
		else{
			$this->session->set_flashdata('msg', 'Failed to save');
		}
		return redirect('add_blood_info');
	}


	// fetching available blood info
	public function display_blood() {
		$this->load->model('data_model');
		$result = $this->data_model->display_blood_info();		
		$this->load->view('available_blood_sample', ['result'=>$result]);

	}


	// fetching details of requested for blood
	public function view_request() {
		$this->load->model('data_model');
		$blood_result = $this->data_model->display_blood_request();		
		$this->load->view('view_blood_request', ['blood_result'=>$blood_result]);

	}


	




	/*-----------------------------------------------------------------------
									Logout
	-------------------------------------------------------------------------*/

	public function logout() {
		$this->session->sess_destroy();
		return redirect('hospital/login');
	}
}




?>