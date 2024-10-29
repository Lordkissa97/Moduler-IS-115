<?php 
// Skriver engelsk kode mtp forrige gang fikk tilbakemleding på blanding av norsk og engelsk.

function findSingleValue($array) {

    // Teller opp alle verdier i matrisen og hvor mange ganger de forekommer
    $counts = array_count_values($array);

    // Finne nøkkel og verdi for elementet som kun forekommer en gang
    foreach ($counts as $key => $value) {
        if ($value == 1) {
            $index = array_search($key, $array);
            echo "Element nr. " . ($index) . " har en verdi ($key) som kun forekommer en gang  i matrisen.";
            return;
        }
    }
    
}

//test
$matrise = [5, 3, 0, 3, 0, 5, 7, 7, 9];
findSingleValue($matrise);

?>