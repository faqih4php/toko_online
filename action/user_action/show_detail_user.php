<?php 

    include '../../connection/connection.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE id = $id";
    $result = $conn->query($sql);

    if($result->num_rows < 0) {
        echo 'Data Not Found';
    }else {
        $data = $result->fetch_assoc();
    }

?>