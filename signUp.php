<?php
include "header.php";
?>
<form method="post" action="signUp.php" enctype="multipart/form-data">
    <div class="FormBox">
        <div class="FormColumn">password</div><div class="FormColumn"><input type="password" name="password"/></div>
        <div class="FormColumn">FirstName</div><div class="FormColumn"><input type="FirstName" name="FirstName" placeholder="FirstName"/></div>
        <div class="FormColumn">LastName</div><div class="FormColumn"><input type="LastName" name="LastName" placeholder="LastName"/></div>
        <div class="FormColumn">Date_of_Birth</div><div class="FormColumn"><input type="Date_of_Birth" name="Date_of_Birth" placeholder="Date_of_Birth"/></div>
        <div class="FormColumn">Email</div><div class="FormColumn"><input type="Email" name="Email" placeholder="Email"/></div>
        <div class="FormColumn">Bio</div><div class="FormColumn"><input type="Bio" name="Bio" placeholder="Bio"/></div>
        <div class="FormColumn">User_level_ID</div><div class="FormColumn"><input type="User_level_ID" name="User_level_ID" placeholder="User_level_ID"/></div>
        <div class="FormColumn">SLB_Mark</div><div class="FormColumn"><input type="SLB_Mark" name="SLB_Mark" placeholder="SLB_Mark"/></div>    
        
        <div class="FormColumn"><input type="submit" name="SUBMIT"></div>
        <div class="Clear"></div>
    </div>
</form>
<?php
if (isset($_POST["SUBMIT"])) {
    include 'dbci.php';
    $password = trim($_POST["password"], " ");
    $FirstName = trim($_POST["FirstName"], " ");
    $LastName = trim($_POST["LastName"], " ");
    $Date_of_Birth = trim($_POST["Date_of_Birth"], " ");
    $Email = trim($_POST["Email"], " ");
    $Bio = trim($_POST["Bio"], " ");
    $User_level_ID = trim($_POST["User_level_ID"], " ");
    $SLB_Mark = trim($_POST["SLB_Mark"], " ");
    
    
   
    $password = stripslashes($password);
    $FirstName = stripslashes($FirstName);
    $LastName = stripslashes($LastName);
    $Email = stripslashes($Email);
    $Date_of_Birth = stripslashes($Date_of_Birth);
    $Bio = stripslashes($Bio);
    $User_level_ID = stripslashes($User_level_ID);
    $SLB_Mark = stripslashes($SLB_Mark);
    $tempLoggedInID = 0;



    $insertQuery = strip_tags("INSERT INTO user(Password, FirstName, LastName, Email, Date_of_Birth, Bio, User_level_ID , SLB_Mark)
                        VALUES('$password','$FirstName','$LastName', '$Email', '$Date_of_Birth', '$Bio', '$User_level_ID', '$SLB_Mark')");
    
   // echo $filteredQuery = mysqli_escape_string($insertQuery);
   $result = mysqli_query($coni, $insertQuery);
   if($result){
       echo "Registered!";
       header("Location: login.php");
   }
}
include "footer.php";
?>