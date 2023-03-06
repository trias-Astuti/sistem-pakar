
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url().'designadmin/vendors/feather/feather.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'designadmin/vendors/ti-icons/css/themify-icons.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'designadmin/vendors/css/vendor.bundle.base.css'?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url().'designadmin/css/vertical-layout-light/style.css'?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url().'designadmin/images/favicon.png"'?>"/>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?php echo base_url().'designadmin/images/logo.svg'?>" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" action="<?= base_url('user-register-proses') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Nama Lengkap" name="nama_lengkap" >
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username" name="username" >
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                </div>
                <!-- <div class="form-group">
                  <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                    <option>Prodi</option>
                    <option>Teknik Informatika</option>
                    <option>Teknik Industri</option>
                    <option>Teknik Mesin</option>
                    <option>Teknik Elektro</option>
                    <option>Sistem Informasi</option>
                  </select>
                </div> -->
                <!-- <div class="form-group">
                  <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                    <option>Status</option>
                    <option>Peserta</option>
                    <option>Psikologi</option>
                    </select>
                </div> -->
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.html" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url().'designadmin/vendors/js/vendor.bundle.base.js'?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url().'designadmin/js/off-canvas.js'?>"></script>
  <script src="<?php echo base_url().'designadmin/js/hoverable-collapse.js'?>"></script>
  <script src="<?php echo base_url().'designadmin/js/template.js'?>"></script>
  <script src="<?php echo base_url().'designadmin/js/settings.js'?>"></script>
  <script src="<?php echo base_url().'designadmin/js/todolist.js'?>"></script>
  <!-- endinject -->
</body>

</html>
