<?php
    include "../api.php";

    //get id
    $idTanggapan = $_GET['id'];

    //syntax
    $sql = "DELETE FROM `tanggapan` WHERE `tanggapan`.`idTanggapan` = '".$idTanggapan."';";

    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "tanggapan berhasil terhapus";
    } else{
        $msg = "tanggapan gagal dihapus";
    }

    $response = array(
        'status' => 'okee',
        'msg' => $msg
    );

    echo json_encode($response);
?>