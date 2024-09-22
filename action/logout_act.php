<?php 
session_start();
session_unset();
session_destroy();
header("Location: /toko_online/pages/login_view.php");

?>