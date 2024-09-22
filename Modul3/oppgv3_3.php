<!DOCTYPE html>
<html>
    <head>
        <title>Ny saldo</title>
    </head>
    <body>
<!-- Ber om input (startsaldo og rente), beregne ny saldo etter ett år (renteberegning etter S1),
  Viser resultat (skriver ut S1), deretter utvide til flere år (Sn) og skrive ut saldo for hvert år.. -->

  <!--lage utfyllingsskjema som krever utfylling slik at php skal kunne finne det etterpå -->
  <form method="post" action="">
    <label for="startsaldo">Startsaldo:</label>
    <input type="number" id="startsaldo" name="startsaldo" required>
    <br>
    <label for="rente">Renteprosent:</label>
    <input type="number" step="0.01" id="rente" name="rente" required>
    <!-- la til step for å kunne skrive rente med desimal-->
    <br>
    <label for="antallAr">Antall år</label>
    <input type="number" id="antallAr" name="antallAr" required>
    <br>
    <input type="submit" value="Beregn">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Henter verdier fra skjemaet
    $startsaldo = $_POST['startsaldo'];
    $rente = $_POST['rente'] / 100; //konverterer renteprosenten til desimal
    $antallAr = $_POST['antallAr'];

    //Beregner og skriver ut saldo for hvert år
    for ($i = 1; $i < $antallAr; $i++) {
        $nySaldo = $startsaldo * pow(1 + $rente, $i); //bruker pow for å regne ut eksponensiell vekst
        echo "Saldo etter $i år: $nySaldo<br>";

    }
}
  ?>
    </body>
</html>