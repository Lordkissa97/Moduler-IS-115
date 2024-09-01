<?php //oppgave 2: viser php versjon og konfigurasjon
$showPhpInfo = isset($_GET['showPhpInfo']) ? $_GET['showPhpInfo'] : false;

if ($showPhpInfo) {
    phpinfo();
} else {
    //  HTML
?>
<!DOCTYPE html>
<html>
<head>
    <title>Svar phpinfo</title>
    <style>
        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="?showPhpInfo=true">PhpInfo</a>
    </div>

   <h1>Oppgave 2: Svar phpinfo</h1>
<p>
    Display_errors er satt til "on", 
    Document_root er filepathen til mappen hvor filene ligger i mitt tilfellet "C:/xampp/htdocs".
</p>
   <p>Det er lurt å kjenne til phpinfo() da utfra å ha tittet litt gjennom så gir phpinfo()
         informasjon om hvilken php versjon man kjører, OS-informasjon, serverinformasjon
          som kan være avgjørende til PHP-miljøet. 
Det kan være en nyttig ressurs for å sjekke hvilke PHP-utvidelser som er installert,
 hvilke innstillinger som er satt. Dette er nyttig informasjon å for å kunne sjekke
  at man kan kjøre applikasjoner både på stasjonær pc,
   men også på laptop når man ikke er hjemme,
   da har man som ønske at prosjekter skal kunne kjøres i flere miljøer. Da man kan ha
    forskjellige PHP-versjoner installert og konfigurasjoner
     på forskjellige maskiner som kan hindre funksjonalitet.
</p>

</body>
</html>
<?php
}
?>