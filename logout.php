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
        <?php
            include 'dbci.php';
            session_start();
            $_SESSION["ingelogd"] = false;
            session_destroy();
        ?>
            <div id="succes">Je bent succesvol uitgelogd. <a href="index.php?p=home">Klik hier</a></div></div><br />
       
    </body>
</html>
