<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Proeftoets 2209A</title>
</head>
<body>
    <h3>Proeftoets</h3>

    <?php
        echo '<h4>Opgave 2</h4>';
        // Indexed array    0            1            2             3           4
        // $noot = array('Cashewnoten', 'Paranoten', 'Hazelnoten', 'Amandelen', 'Walnoten');
        $noot = array('Pindanoten', 'Tijgernoten', 'Borrelnoten', 'Kokosnoten', 'Pecannoten');

        foreach ($noot as $index => $value) {
            echo "{=" . ($index ** 2) . "=} " . $value . '<br>';
        }

        echo '<br><hr><br>';

        echo '<h4>Opgave 3</h4>';
        
        // Associatief array 
        $auto = array('Mercedes' => 120000, 'Kia' => 12000, 'BMW' => 230000, 'Audi' => 88000);

        $totalPrice = 0;
        foreach ($auto as $car => $price) {
            echo "De $car kost $price<br>";
            $totalPrice += $price;
        }
        echo "Het totaalbedrag voor het wagenprark is: $totalPrice<br>";

        echo '<br><hr><br>';

        echo '<h4>Opgave 4</h4>';

        function rekenen($getal1, $getal2, $bewerking) 
        {
            $result = "";
            if ($getal1 <= 0 || $getal2 <= 0 || !is_int($getal1) || !is_int($getal2)) {
                $result = "Error! Geef gehele getallen op groter dan 0<br>";
            } else {
                switch ($bewerking) {
                    case '+':
                        $result = "$getal1 + $getal2 = " . $getal1 + $getal2 . '<br>';
                        break;
                    case '*':
                        $result = "$getal1 * $getal2 = " . $getal1 * $getal2 . '<br>';
                        break;
                    case '/':
                        $result = "$getal1 / $getal2 = " . $getal1 / $getal2 . '<br>';
                        break;
                    case '**':
                        $result = "$getal1 ** $getal2 = " .$getal1 ** $getal2 . '<br>';
                        break;
                    default:
                        $result = "U heeft een onbekende operator meegegeven<br>";
                }
            }
            return $result;
        }

        echo rekenen(-5, 3, '**'); //Error
        echo rekenen(5, -3, '**'); //Error
        echo rekenen(5, 3, '**'); // 125
        echo rekenen(5.4, 3, '**'); //Error
        echo rekenen(5, 3.2, '**'); //Error
        echo rekenen(15, 3, '/'); //5
        echo rekenen(50, 3, '*'); //150
        echo rekenen(5, 3, '+'); //8
        echo rekenen(5, 3, '@'); // Error onbekende operator

        echo '<br><hr><br>';

        echo '<h4>Opgave 5</h4>';

        function tafelVan($getal, $startGetal = 1, $eindGetal = 10)
        {
            $result = "";
            if ( $startGetal >= $eindGetal ) {
                $result = "Error, het startgetal moet kleiner dan het eindgetal.<br>";
            } else {
                $teller = $startGetal;
                $result .= "De tafel van $getal<br>+++++++++<br>";
                while ($teller <= $eindGetal) {
                    $result .= "$getal x $teller = " . $teller * $getal . '<br>';
                    $teller++;
                }
            }
            return $result;
        }

        echo tafelVan(5, 100, 110);
        echo tafelVan(4);

        echo '<br><hr><br>';

        echo '<h4>Opgave 6</h4>';

        $sign = '&nbsp;';
        $size = 8;
        for ($i = 0; $i <= $size; $i++) {
            if ($i < $size/2) {
                echo str_repeat($sign, $i) . 'x' . str_repeat($sign, ($size - 1) - 2 * $i) . 'x<br>';
            } elseif ($i == $size/2) {
                echo str_repeat($sign, $i) . 'x<br>';
            } else {
                echo str_repeat($sign, $size - $i) . 'x' . str_repeat($sign, $i * 2 - ($size + 1)) . 'x<br>';
            }            
        }

        echo '<br><hr><br>';

        echo '<h4>Opgave 7</h4>';

        function rechthoek($lengte, $breedte) {
            $message = "";
            if ($lengte < $breedte) {
                $message .= "De lengte is kleiner dan de breedte<br>";
            }
            if (!is_int($lengte) || !is_int($breedte)) {
                $message .= "Er is minimaal één van de twee getallen niet een geheel getal<br>";
            }
            if ($lengte < 0  || $breedte < 0) {
                $message .= "Er is minimaal één negatief getal<br>";
            }
            if (empty($message)) {
                $message .= "De oppervlakte van $lengte x $breedte = " . $lengte * $breedte . '<br>';
            }
            return $message;
        }

        echo rechthoek(10, 50); //Lengte kleiner dan breedte
        echo rechthoek(10.5, 5); //Niet geheel getal
        echo rechthoek(-10, 5); // Negatief getal
        echo rechthoek(10, -5); // Negatief getal
        echo rechthoek(10, 5); 50

    ?>
</body>
</html>