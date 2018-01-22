<!DOCTYPE HTML>
<html>
    <head>
        <title>
            <?php
            if (isset($_POST['submit'])) {
                echo $_POST['Title'];
                echo $_POST['Select'];
            }
            ?>
        </title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="Title">
            <p><h2>OF Voorbeelden</h2></p>
        
        <p><select name="Select">
            <option value="Portfolio">Portfolio</option>
            <option value="Port">Port</option>
            </select></p>
        
            <input type="submit" name="submit">
        </form>
    </body>
</html>