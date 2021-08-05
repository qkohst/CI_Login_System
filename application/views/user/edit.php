<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
  <!-- row -->
  <div class="container-fluid">
    <div class="form-head d-flex mb-3 align-items-start">
      <div class="mr-auto d-none d-lg-block">
        <h2 class="text-black font-w600 mb-0">Edit Profile</h2>
        <p class="mb-0"><?= $title ?></p>
      </div>

    </div>
    <div class="row">
      <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="basic-form">
              <?= form_open_multipart('user/edit'); ?>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Full Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'] ?>">
                  <?php echo form_error('name', '<small class="text-danger pl-1">', '</small>'); ?>

                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-3">Picture</div>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-sm-3">
                      <img src="<?= base_url('assets/images/profile/') . $user['image']; ?>" class="img-thumbnail">
                    </div>
                    <div class="col-sm-9">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group row justify-content-end">
                <div class="col-sm-9">
                  <button type="submit" class="btn btn-primary">Edit</button>
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