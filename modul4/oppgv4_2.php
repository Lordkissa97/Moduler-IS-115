<!-- registrering av ny bruker  -->

<!DOCTYPE html>
<html>
    <head>
        <title>Registrer ny bruker</title>
    </head>
    <body>
        <!-- lage postskjema som skal fylles ut -->
         <form method="post" action="registrer.php">
            <label for="Navn">Navn:</label>
            <input type="text" id="Navn" name="Navn"><br><br>
            <label for="mobil">Mobilnummer:</label>
            <input type="tel" id="mobil" name="mobil"><br><br>
            <label for="epost">E-post:</label>
            <input type="epost" id="epost" name="epost"><br><br>
            <input type="Submit" value="Registrer">
         </form>
    </body>
</html>