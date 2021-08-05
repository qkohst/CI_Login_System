<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Access Forbidden</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets'); ?>./images/favicon.png">
  <link href="<?= base_url('assets'); ?>./css/style.css" rel="stylesheet">

</head>

<body class="h-100">
  <div class="authincation h-100">
    <div class="container h-100">
      <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-5">
          <div class="form-input-content text-center error-page">
            <h1 class="error-text font-weight-bold">403</h1>
            <h4><i class="fa fa-times-circle text-danger"></i> Access Forbidden</h4>
            <p>You are not allowed to access this menu!</p>
            <div>
              <a class="btn btn-primary" href="<?= base_url('user'); ?>">Back to Home</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="<?= base_url('assets'); ?>./vendor/global/global.min.js"></script>
<script src="<?= base_url('assets'); ?>./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?= base_url('assets'); ?>./js/custom.min.js"></script>
<script src="<?= base_url('assets'); ?>./js/deznav-init.js"></script>

</html>