<!-- oppgave 4: liten kalkulator -->
<?php

$number1 = 10;
$number2 = 42;

$sum = $number1 + $number2; //skal bli 52
$avrage = $sum / 2; //skal bli 26
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
</head>

<body>

    <h1>Kalkulator</h1>

    <p>Summen av <?php echo $number1; ?> og <?php echo $number2; ?> = <?php echo $sum; ?>.
     Gjennomsnittet av <?php echo $sum; ?> = <?php echo $avrage; ?>.</p>

</body>
</html>
