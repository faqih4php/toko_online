<?php 
include '../../connection/connection.php';

$sql = "SELECT transaksi.id, user.nama AS pembeli, pembayaran.nama AS pembayaran, no_hp, tanggal_transaksi AS tgl, alamat, total_harga AS total, transaksi.status
FROM transaksi
JOIN user ON transaksi.user_id = user.id
JOIN pembayaran ON transaksi.pembayaran_id = pembayaran.id
";

$result = mysqli_query($conn, $sql);

if ($result->num_rows < 0) {
    echo "Data Not Found";
}

?>