<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CV</title>
        <link rel="stylesheet" type="text/css" href="CV.css">
    </head>
    <body>
        <div id="Container">
            <div id="CVBlok">
                <div id="CVBlokTitel">
                    <h2 class="Titelh2">Curriculum Vitae</h2>
                </div>
                <div id="CVBlokContent">
                    <h2 class="Titelh2">CV</h2>
                <?php                
                    $conn = mysqli_connect("127.0.0.1", "root", "", "idesign") OR DIE ('No connection established');
                    $db = mysqli_select_db($conn, "idesign") OR DIE('No database selected');
                    $QuerySelectFormTemplate = "SELECT * FROM form_template"; 
                    
                    $resultFT = mysqli_query($conn,$QuerySelectFormTemplate);
                    if (!$resultFT) {
                        echo "Query failed";
                    }
                    echo "<form method='post'>";
                    echo "<select name='TemplateSelect'>";
                    while ($fetchFT  = mysqli_fetch_assoc($resultFT)) {
                    
                    echo "<option value='{".$fetchFT['Title']."}'>".$fetchFT['Title']. "</option>";
                        
                    }
                    echo "</select>";
                    echo "<input type='submit' name='submitFT'>";
                    echo "</form>";
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    $resultFT->close();
                    if (isset($_POST["submitForm"])) {
                    if (!empty($_POST["opleidingname"])) {
                    $Opleidingname = $_POST["opleidingname"];
                    $QueryOpleidingInsert = "INSERT INTO opleiding (Opleiding_Name) VALUES ('$Opleidingname');";
                    $resultOpleidingInsert = mysqli_query($conn, $QueryOpleidingInsert);
                    
                    }
                    }
                    
                    $queryOpleidingSelect = "SELECT * FROM opleiding";
                    $resultOpleidingSelect = mysqli_query($conn, $queryOpleidingSelect);
                    while($fetchOpleiding = mysqli_fetch_assoc($resultOpleidingSelect)) {
                    echo $fetchOpleiding['Opleiding_Name'] . "<br>";
                    }
                    $conn->close();
                ?>  
                    <form method="post">
                        <input type="text" name="opleidingname">
                        <input type="submit" name="submitForm">
                    </form> 
                </div>    
            </div>
        </div>
        
    </body>
</html>

