<?php
$usr="";
$ps="";
if(isset($_REQUEST["txUSER"])){
    $usr =$_REQUEST["txUSER"];
    $ps = $_REQUEST["txPASSKY"];

}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="REQUEST" action="latihan03.php">
        <div>
            user name 
            <input type="text" name="txUSER">
        </div>
        <div>
            password
            <input type="password" name="txPASSKY">
        </div>
        <div>
            <button>login</button>
        </div>
    </form>  

    <div>
        isi dari form:<br>
            1. user name: <?=$usr?><br>
            2. password : <?=$ps?>
    </div>
</body>
</html>