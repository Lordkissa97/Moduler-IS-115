<?php
//sjekke om skjema er sendt
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hente data fra innsendt skjema
    $navn = $_POST["Navn"];
    $mobil = $_POST["mobil"];
    $email = $_POST["epost"];

    //Validere 
    $errors = [];
    if (empty($navn)) {
        $errors[] = "Navn er påkrevd:";
    }
    if (empty($mobil)) {
        $errors[] = ("Mobilnummer er påkrevd:");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Ugyldig e-postadresse:";
    }

    // Hvis ingen feil, lagre i en midlertidlig array
    if (empty($errors)) {
        $bruker = [
            "navn" => $navn,
            "mobil" => $mobil,
            "epost" => $email
        ];

        //bekreftelsesmelding
        echo "Brukeren er registrert:<br>";
        print_r($bruker);
    } else {
        //vis feilmeldinger
        foreach ($errors as $error) {
            echo $error . "<br>";
        }}}

?>