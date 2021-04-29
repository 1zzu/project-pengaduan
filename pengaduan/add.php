<?php
include "../connect.php";

$nik            = isset($_POST["nik"]) ? $_POST["nik"] : "";
$tglPengaduan   = isset($_POST["tglPengaduan"]) ? $_POST["tglPengaduan"] : "";
$isiLaporan     = isset($_POST["isiLaporan"]) ? $_POST["isiLaporan"] : "";
$foto           = isset($_POST["foto"]) ? $_POST["foto"] : "";

$status         = 'baru';

$sql            = "INSERT INTO pendaduan (nik, tglPengaduan, isiLaporan, foto, status) VALUES ('".$nik."', '".$tglPengaduan."', '".$isiLaporan."', '".$status."')";
$query          = $db->query($sql);

if($query) {
  $res = [
    "status" => "OK",
    "message" => "Pengaduan berhasil disimpan.",
    "result" => $query->insert_id
  ];
}
else {
  $res = [
    "status" => "FAIL",
    "message" => "Pengaduan gagal disimpan.",
    "result" => 0
  ];
}

echo json_endode($res);

?>
