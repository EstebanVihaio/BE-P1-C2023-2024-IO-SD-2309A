<?php
    include('../functions/functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>PHP Basics 2209A</title>
</head>

<body>
    <h3>Functies met PHP</h3>
    <hr>

    <?php
    $firstname = 'Arjan';
    echo "Mijn voornaam is: $firstname<br>";

    $firstname = 'Harry';
    echo "Mijn voornaam is: $firstname<br>";

    $firstname = 'Dirk';
    echo "Mijn voornaam is: $firstname<br>";

    echo introduceYourself('Angela', 'de Groot');
    echo introduceYourself('Desmond', 'Tutu', 82);
    echo introduceYourself('Ann-Marie', 'Presley', 78, 'Memphis');
    echo introduceYourself('Peter', 'Pan', 300, 'Neverland');

    // Opdracht 1
    // ==========
    // Maak een functie genaamd som() die twee getallen bij elkaar optelt en het resultaat teruggeeft vb:
    // som(10, 22) zet op het browserscherm die string:
    // De som van 10 + 22 = 32
    // Zet deze functie in functions.php

    // Tot 9:10 even proberen deze opgave af te maken.
    echo som(10, 22);
    echo som(2, 4);

    /**
     * Opdracht 2
     * ==========
     * Maak een functie die de tafel van een willekeurig getal weergeeft in het browserscherm
     * Hieronder zie je de tafel van 3 als voorbeeld.
     * 
     * echo tafel(3)
     * 
     * output:
     * ======
     * De tafel van 3
     * +-+-+-+-+-+-+-+
     * 1 x 3 = 3
     * 2 x 3 = 6
     * .........
     * 9 x 3 = 27
     * 10 x 3 = 30
     *
     */

     echo tafel(5);
     echo tafelForloop(10);
    ?>

    <a href="../index.php">Back</a>
</body>

</html>