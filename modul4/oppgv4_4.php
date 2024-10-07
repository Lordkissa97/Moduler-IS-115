<?php
// Definerer en multidimensjonal matrise med informasjon om prosjekter
$prosjekter = [
    [
        'Prosjektnavn' => 'Webutvikling',
        'Ansvarlig' => 'Janne Kristendottir',
        'Status' => 'Pågår',
        'Startdato' => '2022-01-15'
    ],
    [
        'Prosjektnavn' => 'Mobilapplikasjon',
        'Ansvarlig' => 'Julius Dagrømmer',
        'Status' => 'Ferdig',
        'Startdato' => '2023-05-10'
    ],
    [
        'Prosjektnavn' => 'Datasikkerhet',
        'Ansvarlig' => 'Per I. Hagen',
        'Status' => 'Startet',
        'Startdato' => '2022-09-01'
    ]
];
?>
<!-- Derretter lage html skjema hvor en kan oppdatere/redigere profil -->
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prosjektoversikt</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Oversikt over prosjekter</h2>
    <table>
        <tr>
            <th>Prosjektnavn</th>
            <th>Ansvarlig</th>
            <th>Status</th>
            <th>Startdato</th>
        </tr>
        <?php
        // Går gjennom hver prosjektrad i matrisen og skriver ut informasjonen
        foreach ($prosjekter as $prosjekt) {
            echo "<tr>";
            echo "<td>{$prosjekt['Prosjektnavn']}</td>";
            echo "<td>{$prosjekt['Ansvarlig']}</td>";
            echo "<td>{$prosjekt['Status']}</td>";
            echo "<td>{$prosjekt['Startdato']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
