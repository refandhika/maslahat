<div class="section-1">
	<h3>Daftar</h3>
	<form action="<?php echo base_url('borrower/formRegister'); ?>" class="form-horizontal" method="post">
		<div class="col-md-6 col-md-offset-3">
			<div class="form-group">
				<label for="Nama Perusahaan" class="control-label col-md-4">Nama Perusahaan : </label>
				<input class="form-control col-md-8" type="text" name="name"><br>
			</div>
			<div class="form-group">
				<label for="Email" class="control-label col-md-4">Email : </label>
				<input class="form-control col-md-8"  type="text" name="email"><br>
			</div>
			<div class="form-group">
				<label for="Sandi" class="control-label col-md-4">Sandi : </label>
				<input class="form-control col-md-8"  type="password" name="password"><br>
			</div>
			<div class="form-group">
				<label for="Konfirmasi Sandi" class="control-label col-md-4">Konfirmasi Sandi : </label>
				<input class="form-control col-md-8"  type="password" name="passconf"><br>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
		</div>
	</form>
	<?php echo validation_errors(); ?>
	<div class="col-md-6 col-md-offset-3">
		<a href="<?php echo base_url(''); ?>">Sudah Memiliki Akun?</a>
	</div>
</div>