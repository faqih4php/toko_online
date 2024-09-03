<?php 
session_start();
include '../../connection/connection.php';

$id = $_POST['id'];
$nama = $_POST['nama'];

$sql = "UPDATE kategori_produk SET nama = '$nama' WHERE id = $id";

// if ($conn->query($sql) == true){
//     echo "script>alert('Update Succces');</script>";
//     echo "<script>location.href = '../../pages/kategori/index.php';</script>";
// }else {
//     echo "<script>alert('Update Failed');</script>";
//     echo "<script>location.href = '../../pages/kategori/index.php';</script>";
// }
    
if ($conn->query($sql) == true) {
    $_SESSION['msg'] = "Kategori Berhasil Diubah";
    header('Location:../../pages/kategori/index.php');
}else{
    $_SESSION['msg_err'] = "Kategori Gagal Diubah";
    header('Location:../../pages/kategori/index.php');
}


// if ($conn->query($sql) == true) {
//     echo "<script>alert('Update Succces');</script>";
//     echo "<script>location.href = '../../pages/kategori/index.php';</script>";
// }else {
//     echo "<script>alert('Update Failed');</script>";
//     echo "<script>location.href = '../../pages/kategori/index.php';</script>";
// }

?>