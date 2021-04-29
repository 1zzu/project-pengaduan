<?php
include "../connect.php";

$idPengaduan    = isset($_POST["idPengaduan"]) ? $_POST["idPengaduan"] : "";
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

$sql            = "UPDATE pengaduan SET isiLaporan = '".$isiLaporan."', foto = '".$foto."' WHERE idPengaduan = '".$idPengaduan."'";
$query          = $db->query($sql);

if($query) {
  $res = [
    "status" => "OK",
    "message" => "Pengaduan berhasil diedit.",
    "result" => $query->free_result()
  ];
}
else {
  $res = [
    "status" => "FAIL",
    "message" => "Pengaduan gagal diedit.",
    "result" => $db->error
  ];
}

echo json_endode($res);

?>
