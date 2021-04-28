<?php
    include "../api.php";

    //get id
    $idPetugas = $_GET['idPetugas'];

    //variabel
    $namaPetugas = isset($_POST["namaPetugas"]) ? $_POST["namaPetugas"] : "";
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $telp = isset($_POST["telp"]) ? $_POST["telp"] : "";
    $level = isset($_POST["level"]) ? $_POST["level"] : "";

    //sql
    $sql = "UPDATE `masyarakat` SET `namaPetugas` = '".$namaPetugas."', `username` = '".$username."', `password` = '".$password."', `telp` = '".$telp."', `level` = '".$level."', 
    WHERE `petugas`.`idPetugas` = '".$idPetugas."'";
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