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

// Finne det minste tallet
$min = min($tall);

// Finne det største tallet
$max = max($tall);

// Finne medianen, sortere matrisen
sort($tall);
$midten = floor(count($tall) / 2);
if (count($tall) % 2 == 0) {
    // Partall antall elementer, ta gjennomsnittet av de to midterste. Ettersom matrisen er kun 9 tall(oddetall)
    //vil denne løkken før else kun bli tellende om man skal utvide matrisen til eventuelt partall
    $medianen = ($tall[$midten - 1] + $tall[$midten]) / 2;
} else {
    // Oddetall antall elementer, er medianen midterste element
    $medianen = $tall[$midten];
}

// Skriv ut resultatene
echo "Matrisen sine tall: " . implode(", ", $tall) . "<br>";
echo "Summen av alle tall: $sum<br>";
echo "Gjennomsnitt av tallene: $gjennomsnitt<br>";
echo "Minste tall i matrisen: $min<br>";
echo "Største tall i matrisen: $max<br>";
echo "Median til matrisen: $medianen<br>";
?>
