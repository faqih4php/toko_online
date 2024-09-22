<?php 
session_start();

if (!isset($_SESSION['id'])) {
    header('Location:/toko_online/pages/login_view.php');
}

?>