<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Hier is de favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <title>PHP Basics 2209A</title>
</head>
<body>
<?php
    $title = "Het weergeven van tekst met PHP";
    $firstname = "Arjan";
    $infix = "de";
    $lastname = "Ruijter";

    $address = "Prins Hendrikstraat";
    $addressnumber = 17;

    $city = "Castricum";
    $zipcode = "1901CB";

    // Maak een variabele $city en $zipcode en echo in een zin:
    #  Ik woon in de stad: stadnaam en mijn postcode is: postcode

    echo "Hallo " . $firstname . " " . $infix . " " . $lastname . "<br>";
    echo "Ik woon in de $address huisnummer $addressnumber <br>";
    echo "Ik woon in de stad: $city en mijn postcode is: $zipcode <br>";
    echo 'Ik woon in de stad: $city en mijn postcode is: $zipcode <br>';

    // Ik zeg altijd bij een probleem: "Gewoon door blijven ademen".
    echo 'Ik zeg altijd bij een probleem:  "Gewoon door blijven ademen".<br>'; # moeilijk probleem

    // De backslash zorgt ervoor dat het teken erna letterlijk op het scherm wordt gezet.
    echo "<p class='mystyle'>Ik zeg altijd bij een probleem:  \"Gewoon door blijven ademen\".</p>";

    // DocBlock
    /**
     * Author: Arjan de Ruijter
     * date: 2-09-2022
     * Company: MBO Utrecht
     * Dit heet een docblock
     */
    

     /* Dit is een manier 
        om over meerdere regels
        wat commentaar te zetten.*/

    # Met een hashtag kun je een coderegel uitcommentariëren ()

    // Met twee maal een forwardslash kun je ook een coderegel uitcommentariëren
?>

<!-- Dit is een HTML-comment -->
<p>Deze pagina ging over:<?php echo $title ?></p>
<p><a href="../index.php">back</a></p>
   
    
</body>
</html>