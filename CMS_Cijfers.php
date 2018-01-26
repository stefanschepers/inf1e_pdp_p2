<?php
/*
Datum : 25-11-2017
Naam  : Wesley Velderman
*/
include "CMSHeader.php";
include "dbci.php";
include "Functions.php";
$UserID = $_SESSION["User_ID"];
$tmpTemplateID = SelectTemplate($coni);
?>

<?php

if (isset($tmpTemplateID)) {
    echo '<form method="POST" action="CMS_Cijfers.php">';
    //query for loading template
    $templateQuery = "SELECT * FROM form_template where Template_ID = $tmpTemplateID";
    $templateResult = mysqli_query($coni, $templateQuery);
    if (!$templateResult) {
        echo "template result failed!";
    }
    while ($templateFetch = mysqli_fetch_assoc($templateResult)) {
        echo "<h1>" . $templateFetch["Title"] . "</h1>";
    }
    //query for getting column names etc
    $columnQuery = "SELECT * FROM template_column WHERE template_ID = $tmpTemplateID";
    $columnResult = mysqli_query($coni, $columnQuery);
    if (!$columnResult) {
        echo "ColumnQuery failed!";
    }
    echo "<table>";
    while ($columnFetch = mysqli_fetch_assoc($columnResult)) {
        //Column_ID, Template_ID, Column_Name, Type, position
        $columnID = $columnFetch["Column_ID"];
        echo "<tr><td>" . $columnFetch["Column_Name"] . "</td><td><input type='text' name='$columnID'/></td></tr>";
    }
    echo '</table>
          <input type="submit" name="submit">
          </form>';
}
?>

<?php

if (isset($_POST["submit"])) {
    foreach ($_POST as $key => $value) {
        if ($key != "submit") {
            $SQLInsert = "INSERT INTO template_column_value VALUES($key, $UserID, $value, 0)";
            $InsertResult = mysqli_query($coni, $SQLInsert);
            echo "values toegevoegd!";
        }
        if (!$InsertResult) {
            echo "insertQuery failed!";
        }
    }
}
    mysqli_close($coni);

include "CMSFooter.php";
?>
