<!doctype html>
<html lang="en">

<?php 
  include '../../action/user_action/show_detail_user.php';
  include '../../action/security_act.php';
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php include '../layout/sidebar.php' ?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        <?php include '../layout/header.php' ?>
        <!--  Header End -->

        <div class="container-fluid">
          <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <a href="./index.php" class="btn btn-danger float-md-start">
                    <i class="ti ti-arrow-left"></i>
                </a>
                  <h5 class="card-tittle d-flex justify-content-center">Edit User</h5>
                  <form action="../../action/user_action/update_user_act.php" method="post" class="mt-5">
                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                      <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="name" value="<?= $data['nama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?= $data['email'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="username" value="<?= $data['username'] ?>">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="mb-4">
                      <label for="exampleInputtext1" class="form-label">Role</label>
                      <select name="role" id="" class="form-select">
                        <option value="" selected>Pilih Role Anda</option>
                        <option value="1" <?= $data['role'] == 1 ? 'selected' : '' ?>>Admin</option>
                        <option value="2" <?= $data['role'] == 2 ? 'selected' : '' ?>>User</option>
                      </select>
                    </div>
                    <input type="submit" class="btn btn-success py-8 fs-4 mb-4 rounded-2" value="Simpan">
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>


  </div>
  <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/js/sidebarmenu.js"></script>
  <script src="../../assets/js/app.min.js"></script>
  <script src="../../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../../assets/js/dashboard.js"></script>
</body>

</html>