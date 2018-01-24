<?php

include "CMSHeader.php";
include "dbci.php";
?>

<?php

$userID = $_SESSION["User_ID"];
$query = "SELECT * FROM form_template";
$result = mysqli_query($coni, $query);
if (!$result) {
    echo "Select query failed!";
}

echo '<form method="POST" action="Template_User.php">
      <p>Selecteer een formulier:<select name="formTemplate">
';

while ($fetch = mysqli_fetch_assoc($result)) {
    $id = $fetch["Template_ID"];
    echo "<option value='$id'>" . $fetch["Title"] . "</option>";
}
echo '</select></p>';
echo '<input type="submit" name="submit" value="verstuur"/>';
echo '</form>';

if (isset($_POST["submit"])) {
    $formTemplate = $_POST["formTemplate"];
    $userID = $_SESSION["User_ID"];
    $insertQuery = "INSERT INTO form_template_user VALUES($formTemplate, $userID, 0, 0)";
    $result = mysqli_query($coni, $insertQuery);

    if (!$result) {
        echo "U bent al in bezit van de geselecteerde Form Template. U kan er maar 1 aanmaken.";
    }
}
?>


<?php

include "CMSFooter.php";
?>
