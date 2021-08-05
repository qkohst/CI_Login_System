<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
  <!-- row -->
  <div class="container-fluid">
    <div class="form-head d-flex mb-3 align-items-start">
      <div class="mr-auto d-none d-lg-block">
        <h2 class="text-black font-w600 mb-0">Role Access</h2>
        <p class="mb-0"><?= $title ?></p>
      </div>

    </div>
    <div class="row">
      <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12">

        <!-- Alert Success  -->
        <?= $this->session->flashdata('message'); ?>

        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <h5>Role : <?= $role['role'] ?></h5>
              <table class="table table-hover table-responsive-sm">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Menu</th>
                    <th>Access</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($menu as $m) : ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><?= $m['menu'] ?></td>
                      </td>
                      <td>
                        <div class="custom-control custom-checkbox checkbox-info">
                          <input type="checkbox" class="custom-control-input" id="customCheckBox<?= $m['id'] ?>" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                          <label class="custom-control-label" for="customCheckBox<?= $m['id'] ?>"></label>
                        </div>
                      </td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
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