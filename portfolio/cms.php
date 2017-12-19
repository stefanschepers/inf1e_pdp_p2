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
                <div class="col-20"><div id="Header"></div></div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div id="Menu">
                        <ul class="nav">
							<div class="dropdown">
								<li><a href="index.php">Home</a>
								  <div class="dropdown-content">
									<ul>
										<li>test1</li>
										<li>test2</li>
										<li>test3</li>
									</ul>
								</li>
								  </div>
							
								  
							
                           <div class="dropdown">                          
							  <li><a href="index.php">Gegevens</li></a>
							  <div class="dropdown-content">
								<ul>
										<li>test1</li>
										<li>test2</li>
										<li>test3</li>
									</ul>
							  </div>
							</div>
							
							
							<div class="dropdown">                          
							  <li><a href="index.php">Rapporten</li></a>
							  <div class="dropdown-content">
								<a href="index.php">Link 1</a>
								<a href="#">Link 2</a>
								<a href="#">Link 3</a>
							  </div>
							</div>
							
							
                            <div class="dropdown">                          
							  <li><a href="index.php">Uitloggen</li></a>
							  <div class="dropdown-content">
								<a href="#">Link 1</a>
								<a href="#">Link 2</a>
								<a href="#">Link 3</a>
							  </div>
							</div>
                        </ul>
						
						

							</div>
                   </div>
                
                
            
            <?php
        $conn= mysqli_connect("localhost","root","")
                OR Die("Connection failed");
           
            mysqli_select_db($conn,"digitaal_portfolio")
            OR Die("Connection failed");
        ?>
        <div class="tekst">
        <table style="width:80%">
            <tr>
                <th>Naam</th>
                <th>Achternaam</th>
                <th>Geboortedatum</th>
                <th>E-mail</th>
                <th>Password</th>
                <th>Biography</th>
                <th>Acces level</th>
            </tr>
            <tr>
                <td><?php         $mysqli="SELECT FirstName FROM user";
                                  $result= $conn->query($mysqli);
        
                                    if($result->num_rows >0)
                                   {
                                        while($row = $result->fetch_assoc())
                                        {
                                        echo $row["FirstName"]."<br>";
                                        }
                                    }    
                    ?>
                </td>
                <td> <?php        $mysqli="SELECT LastName FROM user";
                                  $result= $conn->query($mysqli);
        
                                    if($result->num_rows >0)
                                    {
                                        while($row = $result->fetch_assoc())
                                                {
                                                echo $row["LastName"]."<br>";
                                                }
                                    }
                                    ?>
                </td>
                <td><?php        $mysqli="SELECT Date_of_Birth FROM user";
                                  $result= $conn->query($mysqli);
        
                                    if($result->num_rows >0)
                                {
                                    while($row = $result->fetch_assoc())
                                        {
                                        echo $row["Date_of_Birth"]."<br>";
                                        }
                                }
                                    ?>
                </td>
                <td><?php        $mysqli="SELECT Email FROM user";
                                 $result= $conn->query($mysqli);
        
                                    if($result->num_rows >0)
                                    {
                                        while($row = $result->fetch_assoc())
                                        {
                                        echo $row["Email"]."<br>";
                                        }
                                    }
                                    ?>
                </td>
                <td><?php        $mysqli="SELECT Password FROM user";
                                 $result= $conn->query($mysqli);
        
                                    if($result->num_rows >0)
                                    {
                                        while($row = $result->fetch_assoc())
                                        {
                                        echo $row["Password"]."<br>";
                                        }
                                    }
                                    ?>
                </td>   
                <td><?php        $mysqli="SELECT Bio FROM user";
                                 $result= $conn->query($mysqli);
        
                                    if($result->num_rows >0)
                                    {
                                        while($row = $result->fetch_assoc())
                                        {
                                        echo $row["Bio"]."<br>";
                                        }
                                    }
                                    ?>
                </td>
                 <td><?php        $mysqli="SELECT User_level_ID FROM user";
                                 $result= $conn->query($mysqli);
        
                                    if($result->num_rows >0)
                                    {
                                        while($row = $result->fetch_assoc())
                                        {
                                        echo $row["User_level_ID"]."<br>";
                                        }
                                    }
                                    ?>
                </td>     
           </tr>
        </table> 
            
        </div>
                </div>
                </div>
        <?php
         $conn->Close();
        ?>

    </body>
</html>
