<div id="borrower-reg">
	<div class="v-align">
		<form action="<?php echo base_url('borrower_register/form'); ?>" method="post">
			<label for="Nama Lengkap">Nama Lengkap : </label>
			<input class="form-control" type="text" name="name"><br>
			<label for="Email">Email : </label>
			<input class="form-control"  type="text" name="email"><br>
			<label for="Sandi">Sandi : </label>
			<input class="form-control"  type="password" name="password"><br>
			<label for="Konfirmasi Sandi">Konfirmasi Sandi : </label>
			<input class="form-control"  type="password" name="passconf"><br>
			
			<button type="submit" class="btn btn-default">Submit</button>
		</form>

		<?php echo validation_errors(); ?>

		<a href="<?php echo base_url('login'); ?>">Already have account?</a>
	</div>
</div>