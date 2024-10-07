<?php
// Opprett en matrise med en eksisterende informasjonen om bruker
$bruker = [
    'Navn' => 'Felix Amadeus',
    'Mobil' => '12345678',
    'E-post' => 'Famadeus@blinker.no'
];

// Sjekk om skjemaet er sendt
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Samle eventuelle feil
    $feil = [];

    // Valider navn
    if (empty($_POST['navn'])) {
        $feil[] = "Navn er obligatorisk.";
    } else {
        $nyttNavn = htmlspecialchars(trim($_POST['navn']));
        if ($nyttNavn !== $bruker['Navn']) {
            $bruker['Navn'] = $nyttNavn;
            echo "Navn oppdatert til: $nyttNavn<br>";
        }
    }

    // Valider mobil
    if (empty($_POST['mobil'])) {
        $feil[] = "Mobilnummer er obligatorisk.";
        //sjekker om verdien er numerisk (tall)
    } elseif (!is_numeric($_POST['mobil'])) {
        $feil[] = "Mobilnummer kan kun inneholde tall.";
    }
    else {
        // Sjekk om lengden er nøyaktig 8
        if (strlen($_POST['mobil']) != 8) {
            $feil[] = "Mobilnummer må være 8 siffer langt.";
         
        } else {
        $nyttMobil = htmlspecialchars(trim($_POST['mobil']));
        if ($nyttMobil !== $bruker['Mobil']) {
            $bruker['Mobil'] = $nyttMobil;
            echo "Mobilnummer oppdatert til: $nyttMobil<br>";
        }
    }}

    // Valider e-post
    if (empty($_POST['epost'])) {
        $feil[] = "E-post er obligatorisk.";
    } elseif (!filter_var($_POST['epost'], FILTER_VALIDATE_EMAIL)) {
        $feil[] = "Ugyldig e-postadresse.";
    } else {
        $nyEpost = htmlspecialchars(trim($_POST['epost']));
        if ($nyEpost !== $bruker['E-post']) {
            $bruker['E-post'] = $nyEpost;
            echo "E-post oppdatert til: $nyEpost<br>";
        }
    }

    // Skriv ut eventuelle feil
    if (!empty($feil)) {
        echo "Følgende feil oppstod:<br>";
        foreach ($feil as $melding) {
            echo "$melding<br>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brukerprofil</title>
</head>
<body>
    <h2>Rediger Brukerprofil</h2>

    <!-- Skjema for å vise og redigere brukerens informasjon -->
    <form action="" method="post">
        Navn: <input type="text" name="navn" value="<?= $bruker['Navn'] ?>"><br><br>
        Mobilnummer: <input type="text" name="mobil" value="<?= $bruker['Mobil'] ?>"><br><br>
        E-post: <input type="text" name="epost" value="<?= $bruker['E-post'] ?>"><br><br>
        <input type="submit" value="Oppdater Profil">
    </form>
</body>
</html>
