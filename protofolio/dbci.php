<?php
$coni = mysqli_connect("localhost", "root", "");
if(!$coni){
    die("couldnt connect to mysql");
}
$dbselect = mysqli_select_db($coni, "pdp");
if (!$dbselect) {
    echo "Could not establish an connection to the selected database.";
}
?>  