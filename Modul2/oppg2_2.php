<?php

$etternavn = "<script>alert('hehehe');</script>Eieland";

//htmlspecialchars konverterer spesialtegn til HTML-entiteter (erstatningstekt for tegn i HTML)
//$sikkertEtternavn = htmlspecialchars($etternavn, ENT_QUOTES, 'UTF-8');

//bruker strip_tags for å fjerne HTML- og PHP-koder i $etternavn
$sikkertEtternavn = strip_tags($etternavn);

echo "Behandlet etternavn: " . $etternavn . "<br>";

?>
