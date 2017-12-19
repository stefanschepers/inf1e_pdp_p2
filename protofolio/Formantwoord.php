<!DOCTYPE HTML>
<html> 
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="formcss.css">
    </head>
    <body>
    <div id="FormantwoordpaginaBox">
    <div class="AntwoordenEcho">
        <?php echo "Dankuwel voor het invullen van dit contactformulier, " .  $_POST["Naam"] . "." . "<br>"; ?>
    </div>
    <div class="AntwoordenEcho">
    <?php echo "Uw Emailadres is: " . $_POST["Email"] . "." ."<br>"; ?>
    </div>
    <div class="AntwoordenEcho">
    <?php echo "Uw adres is: " . $_POST["Adres"] . "<br>"; ?>
    </div>
    <div class="AntwoordenEcho">
    <?php echo "Uw postcode is: " . $_POST["Postcode"] . "<br>"; ?>
    </div>
    <div class="AntwoordenEcho">
    <?php echo "Uw ingevoerde omschrijving is: " . $_POST["Omschrijving"] . "<br>"; ?>
    </div>
    </div>
    </body>
</html>