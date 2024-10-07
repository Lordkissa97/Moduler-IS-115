<?php
// Sjekk om skjemaet er sendt
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $feil = [];  // Array for å lagre feilmeldinger

    // Validering av navn
    if (empty($_POST['navn'])) {
        $feil[] = "Navn er obligatorisk.";
    } else {
        $navn = htmlspecialchars(trim($_POST['navn']));
    }

    // Validering av mobilnummer
    if (empty($_POST['mobil'])) {
        $feil[] = "Mobilnummer er obligatorisk.";
    } elseif (!is_numeric($_POST['mobil'])) {
        $feil[] = "Mobilnummer må være et 8-sifret tall.";
    } else {
        $mobil = htmlspecialchars(trim($_POST['mobil']));
    }

    // Validering av e-post
    if (empty($_POST['epost'])) {
        $feil[] = "E-post er obligatorisk.";
    } elseif (!filter_var($_POST['epost'], FILTER_VALIDATE_EMAIL)) {
        $feil[] = "Ugyldig e-postadresse.";
    } else {
        $epost = htmlspecialchars(trim($_POST['epost']));
    }

    // Hvis det ikke er noen feil, lagre dataene og vis en bekreftelsesmelding
    if (empty($feil)) {
        // Lag en matrise for den nye brukeren
        $bruker = [
            'Navn' => $navn,
            'Mobil' => $mobil,
            'E-post' => $epost
        ];

        echo "Ny bruker er registrert:<br>";
        echo "<ul>";
        foreach ($bruker as $felt => $verdi) {
            echo "<li>$felt: $verdi</li>";
        }
        echo "</ul>";
    } else {
        // Hvis det er feil, vis dem til brukeren
        echo "Følgende feil oppstod:<br>";
        echo "<ul>";
        foreach ($feil as $melding) {
            echo "<li>$melding</li>";
        }
        echo "</ul>";
    }
}
?>
