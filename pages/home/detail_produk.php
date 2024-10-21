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
                                <?php if ($data['stok_produk'] == 0) {
                                ?>
                                 <button type="submit" class="btn btn-danger px-3" disabled>Stok Habis</button>
                                <?php }else {?>
                                <button type="submit" class="btn btn-primary px-3"><i class="ti ti-shopping-cart mr-1"></i> Add To Cart</button>
                                <?php }?>
                                 <input type="hidden" name="id" value="<?= $data['id'] ?>">

                                 <input type="hidden" name="harga" value="<?= $data['harga'] ?>">                            
                             </form>
                        </div>
                       <!-- Ulasan Section -->
 
                        
                    </div>
                    <div class="mt-5">
                         <h4>Tambah Ulasan Produk</h4>
                         <form action="../../action/ulasan_act/insert_ulasan.php" method="post" class="mt-5" enctype="multipart/form-data">
                             <div class="mb-3">
                                 <label for="exampleInputtext1" class="form-label">Name</label>
                                 <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="nama" value="<?= $_SESSION['nama'] ?>" readonly>
                             </div>
                            <div class="mb-3 d-flex flex-column">
                                 <input type="hidden" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="produk" value="<?= $data['id'] ?>" readonly ></input>
                            </div>
                             <div class="mb-3 d-flex flex-column">
                                 <label for="exampleInputtext1" class="form-label">Tambah Ulasan</label>
                                 <textarea type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="ulasan" placeholder="Tulis Komentar Disini" ></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputtext1" class="form-label">Tambah Rating</label>
                                <select class="form-select" name="rating">
                                    <option selected>Pilih Rating</option>
                                    <option value="5">Sangat Bagus</option>
                                    <option value="4">Bagus</option>
                                    <option value="3">Lumayan</option>
                                    <option value="2">Jelek</option>
                                    <option value="1">Sangat Jelek</option>
                                </select>
                             </div>
                             <div class="mb-3">
                                 <label for="exampleInputtext1" class="form-label">Upload foto</label>
                                 <input type="file" class="form-control" id="image" aria-describedby="textHelp" name="foto_ulasan"  >
                                 <div class="mt-3" id="foto"></div>
                             </div>
                             <input type="submit" class="btn btn-success py-8 fs-4 mb-4 rounded-2" value="Tambah">
                         </form>
                    </div>
                    <div class="mt-5">
                        <hr>
                        <h2>Ulasan Produk</h2>
                        <?php  
                            include '../../connection/connection.php';
                            $produk_id = $data['id'];
                            $ulasan_sql = "SELECT ulasan.id, ulasan.ulasan, ulasan.foto_ulasan, ulasan.rating, user.nama AS nama_user
                            FROM ulasan
                            JOIN user ON ulasan.user_id = user.id
                            WHERE ulasan.produk_id = $produk_id
                            ";
                            $result = $conn->query($ulasan_sql);
                            if ($result->num_rows > 0) {
                                while ($ulasan = $result->fetch_assoc()) { ?>
                                    <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $ulasan['nama_user'] ?></h5>
                                        <div class="d-flex  list-unstyled">
                                            <p class="card-text">Rating: <?php 
                                            $rating = $ulasan['rating'];
                                            for ($i=1; $i <= 5; $i++) { 
                                                if ($i <= $rating) {
                                                    echo "<li><a class='me-1' href='javascript:void(0)'><i class='ti ti-star text-warning'></i></a></li>";
                                                }
                                            }
                                            ?>
                                            </p>
                                        </div>
                                        <p class="card-text"><?= $ulasan['ulasan'] ?></p>
                                        <div class="mt-2 d-flex flex-column">
                                            <label for="exampleInputtext1" class="form-label">Foto Ulasan</label>
                                            <img src="../../assets/images/product/<?= $ulasan['foto_ulasan'] ?>" alt="" style="width: 100px;">
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                
                            } else { 
                                echo "Belum ada ulasan terkait produk ini";
                            }?>
                            
                            
                        
                        
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