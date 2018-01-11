
        <?php
        include 'header.php';
        include 'dbci.php';
            session_start();
            $_SESSION["ingelogd"] = false;
            session_destroy();
        ?>
        
            <div class="fullcontent">
                Je bent succesvol uitgelogd.  
                <meta http-equiv="refresh" content="1; url=index.php">
            </div>
        <?php include 'footer.php'; ?>
