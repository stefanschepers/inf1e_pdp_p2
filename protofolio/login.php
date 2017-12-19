<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="nl" xml:lang="nl">
    <head>
        <title>Loginsysteem</title>
    </head>
    <body>

        <form method="post" action="login.php">
            Gebruikersnaam: <input type="text" name="username" size="20" maxlength="20"><br />
                Wachtwoord: <input type="password" name="wachtwoord" size="20" maxlength="20"><br /><br />
                    <input type="submit" name="submit" value="Log in!" />
                    </form>

                    <?php
                    if (isset($_POST["submit"])) {
                        include 'dbci.php';
                        $email = $_POST["username"];
                        $pw = $_POST["wachtwoord"];
                        $query = "SELECT Email, Password FROM user WHERE Email='$email' AND Password='$pw' LIMIT 1";
                        $result = mysqli_query($coni, $query);
                        if (mysqli_num_rows($result) == 1) {
                            session_start();
                            $_SESSION["ingelogd"] = true;
                            echo "ingelogd!";
                        } else {
                            echo "<br/>Foutieve informatie";
                        }
                    }
                    ?>
                    </body>
                    </html>