<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
<?php

$password_length = $_GET['number'];

function password_generate($password_length){
    $text = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!&';
    $password = '';
for ($i = 0; $i < $password_length; $i++) {
    $random_password = random_int(0 , (strlen($text) - 1));
    $password .= $text[$random_password];
    }
    return $password;
}

$password = password_generate($password_length);            
?>
    
</body>
</html>