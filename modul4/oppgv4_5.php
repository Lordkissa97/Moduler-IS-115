<?php
// Definer en større matrise med tall fra 1 til 100
$mulige_tall = range(1, 100);

// Bruk array_rand()for å trekke ut ni tilfeldige tall +
// array_flip gjør verdiene om til nøkler slik a tilfeldige tall kan trekkes direkte
$tall = array_rand(array_flip($mulige_tall), 9);

// Regn ut summen av tallene
$sum = array_sum($tall);

// Regn ut gjennomsnittet av tallene
$gjennomsnitt = $sum / count($tall);

// Finn det minste tallet
$min = min($tall);

// Finn det største tallet
$max = max($tall);

// Finne medianen, sortere matrisen
sort($tall);
$midten = floor(count($tall) / 2);
if (count($tall) % 2 == 0) {
    // Hvis partall antall elementer, ta gjennomsnittet av de to midterste
    $median = ($tall[$midten - 1] + $tall[$midten]) / 2;
} else {
    // Hvis oddetall antall elementer, er medianen midterste element
    $median = $tall[$midten];
}

// Skriv ut resultatene
echo "Matrisen: " . implode(", ", $tall) . "<br>";
echo "Sum: $sum<br>";
echo "Gjennomsnitt: $gjennomsnitt<br>";
echo "Minste tall: $min<br>";
echo "Største tall: $max<br>";
echo "Median: $median<br>";
?>
