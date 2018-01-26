<?php

/*
  Datum : 25-11-2017
  Naam  : Wesley Velderman
 */

include "dbci.php";

$userID = $_SESSION["User_ID"];

if(!isset($_POST["willAlwaysWork"])){
$queryTemplate = 'SELECT DISTINCT form_template.Title, form_template.Template_ID
                          FROM form_template, template_column, template_column_value
                          WHERE form_template.Template_ID = template_column.Template_ID
                          AND template_column_value.Column_ID = template_column.Column_ID
                          AND template_column_value.User_ID =' . $userID;
$result1 = mysqli_query($coni, $queryTemplate);
echo "<form method='post'>";
echo "<select name='TemplateTitle'>";
while ($row = mysqli_fetch_assoc($result1)) {
echo "<option value='" . $row['Template_ID'] . "'>" . $row['Title'] . "</option>";
}
echo "</select>";
echo "<input type='submit' name='willAlwaysWork' value='Select Template'>";
echo "</form>";
}else{
    $templateID = $_POST["TemplateTitle"];
$query = "SELECT * FROM template_column, template_column_value
  WHERE template_column.Column_ID = template_column_value.Column_ID
  AND template_column_value.User_ID = $userID
  AND template_column.Template_ID =$templateID";
  $result = mysqli_query($coni, $query);

  if(!$result){
  echo "select query failed!";
  }
  echo "<table>";
  while($fetch = mysqli_fetch_assoc($result)){
  echo "<tr><td>" . $fetch["Column_Name"] . "</td><td>". $fetch["Value"] ."</td></tr>";
  }
  echo "</table>"; 
}


mysqli_close($coni);
?>
