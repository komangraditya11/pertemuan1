<?php
    session_start():
    include("cmd/user.php")
    if(isset($_POST["txUSER"])){
        $user = $_POST["txUSER"];
        $pwd = $_POST["txPASS"];

        $islogin = ceklogin($user, $pwd);
        if($islogin){
            $_session["login"]=md5($user);
            $_session["NAMA"] = $islogin["NAMA"];
            header("location: dashboard.php");
        }else{
            $_session["login"]= "";
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
    <form action="login.php" method="POST">
        <h3>form login</h3>
        <div>
            user name 
            <input type="text" name="txUSER">
        </div>
        <div>
            password
            <input type="password" name="txPASS">
        </div>
        <div>
            <button type="submit">login</button> 
        </div>
</form>
</body>
</html>