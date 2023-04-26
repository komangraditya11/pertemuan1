<?php
  include("DATABASE/koneksi.php");
  function createuser($nama, $email, $user, $password){
    $stt = false;
    $iduser = md5($user);
    $sql = "INSERT INTO tbuser(nama, email, username, passkey, induser)VALUES(
       ' $nama'
        '$email'
        '$user'
        '$password'
        '$iduser'
    );";
    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die ("koneksi ke DBMS mysql gagal");
    $stt = mysqli_query($cnn,$sql);
     return $stt;
}