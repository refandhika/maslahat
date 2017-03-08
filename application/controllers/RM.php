<?php
require_once(APPPATH.'third_party/ChromePhp.php');

defined('BASEPATH') OR exit('No direct script access allowed');

class RM extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_rm');
		$this->load->model('model_scoring');
		$form_id = 1;
	}

	public function index()
	{
		if ( ! $this->session->userdata('logged_in'))
        {
			$this->login();
        }
        else
        {
			$this->home();
        };

	}

	public function login(){

		$data['title'] = "RM";

		$this->load->view('template/header', $data);
		$this->load->view('rm/login');
		$this->load->view('template/footer');

	}

	public function home(){

		$data['title'] = "RM";

		$data['forms'] = $this->model_rm->getAllForm();

		$this->load->view('template/header_logged', $data);
		$this->load->view('rm/list', $data);
		$this->load->view('template/footer');

	}

	public function rmLogin()
	{
		$data = array(
			'username' => $this->input->post('nama-rm'),
			'password' => md5($this->input->post('pass-rm'))
		);

		$result = $this->model_rm->login($data);
		if($result == true){
			$result = $this->model_rm->getUserData($data['username']);
			if($result != false){
				$session_data = array(
					'username' => $result[0]->rm_name,
					'email' => $result[0]->rm_email,
					'usertype' => 'rm',
					'logged_in' => TRUE 
				);

				$this->session->set_userdata($session_data);
				$data['message_display'] = 'Success!!';

				redirect('rm','location');
			}
		}	
		else{
			$data['message_display'] = 'Invalid Username or Password';
			redirect('rm','location');
		};
	}

	public function ajaxValueEdit($id)
	{
		$form_id = $id;
		$formdata = $this->model_rm->getFormByID($id);
		$isiandata = $this->model_rm->getIsianByID($formdata[0]->id_isian);
		if ($isiandata){
			$data = array(
				'isian1' => $isiandata[0]->y3,
				'isian2' => $isiandata[0]->m3,
				'isian3' => $isiandata[0]->k3,
				'isian4' => $isiandata[0]->a2
			);
		}
		else {
			$data = array(
				'isian1' => '11',
				'isian2' => '11',
				'isian3' => '11',
				'isian4' => '11'
			);
		};
		$data['id_form'] = $formdata[0]->id_form;
		$data['id_isian'] = $formdata[0]->id_isian;
		$this->output->set_output(json_encode($data));
	}

	public function updateRMValue(){
		$data = array(
				'y3' => $this->input->post('isian1'),
				'm3' => $this->input->post('isian2'),
				'k3' => $this->input->post('isian3'),
				'a2' => $this->input->post('isian4')
			);
		$id_form = $this->input->post('id_form');
		$id_isian = $this->input->post('id_isian');
		if ($id_isian != '0'){
			$this->model_rm->updateRMIsian($data,$id_form);
		}
		else{
			$this->model_rm->insertRMIsian($data,$id_form);
		};
		$this->model_rm->updateIsianID($id_form);

		$this->calculateScore($id_form);

		echo json_encode(array('status'=>TRUE));
	}

	private function calculateScore($id_form){
		$formdata = $this->model_rm->getFormByID($id_form);
		$temp = explode(',',$formdata[0]->id_pengurus);
		$jmlpgrs = sizeof($temp);

		$yeardata['year'] = date('Y', strtotime($formdata[0]->created_at));
		$yeardata['year1'] = (string)($yeardata['year'] - 2);
		$yeardata['year2'] = (string)($yeardata['year'] - 1);

		$data1 = $this->model_scoring->getPerusahaanByID($formdata[0]->id_perusahaan);
		for($i=1;$i<=$jmlpgrs;$i++){
			$data['pengurus'][$i] = $this->model_scoring->getPengurusByID($temp[$i-1]);
		};
		$data3 = $this->model_scoring->getInfoUsahaByID($formdata[0]->id_info_usaha);
		$data4 = $this->model_scoring->getInfoKeuanganByID($formdata[0]->id_info_keuangan);
		$data5 = $this->model_scoring->getPermohonanByID($formdata[0]->id_permohonan);
		$data6 = $this->model_scoring->getAgunanByID($formdata[0]->id_agunan);
		$data7 = $this->model_scoring->getIsianRMByID($formdata[0]->id_isian);
		
		$y = $this->yuridisScore($data1[0],$data5[0],$data7[0]);
		$m = $this->manajemenScore($data1[0],$data2[1][0],$data3[0],$data7[0],$yeardata);
		$t = $this->teknisScore($data1[0],$data3[0],$yeardata);
		$p = $this->pemasaranScore($data3[0],$data5[0]);
		$k = $this->keuanganScore($data4[0],$data7[0]);
		$a = $this->agunanScore($data4[0],$data6[0],$data7[0]);
		$f = $this->fasilitasScore($data5[0]);

		$final = ($y + $m + $t + $p + $k + $a + $f) / 7;

		$score = array(
			'yuridis' => $y,
			'manajemen' => $m,
			'teknis' => $t,
			'pemasaran' => $p,
			'keuangan' => $k,
			'agunan' => $a,
			'fasilitas' => $f,
			'final' => $final
		);

		if ($formdata[0]->id_score != '0'){
			$this->model_scoring->updateRMScore($score,$id_form);
		}
		else{
			$this->model_scoring->insertRMScore($score,$id_form);
		};
		$this->model_scoring->updateScoreID($id_form);
	}

	private function yuridisScore($data1,$data5,$data7)
	{
		#1
		$ju = $data1->badan_hukum;
		#2
		$sah1 = true;
		if(empty($data1->no_pendirian)){
			$sah1 = false;
		};
		#3
		$sah2 = true;
		if(empty($data1->no_berita)){
			$sah2 = false;
		};
		#4
		$sah3 = true;
		#5
		$sah4 = true;
		#6
		$temp = explode('/', $data5->jatuh_tempo);
		$string = $temp[1] . '/' . $temp[0] . '/' . $temp[2];
		$tb = date('d/m/Y', strtotime($string));
		#7
		$temp = explode('/', $data1->exp_iupu);
		$string = $temp[1] . '/' . $temp[0] . '/' . $temp[2];
		$iu1 = date('d/m/Y', strtotime($string));
		#8
		$temp = explode('/', $data1->exp_iut);
		$string = $temp[1] . '/' . $temp[0] . '/' . $temp[2];
		$iu2 = date('d/m/Y', strtotime($string));
		#9
		$temp = explode('/', $data1->exp_iphk);
		$string = $temp[1] . '/' . $temp[0] . '/' . $temp[2];
		$iu3 = date('d/m/Y', strtotime($string));

		/* Initiate */
		$y1 = 1;
		$y2 = 1;
		$y3 = 1;

		if ($ju == 'PT' and $sah1 and $sah2){
			$y1 = 1;
		}
		else if ($ju == 'PT' and ($sah1 or $sah2)){
			$y1 = 2;
		}
		else if ($ju == 'PT'){
			$y1 = 5;
		}
		else if ($ju == 'CV' or $ju == 'Firma'){
			$y1 = 10;
		}
		else if ($ju == 'Yayasan' or $ju == 'Koperasi'){
			$y1 = 3;
		};

		if ($tb <= $iu1 and $tb <= $iu2 and $tb <= $iu3){
			$y2 = 1;
		}
		else if ($tb > $iu1 or $tb > $iu2 or $tb > $iu3){
			$y2 = 2;
		}
		else if ($sah3 and $sah4){
			$y2 = 3;
		}
		else if ($sah3){
			$y2 = 5;
		}
		else {
			$y2 = 10;
		};

		if ($data7->y3 == "11" or $data7->y3 == "12"){
			$y3 = 1;
		}
		else if ($data7->y3 == "21"){
			$y3 = 2;
		}
		else {
			$y3 = 3;
		};

		$y = ($y1 + $y2 + $y3) / 3;

		return $y;
	}

	private function manajemenScore($data1,$data2,$data3,$data7,$yeardata)
	{
		#1
		$pglmn = (int)$yeardata['year'] - (int)$data2->awal_kelola_haji;
		#2
		$rep = ((int)$data3->keberangkatan_umroh1 + (int)$data3->keberangkatan_umroh2) / 2;
		#3
		$iu = true;
		if(empty($data1->no_iupu)){
			$iu = false;
		};
		#4
		$ik = true;
		if(empty($data1->no_iphk)){
			$ik = false;
		};
		#5
		if(((int)$yeardata['year'] - (int)$data1->tahun_iupu)>=0){
			$bu = true;
		}
		else{
			$bu = false;
		};
		#6
		if(((int)$yeardata['year'] - (int)$data1->tahun_iphk)>=0){
			$bk = true;
		}
		else{
			$bk = false;
		};
		#7
		$aa = 0;
		if ($data1->asosiasi == "Himpuh"){
			$aa = (int)$yeardata['year'] - (int)$data1->tahun_asosiasi;
		};

		$m1 = 1;
		$m2 = 1;
		$m3 = 1;
		$m4 = 1;

		if ($pglmn >= 5){
			$m1 = 1;
		}
		else if ($pglmn >= 3){
			$m1 = 2;
		}
		else {
			$m1 = 3;
		};

		if ($rep >= 1000){
			$m2 = 1;
		}
		else if ($rep >= 600){
			$m2 = 2;
		}
		else if ($rep >= 400){
			$m2 = 3;
		}
		else if ($rep < 400){
			$m2 = 10;
		};

		if ($data7->m3 == "11" or $data7->m3 == "12"){
			$m3 = 1;
		}
		else if ($data7->m3 == "21"){
			$m3 = 2;
		}
		else{
			$m3 = 3;
		};

		if ($aa > 10){
			$m4 = 1;
		}
		else if ($aa > 5){
			$m4 = 2;
		}
		else if ($aa > 2){
			$m4 = 3;
		}
		else if ($aa > 0){
			$m4 = 4;
		}
		else {
			$m4 = 5;
		};

		$m = ($m1 + $m2 + $m3 + $m4) / 4;

		return $m;
	}

	private function teknisScore ($data1,$data3,$yeardata)
	{
		#1
		$jr = ((int)$data3->jumlah_jamaah1 + (int)$data3->jumlah_jamaah2 + (int)$data3->jumlah_jamaah3 + (int)$data3->jumlah_jamaah4 + (int)$data3->jumlah_jamaah5 + (int)$data3->jumlah_jamaah6) / 6;
		#2
		$lok = ((int)$data3->jalan_kantor + (int)$data3->daerah_kantor + (int)$data3->posisi_kantor) / 3;
		#3
		$sdm = (int)$data3->jumlah_pegawai;
		#4
		$pgrs = false;
		if ($data3->pengurus_pegawai == "Ya"){
			$pgrs = true;
		};
		#5
		$lu = ((int)$yeardata['year'] - (int)$data1->tahun_iupu);
		#6
		$la = false;
		if ($data3->penjual_visa == "Ya"){
			$la = true;
		};
		#7
		$visa = false;
		if ($data3->landing_arrangement == "Ya"){
			$visa = true;
		};
		#8
		$iata = true;
		if (empty($data1->no_iata)){
			$iata = false;
		};

		$t1 = 1;
		$t2 = 1;
		$t3 = 1;
		$t4 = 1;
		$t5 = 1;

		if ($jr >= 100){
			$t1 = 1;
		}
		else if ($jr >= 50){
			$t1 = 2;
		}
		else if ($jr >= 30){
			$t1 = 3;
		}
		else if ($jr >= 25){
			$t1 = 4;
		}
		else {
			$t1 = 10;
		};

		if ($lok > 50){
			$t2 = 1;
		}
		else if ($lok >= 45){
			$t2 = 2;
		}
		else if ($lok >= 35){
			$t2 = 3;
		}
		else if ($lok >= 25){
			$t2 = 4;
		}
		else {
			$t2 = 5;
		};

		if ($sdm > 10){
			$t3 = 1;
		}
		else if ($sdm >= 5 and $pgrs){
			$t3 = 2;
		}
		else if ($sdm >= 3 and $pgrs){
			$t3 = 3;
		}
		else if ($sdm >= 3){
			$t3 = 5;
		}
		else if ($sdm >= 0){
			$t3 = 10;
		};

		if ($lu >= 10){
			$t4 = 1;
		}
		else if ($lu >= 5){
			$t4 = 2;
		}
		else if ($lu >= 3){
			$t4 = 3;
		}
		else if ($lu >= 1){
			$t4 = 4;
		}
		else {
			$t4 = 10;
		};

		if ($visa == "Ya" and $iata = "Ya" or $la = "Ya"){
			$t5 = 1;
		}
		else if ($iata = "Ya"){
			$t5 = 2;
		}
		else {
			$t5 = 3;
		};

		$t = ($t1 + $t2 + $t3 + $t4 + $t5) / 5;

		return $t;
	}

	private function pemasaranScore ($data3,$data5)
	{
		#1
		$jj = ((int)$data3->keberangkatan_umroh1 + (int)$data3->keberangkatan_haji1 + (int)$data3->keberangkatan_umroh2 + (int)$data3->keberangkatan_haji2) / 2;
		#2
		$pkt = (int)$data5->harga_jual_paket;
		#3
		$ka = false;
		if ($data3->lokasi_cabang == "dlk"){
			$ka = true;
		};
		#4
		$web = false;
		if (strpos($data3->media_pemasaran, 'Web Online') !== false){
			$web = true;
		};

		$p1 = 1;
		$p2 = 1;
		$p3 = 1;

		if ($jj > 1000){
			$p1 = 1;
		}
		else if ($jj >= 500){
			$p1 = 2;
		}
		else if ($jj >= 360){
			$p1 = 3;
		}
		else if ($jj >= 180){
			$p1 = 4;
		}
		else {
			$p1 = 5;
		};

		if ($pkt > 2000){
			$p2 = 1;
		}
		else if ($pkt >= 1500){
			$p2 = 2;
		}
		else {
			$p2 = 3;
		};

		if ($ka and $web){
			$p3 = 1;
		}
		else if ($ka or $web){
			$p3 = 2;
		}
		else {
			$p3 = 3;
		};

		$p = ($p1 + $p2 + $p3) / 3;

		return $p;
	}

	private function keuanganScore($data4,$data7)
	{
		#1
		$lk = $data4->jenis_laporan;
		#2
		$oa = $data4->opini_auditor;

		$k1 = 1;
		$k2 = 1;
		$k3 = 1;

		if ($lk == "Audit"){
			$k1 = 1;
		}
		else if ($lk == "Inhouse"){
			$k1 = 2;
		}
		else {
			$k1 = 3;
		};

		if ($oa == "wtp"){
			$k2 = 1;
		}
		else if ($oa == "wtpp" or "wdp"){
			$k2 = 2;
		}
		else {
			$k2 = 3;
		};

		if ($data7->k3 == "11"){
			$k3 = 1;
		}
		else if ($data7->k3 == "21" or $data7->k3 == "22"){
			$k3 = 2;
		}
		else {
			$k3 = 3;
		};

		$k = ($k1 + $k2 + $k3) / 3;

		return $k;
	}

	private function agunanScore ($data4,$data6,$data7)
	{
		#1
		$bank = explode(',', $data4->bank_giro);
		$bt1 = 100;
		for($i=0;$i<count($bank);$i++){
			$bt2 = (int)preg_replace( '/[^0-9]/', '', $bank[$i]);
			if($bt1>$bt2){
				$bt1 = $bt2;
			};
		};
		#3
		$pg = $data6->garansi_personal;
		#4
		$cg = $data6->garansi_corporate;
		#5
		$ng = $data6->lebih_jaminan;

		$a1 = 1;
		$a2 = 1;
		$a3 = 1;

		if ($bank <= 30){
			$a1 = 1;
		}
		else if ($bank <= 90){
			$al = 2;
		}
		else if ($bank <= 99){
			$al = 3;
		};

		if ($data7->a2 == "11"){
			$a2 = 1;
		}
		else if ($data7->a2 == "21" or $data7->a2 == "22"){
			$a2 = 2;
		}
		else {
			$a2 = 3;
		};

		if (($pg == "Ya" or $cg == "Ya") and $ng == "Ya"){
			$a3 = 1;
		}
		else if (($pg == "Ya" or $cg == "Ya") or $ng == "Ya"){
			$a3 = 2;
		}
		else {
			$a3 = 3;
		};

		$a = ($a1 + $a2 + $a3) / 3;

		return $a;
	}

	private function fasilitasScore ($data5)
	{
		#1
		$durasi = (int)$data5->jangka_waktu;
		#2
		$pendanaan = (int)$data5->fasilitas_pendanaan;

		$f1 = 1;
		$f2 = 1;

		if ($durasi >= 90){
			$f1 = 3;
		}
		else if ($durasi >= 30){
			$f1 = 2;
		}
		else {
			$f1 = 1;
		};

		if ($pendanaan >= 500000000){
			$f2 = 3;
		}
		else if ($pendanaan >= 100000000){
			$f2 = 2;
		}
		else {
			$f2 = 1;
		};

		$f = ($f1 + $f2) / 2;

		return $f;
	}
}
