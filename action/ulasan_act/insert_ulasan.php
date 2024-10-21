<?php
include '../../connection/connection.php';

session_start();
$produk_id = $_POST['produk'];
$nama = $_SESSION['id'];
$ulasan = $_POST['ulasan'];
$rating = $_POST['rating'];
$foto = $_FILES['foto_ulasan']['name'];

if ($foto) {
    $nama_file = $_FILES['foto_ulasan']['name'];
    $source = $_FILES['foto_ulasan']['tmp_name'];
    $type = $_FILES['foto_ulasan']['type'];
    $new_file = 'produk_'.date('dmYHis').'.'.$type;
    $folder = 'C:\laragon\www\toko_online\assets\images\product';

    move_uploaded_file($source, $folder. $nama_file);
}

$sql = "INSERT INTO ulasan VALUES(null, $produk_id, $nama, '$ulasan', $rating, '$foto')";
if ($conn->query($sql) == true) {
    $_SESSION['msg'] = "Data Berhasil Ditambahkan";
    header('Location:../../pages/home/detail_produk.php?id='.$produk_id);
}else{
    $_SESSION['msg_err'] = "Data Gagal Ditambahkan";
    header('Location:../../pages/home/detail_produk.php');
}


?>