<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
  <!-- row -->
  <div class="container-fluid">
    <div class="form-head d-flex mb-3 align-items-start">
      <div class="mr-auto d-none d-lg-block">
        <h2 class="text-black font-w600 mb-0">Role</h2>
        <p class="mb-0"><?= $title ?></p>
      </div>

      <div class="dropdown custom-dropdown">
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus"></i> Add New Role</button>
      </div>

      <div class="modal fade" id="modalAdd">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add New Role</h5>
              <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
              </button>
            </div>
            <form action="<?= base_url('admin/role'); ?>" method="post">
              <div class="modal-body">
                <input type="text" class="form-control" id="role" name="role" placeholder="Role name">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12">

        <!-- Alert Error  -->
        <?= form_error('menu', '<div class="alert alert-warning" role="alert">', '</div>'); ?>

        <!-- Alert Success  -->
        <?= $this->session->flashdata('message'); ?>

        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover table-responsive-sm">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($role as $r) : ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><?= $r['role'] ?></td>
                      </td>
                      <td>
                        <div class="d-flex">
                          <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-tasks"></i></a>
                          <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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