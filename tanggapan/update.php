<?php
    include "../api.php";

    //get id
    $idTanggapan = $_GET['id'];

    //variabel
    $tanggapan = isset($_POST["tanggapan"]) ? $_POST["tanggapan"] : "";

    $sql = "UPDATE `tanggapan` SET `tanggapan` = '".$tanggapan."' WHERE `tanggapan`.`idTanggapan` = '".$idTanggapan."'";

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