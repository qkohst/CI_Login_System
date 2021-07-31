<div class="authincation h-100">
  <div class="container h-100">
    <div class="row justify-content-center h-100 align-items-center">
      <div class="col-md-6">
        <div class="authincation-content">
          <div class="row no-gutters">
            <div class="col-xl-12">
              <div class="auth-form">
                <h4 class="text-center mb-4">Create Your Account</h4>
                <form method="post" action="<?= base_url('auth/registration'); ?>">
                  <div class="form-group">
                    <label class="mb-1"><strong>Fullname</strong></label>
                    <input type="text" class="form-control" placeholder="fullname" id="name" name="name" value="<?= set_value('name') ?>">
                    <?php echo form_error('name', '<small class="text-danger pl-1">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <label class="mb-1"><strong>Email</strong></label>
                    <input type="text" class="form-control" placeholder="hello@example.com" id="email" name="email" value="<?= set_value('email') ?>">
                    <?php echo form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <label class="mb-1"><strong>Password</strong></label>
                    <input type="password" class="form-control" placeholder="password" id="password1" name="password1">
                    <?php echo form_error('password1', '<small class="text-danger pl-1">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <label class="mb-1"><strong>Confirm Password</strong></label>
                    <input type="password" class="form-control" placeholder="confirm password" id="password2" name="password2">
                  </div>
                  <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary btn-block">REGISTER</button>
                  </div>
                </form>
                <div class="new-account mt-3">
                  <p>Already have an account? <a class="text-primary" href="<?= base_url('auth'); ?>">Login</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>