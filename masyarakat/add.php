<?php
    include "../connect.php";
    // include "../api.php";

    $nik = isset($_POST["nik"]) ? $_POST["nik"] : "";
    $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $telp = isset($_POST["telp"]) ? $_POST["telp"] : "";
    
    $sql = "INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) 
    VALUES ('".$nik."', '".$nama."', '".$username."', '".$password."', '".$telp."');";

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