<div class="section-1">
  <div id="position-1">
    <div class="img-logo-md center-block">
      <img src="<?php echo base_url('assets/css/image/logo_maslahat.svg'); ?>" class="img-responsive">
    </div>
  	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#landing-modal">Pengguna Dana</button>
  	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#landing-modal" disabled>Pemberi Dana</button>
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
        <a href="<?php echo base_url('borrower/register'); ?>">Daftar</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
<div>