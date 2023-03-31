<?php
$age = array("peter"=>"35","ben"=>"37","joe"=>"43");

echo " umur dari joe ".$age["joe"]. "tahun <br>";

echo "<hr>";

foreach($age as $nama => $umur){
    echo" umur dari " .$nama." : ".$umur."<br";

}