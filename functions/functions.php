<?php
/**
 * Op deze pagina staan alle zelf geschreven PHP functies in dit project.
 */


/**
 * Deze functie vraagt om twee getallen in de parameterlijst
 * en geeft de som van de twee getallen terug
 */
function som($getal1, $getal2)
{
    // De getallen optellen
    $som = $getal1 + $getal2;
    // een stuk tekst teruggeven return
    return "De som van $getal1 + $getal2 = $som<br>";
}

/**
 * Deze functie stelt de gebruiker voor. De parameters zijn voornaam,
 * achternaam, leeftijd en woonplaats
 * De functie heeft als returnwaarde een string met een opsomming van bovenstaande
 * informatie
 */
function introduceYourself($firstname, $lastname, $age = 42, $city = null)
{
    if (is_null($city)) {
        $output = "om privacy redenen wordt de stad niet weergegeven";
    } else {
        $output = $city;
    }
    return "<p class='p-tag-makeup'>
                Mijn naam is: $firstname $lastname.<br>
                Mijn leeftijd is: $age<br>
                Ik woon in de stad: $output<br>
            </p>";
}

/**
 * Deze functie ....
 */

function tafel($tafel)
{
    return "De tafel van $tafel<br>
            =========<br>
            1 x $tafel = " . 1 * $tafel . "<br>
            2 x $tafel = " . 2 * $tafel . "<br>
            3 x $tafel = " . 3 * $tafel . "<br>
            4 x $tafel = " . 4 * $tafel . "<br>
            5 x $tafel = " . 5 * $tafel . "<br>
            6 x $tafel = " . 6 * $tafel . "<br>
            7 x $tafel = " . 7 * $tafel . "<br>
            8 x $tafel = " . 8 * $tafel . "<br>
            9 x $tafel = " . 9 * $tafel . "<br>
            10 x $tafel = " . 10 * $tafel . "<br>";
}

/**
 * TafelForloop()
 */
function tafelForloop($tafel)
{
    $output = "De tafel van $tafel<br>
               ==========<br>";
    for ($i = 1; $i <= 10; $i++) {
        $output .= "$i x $tafel = " . ($i * $tafel) . "<br>";
    }
    return $output;
}

// Control Flow met PHP

/**
 * Maak van de bovenstaande code een functie searchItemInArray($item, $searchArray)
 * De functie geeft een van beide strings terug:
 * Wanneer het item is gevonden in het array -> [$item] is gevonden in het array
 * Wanneer het item niet is gevonden in het array -> [$item] is niet gevonden in het array
*/

function searchItemInArray($item, $searchArray)
{
    if (in_array($item, $searchArray)) {
        return "$item is gevonden in het array<br>";
        echo "Hoi";
    } else {
        return "$item is niet gevonden in het array<br>";
    }
}
