
<!--oppgave 3: viser navn og alder i ulike html tags -->
<?php
 $name = "Ole";
$age = 26;
?>


<!DOCTYPE html>

<html> 

<head>
<meta charset="UTF-8">  
<title>Navn og alder</title>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 12px;
    }
</style>
</head>

<body>

<h1>Navn og alder</h1>
<!-- tabell -->
<table>
    <tr>
        <th>Navn</th>
        <th>Alder</th>
    </tr>
    <tr>
        <td><?php echo $name; ?></td>
        <td><?php echo $age; ?></td>
    </tr>
</table>

<!-- nummerliste -->
<ol>
    <li> <?php echo $name; ?></li>
    <li> <?php echo $age; ?></li>
</ol>

<!-- punktliste -->
<ul>
    <li> <?php echo $name; ?></li>
    <li> <?php echo $age; ?></li>
</ul>

<!-- paragraf -->
<p> <?php echo $name; ?> er <?php echo $age; ?> år gammel.</p>
</body>
</html>