<?php 
include '../../connection/connection.php';
session_start();

$id = $_POST['id'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori_produk_id'];
$harga = $_POST['harga'];
$desk = $_POST['deskripsi'];
$foto = $_FILES['foto_produk']['name'];
$stok = $_POST['stok_produk'];


if ($foto) {
    $nama_file = $_FILES['foto_produk']['name'];
    $source = $_FILES['foto_produk']['tmp_name'];
    $type = $_FILES['foto_produk']['type'];
    $new_file = 'produk_'.date('dmYHis').'.'.$type;
    $folder = 'C:\laragon\www\toko_online\assets\images\product';
    
    move_uploaded_file($source, $folder. $nama_file);
}

$sql = "UPDATE produk SET kategori_produk_id = $kategori, nama = '$nama', harga = $harga, deskripsi = '$desk', foto_produk = '$foto', stok_produk = $stok WHERE id = $id";

if ($conn->query($sql) == true) {
    $_SESSION['msg'] = "Data Berhasil Diubah";
    header('Location:../../pages/product/index.php');
}else{
    $_SESSION['msg_err'] = "Data Gagal Diubah";
    header('Location:../../pages/product/index.php');
}

?>