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
                $link = mysqli_connect('localhost', 'root', '') 
                OR DIE('Could not connect to the database!');    
            ?>
            
		
            <div id="header">
                <img src="img/logo.png" alt="iDesign Logo" class="logo"> 
            </div>
            <div id="menu">
                <span class="menufooteritems">Home  -  Mijn portfolio's  -  Contact  -  <a href="cms.php">CMS</a></span>
            </div>
            <div id="container">
		<div class="left">
                    Inloggen HIER (Placeholder)
                    <p>Email:<br>
                    <input type="text"><br>
                    Wachtwoord:<br>
                    <input type="text"></p>
                    <button type="button">Inloggen</button>
		</div>
		<div class="content">
                    <p>Welkom op iDesign!<br></p><p><br>Op iDesign kun jij je eigen digitale portfolio uploaden
                    (showcaseportfolio, ontwikkelingsportfolio en beoordelingsportfolio). Ook kun je berichten
                    in het gastenboek van andere leden plaatsen (en je eigen gastenboek lezen).<br><br></p>
                    <img src="img/homepc.png" alt="Flowers" style="max-width:100%;height:auto;">
                </div>	
            </div>
            <div id="footer">
                <span class="menufooteritems">&#169; iDesign</span>
            </div>
	</body>
</html>	