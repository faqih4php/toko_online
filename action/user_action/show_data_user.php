<?php 
    include '../../connection/connection.php';

    $sql = "SELECT * from user";

    $result = $conn->query($sql);

    if($result->num_rows < 0) {
        echo 'data tidak ada';
    }

?>