<?php
$titlephp= "Dit is een test php code";

?>
<!DOCTYPE HTML>
<html>
    <head>
        <title> Title PHP</title>
    </head>
    <body>
         <?php
            if (isset($_POST['submit'])) {
                echo $_POST['Title'];
                echo $_POST['Select'];
            }
            ?>
        <form method="post">
            <input type="text" name="Title">
            <h2>OF Voorbeelden</h2>
        <p><select name="Select">
            <option value="Portfolio">Portfolio</option>
            <option value="Port">Port</option>
            </select></p>
        <input type="submit" name="submit">
        </form>
    </body>
</html>