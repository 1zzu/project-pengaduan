<?php
include "../connect.php";

$pengaduanId    = isset($_POST["pengaduanId"]) ? $_POST["pengaduanId"] : "";
$tglTanggapan   = isset($_POST["tglTanggapan"]) ? $_POST["tglTanggapan"] : "";
$petugasId      = isset($_POST["petugasId"]) ? $_POST["petugasId"] : "";
$tanggapan      = isset($_POST["tanggapan"]) ? $_POST["tanggapan"] : "";

$sql            = "INSERT INTO `tanggapan` (`pengaduanId`, `tglTanggapan`, `petugasId`, `tanggapan`) VALUES ('".$pengaduanId."', '".$tglTanggapan."', '".$petugasId."', '".$tanggapan."')";
$query          = $db->query($sql);

$queryUpdate    = "UPDATE `pengaduan` SET `status` = 'proses' WHERE `idPengaduan` = '".$pengaduanId."'";
$db->query($queryUpdate);

if($query) {
  $res = [
    "status" => "OK",
    "message" => "Pengaduan berhasil disimpan.",
    "result" => $db->insert_id
  ];
}
else {
  $res = [
    "status" => "FAIL",
    "message" => "Pengaduan gagal disimpan.",
    "result" => $db->error
  ];
}

echo json_encode($res);

?>
