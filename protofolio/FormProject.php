<?php // 
//if(isset($_POST['submit'])){
//    $to = "ywielage@gmail.com"; // this is your Email address
//    $from = $_POST['Email']; // this is the sender's Email address
//    $FirstName = $_POST['FirstName'];
//    $LastName = $_POST['LastName'];
//    $subject = "Form submission";
//    $subject2 = "Copy of your form submission";
//    $Omschrijving = $FirstName . " " . $LastName . " wrote the following:" . "\n\n" . $_POST['Omschrijving'];
//    $Omschrijving2 = "Here is a copy of your message " . $FirstName . "\n\n" . $_POST['Omschrijving'];
//
//    $headers = "From:" . $from;
//    $headers2 = "From:" . $to;
//    mail($to,$subject,$Omschrijving,$Omschrijvin);
//    mail($from,$subject2,$Omschrijving2,$headers2); // sends a copy of the message to the sender
//    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
//    // You can also use header('Location: thank_you.php'); to redirect to another page.
//    }
?>
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