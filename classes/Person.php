<?php
/**
 * Deze class is gemaakt voor het registreren van persoonsgegevens
 * Author: Arjan de Ruijter
 * Datum: 21-10-2022
 */
class Person
{
    // Property
    public $firstname;
    public $infix;
    public $lastname;

    // Constructor method (functie binnen een class heet een method). Deze wordt
    // automatisch aangeroepen wanneer je een nieuw object maakt.
    public function __construct($firstname = 'Arjan', $infix = 'de', $lastname = 'Ruijter')
    {
        // echo "er is een nieuw object aangemaakt<br>";
        $this->firstname = $firstname;
        $this->infix = $infix;
        $this->lastname = $lastname;
    }

    // Dit is een nieuwe method en deze moet je zelf aanroepen.
    public function sayHello()
    {
        return "Hallo allemaal, mijn naam is: $this->firstname $this->infix $this->lastname<br>";
    }

    // Dit is de nieuwe method sayGoodbye()
    public function sayGoodbye()
    {
        return "Adióóóós allemaal, Greetings from:  $this->firstname $this->infix $this->lastname<br>";
    }
}