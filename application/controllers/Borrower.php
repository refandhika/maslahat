<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Borrower extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('logged_in'))
        {
			$this->home();
        }
        else
        {
			redirect('', 'location');
        };

	}

	public function home()
	{
		$data['title'] = 'Borrower';

		$this->load->view('template/header_logged.php',$data);
		$this->load->view('borrower/index.php',$data);
		$this->load->view('template/footer.php',$data);
	}

	public function register()
	{
		$data['title'] = 'Register';

		$this->load->view('template/header.php',$data);
		$this->load->view('signup/borrower.php',$data);
		$this->load->view('template/footer.php',$data);
	}

	public function formRegister()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'nama perusahaan', 'required|xss_clean|is_unique[borrowers.borrowers_name]');
		$this->form_validation->set_rules('email', 'email', 'required|xss_clean|valid_email|is_unique[borrowers.borrowers_mail]');
		$this->form_validation->set_rules('password', 'password', 'required|xss_clean');
		$this->form_validation->set_rules('passconf', 'konfirmasi password', 'required|xss_clean|matches[password]');


		if ($this->form_validation->run() == false){
			$data['title'] = 'Register';
			
			$this->load->view('template/header.php',$data);
			$this->load->view('signup/borrower.php',$data);
			$this->load->view('template/footer.php',$data);
		}
		else {
			$data['title'] = 'Success';

			$this->load->model('model_register');
			$this->model_register->set_borrower();

			$session_data = array(
				'username' => $this->input->post('name'),
				'email' => $this->input->post('mail'),
				'usertype' => 'borrower',
				'logged_in' => TRUE 
			);

			$this->session->set_userdata($session_data);

			$this->load->view('template/header.php',$data);
			$this->load->view('borrower/success.php',$data);
			$this->load->view('template/footer.php',$data);

			redirect('borrower', 'location');
		};
	}
}
