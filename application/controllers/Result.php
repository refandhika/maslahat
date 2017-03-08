<?php
require_once(APPPATH.'third_party/ChromePhp.php');
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_borrower');
		$this->load->model('model_rm');
		$this->load->model('model_scoring');
	}

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
		$data['title'] = 'Result';

		$data['forms'] = $this->model_borrower->getAllFormByUser($this->session->userdata('username'));

		$this->load->view('template/header_logged.php',$data);
		$this->load->view('borrower/result.php',$data);
		$this->load->view('template/footer.php');
	}

	public function detailedResult($id)
	{
		$data['title'] = 'Result';

		$formdata = $this->model_rm->getFormByID($id);

		$scored = false;
		if($formdata[0]->id_score != "0"){
			$scored = true;
		};

		if($scored){
			$temp = explode(',',$formdata[0]->id_pengurus);
			$data['jmlpgrs'] = sizeof($temp);

			$yeardata['year'] = date('Y', strtotime($formdata[0]->created_at));
			$yeardata['year1'] = (string)($yeardata['year'] - 2);
			$yeardata['year2'] = (string)($yeardata['year'] - 1);

			$data['perusahaan'] = $this->model_scoring->getPerusahaanByID($formdata[0]->id_perusahaan);
			for($i=1;$i<=$data['jmlpgrs'];$i++){
				$data['pengurus'][$i] = $this->model_scoring->getPengurusByID($temp[$i-1]);
			};
			$data['infousaha'] = $this->model_scoring->getInfoUsahaByID($formdata[0]->id_info_usaha);
			$data['infokeuangan'] = $this->model_scoring->getInfoKeuanganByID($formdata[0]->id_info_keuangan);
			$data['permohonan'] = $this->model_scoring->getPermohonanByID($formdata[0]->id_permohonan);
			$data['agunan'] = $this->model_scoring->getAgunanByID($formdata[0]->id_agunan);
			$data['score'] = $this->model_borrower->getScoreByID($formdata[0]->id_score);

			$this->load->view('template/header_logged.php',$data);
			$this->load->view('borrower/result_detailed.php',$data);
			$this->load->view('template/footer.php');
		}
		else {
			$this->load->view('template/header_logged.php',$data);
			$this->load->view('borrower/result_na.php',$data);
			$this->load->view('template/footer.php');
		};
		
	}

}
