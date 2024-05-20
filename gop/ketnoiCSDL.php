<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "tentest"; //Tên database nhập đúng tên vì tentest là tên treeb máy t 

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error){
        die("Kết nối thất bại" .$conn->connect_error);
    }
?>