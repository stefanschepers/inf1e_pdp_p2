<?php
include 'header.php';

include 'dbci.php';

if (isset($_SESSION['ingelogd']) && $_SESSION['ingelogd'] == true) {

    echo '<div class="left">
                    <p><b>Ingelogd</b><br><br></p>
                </div>
		<div class="content">
                    <p><b>Welkom op iDesign!</b><br></p><p><br>Op iDesign kun jij je eigen digitale portfolio uploaden
                    (showcaseportfolio, ontwikkelingsportfolio en beoordelingsportfolio). Ook kun je berichten
                    in het gastenboek van andere leden plaatsen (en je eigen gastenboek lezen).<br><br></p>
                    <img src="img/homepc.png" alt="Flowers" style="max-width:100%;height:auto;">
                </div>	';
    } else {
        echo '<div class="left">
                    <p><b>Ingelogd</b><br><br></p>
                </div>
		<div class="content">
                    <p><b>Welkom op iDesign!</b><br></p><p><br>Op iDesign kun jij je eigen digitale portfolio uploaden
                    (showcaseportfolio, ontwikkelingsportfolio en beoordelingsportfolio). Ook kun je berichten
                    in het gastenboek van andere leden plaatsen (en je eigen gastenboek lezen).<br><br></p>
                    <img src="img/homepc.png" alt="Flowers" style="max-width:100%;height:auto;">
                </div>	';
    }
    include 'footer.php';
?>
