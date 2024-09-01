<?php
/*stor første bokstav, resten små bokstaver: Etternavn skrives med AA i denne sammenheng istedenfor Å.
dette begrunnes med at språkpakken jeg fant på nett ikke anbefalte å brukes til php8.2 versjon, 
php ville ikke gjøre Å om til liten bokstav, dermed AA for å vise at det fungerer
*/

$etternavn = "Eieland AAlykkja";
echo ucfirst(strtolower($etternavn));

//stringen sin lengde
echo "<br>" . strlen($etternavn);

?>