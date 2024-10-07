<!-- registrering av ny bruker  -->

<!DOCTYPE html>
<html lang="no">
    <head>
        <title>Registrer ny bruker</title>
    </head>
    <body>
        <h2>Registrer deg</h2>
        <!-- lage postskjema som skal fylles ut -->
         <form method="post" action="registrer.php">
            <label for="navn">Navn:</label>
            <input type="text" id="navn" name="navn"><br><br>
            <label for="mobil">Mobilnummer:</label>
            <input type="tel" id="mobil" name="mobil"><br><br>
            <label for="epost">E-post:</label>
            <input type="epost" id="epost" name="epost"><br><br>
            <input type="Submit" value="Registrer">
         </form>
    </body>
</html>