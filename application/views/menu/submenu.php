<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
  <!-- row -->
  <div class="container-fluid">
    <div class="form-head d-flex mb-3 align-items-start">
      <div class="mr-auto d-none d-lg-block">
        <h2 class="text-black font-w600 mb-0">Menu Management</h2>
        <p class="mb-0"><?= $title ?></p>
      </div>

      <div class="dropdown custom-dropdown">
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus"></i> Add New Sub Menu</button>
      </div>

      <div class="modal fade" id="modalAdd">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add New Sub Menu</h5>
              <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
              </button>
            </div>
            <form action="<?= base_url('menu/submenu'); ?>" method="post">
              <div class="modal-body">
                <div class="form-group">
                  <input type="text" class="form-control" id="title" name="title" placeholder="Sub menu title">
                </div>
                <div class="form-group">
                  <select name="menu_id" id="menu_id" class="form-control">
                    <option value="">Select Menu</option>
                    <?php foreach ($menu as $m) : ?>
                      <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="url" name="url" placeholder="Sub menu url">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="icon" name="icon" placeholder="Sub menu icon">
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" checked>
                    <label class="form-check-label" for="is_active">
                      Active ?
                    </label>
                  </div>
                </div>
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
        <?php if (validation_errors()) : ?>
          <div class="alert alert-warning" role="alert">
            <?= validation_errors(); ?>
          </div>
        <?php endif; ?>

        <!-- Alert Success  -->
        <?= $this->session->flashdata('message'); ?>

        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover table-responsive-sm">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Menu</th>
                    <th>Url</th>
                    <th>Icon</th>
                    <th>Active</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($subMenu as $sm) : ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><?= $sm['title'] ?></td>
                      <td><?= $sm['menu'] ?></td>
                      <td><?= $sm['url'] ?></td>
                      <td><?= $sm['icon'] ?></td>
                      <td><?= $sm['is_active'] ?></td>
                      </td>
                      <td>
                        <div class="d-flex">
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