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
            <?php include 'basis.php'; ?>
		<div class="left">
                    <p><b>Ingelogd</b><br><br></p>
                </div>
		<div class="content">
                    <p><b>Welkom op iDesign!</b><br></p><p><br>Op iDesign kun jij je eigen digitale portfolio uploaden
                    (showcaseportfolio, ontwikkelingsportfolio en beoordelingsportfolio). Ook kun je berichten
                    in het gastenboek van andere leden plaatsen (en je eigen gastenboek lezen).<br><br></p>
                    <img src="img/homepc.png" alt="Flowers" style="max-width:100%;height:auto;">
                </div>	
            <?php include 'afsluiten.php'; ?>
            <?php
                }else{
            ?>
            <?php include 'basis.php'; ?>
		<div class="left">
                    Uitgelogd
                    
		</div>
		<div class="content">
                    <p><b>Welkom op iDesign!</b><br></p><p><br>Op iDesign kun jij je eigen digitale portfolio uploaden
                    (showcaseportfolio, ontwikkelingsportfolio en beoordelingsportfolio). Ook kun je berichten
                    in het gastenboek van andere leden plaatsen (en je eigen gastenboek lezen).<br><br></p>
                    <img src="img/homepc.png" alt="Flowers" style="max-width:100%;height:auto;">
                </div>	
            <?php include 'afsluiten.php'; ?>
            <?php
                } 
            ?>
	</body>
</html>	