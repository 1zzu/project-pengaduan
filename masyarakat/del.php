<?php
    include "../api.php";

    //get id
    $nik = $_GET['nik'];

    //syntax
    $sql = "DELETE FROM `masyarakat` WHERE `masyarakat`.`nik` = '".$nik."';";

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