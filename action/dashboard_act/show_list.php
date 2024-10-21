<?php
    include '../../connection/connection.php';
                                            
    $sql = "select keranjang.id AS keranjang_id, keranjang.jumlah_beli, produk.id, produk.nama as produk, produk.deskripsi, keranjang.jumlah_beli, keranjang.total_harga, produk.foto_produk, produk.harga from keranjang join produk on keranjang.produk_id = produk.id";
    $result = $conn->query($sql);
?>