<div id="scoring">
	<div class="v-align-left">
	<div class="page-header">
		<h1>Form Scoring</h1>
	</div>
		<form action="<?php echo base_url('scoring/calculate'); ?>" method="post">
			<label for="aspek-yuridis">Aspek Yuridis : </label>
			<div class="form-group panel panel-default" id="aspek-yuridis">
				<label for="y1">Jenis Badan Usaha : </label>
				<select class="form-control" name="y1">
					<option selected="selected" value="1">Badan usaha yang telah berbadan hukum penuh PT sesuai dengan ketentuan yang berlaku</option>
					<option value="2">Badan usaha yang merupakan badan hukum PT (telah memperoleh pengesahan Menkeh dan HAM) namun belum dilakukan pendaftaran dan pengumuman</option>
					<option value="10">Badan usaha yang bukan merupakan badan hukum (CV, Firma) namun pendiriannya telah sah (Akta Otentik dan telah didaftarkan serta diumumkan)</option>
					<option value="3">Badan usaha yang merupakan badan hukum non PT (Yayasan/Koperasi) yang telah didirikan dengan Akta Otentik dan telah dilakukan pendaftaran dan pengumuman dalam Berita Negara RI</option>
					<option value="5">Badan Hukum PT yang masih dalam proses pendirian (Akta Pendirian belum memperoleh pengesahan Menkeh & HAM ) atau yang Anggaran Dasarnya belum disesuaikan dengan ketentuan yang berlaku</option>
				</select>
				<label for="y2">Masa Berlaku Usaha : </label>
				<select class="form-control" name="y2">
					<option value="1">Memiliki izin-izin usaha dan masih berlaku yang sesuai dengan bidang usahanya dimana masa berlaku izin usaha minimal sama dengan jangka waktu pembiayaan</option>
					<option value="2">Memiliki izin-izin usaha yang masih berlaku tetapi masa berlakunya tidak mengcover jangka waktu pembiayaan namun dapat dilakukan perpanjangan</option>
					<option value="3">Memiliki izin-izin usaha tetapi masih dalam proses perpanjangan yang dibuktikan dengan cover note dari instansi yang berwenang mengeluarkan perizinan tersebut</option>
					<option selected="selected" value="5">Memiliki izin-izin usaha tetapi masih dalam proses perpanjangan namun nasabah tidak dapat menyerahkan cover note instansi penerbitan sebagai bukti pengurusan</option>
					<option value="10">Belum memiliki izin-izin usaha setelah lewatnya jangka waktu yang ditetapkan oleh ketentuan perundangan yang berlaku</option>
				</select>
				<label for="y3">Kesesuaian Alamat : </label>
				<select class="form-control" name="y3">
					<option value="1">Menempati alamat kantor sesuai Akta pendirian, SITU, TDP, SIUP, NPWP, dan izin usaha lainnya</option>
					<option value="1">Menempati alamat kantor hanya sesuai SITU, SIUP, NPWP, dan izin usaha lainnya</option>
					<option value="2">Menempati alamat kantor hanya sesuai dengan SITU dan izin usaha lainnya (dari Pariwisata dan Kemenag)</option>
					<option selected="selected" value="3">Menempati alamat kantor hanya sesuai salah satu dokumen legalitas yang dimiliki</option>
					<option value="3">Alamat kantor usaha tidak sesuai dengan dokumen legalitas yang dimiliki</option>
				</select>
			</div>
			<label for="aspek-management">Aspek Management : </label>
			<div class="form-group panel panel-default" id="aspek-management">
				<label for="m1">Pengalaman : </label>
				<select class="form-control" name="m1">
					<option value="1">> 10 Tahun</option>
					<option value="1">5 - 10 Tahun</option>
					<option selected="selected" value="2">3 - 5 Tahun</option>
					<option value="3">2 - 3 Tahun</option>
					<option value="3">< 2 Tahun</option>
				</select>
				<label for="m2">Reputasi : </label>
				<select class="form-control" name="m2">
					<option value="1">Dikenal di seluruh Indonesia dengan reputasi yang baik</option>
					<option value="1">Reputasi sangat baik di tingkat provinsi</option>
					<option value="2">Reputasi baik di tingkat kota/kabupaten</option>
					<option selected="selected" value="3">Tidak diketahui latar belakangnya</option>
					<option value="10">Dikenal dengan reputasi buruk</option>
				</select>
				<label for="m3">Izin Penyelenggara : </label>
				<select class="form-control" name="m3">
					<option value="1">Memiliki izin penyelenggara umroh dan haji khusus serta aktif memberangkatkan umroh haji khusus selama lebih dari 2 tahun</option>
					<option selected="selected" value="1">Memiliki izin penyelenggara umroh dan haji khusus serta aktif memberangkatkan umroh haji khusus dalam 2 tahun terakhir</option>
					<option value="2">Memiliki izin penyelenggara umroh dan haji khusus namun hanya aktif memberangkatkan umroh saja</option>
					<option value="3">Hanya memiliki izin penyelenggara umroh saja</option>
					<option value="3">Hanya memiliki izin penyelenggara umroh saja tetapi pernah memiliki izin haji khusus</option>
				</select>
				<label for="m4">Keanggotaan asosiasi HIMPUH : </label>
				<select class="form-control" name="m4">
					<option value="1">> 10 Tahun</option>
					<option selected="selected" value="2">5 - 10 Tahun</option>
					<option value="3">2 - 5 Tahun</option>
					<option value="4">0 - 2 Tahun</option>
					<option value="5">Anggota Asosiasi selain HIMPUH</option>
				</select>
			</div>
			<label for="aspek-teknis">Aspek Teknis : </label>
			<div class="form-group panel panel-default" id="aspek-teknis">
				<label for="t1">Jamaah 6 Bulan Terakhir : </label>
				<select class="form-control" name="t1">
					<option value="1">> 100 Jamaah perberangkat/perbulan</option>
					<option value="2">50 - 100 Jamaah perberangkat/perbulan</option>
					<option selected="selected" value="3">30 - 50 Jamaah perberangkat/perbulan</option>
					<option value="4">25 - 30 Jamaah perberangkat/perbulan</option>
					<option value="10">< 25 Jamaah perberangkat/perbulan</option>
				</select>
				<label for="t2">Kebersihan Kantor : </label>
				<select class="form-control" name="t2">
					<option value="1">Kantor terlihat bersih, nyaman, besar, dan terkesan mewah serta berlokasi di daerah strategis</option>
					<option selected="selected" value="2">Kantor terlihat bersih, nyaman, dan layak serta berlokasi di daerah strategis</option>
					<option value="3">Kantor terlihat bersih, nyaman, besar, dan terkesan mewah serta berlokasi di daerah tidak strategis</option>
					<option value="4">Kantor terlihat bersih, nyaman, dan layak serta berlokasi di daerah strategis</option>
					<option value="5">Kantor terlihat seadanya</option>
				</select>
				<label for="t3">Jumlah SDM : </label>
				<select class="form-control" name="t3">
					<option value="1">> 10 Pegawai</option>
					<option value="2">5 - 10 Pegawai / < 5 dan pengurus terlibat langsung</option>
					<option selected="selected" value="3">3 - 5 Pegawai dan pengurus terlibat langsung</option>
					<option value="5">3 - 5 Pegawai dan pengurus tidak terlibat langsung</option>
					<option value="10">Tidak memiliki SDM / dikelola langsung pengurus</option>
				</select>
				<label for="t4">Lama Usaha : </label>
				<select class="form-control" name="t4">
					<option value="1">> 10 Tahun</option>
					<option selected="selected" value="2">5 - 10 Tahun</option>
					<option value="3">3 - 5 Tahun</option>
					<option value="4">1 - 3 Tahun</option>
					<option value="10">Belum berpengalaman</option>
				</select>
				<label for="t5">LA, VISA dan Keanggotaan IATA :</label>
				<select class="form-control" name="t5">
					<option selected="selected" value="1">Menjual LA dan VISA serta merupakan Anggota IATA</option>
					<option value="1">Menjual VISA serta merupakan Anggota IATA</option>
					<option value="2">Anggota IATA</option>
					<option value="3">Menjual VISA/LA tapi belum menjadi Anggota IATA</option>
					<option value="3">Tidak menjual VISA/LA dan bukan Anggota IATA</option>
				</select>
			</div>
			<label for="aspek-pemasaran">Aspek Pemasaran : </label>
			<div class="form-group panel panel-default" id="aspek-pemasaran">
				<label for="p1">Pemberangkatan Per Tahun : </label>
				<select class="form-control" name="p1">
					<option value="1">> 1000 Jamaah</option>
					<option value="2">500 - 1000 Jamaah</option>
					<option selected="selected" value="3">360 - 500 Jamaah</option>
					<option value="4">180 - 360 Jamaah</option>
					<option value="5">< 180 Jamaah</option>
				</select>
				<label for="p2">Segmen Pasar dan Paket : </label>
				<select class="form-control" name="p2">
					<option value="1">Segmen Pasar Menengah dan Menengah Keatas dengan harga jual paket minimal bintang 4 diatas USD 2000</option>
					<option selected="selected" value="2">Segmen Pasar Menengah dengan harga jual paket minimal bintang 3 diatas USD 1700 - USD 2000</option>
					<option value="2">Segmen Pasar Menengah dengan harga jual paket minimal bintang 3 harga USD 1500 - USD 1700</option>
					<option value="3">Segmen Pasar abstrak dengan harga jual USD 1000 - USD 1500</option>
					<option value="3">Segmen Pasar abstrak dengan harga jual dibawah USD 1000</option>
				</select>
				<label for="p3">Kantor, Agen, dan Web : </label>
				<select class="form-control" name="p3">
					<option selected="selected" value="1">Memiliki Kantor/Agen di berbagai Kota serta memiliki Web Online</option>
					<option value="2">Memiliki Jaringan Kantor/Agen diberbagai Kota</option>
					<option value="2">Memiliki Web Online</option>
					<option value="3">Memiliki jaringan Kantor/Agen didalam kota yang sama</option>
					<option value="3">Tidak memiliki jaringan Kantor/Agen dan tidak memiliki Web Online</option>
				</select>
			</div>
			<label for="aspek-keuangan">Aspek Keuangan : </label>
			<div class="form-group panel panel-default" id="aspek-keuangan">
				<label for="k1">Laporan Keuangan : </label>
				<select class="form-control" name="k1">
					<option value="1">Memiliki Laporan Keuangan Audited yang diaudit oleh KAP dengan reputasi internasional</option>
					<option selected="selected" value="1">Memiliki Laporan Keuangan Audited yang diaudit oleh KAP dengan reputasi nasional</option>
					<option value="1">Memiliki Laporan Keuangan Audited</option>
					<option value="2">Memiliki Laporan Keuangan InHouse</option>
					<option value="3">Tidak memiliki Laporan Keuangan</option>
				</select>
				<label for="k2">Opini Auditor : </label>
				<select class="form-control" name="k2">
					<option value="1">"Wajar Tanpa Syarat" (Unqualified Opinion)</option>
					<option selected="selected" value="2">"Wajar Tanpa Syarat "dengan sedikit catatan yang tidak bersifat material (Unqualified Opinion : Non Material)</option>
					<option value="2">"Wajar Dengan Syarat" dengan banyak catatan yang tidak bersifat meterial (Qualified Opinion : Non Material)</option>
					<option value="3">"Wajar Dengan Syarat" dengan banyak catatan yang bersifat material; Termasuk Opini "Tidak Wajar" (Adverse)</option>
					<option value="3">Auditor menolak untuk memberikan opini (No Opinion) atau Disclaimer; tidak di audit KAP dan tidak memiliki Laporan Keuangan</option>
				</select>
				<label for="k3">Aktivitas Rekening : </label>
				<select class="form-control" name="k3">
					<option value="1">Aktivitas rekening aktif dan mencerminkan aktivitas usaha 6 bulan terakhir sebesar diatas 90%</option>
					<option selected="selected" value="2">Aktivitas rekening aktif dan mencerminkan aktivitas usaha 6 bulan terakhir sebesar 70-90%</option>
					<option value="2">Aktivitas rekening aktif dan mencerminkan aktivitas usaha 6 bulan terakhir sebesar 50-70%</option>
					<option value="3">Aktivitas rekening aktif dan mencerminkan aktivitas usaha 6 bulan terakhir sebesar 30-50%</option>
					<option value="3">Aktivitas rekening tidak aktif atau aktif namun hanya mencerminkan aktivitas usaha 6 bulan terakhir dibawah 30%</option>
				</select>
			</div>
			<label for="aspek-agunan">Aspek Agunan : </label>
			<div class="form-group panel panel-default" id="aspek-agunan">
				<label for="a1">Bank Perusahaan : </label>
				<select class="form-control" name="a1">
					<option selected="selected" value="1">Bank Mandiri, BRI, atau BNI</option>
					<option value="2">BTN, Bank Syariah Mandiri, BCA, Bank Danamon, atau CIMB Niaga</option>
					<option value="2">BNI Syariah, BRI Syariah, Bank Panin, Bank Panin Dubai Syariah, atau Bank Muamalat</option>
					<option value="3">Bank lokal selain tersebut di atas</option>
					<option value="3">Bank Asing</option>
				</select>
				<label for="a2">Aktivitas Mutasi Rekening : </label>
				<select class="form-control" name="a2">
					<option value="1">Aktivitas mutasi rekening diatas Rp. 1 Milyar perbulan</option>
					<option value="2">Aktivitas mutasi rekening Rp. 500 Juta s.d. Rp. 1 Milyar</option>
					<option selected="selected" value="2">Aktivitas mutasi rekening Rp. 250 Juta s.d. Rp. 500 Juta dan 125% dari nilai pendanaan</option>
					<option value="3">Aktivitas rekening setara nilai pendanaan</option>
					<option value="3">Rekening pasif</option>
				</select>
				<label for="a3">Personal dan Corporate Guarantee : </label>
				<select class="form-control" name="a3">
					<option selected="selected" value="1">Bersedia menyerahkan Personal dan Corporate Guarantee serta menyebutkan harta kekayaan lebih dari nilai pendanaan</option>
					<option value="1">Bersedia menyerahkan salah satu dari Personal atau Corporate Guarantee serta menyebutkan harta kekayaan lebih dari nilai pembiayaan</option>
					<option value="2">Bersedia menyerahkan Personal dan Corporate Guarantee serta menyebutkan harta kekayaan sesuai nilai pembiayaan</option>
					<option value="2">Bersedia menyerahkan salah satu dari Personal atau Corporate Guarantee serta menyebutkan harta kekayaan sesuai nilai pembiayaan</option>
					<option value="3">Bersedia menyerahkan salah satu dari Personal atau Corporate Guarantee serta menyebutkan harta kekayaan dibawah nilai pembiayaan</option>
				</select>
			</div>
			<label for="aspek-fasilitas">Aspek Fasilitas : </label>
			<div class="form-group panel panel-default" id="aspek-fasilitas">
				<label for="f1">Fasilitas 1 : </label>
				<select class="form-control" name="f1">
					<option value="1">0 < X < 30 Hari</option>
					<option selected="selected" value="1">30 < X < 60 Hari</option>
					<option value="2">60 < X < 90 Hari</option>
					<option value="3">90 < X < 180 Hari</option>
					<option value="3">X > 180 Hari</option>
				</select>
				<label for="f2">Fasilitas 2 : </label>
				<select class="form-control" name="f2">
					<option value="1">< Rp. 100 Juta</option>
					<option selected="selected" value="2">Rp. 100 Juta < X < Rp. 300 Juta</option>
					<option value="2">Rp. 300 Juta < X < Rp. 500 Juta</option>
					<option value="3">Rp. 500 Juta < X < Rp. 700 Juta</option>
					<option value="3">> Rp. 700 Juta</option>
				</select>
			</div>
			<input class="btn btn-default" type="submit" value="Submit">
		</form>
	</div>
</div>