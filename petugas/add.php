<?php
    include "../connect.php";
    // include "../api.php";

    $namaPetugas = isset($_POST["namaPetugas"]) ? $_POST["namaPetugas"] : "";
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $telp = isset($_POST["telp"]) ? $_POST["telp"] : "";
    $level = isset($_POST["level"]) ? $_POST["level"] : "";
    
    $sql = "INSERT INTO `petugas` (`namaPetugas`, `username`, `password`, `telp`, `level`) 
    VALUES ('".$namaPetugas."', '".$username."', '".$password."', '".$telp."', '".$level."');";

    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "tambah user berhasil";
    } else{
        $msg = "tambah user gagal";
    }

    $response = array(
        'status' => 'ooke',
        'msg' => $msg
    );

    echo json_encode ($response);
?>