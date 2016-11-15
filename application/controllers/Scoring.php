<?php
require_once(APPPATH.'third_party/ChromePhp.php');
defined('BASEPATH') OR exit('No direct script access allowed');

class Scoring extends CI_Controller {

	public function index()
	{
		$data['title'] = "Maslahat";

		$this->load->view('template/header', $data);
		$this->load->view('borrower/scoring', $data);
		$this->load->view('template/footer');
	}

	public function calculate()
	{
		$data['title'] = "Result";

		$temp = array(
			'y1' => $this->input->post('y1'),
			'y2' => $this->input->post('y2'),
			'y3' => $this->input->post('y3'),
			'm1' => $this->input->post('m1'),
			'm2' => $this->input->post('m2'),
			'm3' => $this->input->post('m3'),
			'm4' => $this->input->post('m4'),
			't1' => $this->input->post('t1'),
			't2' => $this->input->post('t2'),
			't3' => $this->input->post('t3'),
			't4' => $this->input->post('t4'),
			't5' => $this->input->post('t5'),
			'p1' => $this->input->post('p1'),
			'p2' => $this->input->post('p2'),
			'p3' => $this->input->post('p3'),
			'k1' => $this->input->post('k1'),
			'k2' => $this->input->post('k2'),
			'k3' => $this->input->post('k3'),
			'a1' => $this->input->post('a1'),
			'a2' => $this->input->post('a2'),
			'a3' => $this->input->post('a3'),
			'f1' => $this->input->post('f1'),
			'f2' => $this->input->post('f1')
		);

		/*$y = ($temp['y1'] + $temp['y2'] + $temp['y3']) / 3;
		$m = ($temp['m1'] + $temp['m2'] + $temp['m3'] + $temp['m4']) / 4;
		$t = ($temp['t1'] + $temp['t2'] + $temp['t3'] + $temp['t4'] + $temp['t5']) / 5;
		$p = ($temp['p1'] + $temp['p2'] + $temp['p3']) / 3;
		$k = ($temp['k1'] + $temp['k2'] + $temp['k3']) / 3;
		$a = ($temp['a1'] + $temp['a2'] + $temp['a3']) / 3;
		$f = ($temp['f1'] + $temp['f2']) / 2;

		$data = array(
			'y' => $y,
			'm' => $m,
			't' => $t,
			'p' => $p,
			'k' => $k,
			'a' => $a,
			'f' => $f
		);*/

		//ChromePhp::log($temp);
		//ChromePhp::log('SUM : ' . array_sum($temp));
		//ChromePhp::log('Count : ' . count($temp));
		$data['score'] = number_format(array_sum($temp)/count($temp), 2, '.','');

		//ChromePhp::log($data['score']);

		$this->load->view('template/header', $data);
		$this->load->view('borrower/result', $data);
		$this->load->view('template/footer');
		//redirect('scoring', 'location');
	}
}
