<!doctype html>
<html lang="en">
<?php 
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
        <?php include '../layout/sidebar.php'; ?>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <?php include '../layout/header.php'; ?>
            <!--  Header End -->
            <!-- Content -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="./add_product.php" class="btn btn-success float-md-end">
                                    Add Product <i class="ti ti-plus"></i>
                                </a>
                                <h5 class="card-title d-flex justify-content-start">Tabel Product</h5>

                                <?php
                                if (isset($_SESSION['msg'])) {

                                ?>
                                    <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                                        <?= $_SESSION['msg']; ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php
                                } elseif (isset($_SESSION['msg_err'])) {
                                ?>
                                    <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
                                        <?= $_SESSION['msg_err']; ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php
                                }
                                unset($_SESSION['msg']);
                                ?>
                                <div class="table-responsive mt-5">
                                    <table class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kategori Product</th>
                                                <th>Nama Product</th>
                                                <th>Harga</th>
                                                <th>Deskripsi</th>
                                                <th>Foto Product</th>
                                                <th>Stock Product</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include '../../action/product_action/show_data_product.php';
                                            $no = 1;
                                            while ($data = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $data['Kategori'] ?></td>
                                                    <td><?= $data['nama'] ?></td>
                                                    <td><?= $data['harga'] ?></td>
                                                    <td><?= $data['deskripsi'] ?></td>
                                                    <td>
                                                        <img src="../../assets/images/product/<?= $data['foto_produk'] ?>" alt="" width="100px">
                                                    </td>
                                                    <td><?= $data['stok_produk'] ?></td>
                                                    <td>
                                                        <a href="edit_product.php?id=<?= $data['id'] ?>" class="btn btn-warning"><i class="ti ti-edit"></i></a>
                                                        <a href="../../action/product_action/delete_product_act.php?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Product Ini?')"><i class="ti ti-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
    <script src="../../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>