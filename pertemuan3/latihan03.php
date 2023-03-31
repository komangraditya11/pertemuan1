<?php
   
   $mhs = array(
        array("NAMA"=>"boiboy","id"=>"1234","kota"=>"durian runtuh"),
        array("NAMA"=>"JARJIT","id"=>"3224","kota"=>"MALANG"),
        array("NAMA"=>"SUSANTI","id"=>"5542","kota"=>"JAKARTA"),
        array("NAMA"=>"PATRIK","id"=>"5423","kota"=>"BIKINI BUTTOM"),
   ); 

   // echo $mhs[1]["NAMA"];
   // echo "<hr>";
   // print_r($mhs);
   // echo "<hr>";

   // foreach($mhs as $dta){
      
   //    foreach($dta as $lb => $nval){
   //      echo $lb ." : " .$nval . "<br>";
   //    }
   //    echo"<br>";
   // }
   header("content-type: application/json");
   echo json_encode($mhs);