<?php
require_once(APPPATH.'third_party/ChromePhp.php');

defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if ( ! $this->session->userdata('logged_in'))
        {
			$this->home();
        }
        else
        {
			redirect('scoring', 'location');
        };

	}

	public function home(){

		$data['title'] = "Maslahat";

		$this->load->view('template/header', $data);
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
					'username' => $result[0]->borrowers_name,
					'email' => $result[0]->borrowers_mail,
					'logged_in' => TRUE 
				);

				$this->session->set_userdata($session_data);
				$data['message_display'] = 'Success!!';

				redirect('scoring', 'location');
			}
		}	
		else{
			$data['message_display'] = 'Invalid Username or Password';
			redirect('', 'location');
		};
	}

	public function logout(){
		$session_data = array(
			'username' => '',
			'email' => '',
			'logged_in' => FALSE
		);

		$this->session->unset_userdata($session_data);
		$this->session->sess_destroy();
		$data['message_display'] = 'Successfully Logout';

		redirect('', 'location');
	}
}
