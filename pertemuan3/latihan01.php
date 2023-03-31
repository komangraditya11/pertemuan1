<?php
$cars = array("volvol","bmw","toyota","daihatsu");

$jmldta = count($cars);
echo "jumlah data:".$jmldta."<br>";
for($i=0;$i<3;$i++){

    echo "<br>kendaraan ". $cars[$i];


};

echo "<hr>";

echo "<ol class=\"mobil\">";

foreach($carsas $dta){
    echo "<li>kendaraan ".$dta. "</li>";
}
echo "</ol>";