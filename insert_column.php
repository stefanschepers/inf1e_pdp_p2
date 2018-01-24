
<?php
session_start();
include "CMSHeader.php";
$conn = mysqli_connect("localhost", "root", "")
        OR DIE("Could not connect with localhost!");
$templatetitle = $_SESSION['Header_Title'];
mysqli_select_db($conn, "pdp")
        Or Die("Could not connect with the database!");
$mysli = "Select * From template_column, form_template WHERE template_column.Template_ID = form_template.Template_ID AND form_template.Title='$templatetitle'";
$query = "SELECT Template_ID FROM form_template WHERE Title = '$templatetitle'";
$result1 = mysqli_query($conn, $query);
if (!$result1)
{
    echo "no result in database";
} else
{
    while ($fetch = mysqli_fetch_assoc($result1))
    {
        $_SESSION["Title_ID"] = $fetch["Template_ID"];
    }
}


$result = mysqli_query($conn, $mysli);
?>
<table>
    <tr>
        <th>Column ID</th>
        <th>Template_ID</th>
        <th>Column_Name</th>
        <th>Type</th>
        <th>position</th>
    </tr>
    <?php
    if (!$result)
    {
        echo "no result in database";
    } else
    {

        while ($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>
                            <td>" . $row['Column_ID'] . "</td>
                            <td>" . $row['Template_ID'] . "</td>
                            <td>" . $row['Column_Name'] . "</td>
                            <td>" . $row['Type'] . "</td>
                            <td>" . $row['position'] . "</td>
                           </tr>";
        }
    }
    ?>

</table>

<form name="insert_column" action="insert_column.php" method="post">
    Column Name:<input type="text" name="Columnname">
    Type:<input type="text" name="type">
    <input type="submit" value="submit" name="submit">
</form>

<?php
if (isset($_POST["submit"]))
{
    if ($_POST['Columnname'])
    {
        $columnname = $_POST['Columnname'];
        $type = $_POST['type'];

        $query = "INSERT INTO template_column VALUES('NULL','$_SESSION[Title_ID]','$columnname','$type','NULL')";
        $result = mysqli_query($conn, $query);
        $tmpHeaderStr = "Location: insert_column.php?HeaderName=" . $headertitle;
        header($tmpHeaderStr);
    } else
    {
        echo "you must fill in the the Column name & type!";
    }
}





include "CMSFooter.php";
?>


