<?php
    include "../connect.php";
    include "../api.php";

    $sql = "SELECT * FROM masyarakat";
    $query = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_array($query)){
        $item[] = array(
            'nik' => $data["nik"],
            'nama' => $data["nama"],
            'username' => $data["username"],
            'no.telpon' => $data["telp"]
        );
    }

    $response = array(
        'status' => 'oke',
        'data' => $item
    );

    echo json_encode($response);
?>