<?php
        include("../konfigurasi.php");
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS);
        if($cnn){
          $sql = "CREATE DATABASE " . DBNAME;
          $hsl= mysqli_query($cnn , $sql);
          if($hsl){
            echo "database" . DBNAME . "berhasil diibuat";
          }else{
            echo "database" . DBNAME ."gagal diibuat";
          }
        }
        mysqli_close($cnn);