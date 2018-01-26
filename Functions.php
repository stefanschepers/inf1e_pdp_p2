<?php
/*
Datum : 25-11-2017
Naam  : Wesley Velderman
*/
function uploadImage($files) {
    $tempLoggedInID = 0;

    $target_directory = "Uploads/";
    $target_file = $target_directory . basename($files["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($files["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"];
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($files["size"] > 500000) {
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
        if (move_uploaded_file($files["tmp_name"], $target_file)) {
            echo "The file " . basename($files["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    return $target_file;
}

//returns template ID on submit
function SelectTemplate($dbConnection) {
    if (isset($_POST["willAlwaysWork"])) {
        return $_POST["TemplateTitle"];
    } else {
        $query = 'Select DISTINCT form_template.Title, form_template.Template_ID From form_template, template_column
                   WHERE form_template.Template_ID = template_column.Template_ID';
        $result = mysqli_query($dbConnection, $query);
        echo "<form method='post'>";
        echo "<select name='TemplateTitle'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['Template_ID'] . "'>" . $row['Title'] . "</option>";
        }
        echo "</select>";
        echo "<input type='submit' name='willAlwaysWork' value='Select Template'>";
        echo "</form>";
    }
    
}

?>
