<?php
// $bruker-arrayen er allerede definert i registrer.php

//Sjekke om skjema er innsendt
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //oppdater informasjon
    $nyttNavn = $_POST["Navn"];
    $nyMobil = $_POST["mobil"];
    $nyEpost = $_POST["epost"];
}

// sjekke om det er blitt gjort endringer:
if ($nyttNavn !== $bruker['Navn'] || $nyMobil !== $bruker['mobil']
|| $nyEpost !== $bruker['epost']) {
//validering samme som registrer.php
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
echo "Profilen er oppdatert.";
} else {
    echo "Ingen endringer ble gjort.";
}}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Min Profil</title>
</head>
<body>
    <form method="post" action="">
        <label for="navn">Navn:</label>
        <input type="text" id="navn" name="navn" value="<?php echo $bruker['navn']; ?>">
        <input type="submit" value="Oppdater">
    </form>
</body>
</html>