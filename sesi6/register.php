<?php
    include("cmd/user.php");
  //cek ;pengiriman form
  if(isset($_POST["txPASS1"])){
    if($_POST["txPASS1"] == $_POST["txPASS2"]){
        $nama  = $_POST ["txNAMA"];
        $email = $_POST ["txEMAIL"];
        $user  = $_POST ["txUSER"];
        $pass  = $_POST ["txPASS1"];
        if(createuser($nama, $email, $user, $pass) ){

        }else{

        }
    }

  }
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
    <form method="POST" action="register.php">
        <div>
            NAMA LENGKAP
            <input type="text" name="txNAMA">
        </div>
        <div>
            EMAIL
            <input type="email" name="txEMAIL">
        </div>
        <div>
            USER
            <input type="text" name="txUSER">
        </div>
        <div>
            PASSWORD
            <input type="password" name="txPASS1">
        </div>
        <div>
            VERIFIKASI PASSWORD
            <input type="password" name="txPASS2">
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>

</body>
</html>