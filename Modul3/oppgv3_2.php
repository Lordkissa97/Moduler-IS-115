<?php
/*teller med pause 0-9
viser telling på skjerm med ett sekund mellomrom
beregner summen av tall 0-9
viser summen 2sek etter ferdig telling
<<<<<<< HEAD
*/
=======
*/header('Content-Type: text/html');
header('Cache-Control: no-cache');
header('Connection: keep-alive');
ob_implicit_flush(0);
>>>>>>> e26072eb43758a2b911337fc8d939e39719203f1
ob_end_flush();
//lage pausefunksjon usleep står for delay i microsek


// lage en variabel som holder sum/tellingen
$sum = 0;


//For-løkke for å telle 0-9, $i går fra 0-10 for å få med tallet 9
for ($i = 0; $i < 10; $i++) {
    flush();
    //vis tall på skjerm med <br> mellom hvert tall
    echo $i . "<br>";
    
    //pause i ett sekund, kaller på pausefunksjon
    sleep(1);
    // legger til tallene i summen
    $sum += $i;
}
//pause 2 sek fra telling er ferdig
sleep(2);
//vis summen fra tellingen 0-9 (skal bli 45)
echo "Ferdig å telle! Summen av tallene ble $sum";

?>