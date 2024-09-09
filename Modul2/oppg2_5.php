<?php

/*passord generator. 
funksjon med parameter på 8 tegn.
alfabetet satt i uppercas, deretter lowercase
tall fra 0 til 9
kombinere upper, lower og tall
grunnet vanskelig å så til bokmål alfabetet, brukes ikke ÆØÅ
*/

function PassordGenerator($lengde = 8) {
    $upperCase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowerCase = 'abcdefghijklmnopqrstuvwxyz';
    $tall = '0123456789';
    $alleTegn = $upperCase . $lowerCase. $tall;

    //neste steg. sørge for at kombinasjonen av krav opprettholdes så tilfeldig som mulig
    $passord = $upperCase[rand(0, strlen($upperCase) - 1)];
    $passord .= $tall[rand(0, strlen($tall) - 1)];

    //neste steg. skal fylle passordet med tilfeldige tegn
    for ($i = 2; $i < $lengde; $i++) {
        $passord .= $alleTegn[rand(0, strlen($alleTegn) - 1)];
    }

    //deretter blande passordet slik at man ikke alltid får stor bokstav og tall som de 2 første tegnene
    $passord = str_shuffle($passord);

    return $passord;
}

//utskrift av tilfeldig passord på skjerm

echo "Generert passord: " . PassordGenerator();
?>