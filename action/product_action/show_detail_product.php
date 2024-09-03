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