<div class="rm-section-1">
	<div class="v-align">
		<h4>Login</h4>
		<form action="<?php echo base_url('rm/rmLogin'); ?>" method="post" class="form-horizontal">
          <div class="form-group">
            <label for="nama-rm" class="col-md-2 col-md-offset-3 control-label">ID : </label>
            <div class="col-md-4">
              <input class="form-control" type="text" name="nama-rm"><br>
            </div>
          </div>
          <div class="form-group">
            <label for="pass-rm" class="col-md-2 col-md-offset-3 control-label">Sandi : </label>
            <div class="col-md-4">
              <input class="form-control" type="password" name="pass-rm"><br>
            </div>
          </div>
          <button type="submit" class="btn btn-default">Masuk</button>
        </form>
        <?php echo validation_errors(); ?>
	</div>
</div>