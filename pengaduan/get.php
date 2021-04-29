<?php
include "../connect.php";

$sql    = "SELECT m.nik, m.nama, m.username, m.telp, p.idPengaduan, p.tglPengaduan, p.isiLaporan, p.foto, p.status";
$sql   .= " FROM pengaduan p JOIN masyarakat m ON p.nik = m.nik ";

// if set id => /get.php?id=x
if(isset($_GET['id'])) {
  $sql .= "WHERE p.idPengaduan = '".$_GET['id']."' ";
}

$sql   .= "ORDER BY p.idPengaduan DESC";
// echo $sql;
// die();
$query  = $db->query($sql);
$temp   = [];

while($row = $query->fetch_assoc()) {
  array_push($temp, $row);
} 

$res = [
  "status" => "OK",
  "message" => "Data pengaduan masyarakat",
  "result" => $temp
];

echo json_encode($res);

?>
