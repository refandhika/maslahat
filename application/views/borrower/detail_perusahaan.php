<div id="detail-perusahaan">
	<form action="<?php echo base_url('scoring/saveData'); ?>" method="post" class="form-horizontal" id="form-maslahat1" autocomplete="on">
		<ul class="nav nav-tabs" role="navigation">
			<li role="presentation" class="active" id="tab1"><a name="dp-tab1">Identitas Perusahaan</a></li>
			<li role="presentation" id="tab2"><a class="tab-disable" name="dp-tab2">Identitas Pengurus</a></li>
			<li role="presentation" id="tab3"><a class="tab-disable" name="dp-tab3">Informasi Usaha</a></li>
			<li role="presentation" id="tab4"><a class="tab-disable" name="dp-tab4">Informasi Keuangan</a></li>
			<li role="presentation" id="tab5"><a class="tab-disable" name="dp-tab5">Permohonan Pendanaan</a></li>
			<li role="presentation" id="tab6"><a class="tab-disable" name="dp-tab6">Agunan</a></li>
			<button type="button" class="btn btn-default disabled" id="btn-dp-pt"><span class="glyphicon glyphicon-chevron-left"></span></button>
			<button type="button" class="btn btn-default" id="btn-dp-nt"><span class="glyphicon glyphicon-chevron-right"></span></button>
		</ul>

		<div class="nav-content">
			<div id="dp-tab1">
				<div class="form-group panel panel-default">
					<div class="panel-heading">Biodata Perusahaan</div>
					<div class="panel-body">
						<div class="form-group">
							<label for="nama-perusahaan" class="col-md-2 control-label">Nama Perusahaan :</label>
							<div class="col-md-4">
								<input type="text" name="nama-perusahaan" class="form-control" readonly>
							</div>
							<label for="badan-hukum" class="col-md-2 control-label">Badan Hukum :</label>
							<div class="col-md-4">
								<select name="badan-hukum" id="badan-hukum" class="form-control">
									<option value="PT">PT</option>
									<option value="Yayasan">Yayasan</option>
									<option value="CV">CV</option>
									<option value="Firma">Firma</option>
									<option value="Lain-lain">Lain-lain</option>
								</select>
							</div>
							<label for="alamat" class="col-md-2 control-label">Alamat :</label>
							<div class="col-md-10">
								<textarea name="alamat" class="form-control" rows="3" data-toggle="tooltip" data-placement="left" title='Gunakan kata "Jalan" untuk mengawali alamat atau gunakan kata "Perumahan" jika lokasi berada di Kompleks'></textarea>
							</div>
							<label for="kode-tel" class="col-md-2 control-label">Nomor Telpon :</label>
							<div class="col-md-1">
								<select name="kode-tel" id="kode-tel" class="form-control">
									<option value="021">021</option>
									<option value="0251">0251</option>
								</select>
							</div>
							<div class="col-md-3">
								<input type="text" name="nom-tel" class="form-control number-only">
							</div>
						</div>
						<div class="form-group">
							<label for="provinsi" class="col-md-2 control-label">Provinsi :</label>
							<div class="col-md-4">
								<select name="provinsi" id="provinsi" class="form-control">
								</select>
							</div>
							<label for="kota-kab" class="col-md-2 control-label">Kota/Kabupaten :</label>
							<div class="col-md-4">
								<select name="kota-kab" id="kota-kab" class="form-control" disabled>
									<option value="None">Masukkan Provinsi</option>
								</select>
							</div>
							<label for="kecamatan" class="col-md-2 control-label">Kecamatan :</label>
							<div class="col-md-4">
								<select name="kecamatan" id="kecamatan" class="form-control" disabled>
									<option value="None">Masukkan Kota/Kabupaten</option>
								</select>
							</div>
							<label for="kelurahan" class="col-md-2 control-label">Kelurahan :</label>
							<div class="col-md-4">
								<select name="kelurahan" id="kelurahan" class="form-control" disabled>
									<option value="None">Masukkan Kecamatan</option>
								</select>
							</div>
							<label for="kode-pos" class="col-md-2 control-label">Kode Pos :</label>
							<div class="col-md-4">
								<input type="text" name="kode-pos" class="form-control" id="kode-pos" readonly value="Masukkan Kelurahan">
							</div>
						</div>
					</div>
				</div>
				<div class="form-group panel panel-default">
					<div class="panel-heading">Akta</div>
					<div class="panel-body">
						<div class="form-group">
							<label for="pendirian-no" class="col-md-2 control-label">Akta Pendirian Nomor :</label>
							<div class="col-md-2">
								<input type="text" name="pendirian-no" class="form-control">
							</div>
							<label for="pendirian-th" class="col-md-1 control-label">Tahun :</label>
							<div class="col-md-1">
								<input type="text" name="pendirian-th" id="pendirian-th" class="form-control">
							</div>
							<label for="pendirian-ham" class="col-md-2 control-label">Nomor Pengesahan :</label>
							<div class="col-md-2">
								<input type="text" name="pendirian-ham" class="form-control">
							</div>
							<label for="pendirian-ham-th" class="col-md-1 control-label">Tahun :</label>
							<div class="col-md-1">
								<input type="text" name="pendirian-ham-th" id="pendirian-ham-th" class="form-control">
							</div>
							<label for="pendirian-bn" class="col-md-2 control-label">Berita Negara Nomor :</label>
							<div class="col-md-2">
								<input type="text" name="pendirian-bn" class="form-control">
							</div>
							<label for="pendirian-bn-th" class="col-md-1 control-label">Tahun :</label>
							<div class="col-md-1">
								<input type="text" name="pendirian-bn-th" id="pendirian-bn-th" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="terakhir-no" class="col-md-2 control-label">Akta Terakhir Nomor :</label>
							<div class="col-md-2">
								<input type="text" name="terakhir-no" class="form-control">
							</div>
							<label for="terakhir-th" class="col-md-1 control-label">Tahun :</label>
							<div class="col-md-1">
								<input type="text" name="terakhir-th" id="terakhir-th" class="form-control">
							</div>
							<label for="terakhir-ham" class="col-md-2 control-label">Nomor Pengesahan :</label>
							<div class="col-md-2">
								<input type="text" name="terakhir-ham" class="form-control">
							</div>
							<label for="terakhir-ham-th" class="col-md-1 control-label">Tahun :</label>
							<div class="col-md-1">
								<input type="text" name="terakhir-ham-th" id="terakhir-ham-th" class="form-control">
							</div>
							<label for="terakhir-bn" class="col-md-2 control-label">Berita Negara Nomor :</label>
							<div class="col-md-2">
								<input type="text" name="terakhir-bn" class="form-control">
							</div>
							<label for="terakhir-bn-th" class="col-md-1 control-label">Tahun :</label>
							<div class="col-md-1">
								<input type="text" name="terakhir-bn-th" id="terakhir-bn-th" class="form-control">
							</div>
						</div>
					</div>
				</div>
				<div class="form-group panel panel-default">
					<div class="panel-heading">Izin Usaha</div>
					<div class="panel-body">
						<label for="no-iupu" class="col-md-3 control-label">Nomor Izin Usaha Penyelenggara Umroh :</label>
						<div class="col-md-3">
							<input type="text" name="no-iupu" class="form-control">
						</div>
						<label for="no-iupu-th" class="col-md-1 control-label">Tahun :</label>
						<div class="col-md-1">
							<input type="text" name="no-iupu-th" id="no-iupu-th" class="form-control">
						</div>
						<label for="no-iupu-jt" class="col-md-2 control-label">Tanggal Jatuh Tempo :</label>
						<div class="col-md-2">
							<input type="text" name="no-iupu-jt" id="no-iupu-jt" class="form-control" placeholder="HH/BB/TTTT">
						</div>
						<label for="no-iut" class="col-md-3 control-label">Nomor Izin Usaha Perjalanan Umum :</label>
						<div class="col-md-3">
							<input type="text" name="no-iut" class="form-control">
						</div>
						<label for="no-iut-th" class="col-md-1 control-label">Tahun :</label>
						<div class="col-md-1">
							<input type="text" name="no-iut-th" id="no-iut-th" class="form-control">
						</div>
						<label for="no-iut-jt" class="col-md-2 control-label">Tanggal Jatuh Tempo :</label>
						<div class="col-md-2">
							<input type="text" name="no-iut-jt" id="no-iut-jt" class="form-control" placeholder="HH/BB/TTTT">
						</div>
						<label for="no-iphk" class="col-md-3 control-label">Izin Penyelenggara Haji Khusus :</label>
						<div class="col-md-3">
							<input type="text" name="no-iphk" class="form-control">
						</div>
						<label for="no-iphk-th" class="col-md-1 control-label">Tahun :</label>
						<div class="col-md-1">
							<input type="text" name="no-iphk-th" id="no-iphk-th" class="form-control">
						</div>
						<label for="no-iphk-jt" class="col-md-2 control-label">Tanggal Jatuh Tempo :</label>
						<div class="col-md-2">
							<input type="text" name="no-iphk-jt" id="no-iphk-jt" class="form-control" placeholder="HH/BB/TTTT">
						</div>
						<label for="no-iata" class="col-md-3 control-label">Nomor Keanggotaan IATA :</label>
						<div class="col-md-3">
							<input type="text" name="no-iata" class="form-control">
						</div>
						<label for="no-iata-th" class="col-md-1 control-label">Tahun :</label>
						<div class="col-md-1">
							<input type="text" name="no-iata-th" id="no-iata-th" class="form-control">
						</div>
						<label for="no-iata-jt" class="col-md-2 control-label">Tanggal Jatuh Tempo :</label>
						<div class="col-md-2">
							<input type="text" name="no-iata-jt" id="no-iata-jt" class="form-control" placeholder="HH/BB/TTTT">
						</div>
						<label for="no-npwp" class="col-md-2 control-label">Nomor NPWP :</label>
						<div class="col-md-2">
							<input type="text" name="no-npwp" class="form-control">
						</div>
						<label for="asosiasi" class="col-md-2 control-label">Keanggotaan Asosiasi :</label>
						<div class="col-md-2">
							<select name="asosiasi" class="form-control" id="asosiasi">
								<option value="Himpuh">HIMPUH</option>
								<option value="Amphuri">AMPHURI</option>
								<option value="Kesthurindo">KESTHURINDO</option>
								<option value="Asphurindo">ASPHURINDO</option>
							</select>
						</div>
						<label for="aso-th" class="col-md-2 control-label">Sejak Tahun :</label>
						<div class="col-md-2">
							<input type="text" name="aso-th" id="aso-th" class="form-control">
						</div>
					</div>
				</div>
				<button type="button" class="btn btn-default btn-dp-nb">Lanjut <span class="glyphicon glyphicon-chevron-right"></span></button>
			</div>
			<div id="dp-tab2">
				<div class="form-group panel panel-default">
					<div class="panel-heading">Pemilik</div>
					<div class="panel-body">
						<div class="form-group">
							<label for="nama-pemilik" class="col-md-1 control-label">Nama :</label>
							<div class="col-md-1">
								<input type="text" name="nama-pemilik-g1" class="form-control" placeholder="Gelar">
							</div>
							<div class="col-md-3">
								<input type="text" name="nama-pemilik-nd" class="form-control" placeholder="Nama Depan">
							</div>
							<div class="col-md-3">
								<input type="text" name="nama-pemilik-nt" class="form-control" placeholder="Nama Tengah">
							</div>
							<div class="col-md-3">
								<input type="text" name="nama-pemilik-nb" class="form-control" placeholder="Nama Belakang">
							</div>
							<div class="col-md-1">
								<input type="text" name="nama-pemilik-g2" class="form-control" placeholder="Gelar">
							</div>
							<label for="ktp-pemilik" class="col-md-2 control-label">Nomor KTP :</label>
							<div class="col-md-4">
								<input type="text" name="ktp-pemilik" class="form-control">
							</div>
							<label for="jk-pemilik" class="col-md-2 control-label">Jenis Kelamin :</label>
							<div class="col-md-4">
								<select type="text" name="jk-pemilik" class="form-control">
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
							<label for="tl-pemilik" class="col-md-2 control-label">Tempat Lahir :</label>
							<div class="col-md-4">
								<input type="text" name="tl-pemilik" class="form-control">
							</div>
							<label for="tgl-pemilik" class="col-md-2 control-label">Tanggal Lahir :</label>
							<div class="col-md-4">
								<input type="text" name="tgl-pemilik" id="tgl-pemilik" class="form-control" placeholder="HH/BB/TTTT">
							</div>
						</div>
						<div class="form-group">
							<label for="alamat-pemilik" class="col-md-2 control-label">Alamat :</label>
							<div class="col-md-10">
								<textarea name="alamat-pemilik" class="form-control" rows="3" data-toggle="tooltip" data-placement="left" title='Gunakan kata "Jalan" untuk mengawali alamat atau gunakan kata "Perumahan" jika lokasi berada di Kompleks'></textarea>
							</div>
							<label for="kota-kab-pemilik" class="col-md-2 control-label">Kota/Kabupaten :</label>
							<div class="col-md-4">
								<input type="text" name="kota-kab-pemilik" class="form-control">
							</div>
							<label for="prov-pemilik" class="col-md-1 control-label">Provinsi :</label>
							<div class="col-md-5">
								<input type="text" name="prov-pemilik" class="form-control">
							</div>
							<label for="jab-pemilik" class="col-md-2 control-label">Jabatan :</label>
							<div class="col-md-4">
								<input type="text" name="jab-pemilik" class="form-control">
							</div>
							<label for="kelola-pemilik" class="col-md-3 control-label">Mengelola Haji/Umrah Sejak Tahun :</label>
							<div class="col-md-3">
								<input type="text" name="kelola-pemilik" id="kelola-pemilik" class="form-control">
							</div>
							<label for="pendidikan-pemilik" class="col-md-2 control-label">Pendidikan Terakhir :</label>
							<div class="col-md-4">
								<select name="pendidikan-pemilik" class="form-control" id="pendidikan-pemilik">
									<option value="SLTA">SLTA</option>
									<option value="Sarjana Muda/D3">Sarjana Muda/D3</option>
									<option value="Sarjana/S1">Sarjana/S1</option>
									<option value="S2">S2</option>
									<option value="S3">S3</option>
								</select>
							</div>
							<label for="jurusan-pemilik" class="col-md-2 control-label">Jurusan/Bidang :</label>
							<div class="col-md-4">
								<input type="text" name="jurusan-pemilik" class="form-control">
							</div>
							<label for="sklh-pt-pemilik" class="col-md-3 control-label">Nama Sekolah/Perguruan Tinggi :</label>
							<div class="col-md-3">
								<input type="text" name="sklh-pt-pemilik" class="form-control">
							</div>
						</div>
						<Label class="col-md-12 control-label">Pengalaman</label>
						<table class="table table-striped">
						    <thead>
							    <tr>
							        <th>#</th>
							        <th>Jabatan</th>
							        <th>Nama Perusahaan/Organisasi</th>
							        <th>Bidang Perusahaan</th>
							        <th>Tahun</th>
							        <th> </th>
							        <th>Tahun</th>
							    </tr>
							</thead>
							<tbody>
							    <tr>
							    	<td>1</td>
							    	<td><input type="text" name="pemilik-jab1" class="form-control"></td>
							    	<td><input type="text" name="pemilik-po1" class="form-control"></td>
							    	<td><input type="text" name="pemilik-bid1" class="form-control"></td>
							    	<td class="col-md-1"><input type="text" name="pemilik-tha1" id="pemilik-tha1" class="form-control"></td>
							    	<td>s.d.</td>
							    	<td class="col-md-1"><input type="text" name="pemilik-thb1" id="pemilik-thb1" class="form-control"></td>
							    </tr>
							    <tr>
							    	<td>2</td>
							    	<td><input type="text" name="pemilik-jab2" class="form-control"></td>
							    	<td><input type="text" name="pemilik-po2" class="form-control"></td>
							    	<td><input type="text" name="pemilik-bid2" class="form-control"></td>
							    	<td class="col-md-1"><input type="text" name="pemilik-tha2" id="pemilik-tha2" class="form-control"></td>
							    	<td>s.d.</td>
							    	<td class="col-md-1"><input type="text" name="pemilik-thb2" id="pemilik-thb2" class="form-control"></td>
							    </tr>
							    <tr>
							    	<td>3</td>
							    	<td><input type="text" name="pemilik-jab3" class="form-control"></td>
							    	<td><input type="text" name="pemilik-po3" class="form-control"></td>
							    	<td><input type="text" name="pemilik-bid3" class="form-control"></td>
							    	<td class="col-md-1"><input type="text" name="pemilik-tha3" id="pemilik-tha3" class="form-control"></td>
							    	<td>s.d.</td>
							    	<td class="col-md-1"><input type="text" name="pemilik-thb3" id="pemilik-thb3" class="form-control"></td>
							    </tr>
							    <tr>
							    	<td>4</td>
							    	<td><input type="text" name="pemilik-jab4" class="form-control"></td>
							    	<td><input type="text" name="pemilik-po4" class="form-control"></td>
							    	<td><input type="text" name="pemilik-bid4" class="form-control"></td>
							    	<td class="col-md-1"><input type="text" name="pemilik-tha4" id="pemilik-tha4" class="form-control"></td>
							    	<td>s.d.</td>
							    	<td class="col-md-1"><input type="text" name="pemilik-thb4" id="pemilik-thb4" class="form-control"></td>
							    </tr>
							    <tr>
							    	<td>5</td>
							    	<td><input type="text" name="pemilik-jab5" class="form-control"></td>
							    	<td><input type="text" name="pemilik-po5" class="form-control"></td>
							    	<td><input type="text" name="pemilik-bid5" class="form-control"></td>
							    	<td class="col-md-1"><input type="text" name="pemilik-tha5" id="pemilik-tha5" class="form-control"></td>
							    	<td>s.d.</td>
							    	<td class="col-md-1"><input type="text" name="pemilik-thb5" id="pemilik-thb5" class="form-control"></td>
							    </tr>
						    </tbody>
						</table>
					</div>
				</div>
				<div id="pengurus-addable">
				</div>
				<div class="col-md-12 align-right">
					<button type="button" class="btn btn-default" id="btn-add-pengurus">Tambah Pengurus</button>
					<button type="button" class="btn btn-default disabled" id="btn-sub-pengurus">Kurangi Pengurus</button>
				</div>
				<button type="button" class="btn btn-default btn-dp-pb"><span class="glyphicon glyphicon-chevron-left"></span> Kembali</button>
				<button type="button" class="btn btn-default btn-dp-nb">Lanjut <span class="glyphicon glyphicon-chevron-right"></span></button>
			</div>
			<div id="dp-tab3">
				<div class="form-group panel panel-default">
					<div id="brgkt-6-bln" class="col-md-12 panel-heading">Keberangkatan Umroh 6 Bulan Terakhir <span class="glyphicon glyphicon-info-sign" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Keberangkatan Selama Musim Umroh"></span></div>
					<div class="panel-body">
						<label for="bln-brgkt1" class="col-md-1 control-label">Bulan :</label>
						<div class="col-md-1">
							<select class="form-control" name="bln-brgkt1" id="bln-brgkt1">
								<option value="Jan">Jan</option>
								<option value="Feb">Feb</option>
								<option value="Mar">Mar</option>
								<option value="Apr">Apr</option>
								<option value="Mei">Mei</option>
								<option value="Jun">Jun</option>
								<option value="Jul">Jul</option>
								<option value="Agu">Agu</option>
								<option value="Sep">Sep</option>
								<option value="Okt">Okt</option>
								<option value="Nov">Nov</option>
								<option value="Des">Des</option>
							</select>
						</div>
						<label for="thn-brgkt1" class="col-md-1 control-label">Tahun :</label>
						<div class="col-md-1">
							<input type="text" class="form-control" name="thn-brgkt1" id="thn-brgkt1">
						</div>
						<label for="jmh-brgkt1" class="col-md-2 control-label">Jumlah Jamaah :</label>
						<div class="col-md-2">
							<input type="text" class="form-control" name="jmh-brgkt1">
						</div>
						<label for="jml-brgkt1" class="col-md-2 control-label">Jumlah Keberangkatan :</label>
						<div class="col-md-2">
							<input type="text" class="form-control" name="jml-brgkt1">
						</div>
						<label for="bln-brgkt2" class="col-md-1 control-label">Bulan :</label>
						<div class="col-md-1">
							<select class="form-control" name="bln-brgkt2" id="bln-brgkt2">
								<option value="Jan">Jan</option>
								<option value="Feb">Feb</option>
								<option value="Mar">Mar</option>
								<option value="Apr">Apr</option>
								<option value="Mei">Mei</option>
								<option value="Jun">Jun</option>
								<option value="Jul">Jul</option>
								<option value="Agu">Agu</option>
								<option value="Sep">Sep</option>
								<option value="Okt">Okt</option>
								<option value="Nov">Nov</option>
								<option value="Des">Des</option>
							</select>
						</div>
						<label for="thn-brgkt2" class="col-md-1 control-label">Tahun :</label>
						<div class="col-md-1">
							<input type="text" class="form-control" name="thn-brgkt2" id="thn-brgkt2">
						</div>
						<label for="jmh-brgkt2" class="col-md-2 control-label">Jumlah Jamaah :</label>
						<div class="col-md-2">
							<input type="text" class="form-control" name="jmh-brgkt2">
						</div>
						<label for="jml-brgkt2" class="col-md-2 control-label">Jumlah Keberangkatan :</label>
						<div class="col-md-2">
							<input type="text" class="form-control" name="jml-brgkt2">
						</div>
						<label for="bln-brgkt3" class="col-md-1 control-label">Bulan :</label>
						<div class="col-md-1">
							<select class="form-control" name="bln-brgkt3" id="bln-brgkt3">
								<option value="Jan">Jan</option>
								<option value="Feb">Feb</option>
								<option value="Mar">Mar</option>
								<option value="Apr">Apr</option>
								<option value="Mei">Mei</option>
								<option value="Jun">Jun</option>
								<option value="Jul">Jul</option>
								<option value="Agu">Agu</option>
								<option value="Sep">Sep</option>
								<option value="Okt">Okt</option>
								<option value="Nov">Nov</option>
								<option value="Des">Des</option>
							</select>
						</div>
						<label for="thn-brgkt3" class="col-md-1 control-label">Tahun :</label>
						<div class="col-md-1">
							<input type="text" class="form-control" name="thn-brgkt3" id="thn-brgkt3">
						</div>
						<label for="jmh-brgkt3" class="col-md-2 control-label">Jumlah Jamaah :</label>
						<div class="col-md-2">
							<input type="text" class="form-control" name="jmh-brgkt3">
						</div>
						<label for="jml-brgkt3" class="col-md-2 control-label">Jumlah Keberangkatan :</label>
						<div class="col-md-2">
							<input type="text" class="form-control" name="jml-brgkt3">
						</div>
						<label for="bln-brgkt4" class="col-md-1 control-label">Bulan :</label>
						<div class="col-md-1">
							<select class="form-control" name="bln-brgkt4" id="bln-brgkt4">
								<option value="Jan">Jan</option>
								<option value="Feb">Feb</option>
								<option value="Mar">Mar</option>
								<option value="Apr">Apr</option>
								<option value="Mei">Mei</option>
								<option value="Jun">Jun</option>
								<option value="Jul">Jul</option>
								<option value="Agu">Agu</option>
								<option value="Sep">Sep</option>
								<option value="Okt">Okt</option>
								<option value="Nov">Nov</option>
								<option value="Des">Des</option>
							</select>
						</div>
						<label for="thn-brgkt4" class="col-md-1 control-label">Tahun :</label>
						<div class="col-md-1">
							<input type="text" class="form-control" name="thn-brgkt4" id="thn-brgkt4">
						</div>
						<label for="jmh-brgkt4" class="col-md-2 control-label">Jumlah Jamaah :</label>
						<div class="col-md-2">
							<input type="text" class="form-control" name="jmh-brgkt4">
						</div>
						<label for="jml-brgkt4" class="col-md-2 control-label">Jumlah Keberangkatan :</label>
						<div class="col-md-2">
							<input type="text" class="form-control" name="jml-brgkt4">
						</div>
						<label for="bln-brgkt5" class="col-md-1 control-label">Bulan :</label>
						<div class="col-md-1">
							<select class="form-control" name="bln-brgkt5" id="bln-brgkt5">
								<option value="Jan">Jan</option>
								<option value="Feb">Feb</option>
								<option value="Mar">Mar</option>
								<option value="Apr">Apr</option>
								<option value="Mei">Mei</option>
								<option value="Jun">Jun</option>
								<option value="Jul">Jul</option>
								<option value="Agu">Agu</option>
								<option value="Sep">Sep</option>
								<option value="Okt">Okt</option>
								<option value="Nov">Nov</option>
								<option value="Des">Des</option>
							</select>
						</div>
						<label for="thn-brgkt5" class="col-md-1 control-label">Tahun :</label>
						<div class="col-md-1">
							<input type="text" class="form-control" name="thn-brgkt5" id="thn-brgkt5">
						</div>
						<label for="jmh-brgkt5" class="col-md-2 control-label">Jumlah Jamaah :</label>
						<div class="col-md-2">
							<input type="text" class="form-control" name="jmh-brgkt5">
						</div>
						<label for="jml-brgkt5" class="col-md-2 control-label">Jumlah Keberangkatan :</label>
						<div class="col-md-2">
							<input type="text" class="form-control" name="jml-brgkt5">
						</div>
						<label for="bln-brgkt6" class="col-md-1 control-label">Bulan :</label>
						<div class="col-md-1">
							<select class="form-control" name="bln-brgkt6" id="bln-brgkt6">
								<option value="Jan">Jan</option>
								<option value="Feb">Feb</option>
								<option value="Mar">Mar</option>
								<option value="Apr">Apr</option>
								<option value="Mei">Mei</option>
								<option value="Jun">Jun</option>
								<option value="Jul">Jul</option>
								<option value="Agu">Agu</option>
								<option value="Sep">Sep</option>
								<option value="Okt">Okt</option>
								<option value="Nov">Nov</option>
								<option value="Des">Des</option>
							</select>
						</div>
						<label for="thn-brgkt6" class="col-md-1 control-label">Tahun :</label>
						<div class="col-md-1">
							<input type="text" class="form-control" name="thn-brgkt6" id="thn-brgkt6">
						</div>
						<label for="jmh-brgkt6" class="col-md-2 control-label">Jumlah Jamaah :</label>
						<div class="col-md-2">
							<input type="text" class="form-control" name="jmh-brgkt6">
						</div>
						<label for="jml-brgkt6" class="col-md-2 control-label">Jumlah Keberangkatan :</label>
						<div class="col-md-2">
							<input type="text" class="form-control" name="jml-brgkt6">
						</div>
					</div>
				</div>
				<div class="form-group panel panel-default">
					<div class="panel-heading">Lokasi Kantor</div>
					<div class="panel-body">
						<label for="lok-jln" class="col-md-2 control-label">Jalan Kantor :</label>
						<div class="col-md-2">
							<select name="lok-jln" id="lok-jln" class="col-md-3 form-control">
								<option value="60">Jalan Utama</option>
								<option value="40">Jalan Arteri</option>	
							</select>
						</div>
						<label for="lok-drh" class="col-md-2 control-label">Daerah Kantor :</label>
						<div class="col-md-2">
							<select name="lok-drh" id="lok-drh" class="col-md-3 form-control">
								<option value="60">Pusat Kota</option>
								<option value="40">Pinggir Kota</option>	
							</select>
						</div>
						<label for="jml-cbg" class="col-md-2 control-label">Jumlah Cabang/Agen :</label>
						<div class="col-md-2">
							<input type="text" name="jml-cbg" class="col-md-3 form-control">
						</div>
						<label for="lok-stg" class="col-md-2 control-label">Posisi Kantor :</label>
						<div class="col-md-2">
							<select name="lok-stg" id="lok-stg" class="col-md-3 form-control">
								<option value="40">Sangat Strategis</option>
								<option value="30">Strategis</option>
								<option value="20">Kurang Strategis</option>
								<option value="10">Tidak Strategis</option>	
							</select>
						</div>
						<label for="lok-cbg" class="col-md-2 control-label">Lokasi Cabang/Agen :</label>
						<div class="col-md-4">
							<select name="lok-cbg" id="lok-cbg" class="col-md-3 form-control">
								<option value="dk">Dalam kota yang sama</option>
								<option value="dlk">Dalam kota dan luar kota</option>
								<option value="lk">Luar kota</option>	
							</select>
						</div>
					</div>
				</div>
				<div class="form-group panel panel-default">
					<div class="panel-heading">Media Pemasaran</div>
					<div class="panel-body">
						<div class="col-md-4">
							<label class="checkbox-inline"><input name="mp1" type="checkbox" value="Internet">Internet</label>
						</div>
						<div class="col-md-4">
							<label class="checkbox-inline"><input name="mp2" type="checkbox" value="Media Elektronik">Media Elektronik</label>
						</div>
						<div class="col-md-4">
							<label class="checkbox-inline"><input name="mp3" type="checkbox" value="Media Cetak">Media Cetak</label>
						</div>
						<div class="col-md-4">
							<label class="checkbox-inline"><input name="mp4" type="checkbox" value="Brosur">Brosur</label>
						</div>
						<div class="col-md-4">
							<label class="checkbox-inline"><input name="mp5" type="checkbox" value="Pengajian">Pengajian</label>
						</div>
						<div class="col-md-4">
							<label class="checkbox-inline"><input name="mp6" type="checkbox" value="Kerjasama Instansi">Kerjasama Instansi</label>
						</div>
						<div class="col-md-4">
							<label class="checkbox-inline"><input name="mp7" type="checkbox" value="Proyek Pemerintah">Proyek Pemerintah</label>
						</div>
						<div class="col-md-4">
							<label class="checkbox-inline"><input name="mp8" type="checkbox" value="Web Online">Web Online</label>
						</div>
						<label for="mp9" class="col-md-1 control-label">Lainnya :</label>
						<div class="col-md-3">
							<input type="text" name="mp9" class="form-control">
						</div>
					</div>
				</div>
				<div class="form-group panel panel-default">
					<div class="panel-heading">Sanksi/Peringatan</div>
					<div class="panel-body">
						<div class="form-group">
							<label for="chk-sanksi" class="col-md-6 control-label">Apakah PPIU Anda pernah mendapatkan sanksi atau peringatan dari Kementrian Agama?</label>
							<div class="col-md-2">
								<select name="chk-sanksi" id="chk-sanksi" class="form-control">
									<option value="Tidak">Tidak</option>
									<option value="Ya">Ya</option>
								</select>
							</div>
						</div>
						<div class="form-group" id="sanksi-true">
							<label for="jns-sanksi" class="col-md-2 control-label">Jenis Sanksi :</label>
							<div class="col-md-4">
								<input type="text" class="form-control" name="jns-sanksi">
							</div>
							<label for="thn-sanksi" class="col-md-1 control-label">Tahun :</label>
							<div class="col-md-1">
								<input type="text" class="form-control" name="thn-sanksi" id="thn-sanksi">
							</div>
						</div>	
					</div>
				</div>
				<div class="form-group panel panel-default">
					<div class="panel-heading">Jumlah Keberangkatan</div>
					<div class="panel-body">
						<label for="umr-<?php echo $year1; ?>" class="col-md-4 control-label">Jumlah keberangkatan jamaah Umroh <?php echo $year1; ?> :</label>
						<div class="col-md-2">
							<input type="text" class="form-control" name="umr-<?php echo $year1; ?>">
						</div>
						<label for="hj-<?php echo $year1; ?>" class="col-md-4 control-label">Jumlah keberangkatan Haji Khusus <?php echo $year1; ?> :</label>
						<div class="col-md-2">
							<input type="text" class="form-control" name="hj-<?php echo $year1; ?>">
						</div>
						<label for="umr-<?php echo $year2; ?>" class="col-md-4 control-label">Jumlah keberangkatan jamaah Umroh <?php echo $year2; ?> :</label>
						<div class="col-md-2">
							<input type="text" class="form-control" name="umr-<?php echo $year2; ?>">
						</div>
						<label for="hj-<?php echo $year2; ?>" class="col-md-4 control-label">Jumlah keberangkatan Haji Khusus <?php echo $year2; ?> :</label>
						<div class="col-md-2">
							<input type="text" class="form-control" name="hj-<?php echo date('Y')-1; ?>">
						</div>
					</div>
				</div>
				<div class="form-group panel panel-default">
					<div class="panel-heading">Sumber Daya</div>
					<div class="panel-body">
						<div class="form-group">
							<label for="jml-sdm" class="col-md-2 control-label">Jumlah Pegawai :</label>
							<div class="col-md-1">
								<input type="text" name="jml-sdm" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="sdm-qs1" class="col-md-6 control-label">Apakah Anda sebagai pengurus terlibat langsung dalam pengelolaan usaha?</label>
							<div class="col-md-2">
								<select name="sdm-qs1" id="sdm-qs1" class="form-control">
									<option value="Tidak">Tidak</option>
									<option value="Ya">Ya</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="sdm-qs2" class="col-md-6 control-label">Apakah PPIU Anda juga bertindak sebagai agen penjual Visa?</label>
							<div class="col-md-2">
								<select name="sdm-qs2" id="sdm-qs2" class="form-control">
									<option value="Tidak">Tidak</option>
									<option value="Ya">Ya</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="sdm-qs3" class="col-md-6 control-label">Apakah PPIU Anda juga bertindak sebagai agen penjual Landing Arrangement?</label>
							<div class="col-md-2">
								<select name="sdm-qs3" id="sdm-qs3" class="form-control">
									<option value="Tidak">Tidak</option>
									<option value="Ya">Ya</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="btn btn-default btn-dp-pb"><span class="glyphicon glyphicon-chevron-left"></span> Kembali</button>
				<button type="button" class="btn btn-default btn-dp-nb">Lanjut <span class="glyphicon glyphicon-chevron-right"></span></button>
			</div>
			<div id="dp-tab4">
				<div class="form-group panel panel-default">
					<div class="panel-heading">Laporan Keuangan</div>
					<div class="panel-body">
						<div class="form-group">
							<label for="lap-keu" class="col-md-4">Apakah perusahaan telah memiliki laporan keuangan?</label>
							<div class="col-md-2">
								<select name="lap-keu" id="lap-keu" class="form-control">
									<option value="Tidak">Tidak</option>
									<option value="Ya">Ya</option>
								</select>
							</div>
						</div>
						<div class="form-group" id="jns-keu-con">
							<label for="jns-keu" class="col-md-4">Jenis Laporan Keuangan :</label>
							<div class="col-md-2">
								<select name="jns-keu" id="jns-keu" class="form-control" disabled>
									<option value="Inhouse">Inhouse</option>
									<option value="Audit">Audit</option>
								</select>
							</div>
						</div>
						<div class="form-group" id="opn-keu-con">
							<label for="opn-keu" class="col-md-5">Apakah opini auditor terhadap laporan keuangan PPIU Auditor Anda?</label>
							<div class="col-md-4">
								<select name="opn-keu" id="opn-keu" class="form-control" disabled>
									<option value="wtp">Wajar Tanpa Pengecualian</option>
									<option value="wtpp">Wajar Tanpa Pengecualian dengan paragraf penjelas</option>
									<option value="wdp">Wajar Dengan Pengecualian</option>
									<option value="tw">Tidak Wajar</option>
									<option value="tp">Tidak memberikan pendapat</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group panel panel-default">
					<div class="panel-heading">Bank</div>
					<div class="panel-body">
						<label for="giro-bank" class="col-md-4 control-label">Perusahaan menggunakan Giro pada Bank :</label>
						<div class="col-md-6">
							<div id="bank-addable">
								<div class="row">
									<div class="col-md-6">
										<select name="giro-bank1" id="giro-bank1" class="form-control">
											<option value="bank1">Bank Mandiri</option>
											<option value="bank2">BRI</option>
											<option value="bank3">BNI</option>
											<option value="bank31">BTN</option>
											<option value="bank32">Bank Syariah Mandiri</option>
											<option value="bank33">BCA</option>
											<option value="bank34">Bank Danamon</option>
											<option value="bank35">CIMB Niaga</option>
											<option value="bank36">BNI Syariah</option>
											<option value="bank37">BRI Syariah</option>
											<option value="bank38">Bank Panin</option>
											<option value="bank39">Bank Panin Dubai Syariah</option>
											<option value="bank40">Bank Muamalat</option>
											<option value="bank98">Bank Lokal lainnya</option>
											<option value="bank99">Bank Asing</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<button type="button" class="btn btn-default" id="btn-add-bank">Tambah Bank</button>
								</div>
								<div class="col-md-3">
									<button type="button" class="btn btn-default disabled" id="btn-sub-bank">Kurangi Bank</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="btn btn-default btn-dp-pb"><span class="glyphicon glyphicon-chevron-left"></span> Kembali</button>
				<button type="button" class="btn btn-default btn-dp-nb">Lanjut <span class="glyphicon glyphicon-chevron-right"></span></button>
			</div>
			<div id="dp-tab5">
				<div class="form-group panel panel-default">
					<div class="panel-heading">Rencana Pendanaan</div>
					<div class="panel-body">
						<div class="form-group">
							<label for="tgl-pp-a" class="col-md-4 control-label">Tanggal rencana keberangkatan :</label>
							<div class="col-md-2">
								<input type="text" class="form-control" name="tgl-pp-a" id="tgl-pp-a" placeholder="HH/BB/TTTT">
							</div>
							<label for="wkt-pp" class="col-md-4 control-label">Jangka waktu (hari) :</label>
							<div class="col-md-2">
								<select name="wkt-pp" id="wkt-pp" class="form-control">
									<option value="0">-</option>
									<option value="30">30</option>
									<option value="45">45</option>
									<option value="60">60</option>
									<option value="75">75</option>
								</select>
							</div>
							<label for="jml-pp" class="col-md-4 control-label">Proyeksi jumlah jamaah yang akan berangkat :</label>
							<div class="col-md-2">
								<input type="text" class="form-control number-only" name="jml-pp" id="jml-pp">
							</div>
							<label for="dp-pp" class="col-md-4 control-label">Jumlah jamaah yang sudah terdaftar dan membayar DP :</label>
							<div class="col-md-2">
								<input type="text" class="form-control number-only" name="dp-pp" id="dp-pp">
							</div>	
							<div class="col-md-6 box-clean">
								<label for="pkt-pp" class="col-md-8 control-label">Harga jual paket umroh :</label>
								<div class="col-md-2">
									<input type="text" class="form-control number-only" name="pkt-pp" id="pkt-pp">
								</div>
								<div class="col-md-2 control-label">USD</div>
								<label for="dpj-pp" class="col-md-8 control-label">DP per jamaah :</label>
								<div class="col-md-2">
									<input type="text" class="form-control number-only" name="dpj-pp" id="dpj-pp">
								</div>
								<div class="col-md-2 control-label">USD</div>
								<label for="ln-pp" class="col-md-8 control-label">Pelunasan biaya paket umroh oleh jamaah :</label>
								<div class="col-md-2">
									<input type="text" class="form-control number-only" name="ln-pp" id="ln-pp" readonly>
								</div>
								<div class="col-md-2 control-label">USD</div>
							</div>
							<div class="col-md-6 box-clean">
								<label for="tkt-pp" class="col-md-8 control-label">Biaya tiket pesawat :</label>
								<div class="col-md-2">
									<input type="text" class="form-control number-only" name="tkt-pp" id="tkt-pp">
								</div>
								<div class="col-md-2 control-label">USD</div>
								<label for="la-pp" class="col-md-8 control-label">Biaya Landing Arrangement :</label>
								<div class="col-md-2">
									<input type="text" class="form-control number-only" name="la-pp" id="la-pp">
								</div>
								<div class="col-md-2 control-label">USD</div>
							</div>
						</div>
						<div class="form-group">
							<label for="tgl-pp-b" class="col-md-4 control-label">Jatuh tempo pelengkapan dokumen Permohonan Pendanaan ini :</label>
							<div class="col-md-2">
								<input type="text" class="form-control" name="tgl-pp-b" id="tgl-pp-b" readonly>
							</div>
						</div>
						<div class="form-group">
							<label for="ned-pp" class="col-md-4 control-label">Jumlah kebutuhan pendanaan :</label>
							<div class="col-md-2">
								<input type="text" class="form-control" name="ned-pp" id="ned-pp" readonly>
							</div>
						</div>
						<div class="form-group">
							<label for="sum-pp" class="col-md-4 control-label">Jumlah pendanaan yang dapat difasilitasi :</label>
							<div class="col-md-2">
								<input type="text" class="form-control" name="sum-pp" id="sum-pp" readonly>
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="btn btn-default btn-dp-pb"><span class="glyphicon glyphicon-chevron-left"></span> Kembali</button>
				<button type="button" class="btn btn-default btn-dp-nb">Lanjut <span class="glyphicon glyphicon-chevron-right"></span></button>
			</div>
			<div id="dp-tab6">
				<div class="form-group panel panel-default">
					<div class="panel-heading">Garansi</div>
					<div class="panel-body">
						<div class="form-group">
							<label for="p-gua" class="col-md-6 control-label">Apakah Anda bersedia menyerahkan Garansi Personal?</label>
							<div class="col-md-2">
								<select name="p-gua" id="p-gua" class="form-control">
									<option value="Tidak">Tidak</option>
									<option value="Ya">Ya</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="c-gua" class="col-md-6 control-label">Apakah Anda bersedia menyerahkan Garansi Corporate?</label>
							<div class="col-md-2">
								<select name="c-gua" id="c-gua" class="form-control">
									<option value="Tidak">Tidak</option>
									<option value="Ya">Ya</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="s-gua" class="col-md-6 control-label">Garansi Personal/Corporate Anda akan menyebutkan barang yang menjadi jaminan?</label>
							<div class="col-md-2">
								<select name="s-gua" id="s-gua" class="form-control">
									<option value="Tidak">Tidak</option>
									<option value="Ya">Ya</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="n-gua" class="col-md-6 control-label">Perkiraan nilai barang yang disebutkan lebih dari nilai pendanaan?</label>
							<div class="col-md-2">
								<select name="n-gua" id="n-gua" class="form-control">
									<option value="Tidak">Tidak</option>
									<option value="Ya">Ya</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="align-right">
					<input type="submit" class="btn btn-default align-right" value="Ajukan">
				</div>
				<button type="button" class="btn btn-default btn-dp-pb"><span class="glyphicon glyphicon-chevron-left"></span> Kembali</button>
			</div>
		</div>
	</form>
</div>

<!-- Bootstrap Modal -->
<div class="modal fade" id="modal-form-score" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class="modal-title">Input Error</h3>
			</div>
			<div class="modal-body">
				<?php echo validation_errors(); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>