<div class="authincation h-100">
  <div class="container h-100">
    <div class="row justify-content-center h-100 align-items-center">
      <div class="col-md-6">
        <div class="authincation-content">
          <div class="row no-gutters">
            <div class="col-xl-12">
              <div class="auth-form">
                <h4 class="text-center mb-4">Login Page</h4>
                <?= $this->session->flashdata('message'); ?>
                <form method="post" action="<?= base_url('auth'); ?>">
                  <div class="form-group">
                    <label class="mb-1"><strong>Email</strong></label>
                    <input type="text" class="form-control" placeholder="hello@example.com" id="email" name="email" value="<?= set_value('email') ?>">
                    <?php echo form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <label class="mb-1"><strong>Password</strong></label>
                    <input type="password" class="form-control" placeholder="password" id="password" name="password">
                    <?php echo form_error('password', '<small class="text-danger pl-1">', '</small>'); ?>
                  </div>
                  <div class="form-row d-flex justify-content-between mt-4 mb-2">
                    <div class="form-group">
                      <div class="custom-control custom-checkbox ml-1">
                        <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                        <label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <a href="page-forgot-password.html">Forgot Password?</a>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
                  </div>
                </form>
                <div class="new-account mt-3">
                  <p>Don't have an account? <a class="text-primary" href="<?= base_url('auth/registration'); ?>">Register</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>