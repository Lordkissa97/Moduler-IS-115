<?php

$tall1 = 546;
$tall2 = 1000;

//lage kalkulator med funksjon

function Differanse($tall1, $tall2) {
    //kalkulatoren
    $difference = abs($tall1 - $tall2);
    //utskrift
    echo "Differansen mellom $tall1 og $tall2 er $difference.";
}

// kalkulator resultat

Differanse($tall1, $tall2);
?>