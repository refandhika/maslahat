<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Borrower_register extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Register';

		$this->load->view('template/header.php',$data);
		$this->load->view('signup/borrower.php',$data);
		$this->load->view('template/footer.php',$data);
	}

	public function form()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'nama lengkap', 'required|xss_clean');
		$this->form_validation->set_rules('email', 'email', 'required|xss_clean|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'password', 'required|xss_clean');
		$this->form_validation->set_rules('passconf', 'konfirmasi password', 'required|xss_clean|matches[password]');


		if ($this->form_validation->run() == false){
			$data['title'] = 'Register';
			
			$this->load->view('template/header.php',$data);
			#$this->load->view('login/register_form.php',$data);
			$this->load->view('template/footer.php',$data);
		}
		else {
			$data['title'] = 'Success';

			$this->load->model('register_model');
			$this->register_model->set_user();

			$this->load->view('template/header.php',$data);
			#$this->load->view('login/register_success.php',$data);
			$this->load->view('template/footer.php',$data);
		}
	}
}
