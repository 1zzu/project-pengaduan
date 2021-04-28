<?php
    include "../api.php";

    //get id
    $idPetugas = $_GET['idPetugas'];

    //syntax
    $sql = "DELETE FROM `petugas` WHERE `petugas`.`nik` = '".$idPetugas."';";

    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "user berhasil terhapus";
    } else{
        $msg = "user gagal dihapus";
    }

    $response = array(
        'status' => 'okee',
        'msg' => $msg
    );

    echo json_encode($response);
?>