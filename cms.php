<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link href="Styling/CMSStyling.css" type="text/css" rel="stylesheet" />
        <title></title>
    </head>
    <body>
        <?php
        /* $coni = mysqli_connect("sql304.epizy.com", "epiz_21240585", "INF1E2017");
          if (!$coni) {
          die("couldnt connect to mysql");
          }
          $dbselect = mysqli_select_db($coni, "php_week4_bugreports");
          if (!$dbselect) {
          echo "Could not establish an connection to the selected database.";
          } */
        ?>

        <div id="CMSWrapper">
            <div class="row">
                <div class="col-20"><div id="Header">a</div></div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div id="Menu">
                        <ul class="nav">
                            <li><a href="index.php">Home</a>
                                <ul>
                                    <li>test1</li>
                                    <li>test2</li>
                                    <li>test3</li>
                                </ul>
                            </li>
                            <li>Gegevens</li>
                            <li>Rapporten</li>
                            <li>Uitloggen</li>
                        </ul>
                    </div>
                   
                </div>
                <div class="col-17">
                    <div id="Content"></div>
                </div>
            </div>
        </div>
    </body>
</html>
