<?php
include "../connect.php";

$idPengaduan    = isset($_POST["idPengaduan"]) ? $_POST["idPengaduan"] : "";
$isiLaporan     = isset($_POST["isiLaporan"]) ? $_POST["isiLaporan"] : "";
$foto           = isset($_POST["foto"]) ? $_POST["foto"] : "";

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
