<?php

$tall1 = 546;
$tall2 = 232;

//lage kalkulator med funksjon

function Differanse($tall1, $tall2) {
    //kalkulatoren
    $difference = $tall1 - $tall2;
    //utskrift
    echo "Differansen mellom $tall1 og $tall2 er $difference.";
}

// kalkulator resultat

Differanse($tall1, $tall2);
?>