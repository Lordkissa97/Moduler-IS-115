<?php
//Sjakkbrett totalt ruter 8x8 = 64
$Sjakkbrett = 64;

//vekt på hvetekorn i gram
$vektPrKorn = 0.035;

//antall gram i 1tonn (1million)
$gramPrTonn = 1000000;

//Lage Array som lagrer antall korn for hver rute
$kornPrRute = [];

//legger til korn for første rute
$kornPrRute[0] = 1;

//bruker for-løkke til å beregne antall korn pr rute med å doble antallet for hver
for ( $i = 1; $i <= $Sjakkbrett; $i++ ) {
    $kornPrRute[$i] = $kornPrRute[$i - 1] * 2;
    echo "Rute: " . $i . ". Korn: " . $kornPrRute[$i]. "<br>";
}

//deretter beregne totalt antall korn ved å summere array
$kornTotalt = array_sum($kornPrRute);

//kovertere antall korn i gram over til tonn
$kornTonn = $kornTotalt * $vektPrKorn / $gramPrTonn;

//utskrift av resultatet..
echo "Totalt antall korn: " . number_format($kornTotalt) . "<br>";
echo "Total vekt av korn i tonn: ". number_format($kornTonn, 2) . "<br>";


?>