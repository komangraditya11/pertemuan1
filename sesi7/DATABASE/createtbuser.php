<?php
    include("koneksi.php");
$tbel = "CREATE TABLE  tbUSER(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(35),
    email VARCHAR(225),
    username VARCHAR(10),
    passkey VARCHAR(225),
    iduser VARCHAR(225)
);";

$hsl = mysqli_query($cnn , $tbel);
if($hsl){
    echo"tabel tbUSER==> sukses";
}