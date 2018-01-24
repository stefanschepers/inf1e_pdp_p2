<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "idesign";
include 'dbci.php';
include 'CMSHeader.php';
if(isset($_POST['nameOpleiding'])) {
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) OR DIE('Connection Failed');
$dbSelect = mysqli_select_db($conn,"idesign") OR DIE('Select Failed');
$nameOpleiding = $_POST['nameOpleiding'];
$QuerynameOpleiding = "INSERT INTO opleiding (Opleiding_Name) VALUES ('$nameOpleiding')";
$ResultNameOpleiding = mysqli_query($conn, $QuerynameOpleiding);
if (!$ResultNameOpleiding) {
    echo $ResultNameOpleiding->error . "Query failed";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>PHP insertion</title>
<link href="css/insert.css" rel="stylesheet">
</head>
<body>
<div class="maindiv">

<div>
    
    <h2>Opleiding toevoegen.</h2>
   
    <form method="post">
        
            <h2>Form</h2>
        <label>naam:</label>
        <input class="input" name="nameOpleiding" type="text" value="">

        <input class="submit" name="submitOpleiding" type="submit" value="Insert">
    </form>
</div>
</div>
</body>
</html>