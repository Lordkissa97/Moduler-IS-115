<?php

function isAnagram($word1, $word2) {
    // Fjerner mellomrom og gjør om til små bokstaver
    $word1 = strtolower(str_replace(' ', '', $word1));
    $word2 = strtolower(str_replace(' ', '', $word2));
    
    // Sjekk lengden først for å raskt avbryte dersom de ikke kan være anagrammer
    if (strlen($word1) !== strlen($word2)) {
        return false;
    }

    // Sorter bokstavene i begge ordene
    $word1Letters = str_split($word1);
    $word2Letters = str_split($word2);
    sort($word1Letters);
    sort($word2Letters);

    // Sjekk om de sorterte bokstavene er like
    return $word1Letters === $word2Letters;
}

// Testeksempel ved bruk av eksempelordene "vente" og "evnet" fra oppgaven:
$word1 = "vente";
$word2 = "evnet";
if (isAnagram($word1, $word2)) {
    echo " <br> $word1 er et anagram av $word2.";
} else {
    echo " <br> $word1 er ikke et anagram av $word2.";
}

//lager test nr to av to andre ord som jeg vet ikke er anagrammer for å sjekke påliteligheten til funksjonen
$word1 = "jalapenos";
$word2 = "chili";
if (isAnagram($word1, $word2)) {
    echo "<br> $word1 er et anagram av $word2.";
} else {
    echo "<br> $word1 er ikke et anagram av $word2.";
}
?>
