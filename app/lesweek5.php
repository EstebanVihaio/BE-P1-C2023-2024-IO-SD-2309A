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
    <h3>Operatoren met PHP</h3>

    <h5>Assignment Operator (toewijzings operator)</h5>
    <hr>
    <?php
        $teller = 5;
        echo 'Met de toewijzingsoperator genaamd "=" kun je een waarde in de variabele $teller zetten<br>';
        echo 'code: $teller = 5;<br>';
        echo 'output: $teller = ' .$teller . '<br>';

        echo '<br>';
        echo '<hr>';
        echo '<br>';

        $teller = $teller + 15;
        echo 'Met de toewijzingsoperator genaamd "=" kun je een waarde in de variabele verhogen met 15<br>';
        echo 'code: $teller = $teller + 15;<br>';
        echo 'output: $teller = ' .$teller . '<br>';
    ?> 
    <h5>Arithmetic Assignment Operator (rekenkundige toewijzings operator)</h5>
    <hr>
    <?php
        echo '<h5>+=</h5>';
        $teller += 30;
        echo 'Met de rekenkundige toewijzings operator "+=" wordt $teller opgehoogd met 30<br>';
        echo 'code: $teller += 30<br>';
        echo 'output: $teller = ' . $teller . '<br>';

        echo '<hr>';

        echo '<h5>-=</h5>';

        $teller -= 10;
        echo 'Met de rekenkundige toewijzings operator "-=" wordt $teller verlaag met 10<br>';
        echo 'code: $teller -= 10<br>';
        echo 'output: $teller = ' . $teller . '<br>';

        echo '<h5>/=</h5>';

        $teller /= 4;
        echo 'Met de rekenkundige toewijzings operator "/=" wordt $teller gedeeld door 4<br>';
        echo 'code: $teller /= 4<br>';
        echo 'output: $teller = ' . $teller . '<br>';

        echo '<h5>*=</h5>';

        $teller *= 10;
        echo 'Met de rekenkundige toewijzings operator "*=" wordt $teller vermenigvuldigd met 10<br>';
        echo 'code: $teller *= 10<br>';
        echo 'output: $teller = ' . $teller . '<br>';

        echo '<h5>**=</h5>';

        $teller **= 3;
        echo 'Met de rekenkundige toewijzings operator "**=" wordt $teller tot de macht 3 verheven<br>';
        echo 'code: $teller **= 3<br>';
        echo 'output: $teller = ' . $teller . '<br>';


        echo '<h5>%=</h5>';

        $teller %= 100000;
        echo 'Met de rekenkundige toewijzings operator "%=" wordt $teller modulus 100000 berekent<br>';
        echo 'code: $teller %= 100000<br>';
        echo 'output: $teller = ' . $teller . '<br>';
    ?>
    <h5>De increment en decrement operator</h5>
    <hr>
    <?php
         echo '<h5>++</h5>';

         $teller++;
         echo 'Met de increment operator "++" wordt $teller met 1 verhoogd<br>';
         echo 'code: $teller++<br>';
         echo 'output: $teller = ' . $teller . '<br>';

         echo '<h5>--</h5>';

         $teller--;
         echo 'Met de decrement operator "--" wordt $teller met 1 verlaagd<br>';
         echo 'code: $teller--<br>';
         echo 'output: $teller = ' . $teller . '<br>';
    ?>
    <h5>Comparison operators</h5>
    <hr>
    <?php
         echo '<h5>==</h5>';         
         echo 'Met de comparison operator "==" worden twee waarden vergeleken. Als ze gelijk zijn is de uitkomst true<br>';
         echo 'code: var_dump($teller == 0)<br>';
         echo 'output:<br>';
         var_dump($teller == 0);

         echo '<h5>!=</h5>';         
         echo 'Met de comparison operator "!=" worden twee waarden vergeleken. Als ze niet gelijk zijn is de uitkomst true<br>';
         echo 'code: var_dump($teller != 1)<br>';
         echo 'output:<br>';
         var_dump($teller != 1);

         echo '<h5>===</h5>';         
         echo 'Met de comparison operator "===" worden twee waarden vergeleken. Als ze gelijk zijn 
         en van hetzelfde datatype is de uitkomst true<br>';
         echo 'code: var_dump($teller === "0")<br>';
         echo 'output:<br>';
         var_dump($teller === "0");

         echo '<h5>!==</h5>';         
         echo 'Met de comparison operator "!==" worden twee waarden vergeleken. Als ze gelijk zijn en van 
         hetzelfde datatype is de uitkomst false<br>';
         echo 'code: var_dump($teller !== 0)<br>';
         echo 'output:<br>';
         var_dump($teller !== 0);

         echo '<h5>></h5>';         
         echo 'Met de comparison operator ">" worden twee waarden vergeleken. Als de linker waarde groter is dan
         de rechter waarde is de uitkomst true<br>';
         echo 'code: var_dump($teller > -5)<br>';
         echo 'output:<br>';
         var_dump($teller > -5);


         echo '<h5>>=</h5>';         
         echo 'Met de comparison operator ">=" worden twee waarden vergeleken. Als de linker waarde groter 
         of gelijk is dan de rechter waarde is de uitkomst true<br>';
         echo 'code: var_dump($teller >= 0)<br>';
         echo 'output:<br>';
         var_dump($teller >= 0);

         echo '<h5><</h5>';         
         echo 'Met de comparison operator "<" worden twee waarden vergeleken. Als de linker waarde kleiner is dan
         de rechter waarde is de uitkomst true<br>';
         echo 'code: var_dump($teller < 5)<br>';
         echo 'output:<br>';
         var_dump($teller < 5);

         echo '<h5><=</h5>';         
         echo 'Met de comparison operator "<=" worden twee waarden vergeleken. Als de linker waarde kleiner of gelijk 
         is aan de rechter waarde is de uitkomst true<br>';
         echo 'code: var_dump($teller <= 0)<br>';
         echo 'output:<br>';
         var_dump($teller <= 0);
    ?>
    <h5>De AND (&&) operator (beide beweringen moeten waar zijn om AND waar te maken</h5>
    <hr>
    <?php
        $getal1 = 20;
        $getal2 = 6;
        echo '$getal1 > 10 && $getal2 < 5';
        var_dump($getal1 > 10 && $getal2 < 5);
    ?>

    <h5>De OR (||) operator (één van de beweringen moet waar om de OR waar te maken)</h5>
    <hr>
    <?php
        $getal1 = 20;
        $getal2 = 6;
        echo '$getal1 > 10 || $getal2 < 5';
        var_dump($getal1 > 10 || $getal2 < 5);

        /**
         * Maak een functie happyFewClubTest($maleOrFemale, $salary). Deze functie test 
         * of een persoon een vrouw is en meer verdient als 156321 euro per jaar. 
         * In dat geval is de return waarde: U bent toegelaten tot de rijke vrouwen club. 
         * Er is is een uitzondering: ook de zangeres Rihanna wordt toegelaten zonder
         *  bovenstaande eisen In alle andere gevallen is de return waarde:
         *  U voldoet niet aan de criteria voor toelating
         */

         function happyFewWomensClub($maleOrFemale, $salary, $name = null) 
         {
            if ((($maleOrFemale == 'female') && ($salary > 156321)) || ($name == 'Rihanna')) {
                return "U bent toegelaten tot de rijke vrouwen club<br>";
            } else {
                return "U voldoet niet aan de criteria voor toelating<br>";
            }
         }

         echo happyFewWomensClub('female', 200000); //toegelaten
         echo happyFewWomensClub('male', 200000);   //geweigerd
         echo happyFewWomensClub('male', 20, 'Rihanna'); //toegelaten
         echo happyFewWomensClub('female', 200); //geweigerd



/**
 * Maak een functie die de BMI berekent aan de hand van je lengte in meters
 * en je gewicht in kilogram. BMI = gewicht/(lengte ** 2)
 * De functie geeft als return waarde:
 * BMI lager dan 18.5
 * Uw BMI is 16 U heeft ondergewicht
 * BMI tussen 18.5 en 25
 * Uw BMI is 19.4 U heeft een normaal gewicht.
 * BMI tussen 25 en 27
 * Uw BMI is 26.6 U heeft licht overgewicht.
 * BMI tussen 27 en 30
 * Uw BMI is 28 U heeft matig overgewicht.
 * BMI tussen 30 en 40
 * Uw BMI is 33 U heeft ernstig overgewicht.
 * BMI meer dan 40
 * Uw BMI is 80 U heeft ziekelijke (morbide) overgewicht.
 *
 * function bmi($lengte, $gewicht)
 */

 function bmi($gewicht, $lengte)
 {    
    $bmi = $gewicht / $lengte ** 2;  // Bereken BMI
    $bmi = round($bmi, 1); // Ronde de BMI af op 1 getal achter de komma
    if ($bmi < 18.5) {
        return "Uw BMI is $bmi, U gewicht is te laag<br>";
    } elseif ($bmi >= 18.5 && $bmi <= 25) {
        return "Uw BMI is $bmi, U heeft een normaal gewicht<br>";
    } elseif ($bmi > 25 && $bmi <= 27) {
        return "Uw BMI is $bmi, U heeft licht overgewicht<br>";
    } elseif ($bmi > 27 && $bmi <= 30) {
        return "Uw BMI is $bmi, U heeft matig overgewicht<br>";
    } elseif ($bmi > 30 && $bmi <= 40) {
        return "Uw BMI is $bmi, U heeft ernstig overgewicht<br>";
    } else {
        return "Uw BMI is $bmi, U heeft ziekelijk (morbide) overgewicht<br>";
    }
 }

 echo bmi(50, 2) . '<br>';
 echo bmi(100, 2) . '<br>';
 echo bmi(85, 1.8) . '<br>';
 echo bmi(92, 1.82) . '<br>';
 echo bmi(105, 1.85) . '<br>';
 echo bmi(200, 2) . '<br>';
    
 echo '<br>';
 echo '<hr>';
 echo '<br>';
 /**
 * Maak een functie die een array als parameter meekrijgt. 
 * De functie berekent dan de som van alle waarden in het array
 * en geeft aan of dit een even of oneven getal is.
 * Een voorbeeld output kan zijn:
 * De som van alle arraywaarden is: 57. Dit is een oneven getal.           *
 */
 $testArray = array(3, 6, 9, 23, 12);

 function oddOrEven($array)
 {
    $som = 0;
    foreach ($array as $value) {
        $som += $value;
    }    
    if ($som % 2) {
        return "De som van alle arraywaarden is $som. Dit is een oneven getal<br>";
    } else {
        return "De som van alle arraywaarden is $som. Dit is een even getal<br>";
    }
 }

echo oddOrEven($testArray);
echo oddOrEven(array(3, 4, 9, 12, 45, 23, 6));
echo oddOrEven([3, 4, 7, 12, 67, 3, 7, 88]);

/**
 * Maak een functie searchLetterInWord($word, $letter) die een string meekrijgt als argument en een letter. 
 * De functie checked of de letter in de string voorkomt. 
 * Voor de argumenten searchLetterInWord('museum', 'o') is de output dan:
 * In het woord 'museum' komt de letter 'o' niet voor
 * 
 * Voor de argumenten searchLetterInWord('museum', 'u') is de output dan:
 * In het woord 'museum' komt de letter 'u' voor.
 */
$word = "museum";
echo $word[2];
var_dump($word);
var_dump(str_split($word));

function searchLetterInWord($word, $letter)
{
    $teller = 0;
    foreach (str_split($word) as $character) {
        if ($character == $letter) {
            $teller++;
        }
    }
    if ($teller > 0) {
        return "In het woord '$word' komt de letter '$letter' $teller keer voor.<br>";
    } else {
        return "In het woord '$word' komt de letter '$letter' niet voor.<br>";
    }
}

echo searchLetterInWord('museum', 'u');
echo searchLetterInWord('museum', 'j');


/**
 *  Maak een functie randomValueCounter($min, $max, $amountOfRandomNumbers).
 *  Deze function heeft 3 parameters. Deze functie maakt random getallen 
 *  tussen de $min en $max waarden voor een gegeven aantal malen ($amountOfRandomNumbers)
 *  Laat de functie berekenen hoeveel random getallen boven, gelijk aan en onder het gemiddelde zitten.
 * 
 *  randomValueCounter(1, 10, 10) // Output: Er zijn:   
 *                                           3 getallen kleiner dan 5
 *                                           2 getallen gelijk aan 5
 *                                           5 getallen groter dan 5
 */
// echo rand(1, 10) . '<br>';
// echo rand(1, 10) . '<br>';
// echo rand(1, 10) . '<br>';
// echo rand(1, 10) . '<br>';
// echo rand(1, 10) . '<br>';

function randomValueCounter($min, $max, $amountOfRandomNumbers)
{
    $main = ($min + $max)/2;
    $countLessThen = 0;
    $equals = 0;
    $countMoreThen = 0;
    for ($i = 0; $i < $amountOfRandomNumbers; $i++)
    {
        $randomNumber = rand($min, $max);
        if ($randomNumber < $main) {
            $countLessThen++;
        } elseif ($randomNumber == $main) {
            $equals++;
        } else {
            $countMoreThen++;
        }
    }
    return "Er zijn<br>
            $countLessThen getallen kleiner dan $main<br>
            $equals zijn gelijk aan $main<br>
            $countMoreThen zijn groter dan $main<br>";
}

echo randomValueCounter(1, 10,10);
echo randomValueCounter(6, 13,10);
?>

    
</body>
</html>