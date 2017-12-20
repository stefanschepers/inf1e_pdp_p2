<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="header">
                <a href="index.php"><img src="img/logo.png" alt="iDesign Logo" class="logo"></a> 
            </div>
            <div id="menu">
                <ul>
                    <a href="index.php"><li>Home</li></a>
                    <li>Mijn portfolio's</li>
                    <li>Contact</li>
                    <a href="cms.php"><li>CMS</li></a>
                    <?php
                        if (isset($_SESSION['ingelogd']) && $_SESSION['ingelogd'] == true) { 
                    ?>
                    <a href="logout.php"><li>Uitloggen</li></a> 
                    <?php
                        }else{ 
                    ?>
                    <a href="login.php"><li>Inloggen</li></a> 
                    <?php 
                        } 
                    ?>
                </ul>
            </div>
            <div id="container">
    </body>
</html>
