<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
            border: 1px solid black;
            }
            table th{
              border-bottom: 1px solid black;
            }
        </style>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Users</title>
    </head>
    <body>
        <?php
        $conn= mysqli_connect("localhost","root","")
                OR Die("Connection failed");
           
            mysqli_select_db($conn,"digitaal_portfolio")
            OR Die("Connection failed");
        ?>
        
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
        <?php
         $conn->Close();
        ?>
    </body>
</html>

