<?php 
//lage array for å sette sammen kommune og fylke
$KommuneogFylke = [
    "Kristiansand"=> "Agder",
    "Lillesand"=> "Agder",
    "Birkenes"=> "Agder",
    "Harstad"=> "Troms og Finnmark",
    "Kvøfjord"=> "Troms og Finnmark",
    "Bergen"=> "Vestland",
    "Trondheim"=> "Trøndelag",
    "Bodø"=> "Nordland",
    "Alta"=> "Troms og Finnmark",
];

//lage funksjon for å sjekke fylke
function sjekkFylke($kommune) {
   //global gir tilgang til arrayen
    global $KommuneogFylke;
    if (array_key_exists($kommune, $KommuneogFylke)) {
        return "ligger i $KommuneogFylke[$kommune]";
} else {
    return ", desverre ingen treff etter tilhørende fylke.";
}}

//bruk av funksjonen
$soktKommune = "Kristiansand";
$fylke = sjekkFylke($soktKommune);
echo "$soktKommune $fylke.";

?>