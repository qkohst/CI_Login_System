<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
  <!-- row -->
  <div class="container-fluid">
    <div class="form-head d-flex mb-3 align-items-start">
      <div class="mr-auto d-none d-lg-block">
        <h2 class="text-black font-w600 mb-0">Change Password</h2>
        <p class="mb-0"><?= $title ?></p>
      </div>

    </div>
    <div class="row">
      <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12">
        <?= $this->session->flashdata('message'); ?>
        <div class="card">
          <div class="card-body">
            <div class="basic-form">
              <form action="<?= base_url('user/changepassword'); ?>" method="post">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Current Password</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="current_password" name="current_password">
                    <?php echo form_error('current_password', '<small class="text-danger pl-1">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">New Password</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="new_password1" name="new_password1">
                    <?php echo form_error('new_password1', '<small class="text-danger pl-1">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Confirm Password</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="new_password2" name="new_password2">
                    <?php echo form_error('new_password2', '<small class="text-danger pl-1">', '</small>'); ?>
                  </div>
                </div>

                <div class="form-group row justify-content-end">
                  <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->