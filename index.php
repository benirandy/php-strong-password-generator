<?php

        if (isset($GET['lunghezza'])) {

        }

        function generatePassword($passwordLenght){

            $result = "";

            $alphabet = "acdefghijklmnopqrstuvwxyz";
            $numbers = "0123456789";
            $symbols = "=?^()/&%$#]+";

            $fullCharacters = $alphabet . strtoupper($alphabet) . $numbers .$symbols;

            if (empty($passwordLenght)) {
             $result = "il parametro l dove non è valido?";
            } elseif ( $passwordLenght < 8 |$passwordLenght > 32) {
             $result = "la lunghezza della password deve essere compresa tra 8 e 32 caratteri";
             } else {
                $password = "";

                for($i = 0; $i < $passwordLenght; $i++) {
                    $index = rand(0, strlen($fullCharacters));

                    $password .= $fullCharacters[$index];
                }
             }

             
            return $result;

        }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<main>
<div class="container">
    <form method="GET" action="index.php">
        <div class="mb-3">
            <label for="lunghezza" class="form-label">Lunghezzza Password</label>
            <input type="number" class="form-control" id="lunghezza" name="lunghezza" min="8" max="32">
            <div class="form-text">La lunghezza deve essere compresa tra 8 e 32 caratteri</div>
        </div>
        
      <button type="submit" class="btn btn-primary">Genera Password</button>
    </form>
</div>
<main>
</body>
</html>