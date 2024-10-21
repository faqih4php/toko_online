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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                    <div class="card border-secondary mb-5">
                            <div class="card-header bg-secondary border-0">
                                <h4 class="font-weight-semi-bold m-0">Table of Cart</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>Products</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                                <th>Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 

                                            include '../../action/dashboard_act/show_list.php';
                                            
                                            $no = 1;
                                            while($data=mysqli_fetch_assoc($result)){
                                            ?>
                                            <tr>
                                                <td><img src="../../assets/images/product/<?= $data['foto_produk']?>" alt="" width="100" height="100"></td>
                                                <td><?= number_format($data['harga'], 0, ',', '.')?></td>
                                                <td>
                                                    <div class="d-flex">
                                                    <button type="button" id="minus-<?= $no++ ?>" class="btn btn-primary mx-3"><i class="ti ti-minus"></i></button>
                                                    <input class="form-control" type="text" name="qty" id="qty" style="width: 50px;" value="<?= $data['jumlah_beli']?>">
                                                    <button type="button" id="plus-<?= $no++ ?>" class="btn btn-primary mx-3"><i class="ti ti-plus"></i></button>
                                                    </div>
                                                </td>
                                                <td>Rp <?= number_format($data['total_harga'], 0, ',', '.')?></td>
                                                <td>
                                                    <button class="btn btn-primary"><a href="../../action/dashboard_act/delete.php?id=<?= $data['keranjang_id'] ?>" class="text-white"><i class="ti ti-trash"></i></a></button>
                                                </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-secondary mb-5">
                            <div class="card-header bg-secondary border-0">
                                <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                            </div>
                            <div class="card-body">
                                <?php 
                                    include '../../action/dashboard_act/show_list.php';

                                    $totalHarga = $conn->query("select sum(total_harga) as tot from keranjang");
                                    $tot = mysqli_fetch_assoc($totalHarga);
                                    while($cart=mysqli_fetch_assoc($result)){
                                ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="font-weight-medium"><?= $cart['produk']?></h6>
                                    </div>
                                    <div class="col-md-2">
                                        <h6 class="font-weight-medium">x<?= $cart['jumlah_beli']?></h6>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="font-weight-medium"> <?= number_format($cart['total_harga'], 0, ',', '.')?></h6>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                            <div class="card-footer border-secondary bg-transparent">
                                <div class="d-flex justify-content-between mt-2">
                                    <h5 class="font-weight-bold">Total</h5>
                                    <h5 class="font-weight-bold"><?= $tot['tot'] == true ? number_format($tot['tot'], 0, ',', '.') : 0?></h5>
                                </div>
                                <div class="d-flex ">
                                    <a href="./checkout.php?" class="btn btn-primary">Checkout</a>
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
    <script>
        $(document).ready(function() {
            var qty = 1; 
            $('#plus').click(function() {
                qty += 1;
                $('#qty').val(qty);
            });
            
            $('#minus').click(function() {
                if(qty > 1) {
                    qty -= 1;
                    $('#qty').val(qty);
                }
            });
        });
    </script>
</body>

</html>