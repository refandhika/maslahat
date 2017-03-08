<?php
require_once(APPPATH.'third_party/ChromePhp.php');

defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
		if(!$this->session->userdata('logged_in'))
        {
			$this->home();
        }
        else
        {
        	if($this->session->userdata('usertype')=="borrower"){
				redirect('borrower', 'location');
        	}
        	elseif($this->session->userdata('usertype')=="lender"){
				redirect('lender', 'location');
        	}
        	elseif($this->session->userdata('usertype')=="rm"){
				redirect('rm', 'location');
        	};
        };

	}

	public function home(){

		$data['title'] = "Maslahat";

		$this->load->view('template/no_header', $data);
		$this->load->view('landing/section1');
		$this->load->view('template/footer');

	}

	public function borrowerLogin()
	{
		$data = array(
			'username' => $this->input->post('nama-borrower'),
			'password' => md5($this->input->post('pass-borrower'))
		);

		$this->load->model('model_landing');

		$result = $this->model_landing->login($data);
		if($result == true){
			$result = $this->model_landing->getUserData($data['username']);
			if($result != false){
				$session_data = array(
					'id' => $result[0]->id_borrowers,
					'username' => $result[0]->borrowers_name,
					'email' => $result[0]->borrowers_mail,
					'usertype' => 'borrower',
					'logged_in' => TRUE 
				);

				$this->session->set_userdata($session_data);
				$data['message_display'] = 'Success!!';

				redirect('borrower', 'location');
			}
		}	
		else{
			$data['message_display'] = 'Invalid Username or Password';
			redirect('', 'location');
		};
	}

	public function logout(){
		$usertype = $this->session->userdata('usertype');
		$session_data = array(
			'id' => '',
			'username' => '',
			'email' => '',
			'usertype' => '',
			'logged_in' => FALSE
		);

		$this->session->unset_userdata($session_data);
		$this->session->sess_destroy();
		$data['message_display'] = 'Successfully Logout';

		if($usertype=='borrower' or $usertype=='lender'){
			redirect('', 'location');
		}
		else if ($usertype=='rm') {
			redirect('rm', 'location');
		}
	}

	public function getSessionData()
	{
		$data['id'] = $this->session->userdata('id');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');

		echo json_encode($data);
	}
}
