<?php
require_once(APPPATH.'third_party/ChromePhp.php');
class Model_scoring extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	public function insertDataScoring($data)
	{
		$this->insertIDPerusahaan($data['tab1']);
		$this->insertIDPengurus($data['tab2']['pemilik'],'pemilik');
		$this->insertIDPengurus($data['tab2']['pengurus1'],'pengurus1');
		$this->insertIDPengurus($data['tab2']['pengurus2'],'pengurus2');
		$this->insertIDPengurus($data['tab2']['pengurus3'],'pengurus3');
		$this->insertInfoUsaha($data['tab3'],$data['year1'],$data['year2']);
		$this->insertInfoKeuangan($data['tab4']);
		$this->insertPermohonanPendanaan($data['tab5']);
		$this->insertAgunan($data['tab6']);
		$this->insertFormPermohonan($data['score']);
	}

	private function insertIDPerusahaan($array)
	{
		$insertdata = array(
			'nama_perusahaan' => $array['nama-perusahaan'],
			'badan_hukum' => $array['badan-hukum'],
			'alamat' => $array['alamat'],
			'telpon' => $array['telpon'],
			'provinsi' => $array['provinsi'],
			'kota_kab' => $array['kota-kab'],
			'kecamatan' => $array['kecamatan'],
			'kelurahan' => $array['kelurahan'],
			'kode_pos' => $array['kode-pos'],
			'no_pendirian' => $array['pendirian-no'],
			'tahun_pendirian' => $array['pendirian-th'],
			'no_pengesahan' => $array['pendirian-ham'],
			'tahun_pengesahan' => $array['pendirian-ham-th'],
			'no_berita' => $array['pendirian-bn'],
			'tahun_berita' => $array['pendirian-bn-th'],
			'no_akta_terakhir' => $array['terakhir-no'],
			'tahun_akta_terakhir' => $array['terakhir-th'],
			'no_pengesahan_terakhir' => $array['terakhir-ham'],
			'tahun_pengesahan_terakhir' => $array['terakhir-ham-th'],
			'no_berita_terakhir' => $array['terakhir-bn'],
			'tahun_berita_terakhir' => $array['terakhir-bn-th'],
			'no_iupu' => $array['no-iupu'],
			'tahun_iupu' => $array['no-iupu-th'],
			'exp_iupu' => $array['no-iupu-jt'],
			'no_iut' => $array['no-iut'],
			'tahun_iut' => $array['no-iut-th'],
			'exp_iut' => $array['no-iut-jt'],
			'no_iphk' => $array['no-iphk'],
			'tahun_iphk' => $array['no-iphk-th'],
			'exp_iphk' => $array['no-iphk-jt'],
			'no_iata' => $array['no-iata'],
			'tahun_iata' => $array['no-iata-th'],
			'exp_iata' => $array['no-iata-jt'],
			'no_npwp' => $array['no-npwp'],
			'asosiasi' => $array['asosiasi'],
			'tahun_asosiasi' => $array['aso-th']
		);

		$this->db->insert('id_perusahaan', $insertdata);
	}

	private function insertIDPengurus($array,$jabatan)
	{
		$insertdata = array(
			'tingkat_pengurus' => $jabatan,
			'nama_pengurus' => $array['nama-' . $jabatan],
			'no_ktp' => $array['ktp-' . $jabatan],
			'tempat_lahir' => $array['tl-' . $jabatan],
			'tanggal_lahir' => $array['tgl-' . $jabatan],
			'alamat' => $array['alamat-' . $jabatan],
			'kota_kab' => $array['kota-kab-' . $jabatan],
			'provinsi' => $array['prov-' . $jabatan],
			'jabatan' => $array['jab-' . $jabatan],
			'awal_kelola_haji' => $array['kelola-' . $jabatan],
			'pendidikan' => $array['pendidikan-' . $jabatan],
			'jurusan' => $array['jurusan-' . $jabatan],
			'sekolah' => $array['sklh-pt-' . $jabatan],
			'jabatan_exp1' => $array[$jabatan . '-jab1'],
			'organisasi_exp1' => $array[$jabatan . '-po1'],
			'bidang_exp1' => $array[$jabatan . '-bid1'],
			'tahun_exp1' => $array[$jabatan . '-tha1'] . '-' . $array[$jabatan . '-thb1'],
			'jabatan_exp2' => $array[$jabatan . '-jab2'],
			'organisasi_exp2' => $array[$jabatan . '-po2'],
			'bidang_exp2' => $array[$jabatan . '-bid2'],
			'tahun_exp2' => $array[$jabatan . '-tha2'] . '-' . $array[$jabatan . '-thb2'],
			'jabatan_exp3' => $array[$jabatan . '-jab3'],
			'organisasi_exp3' => $array[$jabatan . '-po3'],
			'bidang_exp3' => $array[$jabatan . '-bid3'],
			'tahun_exp3' => $array[$jabatan . '-tha3'] . '-' . $array[$jabatan . '-thb3'],
			'jabatan_exp4' => $array[$jabatan . '-jab4'],
			'organisasi_exp4' => $array[$jabatan . '-po4'],
			'bidang_exp4' => $array[$jabatan . '-bid4'],
			'tahun_exp4' => $array[$jabatan . '-tha4'] . '-' . $array[$jabatan . '-thb4'],
			'jabatan_exp5' => $array[$jabatan . '-jab5'],
			'organisasi_exp5' => $array[$jabatan . '-po5'],
			'bidang_exp5' => $array[$jabatan . '-bid5'],
			'tahun_exp5' => $array[$jabatan . '-tha5'] . '-' . $array[$jabatan . '-thb5'],
		);

		$this->db->insert('id_pengurus', $insertdata);
	}

	private function insertInfoUsaha($array,$year1,$year2)
	{
		$insertdata = array(
			'bulan_keberangkatan1' => $array['bln-brgkt1'] . '-' . $array['thn-brgkt1'],
			'jumlah_jamaah1' => $array['jmh-brgkt1'],
			'jumlah_keberangkatan1' => $array['jml-brgkt1'],
			'bulan_keberangkatan2' => $array['bln-brgkt2'] . '-' . $array['thn-brgkt2'],
			'jumlah_jamaah2' => $array['jmh-brgkt2'],
			'jumlah_keberangkatan2' => $array['jml-brgkt2'],
			'bulan_keberangkatan3' => $array['bln-brgkt3'] . '-' . $array['thn-brgkt3'],
			'jumlah_jamaah3' => $array['jmh-brgkt3'],
			'jumlah_keberangkatan3' => $array['jml-brgkt3'],
			'bulan_keberangkatan4' => $array['bln-brgkt4'] . '-' . $array['thn-brgkt4'],
			'jumlah_jamaah4' => $array['jmh-brgkt4'],
			'jumlah_keberangkatan4' => $array['jml-brgkt4'],
			'bulan_keberangkatan5' => $array['bln-brgkt5'] . '-' . $array['thn-brgkt5'],
			'jumlah_jamaah5' => $array['jmh-brgkt5'],
			'jumlah_keberangkatan5' => $array['jml-brgkt5'],
			'bulan_keberangkatan6' => $array['bln-brgkt6'] . '-' . $array['thn-brgkt6'],
			'jumlah_jamaah6' => $array['jmh-brgkt6'],
			'jumlah_keberangkatan6' => $array['jml-brgkt6'],
			'jalan_kantor' => $array['lok-jln'],
			'daerah_kantor' => $array['lok-drh'],
			'posisi_kantor' => $array['lok-stg'],
			'lokasi_cabang' => $array['lok-cbg'],
			'jumlah_cabang' => $array['jml-cbg'],
			'media_pemasaran' => $array['mp'],
			'jenis_sanksi' => $array['jns-sanksi'],
			'tahun_sanksi' => $array['thn-sanksi'],
			'keberangkatan_umroh1' => $array['umr-'.$year1],
			'keberangkatan_haji1' => $array['hj-'.$year1],
			'keberangkatan_tahun1' => $year1,
			'keberangkatan_umroh2' => $array['umr-'.$year2],
			'keberangkatan_haji2' => $array['hj-'.$year2],
			'keberangkatan_tahun2' => $year2,
			'jumlah_pegawai' => $array['jml-sdm'],
			'pengurus_pegawai' => $array['sdm-qs1'],
			'penjual_visa' => $array['sdm-qs2'],
			'landing_arrangement' => $array['sdm-qs3']
		);

		$this->db->insert('info_usaha', $insertdata);
	}

	private function insertInfoKeuangan($array)
	{
		$insertdata = array(
			'laporan_keuangan' => $array['lap-keu'],
			'jenis_laporan' => $array['jns-keu'],
			'opini_auditor' => $array['opn-keu'],
			'bank_giro' => $array['giro-bank']
		);

		$this->db->insert('info_keuangan', $insertdata);
	}

	private function insertPermohonanPendanaan($array)
	{
		$insertdata = array(
			'rencana_keberangkatan' => $array['tgl-pp-a'],
			'jangka_waktu' => $array['wkt-pp'],
			'jumlah_jamaah' => $array['jml-pp'],
			'jumlah_jamaah_dp' => $array['dp-pp'],
			'harga_jual_paket' => $array['pkt-pp'],
			'dp_jamaah' => $array['dpj-pp'],
			'sisa_pelunasan' => $array['ln-pp'],
			'tiket_pesawat' => $array['tkt-pp'],
			'landing_arrangement' => $array['la-pp'],
			'jatuh_tempo' => $array['tgl-pp-b'],
			'kebutuhan_pendanaan' => $array['ned-pp'],
			'fasilitas_pendanaan' => $output = preg_replace( '/[^0-9]/', '', $array['sum-pp'])
		);

		$this->db->insert('permohonan_pendanaan', $insertdata);
	}

	private function insertAgunan($array)
	{
		$insertdata = array(
			'garansi_personal' => $array['p-gua'],
			'garansi_corporate' => $array['c-gua'],
			'sebutan_jaminan' => $array['s-gua'],
			'lebih_jaminan' => $array['n-gua']
		);

		$this->db->insert('agunan', $insertdata);
	}

	private function insertFormPermohonan($score)
	{
		$this->db->select('id_perusahaan');
		$this->db->from('id_perusahaan');
		$this->db->order_by('id_perusahaan', 'desc');
		$this->db->limit(1);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$result = $query->row();
			$insertdata['id_perusahaan'] = $result->id_perusahaan;
		}
		else {
			return NULL;
		};


		$this->db->select('id_pengurus');
		$this->db->from('id_pengurus');
		$this->db->where('tingkat_pengurus','pemilik');
		$this->db->order_by('id_pengurus', 'desc');
		$this->db->limit(1);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$result = $query->row();
			$insertdata['id_pemilik'] = $result->id_pengurus;
		}
		else {
			return NULL;
		};


		$this->db->select('id_info_usaha');
		$this->db->from('info_usaha');
		$this->db->order_by('id_info_usaha', 'desc');
		$this->db->limit(1);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$result = $query->row();
			$insertdata['id_info_usaha'] = $result->id_info_usaha;
		}
		else {
			return NULL;
		};


		$this->db->select('id_info_keuangan');
		$this->db->from('info_keuangan');
		$this->db->order_by('id_info_keuangan', 'desc');
		$this->db->limit(1);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$result = $query->row();
			$insertdata['id_info_keuangan'] = $result->id_info_keuangan;
		}
		else {
			return NULL;
		};


		$this->db->select('id_permohonan');
		$this->db->from('permohonan_pendanaan');
		$this->db->order_by('id_permohonan', 'desc');
		$this->db->limit(1);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$result = $query->row();
			$insertdata['id_permohonan'] = $result->id_permohonan;
		}
		else {
			return NULL;
		};


		$this->db->select('id_agunan');
		$this->db->from('agunan');
		$this->db->order_by('id_agunan', 'desc');
		$this->db->limit(1);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$result = $query->row();
			$insertdata['id_agunan'] = $result->id_agunan;
		}
		else {
			return NULL;
		};

		$insertdata['score'] = $score['final'];
		$insertdata['approved'] = 'Belum';

		$this->db->insert('form_permohonan', $insertdata);
	}
}