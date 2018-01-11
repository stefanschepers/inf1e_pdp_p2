<?php include 'header.php'; ?>

<?php
if (isset($_POST["submit"])) {
    include 'dbci.php';
    $email = $_POST["username"];
    $pw = $_POST["wachtwoord"];
    $query = "SELECT User_level_ID FROM user WHERE Email='$email' AND Password='$pw' LIMIT 1";
    $result = mysqli_query($coni, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        mysqli_free_result($result);
        $row = null;
        $_SESSION["ingelogd"] = true;
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