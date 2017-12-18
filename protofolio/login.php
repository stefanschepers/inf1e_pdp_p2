<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="nl" xml:lang="nl">
    <head>
        <title>Loginsysteem</title>
    </head>
    <body>

        <form method="post" action="login.php">
            Gebruikersnaam: <input type="text" name="username" size="20" maxlength="20"><br />
            Wachtwoord: <input type="password" name="wachtwoord" size="20" maxlength="20"><br /><br />
            <input type="submit" value="Log in!" />
        </form><br /><br />

        <?php
            include 'dbci.php';
            $email = $_POST["username"];
            $pw = $_POST["wachtwoord"];
            $query = "SELECT Email, Password FROM user WHERE Email='$email' AND Password='$pw' LIMIT 1";
            $result = mysqli_query($coni, $query);
            if($result){
                session_start();
                $_SESSION["ingelogd"] = true;
                echo "ingelogd!";
            }
        ?>
    </body>
</html>