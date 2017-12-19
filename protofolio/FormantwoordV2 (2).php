<!DOCTYPE HTML>
<html> 
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="formcss.css">
    </head>
    <body>
        <h2>Contactformulier</h2>
        <form action="Formantwoord.php" method="post">
            <div class="VraagBox">Naam:</div> <input type="text" name="Naam"><br>
            <div class="VraagBox">E-mail:</div> <input type="text" name="Email"><br>
            <div class="VraagBox">Adres:</div> <input type="text" name="Adres"><br>
            <div class="VraagBox">Postcode:</div> <input type="text" name="Postcode"><br>
            <div class="VraagBox">Omschrijving:</div> <textarea name="Omschrijving" rows="5" cols="40"></textarea>
            <div class="VraagBox"><input type="submit" name="submit"></div>
        </form>           
    </body>
</html>