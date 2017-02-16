<div id="result">
	<div class="scroll">
		<h3>Scoring</h3><br>
		<div class="col-md-6">
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
			<?php for($i=1;$i<=$jmlpgrs;$i++){ ?>
				<h3>Pengurus <?php echo($i); ?></h3><br>
				Nama : <?php echo($tab2['pengurus'.$i]['nama-pengurus'.$i]); ?><br>
				No. KTP : <?php echo($tab2['pengurus'.$i]['ktp-pengurus'.$i]); ?><br>
				Tempat Tanggal Lahir : <?php echo($tab2['pengurus'.$i]['tl-pengurus'.$i].','.$tab2['pengurus'.$i]['tgl-pengurus'.$i]); ?><br>
				Alamat : <?php echo($tab2['pengurus'.$i]['alamat-pengurus'.$i]); ?><br>
				Kota/Kabupaten : <?php echo($tab2['pengurus'.$i]['kota-kab-pengurus'.$i]); ?><br>
				Provinsi : <?php echo($tab2['pengurus'.$i]['prov-pengurus'.$i]); ?><br>
				Jabatan : <?php echo($tab2['pengurus'.$i]['jab-pengurus'.$i]); ?><br>
				Mengelola Haji Sejak : <?php echo($tab2['pengurus'.$i]['kelola-pengurus'.$i]); ?><br>
				Pendidikan Terakhir : <?php echo($tab2['pengurus'.$i]['pendidikan-pengurus'.$i]); ?><br>
				Jurusan/Bidang : <?php echo($tab2['pengurus'.$i]['jurusan-pengurus'.$i]); ?><br>
				Nama Sekolah/Perguruan Tinggi : <?php echo($tab2['pengurus'.$i]['sklh-pt-pengurus'.$i]); ?><br>
				<b>Pengalaman</b><br>
				- <?php echo($tab2['pengurus'.$i]['pengurus'.$i.'-jab1'].'-'.$tab2['pengurus'.$i]['pengurus'.$i.'-po1'].'-'.$tab2['pengurus'.$i]['pengurus'.$i.'-tha1'].'-'.$tab2['pengurus'.$i]['pengurus'.$i.'-thb1']); ?><br>
				- <?php echo($tab2['pengurus'.$i]['pengurus'.$i.'-jab2'].'-'.$tab2['pengurus'.$i]['pengurus'.$i.'-po2'].'-'.$tab2['pengurus'.$i]['pengurus'.$i.'-tha2'].'-'.$tab2['pengurus'.$i]['pengurus'.$i.'-thb2']); ?><br>
				- <?php echo($tab2['pengurus'.$i]['pengurus'.$i.'-jab3'].'-'.$tab2['pengurus'.$i]['pengurus'.$i.'-po3'].'-'.$tab2['pengurus'.$i]['pengurus'.$i.'-tha3'].'-'.$tab2['pengurus'.$i]['pengurus'.$i.'-thb3']); ?><br>
				- <?php echo($tab2['pengurus'.$i]['pengurus'.$i.'-jab4'].'-'.$tab2['pengurus'.$i]['pengurus'.$i.'-po4'].'-'.$tab2['pengurus'.$i]['pengurus'.$i.'-tha4'].'-'.$tab2['pengurus'.$i]['pengurus'.$i.'-thb4']); ?><br>
				- <?php echo($tab2['pengurus'.$i]['pengurus'.$i.'-jab5'].'-'.$tab2['pengurus'.$i]['pengurus'.$i.'-po5'].'-'.$tab2['pengurus'.$i]['pengurus'.$i.'-tha5'].'-'.$tab2['pengurus'.$i]['pengurus'.$i.'-thb5']); ?><br>	
			<?php }; ?>
		</div>
		<div class="col-md-6">
			Lokasi Jalan : <?php if($tab3['lok-jln'] == "60"){
										echo("Jalan Utama");
									}
									else if($tab3['lok-jln'] == "40"){
										echo("Jalan Arteri");
									}; ?><br>
			Lokasi Derah : <?php if($tab3['lok-drh'] == "60"){
										echo("Pusat Kota");
									}
									else if($tab3['lok-drh'] == "40"){
										echo("Pinggir Kota");
									}; ?><br>
			Jumlah Cabang : <?php echo($tab3['jml-cbg']); ?><br>
			Posisi : <?php if($tab3['lok-stg'] == "40"){
								echo("Sangat Strategis");
							}
							else if($tab3['lok-stg'] == "30"){
								echo("Strategis");
							}
							else if($tab3['lok-stg'] == "20"){
								echo("Kurang Strategis");
							}
							else if($tab3['lok-stg'] == "10"){
								echo("Tidak Strategis");
							}; ?><br>
			Lokasi Cabang : <?php if($tab3['lok-cbg'] == "dk"){
										echo("Dalam kota yang sama");
									}
									else if($tab3['lok-cbg'] == "dlk"){
										echo("Dalam kota dan luar kota");
									}
									else if($tab3['lok-cbg'] == "lk"){
										echo("Luar kota");
									}; ?><br>
			Media Pemasaran : <?php $mp = explode(',',$tab3['mp']);
								for ($i = 0; $i < count($mp); $i++){
									if($i != 0 and !empty($mp[$i])){
										echo ",";
									};
									echo($mp[$i]); 
								}; ?><br>
			Sanksi : <?php echo($tab3['chk-sanksi']); ?><br>
			Jenis Sanksi : <?php echo($tab3['jns-sanksi']); ?><br>
			Tahun Sanksi : <?php echo($tab3['thn-sanksi']); ?><br>
			Umroh <?php echo $year1; ?> : <?php echo($tab3['umr-'.$year1]); ?><br>
			Haji <?php echo $year1; ?> : <?php echo($tab3['hj-'.$year1]); ?><br>
			Umroh <?php echo $year2; ?> : <?php echo($tab3['umr-'.$year2]); ?><br>
			Haji <?php echo $year2; ?> : <?php echo($tab3['hj-'.$year2]); ?><br>
			Jumlah SDM : <?php echo($tab3['jml-sdm']); ?><br>
			Keterlibatan Pengurus : <?php echo($tab3['sdm-qs1']); ?><br>
			Jual Visa : <?php echo($tab3['sdm-qs2']); ?><br>
			LA : <?php echo($tab3['sdm-qs3']); ?><br>
			<br>
			Laporan Keuangan : <?php echo($tab4['lap-keu']); ?><br>
			Jenis Keuangan : <?php echo($tab4['jns-keu']); ?><br>
			Opini Auditor : <?php if($tab4['opn-keu'] == "wtp"){
										echo("Wajar Tanpa Pengecualian");
									}
									else if($tab4['opn-keu'] == "wtpp"){
										echo("Wajar Tanpa Pengecualian dengan paragraf penjelas");
									}
									else if($tab4['opn-keu'] == "wdp"){
										echo("Wajar Dengan Pengecualian");
									}
									else if($tab4['opn-keu'] == "tw"){
										echo("Tidak Wajar");
									}
									else if($tab4['opn-keu'] == "tp"){
										echo("Tidak memberikan pendapat");
									}; ?><br>
			Bank Giro : <?php $bank = explode(',', $tab4['giro-bank']);
								for ($i = 0; $i < count($bank); $i++){
									if($i != 0 and !empty($bank[$i])){
										echo(",");
									};
									if($bank[$i] == "bank1"){
										echo("Bank Mandiri");
									}
									else if($bank[$i] == "bank2"){
										echo("BRI");
									}
									else if($bank[$i] == "bank3"){
										echo("BNI");
									}
									else if($bank[$i] == "bank4"){
										echo("BTN");
									}
									else if($bank[$i] == "bank5"){
										echo("Bank Syariah Mandiri");
									}
									else if($bank[$i] == "bank6"){
										echo("BCA");
									}
									else if($bank[$i] == "bank7"){
										echo("Bank Danamon");
									}
									else if($bank[$i] == "bank8"){
										echo("CIMB Niaga");
									}
									else if($bank[$i] == "bank9"){
										echo("BNI Syariah");
									}
									else if($bank[$i] == "bank10"){
										echo("BRI Syariah");
									}
									else if($bank[$i] == "bank11"){
										echo("Bank Panin");
									}
									else if($bank[$i] == "bank12"){
										echo("Bank Panin Dubai Syariah");
									}
									else if($bank[$i] == "bank13"){
										echo("Bank Muamalat");
									}
									else if($bank[$i] == "bank98"){
										echo("Bank Lokal Lainnya");
									}
									else if($bank[$i] == "bank99"){
										echo("Bank Asing");
									};
								};
								?><br>

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
	</div>
	<a href="<?php echo base_url("scoring"); ?>" class="btn btn-default">Back to Scoring</a>
</div>