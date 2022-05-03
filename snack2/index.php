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
        Passare come parametri GET name, mail e age e verificare
        (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
        che mail contenga un punto e una chiocciola e che age sia un numero.
        Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    */

    $nome = $_GET["nome"];
    $mail = $_GET["mail"];
    $età = $_GET["età"];
    
    if (strlen($nome) > 3 && strpos($mail, "@") && strpos($mail, ".") && is_numeric($età)){
        echo("Accesso riuscito");
    } else {
        echo("Accesso negato");
    }
    ?>
</body>
</html>