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
                include 'dbci.php';
                session_start();
                if (isset($_SESSION['ingelogd']) && $_SESSION['ingelogd'] == true) {
            ?>
            <div id="header">
                <a href="index.php"><img src="img/logo.png" alt="iDesign Logo" class="logo"></a> 
            </div>
            <div id="menu">
                <span class="menufooteritems"><a href="index.php">Home</a>  -  Mijn portfolio's  -  Contact  -  <a href="cms.php">CMS</a>  -  <a href="logout.php">Uitloggen</a></span>
            </div>
            <div id="container">
		<div class="left">
                    <p><b>Ingelogd</b><br><br></p>
                    
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
            
            <?php
                }else{
            ?>
            
            <div id="header">
                <a href="index.php"><img src="img/logo.png" alt="iDesign Logo" class="logo"></a> 
            </div>
            <div id="menu">
                <span class="menufooteritems"><a href="index.php">Home</a>  -  Mijn portfolio's  -  Contact  -  <a href="cms.php">CMS</a>  -  <a href="login.php">Inloggen</a></span>
            </div>
            <div id="container">
		<div class="left">
                    Uitgelogd
                    
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
            
            <?php
                } 
            ?>
	</body>
</html>	