<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styling/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>iDesign - Uitloggen</title>
    </head>
    <body>
        <?php
            include 'dbci.php';
            session_start();
            $_SESSION["ingelogd"] = false;
            session_destroy();
        ?>
        <?php include 'basis.php'; ?>
            <div class="fullcontent">
                Je bent succesvol uitgelogd.  
                <meta http-equiv="refresh" content="1; url=index.php">
            </div>
        <?php include 'afsluiten.php'; ?>
       
    </body>
</html>
