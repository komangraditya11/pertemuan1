<?php
        include("konfigurasi.php");
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die ("koneksi ke DBMS mysql gagal");
        
        // if($cnn){
        //     echo"koneksi ke DBMS mysql sukses";
        // }else{
        //     echo"koneksi ke DBMS mysql gagal";
        // }
        
        // mysqli_close($cnn);
