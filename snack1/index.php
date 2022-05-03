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
        Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
    */

    $partite = [

        [
            'squadraCasa' => 'Treviso',
            'squadraOspite' => 'Milano',
            'puntiSquadraCasa' => 96,
            'puntiSquadraOspite' => 103,
        ],
        [
            'squadraCasa' => 'Dinamo Sassari',
            'squadraOspite' => 'Virtus Bologna',
            'puntiSquadraCasa' => 76,
            'puntiSquadraOspite' => 83,
        ],
        [
            'squadraCasa' => 'Cremona',
            'squadraOspite' => 'Trento',
            'puntiSquadraCasa' => 68,
            'puntiSquadraOspite' => 84,
        ],
        [
            'squadraCasa' => 'Reggiana',
            'squadraOspite' => 'Fortitudo Bologna',
            'puntiSquadraCasa' => 112,
            'puntiSquadraOspite' => 105,
        ],
        [
            'squadraCasa' => 'Napoli Basket',
            'squadraOspite' => 'VL Pesaro',
            'puntiSquadraCasa' => 89,
            'puntiSquadraOspite' => 90,
        ],
        [
            'squadraCasa' => 'Varese',
            'squadraOspite' => 'Brindisi',
            'puntiSquadraCasa' => 57,
            'puntiSquadraOspite' => 62,
        ],
    ]
    ?>

    <h2>Partite di basket:</h2>

    <div>
        <?php
            for ($i = 0; $i < count($partite); $i++){
                echo $partite[$i]["squadraCasa"] . ' - ';
                echo $partite[$i]["squadraOspite"] . ' | ';
                echo $partite[$i]["puntiSquadraCasa"] . '-';
                echo $partite[$i]["puntiSquadraOspite"] . '<br>';
            }
        ?>
    </div>
</body>
</html>