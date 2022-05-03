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
        Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
        Prendere il paragrafo e suddividerlo in tanti paragrafi. 
        Ogni punto un nuovo paragrafo.
    */
    
    $paragrafo = "Sapete, è geniale questa cosa che i giorni finiscono. E’ un sistema geniale. I giorni e poi le notti. E di nuovo i giorni. Sembra scontato, ma c’è del genio. E là dove la natura decide di collocare i propri limiti, esplode lo spettacolo. I tramonti.";
    
    $nuovoParagrafo = explode(".", $paragrafo);

    ?>
    
    <h2>Paragrafo scelto:</h2>
    <p>
        <?php echo $paragrafo ?>
    </p>

    <h2>Paragrafo scomposto ad ogni punto:</h2>
    <div>
        <?php
         
            for($i=0; $i < count($nuovoParagrafo); $i++){
                echo "<p>" . $nuovoParagrafo[$i] . "</p>";
            } 
        ?>
    </div>

</body>
</html>