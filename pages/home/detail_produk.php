<?php
include '../../action/security_act.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
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
            <?php 
                include '../../connection/connection.php';

                $id = $_GET['id'];

                $sql = "SELECT produk.id, produk.nama, kategori_produk.nama AS Kategori, produk.harga, produk.deskripsi, produk.kategori_produk_id,  produk.foto_produk, produk.stok_produk FROM produk JOIN kategori_produk ON produk.kategori_produk_id = kategori_produk.id WHERE produk.id = $id";
                $result = $conn->query($sql);

                if ($result->num_rows < 0) {
                    echo 'Data Not Found';
                }else{
                    $data = $result->fetch_assoc();
                }

            ?>
            <div class="container-fluid">
                <div class="row px-xl-5">
                    <div class="col-lg-5 pb-5">
                        <!-- add a image -->
                         <img src="../../assets/images/product/<?= $data['foto_produk'] ?>" class="image-fluid" width="300px" alt="">
                    </div>

                    <div class="col-lg-7 pb-5">
                        <h3 class="font-weight-semi-bold"><?= $data['nama'] ?></h3>
                        <div class="d-flex mb-3">
                            <div class="text-primary mr-2">
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star-half-alt"></small>
                                <small class="far fa-star"></small>
                            </div>
                            <small class="pt-1">(50 Reviews)</small>
                        </div>
                        <h3 class="font-weight-semi-bold mb-4"><?= number_format($data['harga'], 0, '.', '.') ?></h3>
                        <p class="mb-4"><?= $data['deskripsi'] ?></p>
                      
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <!-- make form quantity -->
                             <form action="../../action/dashboard_act/add_cart.php" method="post" class="d-flex">
                                 <button type="button" id="minus" class="btn btn-primary mx-3"><i class="ti ti-minus"></i></button>
                                 <input class="form-control" type="text" name="qty" id="qty" value="1" style="width: 80px;">
                                 <button type="button" id="plus" class="btn btn-primary mx-3"><i class="ti ti-plus"></i></button>
                                 <button type="submit" class="btn btn-primary px-3"><i class="ti ti-shopping-cart mr-1"></i> Add To Cart</button>
                                 <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                 <input type="hidden" name="harga" value="<?= $data['harga'] ?>">
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
    <script src="../../assets/libs/simplebar/dist/simplebar.js"></script>
    <script>
        $(document).ready(function() {
            var qty = 1; 
            $('#plus').click(function() {
                qty += 1;
                $('#qty').val(qty);
            });
            
            $('#minus').click(function() {
                if(qty > 0) {
                    qty -= 1;
                    $('#qty').val(qty);
                }
            });
        });
    </script>
</body>

</html>