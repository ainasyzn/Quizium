<?php 
include ("../../config/db_connect.php");
session_start();

if(isset($_POST["Save"])){

        $id = 2;
        $name = $_POST["name"];
        $oldPass = $_POST["oldPass"];
        $newPass = $_POST["newPass"];
        $imageName = mysql_real_escape_string($_FILES["image"]["name"]);
        $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
        $imageType = mysql_real_escape_string($_FILES["image"]["type"]);
        
        if(substr($imageType,0,5) == "image")
        {
                $sql = "UPDATE `instructor`
                        SET name = $name, password = $newPass, imageName = $imageName, imageData = $imageData
                        WHERE instructorID = $id";
                
                if(mysqli_query($conn, $sql)){
                        header("Location: ../../instructor/profile.php");
                        echo "<script> alert('Profile updated successfully!') </script>";
                    } else {
                        echo 'query error: ' . mysqli_error($conn);
                    }
        }
        else 
        {
                echo "Only images allowed!";
        }
}
?>