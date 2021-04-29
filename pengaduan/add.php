<?php
include "../connect.php";

$nik            = isset($_POST["nik"]) ? $_POST["nik"] : "";
$tglPengaduan   = isset($_POST["tglPengaduan"]) ? $_POST["tglPengaduan"] : "";
$isiLaporan     = isset($_POST["isiLaporan"]) ? $_POST["isiLaporan"] : "";

$baseUrl        = "http://localhost/project-pengaduan/pengaduan/";
$target_dir     = "uploads/";
$target_file    = $target_dir . basename($_FILES["foto"]["name"]);

$imageFileType  = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$check          = getimagesize($_FILES["foto"]["tmp_name"]);

if($check !== false) {
  $foto         = $baseUrl . $target_file;
  move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)
} else {
  $foto         = '';
}

$status         = 'baru';

$sql            = "INSERT INTO pengaduan (nik, tglPengaduan, isiLaporan, foto, status) VALUES ('".$nik."', '".$tglPengaduan."', '".$isiLaporan."', '".$status."')";
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
    "result" => $db->error
  ];
}

echo json_endode($res);

?>
