<?php
session_start()

if(isset($_SESSION["login"])){
    if(!$_SESSION["LOGIN"]=""){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    datamahasiswa datamatakuliah datadosen datauser <a herf="?act=logout">logout</a>
    <a herf="?act=logout">logout</a>
</body>
</html>
<?php
    }else{
        header("location: login.php"):
    }
}else{
    header("location: login.php"):
}
?>