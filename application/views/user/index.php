<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
  <!-- row -->
  <div class="container-fluid">
    <div class="form-head d-flex mb-3 align-items-start">
      <div class="mr-auto d-none d-lg-block">
        <h2 class="text-black font-w600 mb-0">My Profile</h2>
        <p class="mb-0"><?= $title ?></p>
      </div>

    </div>
    <div class="row">
      <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12">
        <?= $this->session->flashdata('message'); ?>
        <div class="widget-stat card">
          <div class="card-body p-4">
            <div class="media ai-icon">
              <span class="mr-3 bgl-primary text-primary">
                <img src="<?= base_url('assets/images/profile/') . $user['image']; ?>" width="100" alt="" />
              </span>
              <div class="media-body pl-2">
                <h4 class="mb-0 text-black"><span class="ml-0"><?= $user['name'] ?></span></h4>
                <p class="mb-0"><?= $user['email'] ?></p>
                <small>Member since <?= date('d F Y', $user['date_created']); ?></small>
              </div>
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