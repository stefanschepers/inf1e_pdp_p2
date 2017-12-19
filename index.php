<!DOCTYPE HTML>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="styling/style.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>iDesign</title>
	</head>
	<body>
            <?php
                    if (isset($_POST["submit"])) {
                        include 'protofolio/dbci.php';
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
            
		
            <div id="header">
                <a href="index.php"><img src="img/logo.png" alt="iDesign Logo" class="logo"></a> 
            </div>
            <div id="menu">
                <span class="menufooteritems"><a href="index.php">Home</a>  -  Mijn portfolio's  -  Contact  -  <a href="cms.php">CMS</a></span>
            </div>
            <div id="container">
		<div class="left">
                    <p><b>Inloggen</b><br><br></p>
                    <form method="post" action="index.php">
                    Email: <input type="text" name="username" size="20" maxlength="20"><br />
                    Wachtwoord: <input type="password" name="wachtwoord" size="20" maxlength="20"><br /><br />
                    <input type="submit" name="submit" value="Log in!" />
                    </form>
		</div>
		<div class="content">
                    <p><b>Welkom op iDesign!</b><br></p><p><br>Op iDesign kun jij je eigen digitale portfolio uploaden
                    (showcaseportfolio, ontwikkelingsportfolio en beoordelingsportfolio). Ook kun je berichten
                    in het gastenboek van andere leden plaatsen (en je eigen gastenboek lezen).<br><br></p>
                    <img src="img/homepc.png" alt="Flowers" style="max-width:100%;height:auto;">
                </div>	
            </div>
            <div id="footer">
                <span class="menufooteritems">&#169; iDesign - 2018</span>
            </div>
	</body>
</html>	