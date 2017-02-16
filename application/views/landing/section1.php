<div class="section-1">
	<div class="v-align">
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#landing-modal">Daftar Peminjam</button>
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#landing-modal" disabled>Daftar Pendana</button>
	</div>
</div>
<div class="modal fade" id="landing-modal" tabindex="-1" role="dialog" aria-labelledby="myLarge">
	 <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('landing/borrowerLogin'); ?>" method="post" class="form-horizontal">
          <div class="form-group">
            <label for="nama-borrower" class="col-md-4 control-label">Nama Perusahaan : </label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="nama-borrower"><br>
            </div>
          </div>
          <div class="form-group">
            <label for="pass-borrower" class="col-md-4 control-label">Sandi : </label>
            <div class="col-md-8">
              <input class="col-md-10 form-control" type="password" name="pass-borrower"><br>
            </div>
          </div>
          <button type="submit" class="btn btn-default">Masuk</button>
        </form>
        <?php echo validation_errors(); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
<div>