<?php 
include '../../connection/connection.php';
$id = $_SESSION['id'];
$sql = "SELECT SUM(transaksi.total_harga) as pengeluaran_bulan_ini FROM transaksi
WHERE MONTH(tanggal_transaksi) = MONTH(NOW())
AND transaksi.user_id = $id
AND transaksi.status = 2";

$result = $conn->query($sql);

if($result->num_rows > 0 ){
    $data = $result->fetch_assoc();   
}else{
    $data['pengeluaran_bulan_ini'] = 0;
}
?>