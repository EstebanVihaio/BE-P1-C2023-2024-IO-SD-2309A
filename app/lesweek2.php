<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>PHP Basic 2209A</title>
</head>
<body>
    <h3>Datatypen met PHP</h3>

    <?php
        // String
        $school = "MBO Utrecht";
        echo "Ik zit op school bij $school<br>";

        // Integer -> zijn positieven en negatieve gehele getallen
        $population = 17440000;
        echo "Er wonen in Nederland op dit moment $population aantal mensen.<br>";
        $population = $population + 1000000;
        // $population += 1000000; 
        echo "Over twee jaar wonen er $population mensen in Nederland<br>";
        $population = $population - 3000000;
        // $population -= 3000000;
        echo "In het jaar 2045 verwachten we dat het aantal inwoner is gedaald met 3000000 tot $population inwoners<br>";
        $population *= 2;
        // $population = $population * 2;
        echo "In het jaar 2100 verwachten we dat het aantal inwoner is verdubbeld tot $population inwoners<br>";
        // $population = $population / 2;
        $population /= 2;
        echo "In het jaar 2350 verwachten we dat het aantal inwoner is gehalveerd tot $population inwoners<br>";

        // Float is een decimaal getal, dus getal positief of negatief met cijfer achter de komma.
        $gasprice = 2.15;
        $percentage = 18;
        echo "De benzineprijs is op dit moment $gasprice <br>";
        
        $gasprice = ($gasprice / 100) * $percentage + $gasprice;
        echo "Over drie weken verwachten we een prijsstijging van " . $percentage . 
             "% en dan komt de prijs op " . round($gasprice, 2) . "<br>";


        // Boolean variabelen kunnen twee waarden aannemen: true of false
        $married = true;

        if ($married) {
            echo "Ik ben getrouwd<br>";
        } else {
            echo "Ik ben niet getrouwd<br>";
        }

        // Indexed Arrays (Arrays met een index)
        $snack1 = "Mars";
        $snack2 = "Snickers";
        $snack3 = "Twix";

        echo "Ik heb trek in een " . $snack3 . "<br>";

        $snack = array("Mars", "Snickers", "Twix");

        echo "Daarna heb ik trek in een " . $snack[0] . " en een " . $snack[2] . "<br>";

        var_dump($snack3);

        var_dump($snack);

        // Foreach loop
        foreach ($snack as $index => $value) {
            echo $index . " " . $value . "<br>";
        }

        /**
         * Vul dit array met minimaal 5 van je favoriete videogames en zet ze 
         * met een foreach-loop onderelkaar op het scherm. Doe dit door het
         * maken van een ordered list
         * <ol>
         *  <li>Tomb Raider</li>
         *  <li>King Valley</li>
         * </ol>
         *  
         * */ 
        $favoritegames = array("Tomb Raider", "Kings Valley", "The Blob", "Aliens", "The Shining");
        // $favoritegames = ["Tomb Raider", "Kings Valley", "The Blob", "Aliens", "The Shining"];

        var_dump($favoritegames);

        // Veranderen van een array waarde
        $favoritegames[1] = "Kings Valley II";

        var_dump($favoritegames);
        
        // Gebruiken van foreach voor een ordered List 
        echo "<ol>";
        foreach ($favoritegames as $key => $item) {
            echo "<li>" . $item . "</li>";
        }
        echo "</ol>";

        echo "Voorbeeld van een selecttag";
        echo "<select>";
        foreach ($favoritegames as $key => $item) {
            echo "<option>" . $item . "</option>";
        }
        echo "</select>";


        // Het associatieve array
        $naw = array("firstname"  => "Arjan",
                     "infix"      => "de", 
                     "lastname"   => "Ruijter", 
                     "address"    => "Prins Hendrikstraat", 
                     "addressnumber" => 45, 
                     "zipcode"    => "2100AB", 
                     "married"    => true);

        var_dump($naw);

        $naw["addressnumber"] = 145;

        foreach ($naw as $index => $item) {
            echo $index . ": " . $item . "<br>";
        }


        /**
         * Zet in een associatief array 5 gegevens van de snelste auto ter wereld
         */

        $fastestCar = array('name' => 'Bugatti Chiron Super Sport 300+',
                            'streetlegal' => true,
                            'motor' => '8 liter quad turbo',
                            'power' => 1577,
                            'topspeed' => 490);

        var_dump($fastestCar);

        $streetlegal = "";
        if ($fastestCar['streetlegal']) {
            $streetlegal = "straatlegaal";
        } else {
            $streetlegal = "niet straatlegaal";
        }

        echo "Snelste auto ter wereld is de " . $fastestCar["name"] . " Hij is $streetlegal. 
              Met een vermogen van {$fastestCar['power']}pk haal je een topsnelheid 
              van {$fastestCar['topspeed']}km/u
              . Dit komt door de {$fastestCar['motor']} motor";
        

        // Multidimensionale arrays

        $users = array(
            array('Arjan', 'de', 'Ruijter'), 
            array('Bert', 'de', 'Vries'), 
            array('Jaap', 'van', 'Sweeden')
        );

        var_dump($users);

        /**
         * Opdracht: maak de onderstaande output met het multidimensionale array $users:
         * 1. Arjan de Ruijter
         * 2. Bert de Vries
         * 3. Jaap van Sweeden
         * 
         * Tip: gebruik een foreach-loop
         */

         foreach ($users as $index => $value) {
            echo ($index + 1). ". ";
            foreach ($value as $in => $val) {
                echo $val . " ";
            }
            echo "<br>";
         }
    ?>

       

</body>
</html>