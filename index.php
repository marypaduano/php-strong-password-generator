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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>  
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center">
                       <h2>Password Generate</h2> 
                    </div>
                    <div class="card-body">
                        <form method="GET" class="row">
                            <div class="input-group d-flex justify-content-between">
                                <h4>Lunghezza della password: </h4>
                                <input type="number" name="number" min="5" max="20">
                                <button class="btn btn-primary">Genera Password</button>                              
                            </div>                           
                        </form>
                    <div>     
                </div>
            </div>
        </div>    
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">           
                <h5>Ecco la tua nuova password di <?php echo $password_length ?> caratteri: </h5>
                <h2><?php echo $password ?></h2>
                <p>ora si che sei al sicuro!</p> 
            </div>
        </div>
    </div>
</body>
</html>