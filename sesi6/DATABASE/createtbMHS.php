<?php
    include("koneksi.php");
$tbel = "CREATE TABLE  tbMHS(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(35),
    email VARCHAR(225),
    username VARCHAR(10),
    Gender VARCHAR(225),
    tanggallahir DATE,
    idMHS VARCHAR(225)
);";

$hsl = mysqli_query($cnn , $tbel);
if($hsl){
    echo"tabel tbMHS==> sukses";
}