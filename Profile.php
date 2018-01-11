<?php 
include "header.php";
?>
        <form method="POST" action="Profile.php" enctype="multipart/form-data">
            <input type="file" name="ProfilePicture"/>
            <input type="file" name="Logo"/>
            <input type="submit" name="SUBMIT">
        </form>
        <?php
        $tempLoggedInID = 0;

        $target_directory = "Uploads/";
        $target_file = $target_directory . basename($_FILES["ProfilePicture"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (isset($_POST["SUBMIT"])) {
            $check = getimagesize($_FILES["ProfilePicture"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"];
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        } 
        // Check file size
        if ($_FILES["ProfilePicture"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["ProfilePicture"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["ProfilePicture"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        
        $insertQuery = "INSERT INTO user_styling(User_ID, Styling_ID, Profile_Picture, Logo)
                        VALUES(0, 0, '$target_file', '')";
        
        ?>
<?php 
    include "Footer.php";
?>