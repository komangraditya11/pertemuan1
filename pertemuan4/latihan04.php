<?php
    $filez= "";
    $path = "upGAMBAR/";
    if(isset($_POST["upfillex"])){
       $filez = $path .basename($_FILES["upGAMBAR"]["name"]);
       move_uploaded_file($_FILES["upGAMBAR"]["tmp_name"],$filez);
    }

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form upload file</title>
</head>
<body>
<form method="POST" action="latihan04.php" enctype="multipart/form-data">
        <div>
            upload gambar
            <input type="file" name="upGAMBAR">
        </div>

        <div>
            <button type ="submit">upload file</butoon>
        </div>
        <input type="hidden" name="upfillex"value="ok">
</form>
   <div><?="<img src='$filez' width='200'>";?>

   </div> 
</body>
</html>