<div class="section-1">
	<h3>List Result</h3>
	<table id="table-result" class="table table-striped table-bordered" cellspacing="0" width="100%">
    	<thead>
    		<tr>
				<th>Form ID</th>
				<th>Nama Perusahaan</th>
				<!--<th>ID Perusahaan</th>
				<th>ID Pemilik</th>
				<th>ID Keuangan</th>
				<th>ID Usaha</th>
				<th>ID Permohonan</th>
				<th>ID Agunan</th>
				<th>ID Isian</th>
				<th>Score</th>
				<th>Isian RM</th>-->
				<th>Created At</th>
				<th>Approved</th>
				<th>Update</th>
        	</tr>
        </thead>
        <tbody>
		<?php foreach($forms as $form){?>
	    	<tr>
		        <td><?php echo $form->id_form;?></td>
		        <td><?php echo $form->nama_perusahaan;?></td>
		        <!--<td><?php echo $form->id_perusahaan;?></td>
				<td><?php echo $form->id_pemilik;?></td>
				<td><?php echo $form->id_info_keuangan;?></td>
				<td><?php echo $form->id_info_usaha;?></td>
		        <td><?php echo $form->id_permohonan;?></td>
				<td><?php echo $form->id_agunan;?></td>
				<td><?php echo $form->id_isian;?></td>
				<td><?php echo $form->score;?></td>
				<td><?php echo $form->isian_rm;?></td>-->
				<td><?php echo $form->created_at;?></td>
				<td><?php echo $form->approved;?></td>
				<td>
					<a class="btn btn-warning" href="<?php echo base_url('result/detailedResult/'.$form->id_form); ?>"><i class="glyphicon glyphicon-info-sign"></i></button>
				</td>
		    </tr>
		<?php }?>
        </tbody>
        <tfoot>
        	<tr>
				<th>Form ID</th>
				<th>Nama Perusahaan</th>
				<!--<th>ID Perusahaan</th>
				<th>ID Pemilik</th>
				<th>ID Keuangan</th>
				<th>ID Usaha</th>
				<th>ID Permohonan</th>
				<th>ID Agunan</th>
				<th>ID Isian</th>
				<th>Score</th>
				<th>Isian RM</th>-->
				<td>Created At</td>
				<th>Approved</th>
				<th>Update</th>
        	</tr>
    	</tfoot>
    </table>
</div>

<!--Bootstrap Modal-->
<div class="modal fade" id="modal-form-rm" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class="modal-title">Form RM</h3>
			</div>
			<div class="modal-body form">
				<form action="#" id="form-rm" class="form-horizontal">
					<input type="hidden" value="" name="id_form" />
					<div class="form-body">
						<div class="form-group">
							<label for="isian1" class="control-label col-md-3">Isian 1</label>
							<div class="col-md-9">
								<select name="isian1" class="form-control">
									<option value="1">Menempati alamat kantor sesuai Akta pendirian, SITU, TDP, SIUP, NPWP, dan izin usaha lainnya</option>
									<option value="1">Menempati alamat kantor hanya sesuai SITU, SIUP, NPWP, dan izin usaha lainnya</option>
									<option value="2">Menempati alamat kantor hanya sesuai SITU dan izin usaha lainnya (dari pariwisata dan Kemenag)</option>
									<option value="3">Menempati alamat kantor hanya sesuai salah satu dokumen legalitas yang dimiliki</option>
									<option value="3">Alamat kantor usaha tidak sesuai dengan dokumen legalitas yang dimiliki</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="isian2" class="control-label col-md-3">Isian 1</label>
							<div class="col-md-9">
								<select name="isian2" class="form-control">
									<option value="1">Memiliki izin penyelenggara umroh dan haji khusus serta aktif memberangkatkan umroh dan haji khusus selama lebih dari 2 tahun</option>
									<option value="1">Memiliki izin penyelenggara umroh dan haji khusus serta aktif memberangkatkan umroh dan haji khusus selama lebih dari 2 tahun</option>
									<option value="2">Memiliki izin penyelenggara umroh dan haji khusus serta aktif memberangkatkan umroh saja</option>
									<option value="3">Hanya memiliki izin penyelenggara umroh saja namun pernah memiliki izin haji khusus</option>
									<option value="3">Hanya memiliki izin penyelenggara umroh saja</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="isian3" class="control-label col-md-3">Isian 1</label>
							<div class="col-md-9">
								<select name="isian3" class="form-control">
									<option value="1">Aktifitas rekening aktif dan mencerminkan aktifitas usaha 6 bulan terakhir sebesar lebih dari 90%</option>
									<option value="2">Aktifitas rekening aktif dan mencerminkan aktifitas usaha 6 bulan terakhir sebesar 70-90%</option>
									<option value="2">Aktifitas rekening aktif dan mencerminkan aktifitas usaha 6 bulan terakhir sebesar 50-70%</option>
									<option value="3">Aktifitas rekening aktif dan mencerminkan aktifitas usaha 6 bulan terakhir sebesar 30-50%</option>
									<option value="3">Aktifitas rekening tidak aktif atau aktif namun hanya mencerminkan aktifitas usaha 6 bulan terakhir sebesar kurang dari 30%</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="isian4" class="control-label col-md-3">Isian 1</label>
							<div class="col-md-9">
								<select name="isian4" class="form-control">
									<option value="1">Aktifitas mutasi rekening diatas 1 miliar rupiah per bulan</option>
									<option value="2">Aktifitas mutasi rekening 500 juta s.d. 1 miliar rupiah per bulan</option>
									<option value="2">Aktifitas mutasi rekening 250 juta s.d. 500 juta rupiah per bulan dan 125% dari nilai pendanaan</option>
									<option value="3">Aktifitas mutasi rekening setara nilai pendanaan</option>
									<option value="3">Aktifitas mutasi rekening pasif</option>
								</select>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" id="btn-save" onclick="saveRMValue()" class="btn btn-primary">Save</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>