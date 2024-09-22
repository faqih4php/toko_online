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
                                <a href="index.php" class="btn btn-danger float-md-start">
                                    <i class="ti ti-arrow-left"></i>
                                </a>
                                <h5 class="card-title d-flex justify-content-center">Add Product</h5>
                                <form action="../../action/product_action/insert_product_act.php" method="post" class="mt-5"
                                enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="exampleInputtext1" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="nama"  >
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputtext1" class="form-label">Kategori Produk</label>
                                        <select class="form-select" name="kategori_produk_id" id="">
                                            <option>Pilih Kategori</option>
                                            <?php 
                                            include '../../action/kategori_action/show_data_kategori.php';
                                            while ($data = $result->fetch_assoc()) {
                                            ?>
                                            <option value="<?= $data['id'] ?>"><?= $data['nama'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputtext1" class="form-label">Harga</label>
                                        <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="harga"  >
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputtext1" class="form-label">Deskripsi</label>
                                        <textarea type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="deskripsi"  ></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputtext1" class="form-label">Foto Produk</label>
                                        <input type="file" class="form-control" id="image" aria-describedby="textHelp" name="foto_produk"  >
                                        <div class="mt-3" id="foto"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputtext1" class="form-label">Stok Produk</label>
                                        <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="stok_produk"  >
                                    </div>
                                    <input type="submit" class="btn btn-success py-8 fs-4 mb-4 rounded-2" value="Simpan">
                                </form>
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
    <!-- script untuk memunculkan image jika di pilih -->

    <script>
        const image = document.getElementById('image');
        image.addEventListener('change', function() {     
            const file = image.files[0];
            console.log(file);
            if (file) {
                const foto = document.getElementById('foto');
                foto.innerHTML = `<img src="${URL.createObjectURL(file)}" width="100px" height="100px" alt="">`;
            }
        });
    </script>
</body>

</html>