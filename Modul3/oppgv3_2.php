<?php
/*teller med pause 0-9
viser telling på skjerm med ett sekund mellomrom
beregner summen av tall 0-9
viser summen 2sek etter ferdig telling
*/

//lage pausefunksjon usleep står for delay i microsek
function pause($seconds) {
    usleep($seconds *1000000);
}

// lage en variabel som holder sum/tellingen
$sum = 0;

//For-løkke for å telle 0-9, $i går fra 0-10 for å få med tallet 9
for ($i = 0; $i < 10; $i++) {
    //vis tall på skjerm med <br> mellom hvert tall
    echo $i . "<br>";
    //pause i ett sekund, kaller på pausefunksjon
    pause(1);
    // legger til tallene i summen
    $sum += $i;
}
//pause 2 sek fra telling er ferdig
pause(2);
//vis summen fra tellingen 0-9 (skal bli 45)
echo "Ferdig å telle! Summen av tallene ble $sum";

?>