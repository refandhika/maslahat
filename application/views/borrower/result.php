<div id="result">
	<div class="scroll">
		<h3>Scoring</h3><br>
		Aspek Yuridis : <?php echo($score['yuridis']); ?><br>
		Aspek Manajemen : <?php echo($score['manajemen']); ?><br>
		Aspek Teknis : <?php echo($score['teknis']); ?><br>
		Aspek Pemasaran : <?php echo($score['pemasaran']); ?><br>
		Aspek Keuangan : <?php echo($score['keuangan']); ?><br>
		Aspek Agunan : <?php echo($score['agunan']); ?><br>
		Aspek Fasilitas : <?php echo($score['fasilitas']); ?><br>

		Score : <?php echo($score['final']); ?><br>
		<br>
		<br>
		Nama Perusahaan : <?php echo($tab1['nama-perusahaan']); ?><br>
		Badan Hukum : <?php echo($tab1['badan-hukum']); ?><br>
		Alamat : <?php echo($tab1['alamat']); ?><br>
		Telpon : <?php echo($tab1['nama-perusahaan']); ?><br>
		Provinsi : <?php echo($tab1['provinsi']); ?><br>
		Kota/Kabupaten : <?php echo($tab1['kota-kab']); ?><br>
		Kecamatan : <?php echo($tab1['kecamatan']); ?><br>
		Kelurahan : <?php echo($tab1['kelurahan']); ?><br>
		Kode Pos : <?php echo($tab1['kode-pos']); ?><br>
		Telpon : <?php echo($tab1['telpon']); ?><br>
		<br>
		No. Akta Pendirian : <?php echo($tab1['pendirian-no']); ?> | Tahun : <?php echo($tab1['pendirian-th']); ?><br>
		No. Pengesahan Pendirian : <?php echo($tab1['pendirian-ham']); ?> | Tahun : <?php echo($tab1['pendirian-ham-th']); ?><br>
		No. Berita Pendirian : <?php echo($tab1['pendirian-bn']); ?> | Tahun : <?php echo($tab1['pendirian-bn-th']); ?><br>
		<br>
		No. Akta Terakhir : <?php echo($tab1['terakhir-no']); ?> | Tahun : <?php echo($tab1['terakhir-th']); ?><br>
		No. Pengesahan Terakhir : <?php echo($tab1['terakhir-ham']); ?> | Tahun : <?php echo($tab1['terakhir-ham-th']); ?><br>
		No. Berita Terakhir : <?php echo($tab1['terakhir-bn']); ?> | Tahun : <?php echo($tab1['terakhir-bn-th']); ?><br>
		<br>
		No. Izin Usaha Penyelenggara Umroh : <?php echo($tab1['no-iupu']); ?> | Tahun : <?php echo($tab1['no-iupu-th']); ?> | Jatuh Tempo : <?php echo($tab1['no-iupu-jt']); ?><br>
		No. Izin Usaha Perjalanan Umum : <?php echo($tab1['no-iut']); ?> | Tahun : <?php echo($tab1['no-iut-th']); ?> | Jatuh Tempo : <?php echo($tab1['no-iut-jt']); ?><br>
		No. Izin Penyelenggara Haji Khusus : <?php echo($tab1['no-iphk']); ?> | Tahun : <?php echo($tab1['no-iphk-th']); ?> | Jatuh Tempo : <?php echo($tab1['no-iphk-jt']); ?><br>
		No. IATA : <?php echo($tab1['no-iata']); ?> Tahun : <?php echo($tab1['no-iata-th']); ?> | Jatuh Tempo : <?php echo($tab1['no-iata-jt']); ?><br>
		No. NPWP : <?php echo($tab1['no-npwp']); ?><br>
		Keanggotaan Asosiasi : <?php echo($tab1['asosiasi']); ?> | Sejak Tahun : <?php echo($tab1['aso-th']); ?><br>
		<br>
		<h3>Pemilik</h3><br>
		Nama : <?php echo($tab2['pemilik']['nama-pemilik']); ?><br>
		No. KTP : <?php echo($tab2['pemilik']['ktp-pemilik']); ?><br>
		Tempat Tanggal Lahir : <?php echo($tab2['pemilik']['tl-pemilik'].','.$tab2['pemilik']['tgl-pemilik']); ?><br>
		Alamat : <?php echo($tab2['pemilik']['alamat-pemilik']); ?><br>
		Kota/Kabupaten : <?php echo($tab2['pemilik']['kota-kab-pemilik']); ?><br>
		Provinsi : <?php echo($tab2['pemilik']['prov-pemilik']); ?><br>
		Jabatan : <?php echo($tab2['pemilik']['jab-pemilik']); ?><br>
		Mengelola Haji Sejak : <?php echo($tab2['pemilik']['kelola-pemilik']); ?><br>
		Pendidikan Terakhir : <?php echo($tab2['pemilik']['pendidikan-pemilik']); ?><br>
		Jurusan/Bidang : <?php echo($tab2['pemilik']['jurusan-pemilik']); ?><br>
		Nama Sekolah/Perguruan Tinggi : <?php echo($tab2['pemilik']['sklh-pt-pemilik']); ?><br>
		<b>Pengalaman</b><br>
		- <?php echo($tab2['pemilik']['pemilik-jab1'].'-'.$tab2['pemilik']['pemilik-po1'].'-'.$tab2['pemilik']['pemilik-tha1'].'-'.$tab2['pemilik']['pemilik-thb1']); ?><br>
		- <?php echo($tab2['pemilik']['pemilik-jab2'].'-'.$tab2['pemilik']['pemilik-po2'].'-'.$tab2['pemilik']['pemilik-tha2'].'-'.$tab2['pemilik']['pemilik-thb2']); ?><br>
		- <?php echo($tab2['pemilik']['pemilik-jab3'].'-'.$tab2['pemilik']['pemilik-po3'].'-'.$tab2['pemilik']['pemilik-tha3'].'-'.$tab2['pemilik']['pemilik-thb3']); ?><br>
		- <?php echo($tab2['pemilik']['pemilik-jab4'].'-'.$tab2['pemilik']['pemilik-po4'].'-'.$tab2['pemilik']['pemilik-tha4'].'-'.$tab2['pemilik']['pemilik-thb4']); ?><br>
		- <?php echo($tab2['pemilik']['pemilik-jab5'].'-'.$tab2['pemilik']['pemilik-po5'].'-'.$tab2['pemilik']['pemilik-tha5'].'-'.$tab2['pemilik']['pemilik-thb5']); ?><br>
		<h3>Pengurus 1</h3><br>
		Nama : <?php echo($tab2['pengurus1']['nama-pengurus1']); ?><br>
		No. KTP : <?php echo($tab2['pengurus1']['ktp-pengurus1']); ?><br>
		Tempat Tanggal Lahir : <?php echo($tab2['pengurus1']['tl-pengurus1'].','.$tab2['pengurus1']['tgl-pengurus1']); ?><br>
		Alamat : <?php echo($tab2['pengurus1']['alamat-pengurus1']); ?><br>
		Kota/Kabupaten : <?php echo($tab2['pengurus1']['kota-kab-pengurus1']); ?><br>
		Provinsi : <?php echo($tab2['pengurus1']['prov-pengurus1']); ?><br>
		Jabatan : <?php echo($tab2['pengurus1']['jab-pengurus1']); ?><br>
		Mengelola Haji Sejak : <?php echo($tab2['pengurus1']['kelola-pengurus1']); ?><br>
		Pendidikan Terakhir : <?php echo($tab2['pengurus1']['pendidikan-pengurus1']); ?><br>
		Jurusan/Bidang : <?php echo($tab2['pengurus1']['jurusan-pengurus1']); ?><br>
		Nama Sekolah/Perguruan Tinggi : <?php echo($tab2['pengurus1']['sklh-pt-pengurus1']); ?><br>
		<b>Pengalaman</b><br>
		- <?php echo($tab2['pengurus1']['pengurus1-jab1'].'-'.$tab2['pengurus1']['pengurus1-po1'].'-'.$tab2['pengurus1']['pengurus1-tha1'].'-'.$tab2['pengurus1']['pengurus1-thb1']); ?><br>
		- <?php echo($tab2['pengurus1']['pengurus1-jab2'].'-'.$tab2['pengurus1']['pengurus1-po2'].'-'.$tab2['pengurus1']['pengurus1-tha2'].'-'.$tab2['pengurus1']['pengurus1-thb2']); ?><br>
		- <?php echo($tab2['pengurus1']['pengurus1-jab3'].'-'.$tab2['pengurus1']['pengurus1-po3'].'-'.$tab2['pengurus1']['pengurus1-tha3'].'-'.$tab2['pengurus1']['pengurus1-thb3']); ?><br>
		- <?php echo($tab2['pengurus1']['pengurus1-jab4'].'-'.$tab2['pengurus1']['pengurus1-po4'].'-'.$tab2['pengurus1']['pengurus1-tha4'].'-'.$tab2['pengurus1']['pengurus1-thb4']); ?><br>
		- <?php echo($tab2['pengurus1']['pengurus1-jab5'].'-'.$tab2['pengurus1']['pengurus1-po5'].'-'.$tab2['pengurus1']['pengurus1-tha5'].'-'.$tab2['pengurus1']['pengurus1-thb5']); ?><br>
		<h3>Pengurus 2</h3><br>
		Nama : <?php echo($tab2['pengurus2']['nama-pengurus2']); ?><br>
		No. KTP : <?php echo($tab2['pengurus2']['ktp-pengurus2']); ?><br>
		Tempat Tanggal Lahir : <?php echo($tab2['pengurus2']['tl-pengurus2'].','.$tab2['pengurus2']['tgl-pengurus2']); ?><br>
		Alamat : <?php echo($tab2['pengurus2']['alamat-pengurus2']); ?><br>
		Kota/Kabupaten : <?php echo($tab2['pengurus2']['kota-kab-pengurus2']); ?><br>
		Provinsi : <?php echo($tab2['pengurus2']['prov-pengurus2']); ?><br>
		Jabatan : <?php echo($tab2['pengurus2']['jab-pengurus2']); ?><br>
		Mengelola Haji Sejak : <?php echo($tab2['pengurus2']['kelola-pengurus2']); ?><br>
		Pendidikan Terakhir : <?php echo($tab2['pengurus2']['pendidikan-pengurus2']); ?><br>
		Jurusan/Bidang : <?php echo($tab2['pengurus2']['jurusan-pengurus2']); ?><br>
		Nama Sekolah/Perguruan Tinggi : <?php echo($tab2['pengurus2']['sklh-pt-pengurus2']); ?><br>
		<b>Pengalaman</b><br>
		- <?php echo($tab2['pengurus2']['pengurus2-jab1'].'-'.$tab2['pengurus2']['pengurus2-po1'].'-'.$tab2['pengurus2']['pengurus2-tha1'].'-'.$tab2['pengurus2']['pengurus2-thb1']); ?><br>
		- <?php echo($tab2['pengurus2']['pengurus2-jab2'].'-'.$tab2['pengurus2']['pengurus2-po2'].'-'.$tab2['pengurus2']['pengurus2-tha2'].'-'.$tab2['pengurus2']['pengurus2-thb2']); ?><br>
		- <?php echo($tab2['pengurus2']['pengurus2-jab3'].'-'.$tab2['pengurus2']['pengurus2-po3'].'-'.$tab2['pengurus2']['pengurus2-tha3'].'-'.$tab2['pengurus2']['pengurus2-thb3']); ?><br>
		- <?php echo($tab2['pengurus2']['pengurus2-jab4'].'-'.$tab2['pengurus2']['pengurus2-po4'].'-'.$tab2['pengurus2']['pengurus2-tha4'].'-'.$tab2['pengurus2']['pengurus2-thb4']); ?><br>
		- <?php echo($tab2['pengurus2']['pengurus2-jab5'].'-'.$tab2['pengurus2']['pengurus2-po5'].'-'.$tab2['pengurus2']['pengurus2-tha5'].'-'.$tab2['pengurus2']['pengurus2-thb5']); ?><br>
		<h3>Pengurus 3</h3><br>
		Nama : <?php echo($tab2['pengurus3']['nama-pengurus3']); ?><br>
		No. KTP : <?php echo($tab2['pengurus3']['ktp-pengurus3']); ?><br>
		Tempat Tanggal Lahir : <?php echo($tab2['pengurus3']['tl-pengurus3'].','.$tab2['pengurus3']['tgl-pengurus3']); ?><br>
		Alamat : <?php echo($tab2['pengurus3']['alamat-pengurus3']); ?><br>
		Kota/Kabupaten : <?php echo($tab2['pengurus3']['kota-kab-pengurus3']); ?><br>
		Provinsi : <?php echo($tab2['pengurus3']['prov-pengurus3']); ?><br>
		Jabatan : <?php echo($tab2['pengurus3']['jab-pengurus3']); ?><br>
		Mengelola Haji Sejak : <?php echo($tab2['pengurus3']['kelola-pengurus3']); ?><br>
		Pendidikan Terakhir : <?php echo($tab2['pengurus3']['pendidikan-pengurus3']); ?><br>
		Jurusan/Bidang : <?php echo($tab2['pengurus3']['jurusan-pengurus3']); ?><br>
		Nama Sekolah/Perguruan Tinggi : <?php echo($tab2['pengurus3']['sklh-pt-pengurus3']); ?><br>
		<b>Pengalaman</b><br>
		- <?php echo($tab2['pengurus3']['pengurus3-jab1'].'-'.$tab2['pengurus3']['pengurus3-po1'].'-'.$tab2['pengurus3']['pengurus3-tha1'].'-'.$tab2['pengurus3']['pengurus3-thb1']); ?><br>
		- <?php echo($tab2['pengurus3']['pengurus3-jab2'].'-'.$tab2['pengurus3']['pengurus3-po2'].'-'.$tab2['pengurus3']['pengurus3-tha2'].'-'.$tab2['pengurus3']['pengurus3-thb2']); ?><br>
		- <?php echo($tab2['pengurus3']['pengurus3-jab3'].'-'.$tab2['pengurus3']['pengurus3-po3'].'-'.$tab2['pengurus3']['pengurus3-tha3'].'-'.$tab2['pengurus3']['pengurus3-thb3']); ?><br>
		- <?php echo($tab2['pengurus3']['pengurus3-jab4'].'-'.$tab2['pengurus3']['pengurus3-po4'].'-'.$tab2['pengurus3']['pengurus3-tha4'].'-'.$tab2['pengurus3']['pengurus3-thb4']); ?><br>
		- <?php echo($tab2['pengurus3']['pengurus3-jab5'].'-'.$tab2['pengurus3']['pengurus3-po5'].'-'.$tab2['pengurus3']['pengurus3-tha5'].'-'.$tab2['pengurus3']['pengurus3-thb5']); ?><br>
		<br>
		Lokasi Jalan : <?php echo($tab3['lok-jln']); ?><br>
		Lokasi Derah : <?php echo($tab3['lok-drh']); ?><br>
		Jumlah Cabang : <?php echo($tab3['jml-cbg']); ?><br>
		Posisi : <?php echo($tab3['lok-stg']); ?><br>
		Lokasi Cabang : <?php echo($tab3['lok-cbg']); ?><br>
		Media Pemasaran : <?php echo($tab3['mp']); ?><br>
		Sanksi : <?php echo($tab3['chk-sanksi']); ?><br>
		Jenis Sanksi : <?php echo($tab3['jns-sanksi']); ?><br>
		Tahun Sanksi : <?php echo($tab3['thn-sanksi']); ?><br>
		Umroh <?php echo $year1; ?> : <?php echo($tab3['umr-'.$year1]); ?><br>
		Haji <?php echo $year1; ?> : <?php echo($tab3['hj-'.$year1]); ?><br>
		Umroh <?php echo $year2; ?> : <?php echo($tab3['umr-'.$year2]); ?><br>
		Haji <?php echo $year2; ?> : <?php echo($tab3['hj-'.$year2]); ?><br>
		Media Pemasaran : <?php echo($tab3['mp']); ?><br>
		Sanksi : <?php echo($tab3['chk-sanksi']); ?><br>
		Jenis Sanksi : <?php echo($tab3['jns-sanksi']); ?><br>
		Tahun Sanksi : <?php echo($tab3['thn-sanksi']); ?><br>
		Jumlah SDM : <?php echo($tab3['jml-sdm']); ?><br>
		Keterlibatan Pengurus : <?php echo($tab3['sdm-qs1']); ?><br>
		Jual Visa : <?php echo($tab3['sdm-qs2']); ?><br>
		LA : <?php echo($tab3['sdm-qs3']); ?><br>
		<br>
		Laporan Keuangan : <?php echo($tab4['lap-keu']); ?><br>
		Jenis Keuangan : <?php echo($tab4['jns-keu']); ?><br>
		Opini Auditor : <?php echo($tab4['opn-keu']); ?><br>
		Bank Giro : <?php echo($tab4['giro-bank']); ?><br>
		<br>
		Tanggal Keberangkatan : <?php echo($tab5['tgl-pp-a']); ?><br>
		Tanggal Jatuh Tempo : <?php echo($tab5['tgl-pp-b']); ?><br>
		Jangka Waktu : <?php echo($tab5['wkt-pp']); ?><br>
		Jumlah Jamaah : <?php echo($tab5['jml-pp']); ?><br>
		Jamaah DP : <?php echo($tab5['dp-pp']); ?><br>
		Harga Jual : <?php echo($tab5['pkt-pp']); ?><br>
		DP Jamaah : <?php echo($tab5['dpj-pp']); ?><br>
		Biaya Pelunasan : <?php echo($tab5['ln-pp']); ?><br>
		Tiket : <?php echo($tab5['tkt-pp']); ?><br>
		LA : <?php echo($tab5['la-pp']); ?><br>
		Kebutuhan : <?php echo($tab5['ned-pp']); ?><br>
		Fasilitas : <?php echo($tab5['sum-pp']); ?><br>
		<br>
		Garansi Personal : <?php echo($tab6['p-gua']); ?><br>
		Garansi Corporate : <?php echo($tab6['c-gua']); ?><br>
		Pernyataan Jaminan : <?php echo($tab6['s-gua']); ?><br>
		Nilai Jaminan Lebih : <?php echo($tab6['n-gua']); ?><br>
	</div>
	<a href="<?php echo base_url("scoring"); ?>" class="btn btn-default">Back to Scoring</a>
</div>