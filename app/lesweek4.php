<?php include('../functions/functions.php'); ?>
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
    <h3>Control Flow met PHP</h3>

    <?php
    
        /**
         * Zet een welkomstbericht voor de customer op het scherm:
         * Welkom terug customer
         */
        $is_admin = false;
        $is_customer = false;
        $is_hacker = false;
        
        if ($is_admin) {
            echo "Welkom terug admin<br>";
        } elseif ($is_customer) {
            echo "Welkom terug customer<br>";
        } elseif ($is_hacker) {
            echo "Je bent niet zo welkom Hacker<br>";
        } else {
            echo "Er zijn geen gebruikers om welkom te heten<br>";
        }

        $favoriteFruit = 'Sinaasappel';

        if ($favoriteFruit == 'Kiwi') {
            echo "Mijn favoriete fruitsoort is Kiwi<br>";
        } elseif ($favoriteFruit == 'Banaan') {
            echo "Mijn favoriete fruitsoort is Banaan<br>";
        } elseif ($favoriteFruit == 'Sinaasappel') {
            echo "Mijn favoriete fruitsoort is Sinaasappel<br>";
        } else {
            echo "Mijn favoriete fruitsoort zit er niet bij<br>";
        }



        $x = 12;
        $y = 8;
        // echo $x < $y;
        /**
         * Maak een if, elseif, else control flow die checked of $x kleiner/groter/gelijk is aan $y
         * De output moet zijn:
         * $x = (waarde) is groter/kleiner/gelijk aan $y = (waarde)
         */

        if ($x < $y) {
            echo '$x' . " = ($x) is kleiner dan " . '$y =' . " ($y)<br>";
        } elseif ($x > $y) {
            echo '$x' . " = ($x) is groter dan " . '$y =' . " ($y)<br>";
        } else {
            echo '$x' . " = ($x) is gelijk aan " . '$y =' . " ($y)<br>";
        }

        /**
         * Maak een if, elseif, else control flow die checked of een bepaald merk
         * auto in een indexed array zit. Gebruik daarvoor 
         * de functie in_array($teZoekenWaarde, $naamVanArray)
         */

         // Stop 5 automerken in het array
         $cars = array('BMW', 'Mercedes', 'Kia', 'Lada', 'Fiat', 'Toyota', 'Daihatsu');

         $searchCar = 'Kia';

        //  echo in_array($searchCar, $cars);

         if (in_array($searchCar, $cars)) {
            echo "$searchCar is gevonden in het array<br>";
         } else {
            echo "$searchCar is niet gevonden in het array<br>";
         }

         

         $handbag = array('Gucci', 'Armani');

         echo searchItemInArray('Gucci', $handbag);

        
        // De switch-case
        $education = "VMBO TL";

        switch ($education) {
            case 'VMBO TL':
                echo "Ik heb mijn VMBO TL diploma behaald<br>";
                echo "++++++++++++++++++++++++++++++++++++<br>";
                // Meerdere coderegels zijn toegestaan
                break;
            case 'VMBO Gemengd':
                echo "Ik heb mijn VMBO Gemengd diploma behaald<br>";
                echo "++++++++++++++++++++++++++++++++++++<br>";
                break;
            case 'VMBO Kader':
                echo "Ik heb mijn VMBO Kader diploma behaald<br>";
                echo "++++++++++++++++++++++++++++++++++++<br>";
                break;
            case 'VMBO Basis':
                echo "Ik heb mijn VMBO Basis diploma behaald<br>";
                echo "++++++++++++++++++++++++++++++++++++<br>";
                break;
            default:
                echo "De VMBO opleiding die u noemt is bij ons niet bekent<br>";
                echo "++++++++++++++++++++++++++++++++++++<br>";
        }

        /**
         * Maak van de if, elseif, else control flow die bovenaan
         * staat (over favoriteFruit) een switch - case control flow
         */

        $favoriteFruit = 'Sinaasappel';

        switch ($favoriteFruit) {
            case 'Kiwi':
                echo "Mijn favoriete fruitsoort is Kiwi<br>";
                break;
            case 'Banaan':
                echo "Mijn favoriete fruitsoort is Banaan<br>";
                break;
            case 'Sinaasappel':
                echo "Mijn favoriete fruitsoort is Sinaasappel<br>";
                break;
            default:
                echo "Mijn favoriete fruitsoort zit er niet bij<br>";
        }


        /**
         * De while control flow
         */

        $number = 1;

        while ($number < 10) {

            if ($number % 2) {
                echo "<p class='odd'>$number is oneven</p>";
            } else {
                echo "<p class='even'>$number is even</p>";
            }
            // echo "$number. is een oneven getal!<br>";
            $number = $number + 1;
        }

        /**
         * Maak een while loop die de onderstaande afbeelding maakt
         * +
         * ++
         * +++
         * ++++
         * +++++
         * ++++++
         * +++++++
         * ++++++++
         * +++++++
         * ++++++
         * +++++
         * ++++
         * +++
         * ++
         * +
         *
         * Tip $number++ verhoogt de waarde, $number-- verlaagt de waarde met een
         * echo str_repeat("+", 3) . "<br>";
         * 
         */

        $teller = 1;
         while ($teller <= 15) {
            if ($teller <= 8) {
                echo str_repeat("+", $teller) . "<br>";
            } else {
                echo str_repeat("+", 16 - $teller) . "<br>";
            }
            $teller = $teller + 1;
         }


         /**
          * Maak een do while loop
          */
        $index = 1;          
        do {
            echo "$index<br>";
            $index = $index + 1;
        } while ($index <= 20);
        
        /**
         * Maak een indexed array met 4 items
         * Zet de waarden van het array met een do while loop op het scherm
         */

         $groenten = array('Bloemkool', 'Prei', 'Wortel', 'Ui', 'Chinese Kool', 'Biet', 'Tomaat', 'Radijs');
         echo sizeof($groenten);

         $index = 0;
         do {
            echo $groenten[$index] . "<br>";
            $index = $index + 1;
         } while ($index < sizeof($groenten));


         /**
          * foreach loop
          */

         $sneakers = array('Nike' => 249, 'Sketchers' => 150, 'Adidas' => 329);

         foreach ($sneakers as $shoe => $price) {
            echo "Merk: $shoe | Prijs: $price <br>";
         }

         echo "<br>";
         echo "<hr>";
         echo "<br>";

         /**
          * Maak een associatief array $rapport met 6 vakken en het behaalde cijfer
          * zorg voor de volgende output:
          * Vak: Nederlands => cijfer: 6.7
          * Vak: Engels => 4.3
          * enz.......
          */
        
          $rapport = array(
                'Nederlands' => 6.7, 
                'Engels' => 4.3,
                'Rekenen' => 5.5,
                'Backend' => 2.5,
                'Frontend' => 6.5,
                'Gamedev' => 9.2
          ); 

          foreach ($rapport as $vak => $cijfer) {
                echo "Vak: $vak => cijfer: $cijfer<br>";
          }

          /**
           * Pas het foreach loopje aan zodat alleen de vakken met een 
           * voldoende cijfer (= hoger dan 5.5)
           * worden afgebeeld op het scherm
           */

          foreach ($rapport as $vak => $cijfer) {
            if ($cijfer >= 5.5) {
                echo "Vak: $vak => cijfer: $cijfer<br>";
          }
          
          }
    ?>
</body>
</html>