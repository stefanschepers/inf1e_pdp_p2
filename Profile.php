<?php
include "header.php";
include 'dbci.php';
/*
Datum : 25-11-2017
Naam  : Wesley Velderman
*/
?>

<!-- 
Profiel foto laten zien
naw gegevens laten zien
profile change button 
------------------------------------
evt showcase items
evt beoordelings formulier
evt CV
------------------------------------
-->
<?php
if ($_GET["Mode"] == "View") {
//profiel foto weergeven
    $query = "SELECT * FROM user WHERE User_ID = " . $_SESSION["User_ID"];
    $result = mysqli_query($coni, $query);
    if (!$result) {
        echo "Select query failed!";
    }
    while ($fetch = mysqli_fetch_assoc($result)) {
        echo "<h1>" . $fetch["FirstName"] . " " . $fetch["LastName"] . "</h1>";
        //echo "<img src='" . $fetch["Logo"] . "' width='50px' alt='" . $fetch["Logo"] . "'/>";
    }

    include "Profile_Guestbook.php";
    include "CMS_Cijfers_view.php";
    if (isset($_GET["Mode"])) {
        if ($_GET["Mode"] == "Edit") {
            echo '<form method="POST" action="Profile.php" enctype="multipart/form-data">
        <p> Profile picture<input type="file" name="ProfilePicture"/></p>
        <p> Logo<input type="file" name="Logo"/></p>
        <p> <input type="submit" name="SUBMIT"></p>
        </form>';
            
        }
    }
}
include 'Functions.php';
if (isset($_POST["SUBMIT"])) {
    $profileTarget = uploadImage($_FILES["ProfilePicture"]);
    $logoTarget = uploadImage($_FILES["Logo"]);

    echo $insertQuery = "INSERT INTO user_styling(User_ID, Styling_ID, Profile_Picture, Logo)
                        VALUES(" . $_SESSION['User_ID'] . ", 0, '$profileTarget', '$logoTarget')";
    $result = mysqli_query($coni, $insertQuery);
    if (!$result) {
        echo "Insert query failed!";
    }
        mysqli_close($coni);

}
?>
<?php
include "Footer.php";
?>