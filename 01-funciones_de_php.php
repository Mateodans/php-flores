<?php
    // echo rand(1,10);
    // echo "<br>";
    // echo round(3.4);

    if ($_POST) {
        $mail= $_POST['mail'];
        $usuario= $_POST['usuario'];
        $contra= $_POST['contra'];
        echo strtolower($mail);
        echo strtolower($usuario);
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
    <form action="" method="post">
    <input type="text" name="usuario" id="" placeholder="user">
    <input type="email" name="mail" id="" placeholder="mail">
    <input type="password" name="contra" id="" placeholder="pass">
    <input type="submit" value="ya">
    </form>
</body>
</html>