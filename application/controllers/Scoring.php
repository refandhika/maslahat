<?php
require_once(APPPATH.'third_party/ChromePhp.php');
defined('BASEPATH') OR exit('No direct script access allowed');

class Scoring extends CI_Controller {

	function __construct() {
		parent::__construct();
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
		$hdata['title'] = "Maslahat";

		$year = date("Y");
		$year1 = (string)($year - 2);
		$year2 = (string)($year - 1);

		$mdata['year1'] = $year1;
		$mdata['year2'] = $year2;

		$this->load->view('template/header_logged', $hdata);
		$this->load->view('borrower/detail_perusahaan', $mdata);
		$this->load->view('template/footer');
	}

	public function saveData()
	{
		$hdata['title'] = "Result";

		$year = date("Y");
		$year1 = (string)($year - 2);
		$year2 = (string)($year - 1);

		$tab1 = array(
			'nama-perusahaan' => $this->input->post('nama-perusahaan'),
			'badan-hukum' => $this->input->post('badan-hukum'),
			'alamat' => $this->input->post('alamat'),
			'telpon' => '(' . $this->input->post('kode-tel') . ')' . $this->input->post('nom-tel'),
			'provinsi' => $this->input->post('provinsi'),
			'kota-kab' => $this->input->post('kota-kab'),
			'kecamatan' => $this->input->post('kecamatan'),
			'kelurahan' => $this->input->post('kelurahan'),
			'kode-pos' => $this->input->post('kode-pos'),
			'pendirian-no' => $this->input->post('pendirian-no'),
			'pendirian-th' => $this->input->post('pendirian-th'),
			'pendirian-ham' => $this->input->post('pendirian-ham'),
			'pendirian-ham-th' => $this->input->post('pendirian-ham-th'),
			'pendirian-bn' => $this->input->post('pendirian-bn'),
			'pendirian-bn-th' => $this->input->post('pendirian-bn-th'),
			'terakhir-no' => $this->input->post('terakhir-no'),
			'terakhir-th' => $this->input->post('terakhir-th'),
			'terakhir-ham' => $this->input->post('terakhir-ham'),
			'terakhir-ham-th' => $this->input->post('terakhir-ham-th'),
			'terakhir-bn' => $this->input->post('terakhir-bn'),
			'terakhir-bn-th' => $this->input->post('terakhir-bn-th'),
			'no-iupu' => $this->input->post('no-iupu'),
			'no-iupu-th' => $this->input->post('no-iupu-th'),
			'no-iupu-jt' => $this->input->post('no-iupu-jt'),
			'no-iut' => $this->input->post('no-iut'),
			'no-iut-th' => $this->input->post('no-iut-th'),
			'no-iut-jt' => $this->input->post('no-iut-jt'),
			'no-iphk' => $this->input->post('no-iphk'),
			'no-iphk-th' => $this->input->post('no-iphk-th'),
			'no-iphk-jt' => $this->input->post('no-iphk-jt'),
			'no-iata' => $this->input->post('no-iata'),
			'no-iata-th' => $this->input->post('no-iata-th'),
			'no-iata-jt' => $this->input->post('no-iata-jt'),
			'no-npwp' => $this->input->post('no-npwp'),
			'asosiasi' => $this->input->post('asosiasi'),
			'aso-th' => $this->input->post('aso-th')
		);

		$pemilik = array(
			'nama-pemilik' => $this->input->post('nama-pemilik-g1'). ' ' .$this->input->post('nama-pemilik-nd').' '.$this->input->post('nama-pemilik-nt').' '.$this->input->post('nama-pemilik-nb').' '.$this->input->post('nama-pemilik-g2'),
			'ktp-pemilik' => $this->input->post('ktp-pemilik'),
			'tl-pemilik' => $this->input->post('tl-pemilik'),
			'tgl-pemilik' => $this->input->post('tgl-pemilik'),
			'alamat-pemilik' => $this->input->post('alamat-pemilik'),
			'kota-kab-pemilik' => $this->input->post('kota-kab-pemilik'),
			'prov-pemilik' => $this->input->post('prov-pemilik'),
			'jab-pemilik' => $this->input->post('jab-pemilik'),
			'kelola-pemilik' => $this->input->post('kelola-pemilik'),
			'pendidikan-pemilik' => $this->input->post('pendidikan-pemilik'),
			'jurusan-pemilik' => $this->input->post('jurusan-pemilik'),
			'sklh-pt-pemilik' => $this->input->post('sklh-pt-pemilik'),
			'pemilik-jab1' => $this->input->post('pemilik-jab1'),
			'pemilik-po1' => $this->input->post('pemilik-po1'),
			'pemilik-bid1' => $this->input->post('pemilik-bid1'),
			'pemilik-tha1' => $this->input->post('pemilik-tha1'),
			'pemilik-thb1' => $this->input->post('pemilik-thb1'),
			'pemilik-jab2' => $this->input->post('pemilik-jab2'),
			'pemilik-po2' => $this->input->post('pemilik-po2'),
			'pemilik-bid2' => $this->input->post('pemilik-bid2'),
			'pemilik-tha2' => $this->input->post('pemilik-tha2'),
			'pemilik-thb2' => $this->input->post('pemilik-thb2'),
			'pemilik-jab3' => $this->input->post('pemilik-jab3'),
			'pemilik-po3' => $this->input->post('pemilik-po3'),
			'pemilik-bid3' => $this->input->post('pemilik-bid3'),
			'pemilik-tha3' => $this->input->post('pemilik-tha3'),
			'pemilik-thb3' => $this->input->post('pemilik-thb3'),
			'pemilik-jab4' => $this->input->post('pemilik-jab4'),
			'pemilik-po4' => $this->input->post('pemilik-po4'),
			'pemilik-bid4' => $this->input->post('pemilik-bid4'),
			'pemilik-tha4' => $this->input->post('pemilik-tha4'),
			'pemilik-thb4' => $this->input->post('pemilik-thb4'),
			'pemilik-jab5' => $this->input->post('pemilik-jab5'),
			'pemilik-po5' => $this->input->post('pemilik-po5'),
			'pemilik-bid5' => $this->input->post('pemilik-bid5'),
			'pemilik-tha5' => $this->input->post('pemilik-tha5'),
			'pemilik-thb5' => $this->input->post('pemilik-thb5')
		);

		$jmlpgrs = 0;

		if(!empty($this->input->post('ktp-pengurus1'))){
			$pengurus1 = array(
				'nama-pengurus1' => $this->input->post('nama-pengurus1-g1'). ' ' .$this->input->post('nama-pengurus1-nd').' '.$this->input->post('nama-pengurus1-nt').' '.$this->input->post('nama-pengurus1-nb').' '.$this->input->post('nama-pengurus1-g2'),
				'ktp-pengurus1' => $this->input->post('ktp-pengurus1'),
				'tl-pengurus1' => $this->input->post('tl-pengurus1'),
				'tgl-pengurus1' => $this->input->post('tgl-pengurus1'),
				'alamat-pengurus1' => $this->input->post('alamat-pengurus1'),
				'kota-kab-pengurus1' => $this->input->post('kota-kab-pengurus1'),
				'prov-pengurus1' => $this->input->post('prov-pengurus1'),
				'jab-pengurus1' => $this->input->post('jab-pengurus1'),
				'kelola-pengurus1' => $this->input->post('kelola-pengurus1'),
				'pendidikan-pengurus1' => $this->input->post('pendidikan-pengurus1'),
				'jurusan-pengurus1' => $this->input->post('jurusan-pengurus1'),
				'sklh-pt-pengurus1' => $this->input->post('sklh-pt-pengurus1'),
				'pengurus1-jab1' => $this->input->post('pengurus1-jab1'),
				'pengurus1-po1' => $this->input->post('pengurus1-po1'),
				'pengurus1-bid1' => $this->input->post('pengurus1-bid1'),
				'pengurus1-tha1' => $this->input->post('pengurus1-tha1'),
				'pengurus1-thb1' => $this->input->post('pengurus1-thb1'),
				'pengurus1-jab2' => $this->input->post('pengurus1-jab2'),
				'pengurus1-po2' => $this->input->post('pengurus1-po2'),
				'pengurus1-bid2' => $this->input->post('pengurus1-bid2'),
				'pengurus1-tha2' => $this->input->post('pengurus1-tha2'),
				'pengurus1-thb2' => $this->input->post('pengurus1-thb2'),
				'pengurus1-jab3' => $this->input->post('pengurus1-jab3'),
				'pengurus1-po3' => $this->input->post('pengurus1-po3'),
				'pengurus1-bid3' => $this->input->post('pengurus1-bid3'),
				'pengurus1-tha3' => $this->input->post('pengurus1-tha3'),
				'pengurus1-thb3' => $this->input->post('pengurus1-thb3'),
				'pengurus1-jab4' => $this->input->post('pengurus1-jab4'),
				'pengurus1-po4' => $this->input->post('pengurus1-po4'),
				'pengurus1-bid4' => $this->input->post('pengurus1-bid4'),
				'pengurus1-tha4' => $this->input->post('pengurus1-tha4'),
				'pengurus1-thb4' => $this->input->post('pengurus1-thb4'),
				'pengurus1-jab5' => $this->input->post('pengurus1-jab5'),
				'pengurus1-po5' => $this->input->post('pengurus1-po5'),
				'pengurus1-bid5' => $this->input->post('pengurus1-bid5'),
				'pengurus1-tha5' => $this->input->post('pengurus1-tha5'),
				'pengurus1-thb5' => $this->input->post('pengurus1-thb5')
			);
			$jmlpgrs = 1;
		};

		if(!empty($this->input->post('ktp-pengurus2'))){
			$pengurus2 = array(
				'nama-pengurus2' => $this->input->post('nama-pengurus2-g1'). ' ' .$this->input->post('nama-pengurus2-nd').' '.$this->input->post('nama-pengurus2-nt').' '.$this->input->post('nama-pengurus2-nb').' '.$this->input->post('nama-pengurus2-g2'),
				'ktp-pengurus2' => $this->input->post('ktp-pengurus2'),
				'tl-pengurus2' => $this->input->post('tl-pengurus2'),
				'tgl-pengurus2' => $this->input->post('tgl-pengurus2'),
				'alamat-pengurus2' => $this->input->post('alamat-pengurus2'),
				'kota-kab-pengurus2' => $this->input->post('kota-kab-pengurus2'),
				'prov-pengurus2' => $this->input->post('prov-pengurus2'),
				'jab-pengurus2' => $this->input->post('jab-pengurus2'),
				'kelola-pengurus2' => $this->input->post('kelola-pengurus2'),
				'pendidikan-pengurus2' => $this->input->post('pendidikan-pengurus2'),
				'jurusan-pengurus2' => $this->input->post('jurusan-pengurus2'),
				'sklh-pt-pengurus2' => $this->input->post('sklh-pt-pengurus2'),
				'pengurus2-jab1' => $this->input->post('pengurus2-jab1'),
				'pengurus2-po1' => $this->input->post('pengurus2-po1'),
				'pengurus2-bid1' => $this->input->post('pengurus2-bid1'),
				'pengurus2-tha1' => $this->input->post('pengurus2-tha1'),
				'pengurus2-thb1' => $this->input->post('pengurus2-thb1'),
				'pengurus2-jab2' => $this->input->post('pengurus2-jab2'),
				'pengurus2-po2' => $this->input->post('pengurus2-po2'),
				'pengurus2-bid2' => $this->input->post('pengurus2-bid2'),
				'pengurus2-tha2' => $this->input->post('pengurus2-tha2'),
				'pengurus2-thb2' => $this->input->post('pengurus2-thb2'),
				'pengurus2-jab3' => $this->input->post('pengurus2-jab3'),
				'pengurus2-po3' => $this->input->post('pengurus2-po3'),
				'pengurus2-bid3' => $this->input->post('pengurus2-bid3'),
				'pengurus2-tha3' => $this->input->post('pengurus2-tha3'),
				'pengurus2-thb3' => $this->input->post('pengurus2-thb3'),
				'pengurus2-jab4' => $this->input->post('pengurus2-jab4'),
				'pengurus2-po4' => $this->input->post('pengurus2-po4'),
				'pengurus2-bid4' => $this->input->post('pengurus2-bid4'),
				'pengurus2-tha4' => $this->input->post('pengurus2-tha4'),
				'pengurus2-thb4' => $this->input->post('pengurus2-thb4'),
				'pengurus2-jab5' => $this->input->post('pengurus2-jab5'),
				'pengurus2-po5' => $this->input->post('pengurus2-po5'),
				'pengurus2-bid5' => $this->input->post('pengurus2-bid5'),
				'pengurus2-tha5' => $this->input->post('pengurus2-tha5'),
				'pengurus2-thb5' => $this->input->post('pengurus2-thb5')
			);
			$jmlpgrs = 2;
		};

		if(!empty($this->input->post('ktp-pengurus3'))){
			$pengurus3 = array(
				'nama-pengurus3' => $this->input->post('nama-pengurus3-g1'). ' ' .$this->input->post('nama-pengurus3-nd').' '.$this->input->post('nama-pengurus3-nt').' '.$this->input->post('nama-pengurus3-nb').' '.$this->input->post('nama-pengurus3-g2'),
				'ktp-pengurus3' => $this->input->post('ktp-pengurus3'),
				'tl-pengurus3' => $this->input->post('tl-pengurus3'),
				'tgl-pengurus3' => $this->input->post('tgl-pengurus3'),
				'alamat-pengurus3' => $this->input->post('alamat-pengurus3'),
				'kota-kab-pengurus3' => $this->input->post('kota-kab-pengurus3'),
				'prov-pengurus3' => $this->input->post('prov-pengurus3'),
				'jab-pengurus3' => $this->input->post('jab-pengurus3'),
				'kelola-pengurus3' => $this->input->post('kelola-pengurus3'),
				'pendidikan-pengurus3' => $this->input->post('pendidikan-pengurus3'),
				'jurusan-pengurus3' => $this->input->post('jurusan-pengurus3'),
				'sklh-pt-pengurus3' => $this->input->post('sklh-pt-pengurus3'),
				'pengurus3-jab1' => $this->input->post('pengurus3-jab1'),
				'pengurus3-po1' => $this->input->post('pengurus3-po1'),
				'pengurus3-bid1' => $this->input->post('pengurus3-bid1'),
				'pengurus3-tha1' => $this->input->post('pengurus3-tha1'),
				'pengurus3-thb1' => $this->input->post('pengurus3-thb1'),
				'pengurus3-jab2' => $this->input->post('pengurus3-jab2'),
				'pengurus3-po2' => $this->input->post('pengurus3-po2'),
				'pengurus3-bid2' => $this->input->post('pengurus3-bid2'),
				'pengurus3-tha2' => $this->input->post('pengurus3-tha2'),
				'pengurus3-thb2' => $this->input->post('pengurus3-thb2'),
				'pengurus3-jab3' => $this->input->post('pengurus3-jab3'),
				'pengurus3-po3' => $this->input->post('pengurus3-po3'),
				'pengurus3-bid3' => $this->input->post('pengurus3-bid3'),
				'pengurus3-tha3' => $this->input->post('pengurus3-tha3'),
				'pengurus3-thb3' => $this->input->post('pengurus3-thb3'),
				'pengurus3-jab4' => $this->input->post('pengurus3-jab4'),
				'pengurus3-po4' => $this->input->post('pengurus3-po4'),
				'pengurus3-bid4' => $this->input->post('pengurus3-bid4'),
				'pengurus3-tha4' => $this->input->post('pengurus3-tha4'),
				'pengurus3-thb4' => $this->input->post('pengurus3-thb4'),
				'pengurus3-jab5' => $this->input->post('pengurus3-jab5'),
				'pengurus3-po5' => $this->input->post('pengurus3-po5'),
				'pengurus3-bid5' => $this->input->post('pengurus3-bid5'),
				'pengurus3-tha5' => $this->input->post('pengurus3-tha5'),
				'pengurus3-thb5' => $this->input->post('pengurus3-thb5')
			);
			$jmlpgrs = 3;
		};

		if(!empty($this->input->post('ktp-pengurus4'))){
			$pengurus4 = array(
				'nama-pengurus4' => $this->input->post('nama-pengurus4-g1'). ' ' .$this->input->post('nama-pengurus4-nd').' '.$this->input->post('nama-pengurus4-nt').' '.$this->input->post('nama-pengurus4-nb').' '.$this->input->post('nama-pengurus4-g2'),
				'ktp-pengurus4' => $this->input->post('ktp-pengurus4'),
				'tl-pengurus4' => $this->input->post('tl-pengurus4'),
				'tgl-pengurus4' => $this->input->post('tgl-pengurus4'),
				'alamat-pengurus4' => $this->input->post('alamat-pengurus4'),
				'kota-kab-pengurus4' => $this->input->post('kota-kab-pengurus4'),
				'prov-pengurus4' => $this->input->post('prov-pengurus4'),
				'jab-pengurus4' => $this->input->post('jab-pengurus4'),
				'kelola-pengurus4' => $this->input->post('kelola-pengurus4'),
				'pendidikan-pengurus4' => $this->input->post('pendidikan-pengurus4'),
				'jurusan-pengurus4' => $this->input->post('jurusan-pengurus4'),
				'sklh-pt-pengurus4' => $this->input->post('sklh-pt-pengurus4'),
				'pengurus4-jab1' => $this->input->post('pengurus4-jab1'),
				'pengurus4-po1' => $this->input->post('pengurus4-po1'),
				'pengurus4-bid1' => $this->input->post('pengurus4-bid1'),
				'pengurus4-tha1' => $this->input->post('pengurus4-tha1'),
				'pengurus4-thb1' => $this->input->post('pengurus4-thb1'),
				'pengurus4-jab2' => $this->input->post('pengurus4-jab2'),
				'pengurus4-po2' => $this->input->post('pengurus4-po2'),
				'pengurus4-bid2' => $this->input->post('pengurus4-bid2'),
				'pengurus4-tha2' => $this->input->post('pengurus4-tha2'),
				'pengurus4-thb2' => $this->input->post('pengurus4-thb2'),
				'pengurus4-jab3' => $this->input->post('pengurus4-jab3'),
				'pengurus4-po3' => $this->input->post('pengurus4-po3'),
				'pengurus4-bid3' => $this->input->post('pengurus4-bid3'),
				'pengurus4-tha3' => $this->input->post('pengurus4-tha3'),
				'pengurus4-thb3' => $this->input->post('pengurus4-thb3'),
				'pengurus4-jab4' => $this->input->post('pengurus4-jab4'),
				'pengurus4-po4' => $this->input->post('pengurus4-po4'),
				'pengurus4-bid4' => $this->input->post('pengurus4-bid4'),
				'pengurus4-tha4' => $this->input->post('pengurus4-tha4'),
				'pengurus4-thb4' => $this->input->post('pengurus4-thb4'),
				'pengurus4-jab5' => $this->input->post('pengurus4-jab5'),
				'pengurus4-po5' => $this->input->post('pengurus4-po5'),
				'pengurus4-bid5' => $this->input->post('pengurus4-bid5'),
				'pengurus4-tha5' => $this->input->post('pengurus4-tha5'),
				'pengurus4-thb5' => $this->input->post('pengurus4-thb5')
			);
			$jmlpgrs = 4;
		};

		$tab2 = array(
			'pemilik' => $pemilik
		);

		for($i=1;$i<=$jmlpgrs;$i++){
			$tab2['pengurus'.$i] = ${'pengurus'.$i};
		}

		$tab3 = array(
			'bln-brgkt1' => $this->input->post('bln-brgkt1'),
			'thn-brgkt1' => $this->input->post('thn-brgkt1'),
			'jmh-brgkt1' => $this->input->post('jmh-brgkt1'),
			'jml-brgkt1' => $this->input->post('jml-brgkt1'),
			'bln-brgkt2' => $this->input->post('bln-brgkt2'),
			'thn-brgkt2' => $this->input->post('thn-brgkt2'),
			'jmh-brgkt2' => $this->input->post('jmh-brgkt2'),
			'jml-brgkt2' => $this->input->post('jml-brgkt2'),
			'bln-brgkt3' => $this->input->post('bln-brgkt3'),
			'thn-brgkt3' => $this->input->post('thn-brgkt3'),
			'jmh-brgkt3' => $this->input->post('jmh-brgkt3'),
			'jml-brgkt3' => $this->input->post('jml-brgkt3'),
			'bln-brgkt4' => $this->input->post('bln-brgkt4'),
			'thn-brgkt4' => $this->input->post('thn-brgkt4'),
			'jmh-brgkt4' => $this->input->post('jmh-brgkt4'),
			'jml-brgkt4' => $this->input->post('jml-brgkt4'),
			'bln-brgkt5' => $this->input->post('bln-brgkt5'),
			'thn-brgkt5' => $this->input->post('thn-brgkt5'),
			'jmh-brgkt5' => $this->input->post('jmh-brgkt5'),
			'jml-brgkt5' => $this->input->post('jml-brgkt5'),
			'bln-brgkt6' => $this->input->post('bln-brgkt6'),
			'thn-brgkt6' => $this->input->post('thn-brgkt6'),
			'jmh-brgkt6' => $this->input->post('jmh-brgkt6'),
			'jml-brgkt6' => $this->input->post('jml-brgkt6'),
			'lok-jln' => $this->input->post('lok-jln'),
			'lok-drh' => $this->input->post('lok-drh'),
			'jml-cbg' => $this->input->post('jml-cbg'),
			'lok-stg' => $this->input->post('lok-stg'),
			'lok-cbg' => $this->input->post('lok-cbg'),
			'mp' => $this->input->post('mp1').','.$this->input->post('mp2').','.$this->input->post('mp3').','.$this->input->post('mp4').','.$this->input->post('mp5').','.$this->input->post('mp6').','.$this->input->post('mp7').','.$this->input->post('mp8').','.$this->input->post('mp9'),
			'chk-sanksi' => $this->input->post('chk-sanksi'),
			'jns-sanksi' => $this->input->post('jns-sanksi'),
			'thn-sanksi' => $this->input->post('thn-sanksi'),
			'umr-'.$year1 => $this->input->post('umr-'.$year1),
			'hj-'.$year1 => $this->input->post('hj-'.$year1),
			'umr-'.$year2 => $this->input->post('umr-'.$year2),
			'hj-'.$year2 => $this->input->post('hj-'.$year2),
			'jml-sdm' => $this->input->post('jml-sdm'),
			'sdm-qs1' => $this->input->post('sdm-qs1'),
			'sdm-qs2' => $this->input->post('sdm-qs2'),
			'sdm-qs3' => $this->input->post('sdm-qs3')
		);

		$tab4 = array(
			'lap-keu' => $this->input->post('lap-keu'),
			'jns-keu' => $this->input->post('jns-keu'),
			'opn-keu' => $this->input->post('opn-keu'),
			'giro-bank' => $this->input->post('giro-bank1').','.$this->input->post('giro-bank2').','.$this->input->post('giro-bank3').','.$this->input->post('giro-bank4').','.$this->input->post('giro-bank5')
		);

		$tab5 = array(
			'tgl-pp-a' => $this->input->post('tgl-pp-a'),
			'wkt-pp' => $this->input->post('wkt-pp'),
			'jml-pp' => $this->input->post('jml-pp'),
			'dp-pp' => $this->input->post('dp-pp'),
			'pkt-pp' => $this->input->post('pkt-pp'),
			'dpj-pp' => $this->input->post('dpj-pp'),
			'ln-pp' => $this->input->post('ln-pp'),
			'tkt-pp' => $this->input->post('tkt-pp'),
			'la-pp' => $this->input->post('la-pp'),
			'tgl-pp-b' => $this->input->post('tgl-pp-b'),
			'ned-pp' => $this->input->post('ned-pp'),
			'sum-pp' => $this->input->post('sum-pp')
		);

		$tab6 = array(
			'p-gua' => $this->input->post('p-gua'),
			'c-gua' => $this->input->post('c-gua'),
			's-gua' => $this->input->post('s-gua'),
			'n-gua' => $this->input->post('n-gua')
		);

		$mdata = array(
			'tab1' => $tab1,
			'tab2' => $tab2,
			'tab3' => $tab3,
			'tab4' => $tab4,
			'tab5' => $tab5,
			'tab6' => $tab6,
			'year' => $year,
			'year1' => $year1,
			'year2' => $year2,
			'jmlpgrs' => $jmlpgrs
		);

		//$data['score'] = number_format(array_sum($temp)/count($temp), 2, '.','');

		$mdata['score'] = $this->calculateScore($mdata);

		$this->model_scoring->insertDataScoring($mdata);

		if ( ! $sc = $this->cache->get('sc'))
		{
		    //echo 'Saving to the cache!<br />';
		    $sc = $mdata;

		    // Save into the cache for 5 minutes
		    $this->cache->save('sc', $sc, 36000);
		}

		$this->load->view('template/header', $hdata);
		$this->load->view('borrower/result', $mdata);
		$this->load->view('template/footer');
		//redirect('scoring', 'location');
	}

	private function calculateScore($data){

		#1
		$ju = $data['tab1']['badan-hukum'];
		#2
		$sah1 = true;
		if(empty($data['tab1']['pendirian-ham'])){
			$sah1 = false;
		};
		#3
		$sah2 = true;
		if(empty($data['tab1']['pendirian-bn'])){
			$sah2 = false;
		};
		#4
		$sah3 = true;
		#5
		$sah4 = true;
		#6
		$temp = explode('/', $data['tab5']['tgl-pp-b']);
		$string = $temp[1] . '/' . $temp[0] . '/' . $temp[2];
		$tb = date('d/m/Y', strtotime($string));
		#7
		$temp = explode('/', $data['tab1']['no-iupu-jt']);
		$string = $temp[1] . '/' . $temp[0] . '/' . $temp[2];
		$iu1 = date('d/m/Y', strtotime($string));
		#8
		$temp = explode('/', $data['tab1']['no-iut-jt']);
		$string = $temp[1] . '/' . $temp[0] . '/' . $temp[2];
		$iu2 = date('d/m/Y', strtotime($string));
		#9
		$temp = explode('/', $data['tab1']['no-iphk-jt']);
		$string = $temp[1] . '/' . $temp[0] . '/' . $temp[2];
		$iu3 = date('d/m/Y', strtotime($string));
		#10
		$alk = true;
		#11
		$al1 = true;
		#12
		$al2 = true;
		#13
		$al3 = true;
		#14
		$al4 = true;
		#15
		$al5 = true;
		#16
		$al6 = true;
		#Score
		$y = $this->yuridisScore($ju,$sah1,$sah2,$sah3,$sah4,$tb,$iu1,$iu2,$iu3,$alk,$al1,$al2,$al3,$al4,$al5,$al6);

		#1
		$pglmn = (int)$data['year'] - (int)$data['tab2']['pemilik']['kelola-pemilik'];
		#2
		$rep = ((int)$data['tab3']['umr-'.$data['year1']] + (int)$data['tab3']['umr-'.$data['year2']]) / 2;
		#3
		$iu = true;
		if(empty($data['tab1']['no-iupu'])){
			$iu = false;
		};
		#4
		$ik = true;
		if(empty($data['tab1']['no-iphk'])){
			$ik = false;
		};
		#5
		if(((int)$data['year'] - (int)$data['tab1']['no-iupu-th'])>=0){
			$bu = true;
		}
		else{
			$bu = false;
		};
		#6
		if(((int)$data['year'] - (int)$data['tab1']['no-iphk-th'])>=0){
			$bk = true;
		}
		else{
			$bk = false;
		};
		#7
		$aa = 0;
		if ($data['tab1']['asosiasi'] == "Himpuh"){
			$aa = (int)$data['year'] - (int)$data['tab1']['aso-th'];
		};
		#Score
		$m = $this->manajemenScore($pglmn,$rep,$iu,$ik,$bu,$bk,$aa);

		#1
		$jr = ((int)$data['tab3']['jmh-brgkt1'] + (int)$data['tab3']['jmh-brgkt2'] + (int)$data['tab3']['jmh-brgkt3'] + (int)$data['tab3']['jmh-brgkt4'] + (int)$data['tab3']['jmh-brgkt5'] + (int)$data['tab3']['jmh-brgkt6']) / 6;
		#2
		$lok = ((int)$data['tab3']['lok-jln'] + (int)$data['tab3']['lok-drh'] + (int)$data['tab3']['lok-stg']) / 3;
		#3
		$sdm = (int)$data['tab3']['jml-sdm'];
		#4
		$pgrs = false;
		if ($data['tab3']['sdm-qs1'] == "Ya"){
			$pgrs = true;
		};
		#5
		$lu = ((int)$data['year'] - (int)$data['tab1']['no-iupu-th']);
		#6
		$la = false;
		if ($data['tab3']['sdm-qs2'] == "Ya"){
			$la = true;
		};
		#7
		$visa = false;
		if ($data['tab3']['sdm-qs3'] == "Ya"){
			$visa = true;
		};
		#8
		$iata = true;
		if (empty($data['tab1']['no-iata'])){
			$iata = false;
		};
		#Score
		$t = $this->teknisScore($jr,$lok,$sdm,$pgrs,$lu,$la,$visa,$iata);

		#1
		$jj = ((int)$data['tab3']['umr-'.$data['year1']] + (int)$data['tab3']['hj-'.$data['year1']] + (int)$data['tab3']['umr-'.$data['year2']] + (int)$data['tab3']['hj-'.$data['year2']]) / 2;
		#2
		$pkt = (int)$data['tab5']['pkt-pp'];
		#3
		$ka = false;
		if ($data['tab3']['lok-cbg'] == "dlk"){
			$ka = true;
		};
		#4
		$web = false;
		if (strpos($data['tab3']['mp'], 'Web Online') !== false){
			$web = true;
		};
		#Score
		$p = $this->pemasaranScore($jj,$pkt,$ka,$web);

		#1
		$lk = $data['tab4']['jns-keu'];
		#2
		$oa = $data['tab4']['opn-keu'];
		#4
		$ar = true;
		#Score
		$k = $this->keuanganScore($lk,$oa,$ar);

		#1
		$bank = explode(',', $data['tab4']['giro-bank']);
		$bt1 = 100;
		for($i=0;$i<count($bank);$i++){
			$bt2 = (int)preg_replace( '/[^0-9]/', '', $bank[$i]);
			if($bt1>$bt2){
				$bt1 = $bt2;
			};
		};
		#2
		$mr = true;
		#3
		$pg = $data['tab6']['p-gua'];
		#4
		$cg = $data['tab6']['c-gua'];
		#5
		$ng = $data['tab6']['n-gua'];
		#Score
		$a = $this->agunanScore($bt1,$mr,$pg,$cg,$ng);

		#1
		$durasi = (int)$data['tab5']['wkt-pp'];
		#2
		$pendanaan = (int)preg_replace('/[^0-9]/', '', $data['tab5']['sum-pp']);
		#Score
		$f = $this->fasilitasScore($durasi,$pendanaan);

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

		return $score;
	}

	private function yuridisScore($ju,$sah1,$sah2,$sah3,$sah4,$tb,$iu1,$iu2,$iu3,$alk,$al1,$al2,$al3,$al4,$al5,$al6)
	{
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

		if ($alk == $al2 and $alk == $al4 and $alk == $al5 and $alk == $al6 or $alk == $al1 or $alk == $al3){
			$y3 = 1;
		}
		else if ($alk == $al2 and $alk == $al6 or $alk == $al5 or $alk == $al4 or $alk == $al1 or $alk == $al3){
			$y3 = 2;
		}
		else {
			$y3 = 3;
		};

		$y = ($y1 + $y2 + $y3) / 3;

		return $y;
	}

	private function manajemenScore($pglmn,$rep,$iu,$ik,$bu,$bk,$aa)
	{
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

		if ($iu and $ik and $bu and $bk){
			$m3 = 1;
		}
		else if ($iu and $ik and $bu){
			$m3 = 2;
		}
		else if ($iu){
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

	private function teknisScore ($jr,$lok,$sdm,$pgrs,$lu,$la,$visa,$iata)
	{
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

	private function pemasaranScore ($jj,$pkt,$ka,$web)
	{
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

	private function keuanganScore($lk, $oa, $ar)
	{
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

		if ($ar > 90){
			$k3 = 1;
		}
		else if ($ar >= 50){
			$k3 = 2;
		}
		else {
			$k3 = 3;
		};

		$k = ($k1 + $k2 + $k3) / 3;

		return $k;
	}

	private function agunanScore ($bank, $mr, $pg, $cg, $ng)
	{
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

		if ($mr > 1000){
			$a2 = 1;
		}
		else if ($mr >= 250){
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

	private function fasilitasScore ($durasi, $pendanaan)
	{
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
