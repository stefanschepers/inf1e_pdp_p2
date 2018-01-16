<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="Styling/style.css" type="text/css" rel="stylesheet"/>
        <link href="Styling/Guestbook.css" rel="stylesheet" type="text/css"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <?php
        if (session_id() == '' || !isset($_SESSION)) {
            session_start();
        }

        if (!isset($_SESSION["ingelogd"])) {
            $_SESSION["ingelogd"] = false;
        }
        ?>
        <div id="header">
            <a href="index.php"><img src="img/logo.png" alt="iDesign Logo" class="logo"></a> 
        </div>
        <div id="menu">
            <ul>

                <a href="index.php"><li>Home</li></a>
                <li>Mijn portfolio's</li>
                <?php
                if (isset($_SESSION['ingelogd']) && $_SESSION['ingelogd'] == true) {
                    if (isset($_SESSION['level']) && $_SESSION['level'] > 0) {
                        echo '<a href="cms.php"><li>CMS</li></a>';
                    }
                    echo '<a href="logout.php"><li>Uitloggen</li></a>';
                } else {
                    echo '<a href="login.php"><li>Inloggen</li></a>';
                }
                ?>
                <li>Contact</li>

            </ul>
        </div>
        <div id="container">

