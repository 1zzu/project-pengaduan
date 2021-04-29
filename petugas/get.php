<?php
    include "../connect.php";
    include "../api.php";

    $sql = "SELECT * FROM petugas";
    $query = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_assoc($query)){
        $item[] = $data;
    }

    $response = array(
        'status' => 'oke',
        'data' => $item
    );

    echo json_encode($response);
?>