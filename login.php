<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="styling/style.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>iDesign - Inloggen</title>
        </head>
        <body>
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
                            $_SESSION["level"] = 0;
                            echo '<meta http-equiv="refresh" content="1; url=index.php">';
                        } else {
                            echo "<br/>Foutieve informatie";
                        }
                    }
            ?>
            <div id="header">
                <a href="index.php"><img src="img/logo.png" alt="iDesign Logo" class="logo"></a> 
            </div>
            <div id="menu">
                <?php include 'basis.php'; ?>
            </div>
            <div id="container">
		<div class="login">
                    <form method="post" action="login.php">
                        Gebruikersnaam: <input type="text" name="username" size="20" maxlength="20"><br />
                        Wachtwoord: <input type="password" name="wachtwoord" size="20" maxlength="20"><br /><br />
                    <input type="submit" name="submit" value="Inloggen" />
                    </form>
                </div>	
            </div>
            <div id="footer">
                <span class="menufooteritems">&#169; iDesign - 2018</span>
            </div>