<?php

session_start();
include "dbci.php";
$userID = $_SESSION["User_ID"];
$query = "SELECT * FROM template_column, template_column_value
          WHERE template_column.Column_ID = template_column_value.Column_ID
          AND template_column_value.User_ID = $userID
          AND template_column.Template_ID = 6";
$result = mysqli_query($coni, $query);

if(!$result){
    echo "select query failed!";
}
echo "<table>";
while($fetch = mysqli_fetch_assoc($result)){
    echo "<tr><td>" . $fetch["Column_Name"] . "</td><td>". $fetch["Value"] ."</td></tr>";
}
echo "</table>"
?>
