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
                    <!-- make form search -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="get">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search Produk" name="search">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card overflow-hidden rounded-2">
                            <div class="position-relative">
                                <a href="javascript:void(0)"><img src="../../assets/images/produk/foto_1.webp" class="card-img-top rounded-0" alt="..."></a>
                                <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>
                            </div>
                            <div class="card-body pt-3 p-4">
                                <h6 class="fw-semibold fs-4">Boat Headphone</h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fw-semibold fs-4 mb-0">$50 <span class="ms-2 fw-normal text-muted fs-3"><del>$65</del></span></h6>
                                    <ul class="list-unstyled d-flex align-items-center mb-0">
                                        <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                                        <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                                        <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                                        <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                                        <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card overflow-hidden rounded-2">
                            <div class="position-relative">
                                <a href="javascript:void(0)"><img src="../../assets/images/produk/foto_1.webp" class="card-img-top rounded-0" alt="..."></a>
                                <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>
                            </div>
                            <div class="card-body pt-3 p-4">
                                <h6 class="fw-semibold fs-4">MacBook Air Pro</h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fw-semibold fs-4 mb-0">$650 <span class="ms-2 fw-normal text-muted fs-3"><del>$900</del></span></h6>
                                    <ul class="list-unstyled d-flex align-items-center mb-0">
                                        <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                                        <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                                        <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                                        <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                                        <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card overflow-hidden rounded-2">
                            <div class="position-relative">
                                <a href="javascript:void(0)"><img src="../../assets/images/produk/foto_1.webp" class="card-img-top rounded-0" alt="..."></a>
                                <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>
                            </div>
                            <div class="card-body pt-3 p-4">
                                <h6 class="fw-semibold fs-4">Red Valvet Dress</h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fw-semibold fs-4 mb-0">$150 <span class="ms-2 fw-normal text-muted fs-3"><del>$200</del></span></h6>
                                    <ul class="list-unstyled d-flex align-items-center mb-0">
                                        <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                                        <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                                        <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                                        <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                                        <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card overflow-hidden rounded-2">
                            <div class="position-relative">
                                <a href="javascript:void(0)"><img src="../../assets/images/produk/foto_1.webp" class="card-img-top rounded-0" alt="..."></a>
                                <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>
                            </div>
                            <div class="card-body pt-3 p-4">
                                <h6 class="fw-semibold fs-4">Cute Soft Teddybear</h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fw-semibold fs-4 mb-0">$285 <span class="ms-2 fw-normal text-muted fs-3"><del>$345</del></span></h6>
                                    <ul class="list-unstyled d-flex align-items-center mb-0">
                                        <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                                        <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                                        <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                                        <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                                        <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                                    </ul>
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