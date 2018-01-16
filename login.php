<?php include 'header.php'; ?>

<?php
if (isset($_POST["submit"])) {
    include 'dbci.php';
    $email = $_POST["username"];
    $pw = $_POST["wachtwoord"];
    $query = "SELECT User_level_ID, User_ID FROM user WHERE Email='$email' AND Password='$pw' LIMIT 1";
    $result = mysqli_query($coni, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $_SESSION['level'] = $row['User_level_ID'];
        $_SESSION['User_ID'] = $row['User_ID'];
        mysqli_free_result($result);
        $row = null;
        $_SESSION["ingelogd"] = true;

        $queryGuestbookExists = "SELECT * FROM user, guestbook WHERE user.User_ID = guestbook.User_ID AND guestbook.User_ID = " . $_SESSION["User_ID"];
        $resultExists = mysqli_query($coni, $queryGuestbookExists);

        if (mysqli_num_rows($resultExists) == 0) {
            $query = "INSERT INTO guestbook(User_ID) VALUES(" . $_SESSION['User_ID'] . ")";
            $result = mysqli_query($coni, $query);
            if (!$result) {
                echo "Guestbook creation failed";
            }
        }
        echo '<meta http-equiv="refresh" content="1; url=index.php">';
    } else {
        echo "<br/>Foutieve informatie";
    }
}
?>

<div class="fullcontent">
    <form method="post" action="login.php">
        Gebruikersnaam: <input type="text" name="username" size="20" maxlength="20"><br />
        Wachtwoord: <input type="password" name="wachtwoord" size="20" maxlength="20"><br /><br />
        <input type="submit" name="submit" value="Inloggen" />
    </form>
</div>
<?php include 'footer.php'; ?>