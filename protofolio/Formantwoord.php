<!DOCTYPE HTML>
<html> 
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="formcss.css">
    </head>
    <body>
    <div id="FormantwoordpaginaBox">
        <?php
        $Naam_Bezoeker = $_POST["Naam"];
        $Email_Bezoeker = $_POST["Email"];
        $Adres_Bezoeker = $_POST["Adres"];
        $Postcode_Bezoeker = $_POST["Postcode"];
        $Omschrijving = $_POST["Omschrijving"];
        
        $Email_From = 'Project@Projects.com';
        $Email_Subject = 'Contactformulier';
        $Email_Body = 'U heeft een nieuw bericht van: ' . $Naam_Bezoeker . "/n" . 
        $Naam_Bezoeker . " " . $Email_Bezoeker . " " . $Adres_Bezoeker . " " . $Postcode_Bezoeker . "/n" . $Omschrijving;
        
        $to = "ywielage@gmail.com";
        $headers = "From: $Email_From \r\n";
        $headers .= "Reply-To: $Email_Bezoeker \r\n";

        
        
        mail($to,$Email_Subject,$Email_Body,$headers);

        ?>
        <?php if (!empty($_POST["Naam"]) && !empty($_POST["Email"]) && !empty($_POST["Adres"]) && !empty($_POST["Postcode"]) && !empty($_POST["Omschrijving"])) { ?>
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
                    <?php }
                     else {
                         echo "Vul alstublieft alle vakken in";
                     }   
                    
                    ?>
                </div>
    </body>
</html>