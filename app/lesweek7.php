<?php include('../classes/Person.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>PHP Basic Classes en Objects</title>
</head>
<body>
    <h3>Classes en Objects</h3>

    <?php 

    // We maken een object van de class
    $person1 = new Person();

    // We kunnen properties weergeven d.m.v. het object->propertyname
    echo $person1->firstname . '<br>';

    // We kunnen property-waarden wijzigen
    $person1->firstname = 'Bert';

    // We kunnen de nieuwe waarde echoën...
    echo $person1->firstname . '<br>';

    /**
     * Opdracht:
     * Maak twee properties genaamd $infix en $lastname. Geef deze een waarde in de class.
     * Maak een nieuw object en probeer de onderstaande output te maken:
     * Hallo allemaal, mijn naam is Arjan de Ruijter
     */
    $person2 = new Person('Harry');
    echo "Hallo allemaal, mijn naam is $person2->firstname $person2->infix $person2->lastname<br>";


    /**
     * Opdracht:
     * Maak een nieuw object van de class Person en geeft aan de constructor een 
     * voornaam, tussenvoegsel en achternaam mee en probeer de onderstaande output te krijgen
     * Hallo allemaal, mijn naam is Tim van den Berg
     */
    $person3 = new Person('Tim', 'van den', 'Berg');
    echo "Hallo allemaal, mijn is $person3->firstname $person3->infix $person3->lastname<br>";


    $person4 = new Person('Tim', '', 'Burton');
    echo $person4->sayHello();

    /**
     * Opdracht:
     * Maak een nieuwe method sayGoodbye() in de class Person.
     * Maak een nieuw object en roep deze method aan. 
     */

    $person5 = new Person('Amelia', '', 'Stilton');
    echo $person5->sayGoodbye();

    /**
     * Opdracht:
     * Maak een class BankAccount met twee properties: $accountNumber en $balance
     * Maak verder twee method: deposit($amount) en withDraw(amount)
     * Maak een constructor die gebruik maakt van constructor promotion.
     * Maak een object aan. Stort 1000 euro op de rekening en Haal 1200 euro ervanaf.
     */
    ?>
</body>
</html>

