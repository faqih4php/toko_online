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
                <div class="table-responsive mt-5">
                    <table class="table table-striped table-bordered no-wrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Produk</th>
                                <th>Total Ulasan</th>
                                <th>Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                             include'../../action/ulasan_act/show_data.php'; 
                            $no = 1;
                            while ($data = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data['nama_produk'] ?></td>
                                <td><?= $data['jumlah_ulasan'] ?></td>
                                <td><?= $data['rata_rata_rating'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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