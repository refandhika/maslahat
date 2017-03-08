<div id="result">
	<h3>
		<span>Scoring Result</span>
		<a href="<?php echo base_url("result"); ?>" class="btn btn-default pull-right">Back to List</a>
	</h3>
	</div>
	<div class="scroll">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">Total Score</div>
					<div class="panel-body c-align"><h1><?php echo($score[0]->final); ?></h1></div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Breakdown Score</div>
					<div class="panel-body">
						Aspek Yuridis : <?php echo($score[0]->yuridis); ?><br>
						Aspek Manajemen : <?php echo($score[0]->manajemen); ?><br>
						Aspek Teknis : <?php echo($score[0]->teknis); ?><br>
						Aspek Pemasaran : <?php echo($score[0]->pemasaran); ?><br>
						Aspek Keuangan : <?php echo($score[0]->keuangan); ?><br>
						Aspek Agunan : <?php echo($score[0]->agunan); ?><br>
						Aspek Fasilitas : <?php echo($score[0]->fasilitas); ?><br>
					</div>	
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Biodata Perusahaan</div>
					<div class="panel-body">
						Nama Perusahaan : <?php echo($perusahaan[0]->nama_perusahaan); ?><br>
						Badan Hukum : <?php echo($perusahaan[0]->badan_hukum); ?><br>
						Alamat : <?php echo($perusahaan[0]->alamat); ?><br>
						Telpon : <?php echo($perusahaan[0]->telpon); ?><br>
						Provinsi : <?php echo($perusahaan[0]->provinsi); ?><br>
						Kota/Kabupaten : <?php echo($perusahaan[0]->kota_kab); ?><br>
						Kecamatan : <?php echo($perusahaan[0]->kecamatan); ?><br>
						Kelurahan : <?php echo($perusahaan[0]->kelurahan); ?><br>
						Kode Pos : <?php echo($perusahaan[0]->kode_pos); ?><br>
					</div>	
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Akta</div>
					<div class="panel-body">
						No. Akta Pendirian : <?php echo($perusahaan[0]->no_pendirian); ?> | Tahun : <?php echo($perusahaan[0]->tahun_pendirian); ?><br>
						No. Pengesahan Pendirian : <?php echo($perusahaan[0]->no_pengesahan); ?> | Tahun : <?php echo($perusahaan[0]->tahun_pengesahan); ?><br>
						No. Berita Pendirian : <?php echo($perusahaan[0]->no_berita); ?> | Tahun : <?php echo($perusahaan[0]->tahun_berita); ?><br>
						<br>
						No. Akta Terakhir : <?php echo($perusahaan[0]->no_akta_terakhir); ?> | Tahun : <?php echo($perusahaan[0]->tahun_akta_terakhir); ?><br>
						No. Pengesahan Terakhir : <?php echo($perusahaan[0]->no_pengesahan_terakhir); ?> | Tahun : <?php echo($perusahaan[0]->tahun_pengesahan_terakhir); ?><br>
						No. Berita Terakhir : <?php echo($perusahaan[0]->no_berita_terakhir); ?> | Tahun : <?php echo($perusahaan[0]->tahun_berita_terakhir); ?><br>
					</div>	
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Izin Usaha</div>
					<div class="panel-body">
						No. Izin Usaha Penyelenggara Umroh : <?php echo($perusahaan[0]->no_iupu); ?> | Tahun : <?php echo($perusahaan[0]->tahun_iupu); ?> | Jatuh Tempo : <?php echo($perusahaan[0]->exp_iupu); ?><br>
						No. Izin Usaha Perjalanan Umum : <?php echo($perusahaan[0]->no_iut); ?> | Tahun : <?php echo($perusahaan[0]->tahun_iut); ?> | Jatuh Tempo : <?php echo($perusahaan[0]->exp_iut); ?><br>
						No. Izin Penyelenggara Haji Khusus : <?php echo($perusahaan[0]->no_iphk); ?> | Tahun : <?php echo($perusahaan[0]->tahun_iphk); ?> | Jatuh Tempo : <?php echo($perusahaan[0]->exp_iphk); ?><br>
						No. IATA : <?php echo($perusahaan[0]->no_iata); ?> Tahun : <?php echo($perusahaan[0]->tahun_iata); ?> | Jatuh Tempo : <?php echo($perusahaan[0]->exp_iata); ?><br>
						No. NPWP : <?php echo($perusahaan[0]->no_npwp); ?><br>
						Keanggotaan Asosiasi : <?php echo($perusahaan[0]->asosiasi); ?> | Sejak Tahun : <?php echo($perusahaan[0]->tahun_asosiasi); ?><br>
					</div>
				</div>
			</div>
			<!--<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo($result[0]->tingkat_pengurus); ?></div>
					<div class="panel-body">
						Nama : <?php echo($result[0]->nama_pengurus); ?><br>
						No. KTP : <?php echo($result[0]->no_ktp); ?><br>
						Tempat Tanggal Lahir : <?php echo($result[0]->tempat_lahir.','.$result[0]->tanggal_lahir); ?><br>
						Alamat : <?php echo(''); ?><br>
						Kota/Kabupaten : <?php echo(''); ?><br>
						Provinsi : <?php echo(''); ?><br>
						Jabatan : <?php echo($result[0]->jabatan); ?><br>
						Mengelola Haji Sejak : <?php echo($result[0]->awal_kelola_haji); ?><br>
						Pendidikan Terakhir : <?php echo($result[0]->pendidikan); ?><br>
						Jurusan/Bidang : <?php echo($result[0]->jurusan); ?><br>
						Nama Sekolah/Perguruan Tinggi : <?php echo($result[0]->sekolah); ?><br>
						<b>Pengalaman</b><br>
						- <?php echo($result[0]->jabatan_exp1.'-'.$result[0]->organisasi_exp1.'-'.$result[0]->bidang_exp1.'-'.$result[0]->tahun_exp1); ?><br>
						- <?php echo($result[0]->jabatan_exp2.'-'.$result[0]->organisasi_exp2.'-'.$result[0]->bidang_exp2.'-'.$result[0]->tahun_exp2); ?><br>
						- <?php echo($result[0]->jabatan_exp3.'-'.$result[0]->organisasi_exp3.'-'.$result[0]->bidang_exp3.'-'.$result[0]->tahun_exp3); ?><br>
						- <?php echo($result[0]->jabatan_exp4.'-'.$result[0]->organisasi_exp4.'-'.$result[0]->bidang_exp4.'-'.$result[0]->tahun_exp4); ?><br>
						- <?php echo($result[0]->jabatan_exp5.'-'.$result[0]->organisasi_exp5.'-'.$result[0]->bidang_exp5.'-'.$result[0]->tahun_exp5); ?><br>
					</div>
				</div>
			</div>-->
			<?php for($i=1;$i<=$jmlpgrs;$i++){ ?>
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading"><?php echo($pengurus[$i][0]->tingkat_pengurus); ?></div>
						<div class="panel-body">
							Nama : <?php echo($pengurus[$i][0]->nama_pengurus); ?><br>
							No. KTP : <?php echo($pengurus[$i][0]->no_ktp); ?><br>
							Tempat Tanggal Lahir : <?php echo($pengurus[$i][0]->tempat_lahir.','.$pengurus[$i][0]->tanggal_lahir); ?><br>
							Alamat : <?php echo($pengurus[$i][0]->alamat); ?><br>
							Kota/Kabupaten : <?php echo($pengurus[$i][0]->kota_kab); ?><br>
							Provinsi : <?php echo($pengurus[$i][0]->provinsi); ?><br>
							Jabatan : <?php echo($pengurus[$i][0]->jabatan); ?><br>
							Mengelola Haji Sejak : <?php echo($pengurus[$i][0]->awal_kelola_haji); ?><br>
							Pendidikan Terakhir : <?php echo($pengurus[$i][0]->pendidikan); ?><br>
							Jurusan/Bidang : <?php echo($pengurus[$i][0]->jurusan); ?><br>
							Nama Sekolah/Perguruan Tinggi : <?php echo($pengurus[$i][0]->sekolah); ?><br>
							<b>Pengalaman</b><br>
							<?php if($pengurus[$i][0]->jabatan_exp1){ ?>
							- <?php echo($pengurus[$i][0]->jabatan_exp1.' - '.$pengurus[$i][0]->organisasi_exp1.' - '.$pengurus[$i][0]->bidang_exp1.' - '.$pengurus[$i][0]->tahun_exp1); ?><br>
							<?php }; ?>
							<?php if($pengurus[$i][0]->jabatan_exp2){ ?>
							- <?php echo($pengurus[$i][0]->jabatan_exp2.' - '.$pengurus[$i][0]->organisasi_exp2.' - '.$pengurus[$i][0]->bidang_exp2.' - '.$pengurus[$i][0]->tahun_exp2); ?><br>
							<?php }; ?>
							<?php if($pengurus[$i][0]->jabatan_exp3){ ?>
							- <?php echo($pengurus[$i][0]->jabatan_exp3.' - '.$pengurus[$i][0]->organisasi_exp3.' - '.$pengurus[$i][0]->bidang_exp3.' - '.$pengurus[$i][0]->tahun_exp3); ?><br>
							<?php }; ?>
							<?php if($pengurus[$i][0]->jabatan_exp4){ ?>
							- <?php echo($pengurus[$i][0]->jabatan_exp4.' - '.$pengurus[$i][0]->organisasi_exp4.' - '.$pengurus[$i][0]->bidang_exp4.' - '.$pengurus[$i][0]->tahun_exp4); ?><br>
							<?php }; ?>
							<?php if($pengurus[$i][0]->jabatan_exp5){ ?>
							- <?php echo($pengurus[$i][0]->jabatan_exp5.' - '.$pengurus[$i][0]->organisasi_exp5.' - '.$pengurus[$i][0]->bidang_exp5.' - '.$pengurus[$i][0]->tahun_exp5); ?><br>
							<?php }; ?>	
						</div>	
					</div>
				</div>
			<?php }; ?>
		</div>
		<div class="col-md-4">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Permohonan Pendanaan</div>
					<div class="panel-body">
						Tanggal Keberangkatan : <?php echo($permohonan[0]->rencana_keberangkatan); ?><br>
						Tanggal Jatuh Tempo : <?php echo($permohonan[0]->jatuh_tempo); ?><br>
						Jangka Waktu : <?php echo($permohonan[0]->jangka_waktu); ?><br>
						Jumlah Jamaah : <?php echo($permohonan[0]->jumlah_jamaah); ?><br>
						Jamaah DP : <?php echo($permohonan[0]->jumlah_jamaah_dp); ?><br>
						Harga Jual : <?php echo($permohonan[0]->harga_jual_paket); ?><br>
						DP Jamaah : <?php echo($permohonan[0]->dp_jamaah); ?><br>
						Biaya Pelunasan : <?php echo($permohonan[0]->sisa_pelunasan); ?><br>
						Tiket : <?php echo($permohonan[0]->tiket_pesawat); ?><br>
						LA : <?php echo($permohonan[0]->landing_arrangement); ?><br>
						Kebutuhan : <?php echo('USD '.$permohonan[0]->kebutuhan_pendanaan); ?><br>
						Fasilitas : <?php echo('IDR '.$permohonan[0]->fasilitas_pendanaan); ?><br>
					</div>	
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Informasi Usaha</div>
					<div class="panel-body">
						Lokasi Jalan : <?php if($infousaha[0]->jalan_kantor == "60"){
													echo("Jalan Utama");
												}
												else if($infousaha[0]->jalan_kantor == "40"){
													echo("Jalan Arteri");
												}; ?><br>
						Lokasi Daerah : <?php if($infousaha[0]->daerah_kantor == "60"){
													echo("Pusat Kota");
												}
												else if($infousaha[0]->daerah_kantor == "40"){
													echo("Pinggir Kota");
												}; ?><br>
						Jumlah Cabang : <?php echo($infousaha[0]->jumlah_cabang); ?><br>
						Posisi : <?php if($infousaha[0]->posisi_kantor == "40"){
											echo("Sangat Strategis");
										}
										else if($infousaha[0]->posisi_kantor == "30"){
											echo("Strategis");
										}
										else if($infousaha[0]->posisi_kantor == "20"){
											echo("Kurang Strategis");
										}
										else if($infousaha[0]->posisi_kantor == "10"){
											echo("Tidak Strategis");
										}; ?><br>
						Lokasi Cabang : <?php if($infousaha[0]->lokasi_cabang == "dk"){
													echo("Dalam kota yang sama");
												}
												else if($infousaha[0]->lokasi_cabang == "dlk"){
													echo("Dalam kota dan luar kota");
												}
												else if($infousaha[0]->lokasi_cabang == "lk"){
													echo("Luar kota");
												}; ?><br>
						Media Pemasaran : <?php $mp = explode(',',$infousaha[0]->media_pemasaran);
											for ($i = 0; $i < count($mp); $i++){
												if($i != 0 and !empty($mp[$i])){
													echo ",";
												};
												echo($mp[$i]);
											}; ?><br>
						Sanksi : <?php echo(''); ?><br>
						Jenis Sanksi : <?php echo($infousaha[0]->jenis_sanksi); ?><br>
						Tahun Sanksi : <?php echo($infousaha[0]->tahun_sanksi); ?><br>
						Umroh <?php echo $infousaha[0]->keberangkatan_tahun1; ?> : <?php echo($infousaha[0]->keberangkatan_umroh1); ?><br>
						Haji <?php echo $infousaha[0]->keberangkatan_tahun1; ?> : <?php echo($infousaha[0]->keberangkatan_haji1); ?><br>
						Umroh <?php echo $infousaha[0]->keberangkatan_tahun2; ?> : <?php echo($infousaha[0]->keberangkatan_umroh1); ?><br>
						Haji <?php echo $infousaha[0]->keberangkatan_tahun2; ?> : <?php echo($infousaha[0]->keberangkatan_haji1); ?><br>
						Jumlah SDM : <?php echo($infousaha[0]->jumlah_pegawai); ?><br>
						Keterlibatan Pengurus : <?php echo($infousaha[0]->pengurus_pegawai); ?><br>
						Jual Visa : <?php echo($infousaha[0]->penjual_visa); ?><br>
						LA : <?php echo($infousaha[0]->landing_arrangement); ?><br>
					</div>	
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Keuangan</div>
					<div class="panel-body">
						Laporan Keuangan : <?php echo($infokeuangan[0]->laporan_keuangan); ?><br>
						Jenis Keuangan : <?php echo($infokeuangan[0]->jenis_laporan); ?><br>
						Opini Auditor : <?php if($infokeuangan[0]->opini_auditor == "wtp"){
													echo("Wajar Tanpa Pengecualian");
												}
												else if($infokeuangan[0]->opini_auditor == "wtpp"){
													echo("Wajar Tanpa Pengecualian dengan paragraf penjelas");
												}
												else if($infokeuangan[0]->opini_auditor == "wdp"){
													echo("Wajar Dengan Pengecualian");
												}
												else if($infokeuangan[0]->opini_auditor == "tw"){
													echo("Tidak Wajar");
												}
												else if($infokeuangan[0]->opini_auditor == "tp"){
													echo("Tidak memberikan pendapat");
												}; ?><br>
						Bank Giro : <?php $bank = explode(',', $infokeuangan[0]->bank_giro);
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
												else if($bank[$i] == "bank31"){
													echo("BTN");
												}
												else if($bank[$i] == "bank32"){
													echo("Bank Syariah Mandiri");
												}
												else if($bank[$i] == "bank33"){
													echo("BCA");
												}
												else if($bank[$i] == "bank34"){
													echo("Bank Danamon");
												}
												else if($bank[$i] == "bank35"){
													echo("CIMB Niaga");
												}
												else if($bank[$i] == "bank36"){
													echo("BNI Syariah");
												}
												else if($bank[$i] == "bank37"){
													echo("BRI Syariah");
												}
												else if($bank[$i] == "bank38"){
													echo("Bank Panin");
												}
												else if($bank[$i] == "bank39"){
													echo("Bank Panin Dubai Syariah");
												}
												else if($bank[$i] == "bank40"){
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
					</div>	
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Jaminan</div>
					<div class="panel-body">
						Garansi Personal : <?php echo($agunan[0]->garansi_personal); ?><br>
						Garansi Corporate : <?php echo($agunan[0]->garansi_corporate); ?><br>
						Pernyataan Jaminan : <?php echo($agunan[0]->sebutan_jaminan); ?><br>
						Nilai Jaminan Lebih : <?php echo($agunan[0]->lebih_jaminan); ?><br>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>