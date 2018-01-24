<?php
include "CMSHeader.php";
$conn = mysqli_connect("localhost", "root", "")
        OR DIE("Could not connect with localhost!");
mysqli_select_db($conn, "pdp")
        Or Die("Could not connect with the database!");
$mysli = ('Select * From form_template')
        Or Die("cannot Select from form_template");
$result = mysqli_query($conn, $mysli);

echo "<form method='post'>";
echo "<select name='TemplateTitle'>";
while ($row = mysqli_fetch_assoc($result))
{
    echo "<option value='" . $row['Title'] . "'>" . $row['Title'] . "</option>";
}
echo "</select>";
echo "<input type='submit' name='submit' value='Select Template'>";
echo "</form>";

include  "CMSFooter.php";
?>






