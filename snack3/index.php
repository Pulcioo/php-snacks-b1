<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks blocco 1</title>
</head>
<body>
    <?php
    /*
        Creare un array con 15 numeri casuali, 
        tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
    */

    $arrayNumeriRandom = [];

    while(count($arrayNumeriRandom) < 15) {
        $numero = rand(1, 100);

        if(!in_array($numero, $arrayNumeriRandom)) {
            $arrayNumeriRandom[] = $numero;
        }
    }

    echo "<pre>";
    var_dump($arrayNumeriRandom);
    echo "<pre>";
    
    ?>
</body>
</html>