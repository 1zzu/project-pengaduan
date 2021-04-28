<?php
	//diisi dengan hosnya username, password, dan nama database
	// $conn = mysqli_connect("localhost", "root", "", "pengaduan");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "pengaduan";

    $conn = mysqli_connect($servername, $username, $password, $databasename);
    if(!$conn){
        die("koneksi gagal");
    }
?>
