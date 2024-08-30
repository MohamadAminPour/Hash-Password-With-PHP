<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
        <form action="" method="POST">
            <input type="text" placeholder="Your Password" name="password">
            <button name="sub" type="submit">Hashing</button>
        </form>
</body>
</html>


<?php
    if(isset($_POST['sub'])){
        $password = $_POST['password'];

        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        echo 'Your Hashed Password : ' . $hashPassword;

    }


?>