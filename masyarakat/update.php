<?php
    include "../api.php";

    //get id
    $nik = $_GET['nik'];

    //variabel
    $nik = isset($_POST["nik"]) ? $_POST["nik"] : "";
    $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $telp = isset($_POST["telp"]) ? $_POST["telp"] : "";

    //sql
    $sql = "UPDATE `masyarakat` SET `nik` = '".$nik."', `nama` = '".$nama."', `username` = '".$username."', `password` = '".$password."', `telp` = '".$telp."' WHERE `masyarakat`.`nik` = '".$nik."'";
    // echo $sql;

    // UPDATE `barang` SET `nama_barang` = 'Kuaci Biji matahari', `jml_barang` = '3', `harga` = '1000' WHERE `barang`.`id_barang` = 'B0021';
    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "update data berhasil";
    } else{
        $msg = "update gagal";
    }

    $response = array(
        'status' => 'oke',
        'msg' => $msg
    );

    echo json_encode ($response);
?>