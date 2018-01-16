<?php 
include "header.php";
?>
        <form method="POST" action="Profile.php" enctype="multipart/form-data">
            <p> Profile picture<input type="file" name="ProfilePicture"/></p>
            <p> Logo<input type="file" name="Logo"/></p>
            <p> <input type="submit" name="SUBMIT"></p>
        </form>
        <?php
        include 'Functions.php';
        if (isset($_POST["SUBMIT"])) {
            $profileTarget = uploadImage($_FILES["ProfilePicture"]);            
            $logoTarget = uploadImage($_FILES["Logo"]);

            echo $insertQuery = "INSERT INTO user_styling(User_ID, Styling_ID, Profile_Picture, Logo)
                        VALUES(".$_SESSION['User_ID'].", 0, '$profileTarget', '$logoTarget')";
        }

        
        
        
        ?>
<?php 
    include "Footer.php";
?>