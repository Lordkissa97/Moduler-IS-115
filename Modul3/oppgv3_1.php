<?php 
//Dato for hendelsen (min verste discgolfrunde: 2024-07-24 (+41...))
$HendelsesDato = "2024-07-24";
// hent dagens dato
$DagensDato = date("Y-m-d");

//for å dobbelsjekke dato som ikke har skjedd
$IkkeHendt = "2025-01-03";


//sammenligne datoene
if ($DagensDato > $HendelsesDato) {
    echo "Hendelsen har allerede skjedd.";
} else {
    echo "Hendelsen har ikke skjedd ennå.";
}
?>