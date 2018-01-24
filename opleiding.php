<!DOCTYPE html>
<?php

include 'dbci.php';
include 'CMSHeader.php';
session_start();
$sql = "SELECT * FROM opleiding";
$result = mysqli_query($coni, $sql);
$id = $_SESSION['User_ID'];


echo "<form method='post' action='opleiding.php' >";
echo "<select name='Opleiding2'>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='" . $row['Opleiding_ID'] . "'>".$row['Opleiding_Name'] . "</option>";
}
echo "</select>";
echo "<input type='submit' name='submit' value='Select opleiding'>";
echo "</form>";
if (isset($_POST['submit'])) {
   
    $Opleiding_Name = $_POST['Opleiding2'];

  $insertQuery = "INSERT INTO user_opleiding (User_ID , Opleiding_ID) VALUES ( $id , $Opleiding_Name ) ";
    $goed = mysqli_query($coni, $insertQuery);
    if (!$goed) {
        echo "insert query is niet gelukt";
    }
}
mysqli_close($coni);
include 'CMSFooter.php'
?>

