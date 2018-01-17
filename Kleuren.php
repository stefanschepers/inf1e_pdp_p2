<?php
    if(isset($_POST['submit'])) {
        if (!empty($_POST['ColorPicker'])) {
                    $conn = mysqli_connect("127.0.0.1", "root", "", "idesign") OR DIE ('No connection established');
                    $db = mysqli_select_db($conn, "idesign") OR DIE('No database selected');
                    
                    $ColorPicker = $_POST['ColorPicker'];
                    $QueryInsertColor = "INSERT INTO styling (Background_Color) VALUES ('$ColorPicker')";
                    $ResultInsertColor = mysqli_query($conn, $QueryInsertColor);
                    if (!$ResultInsertColor) {
                        echo $ResultInsertcolor->error . "Query Failed";
                    }
        }
                    else {
                    echo "Het veld is leeg";
                    }
        
    }    
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Kleuren</title>
        <meta charset="UTF-8">
        <style>
            
        </style> 
        
    </head>
    <body>
        <form method="post" id="FormColor">
            <p>Vul hier de kleurcode zonder # in</p>
            <input type="text" name="ColorPicker">
            <input type="submit" name="submit">
        </form>
    </body>
</html>