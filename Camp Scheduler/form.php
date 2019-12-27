<?php

    include_once "Camper.php";
    include_once "CampClass.php";
    include_once "Scheduler.php";
    include_once "Preference.php";

    $name = '';
    $password = '';
    $gender = '';
    $color = '';
    $languages = [];
    $comments = '';
    $tc = '';
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["csvToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            echo $target_file;
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["csvToUpload"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "csv") {
            echo "Sorry, only CSV files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["csvToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["csvToUpload"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
?>

<form action="" method="post" enctype="multipart/form-data">

    <label>Upload a CSV</label>
    <input type="file" name="csvToUpload" id="csvToUpload">
    <input type="submit" name="submit" value="Upload Image">

</form>