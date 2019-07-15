<?php
include 'connect_to_db.php';
if($connection) {
    $dir = "../img/FE_ Assignment 2 - GFT/image resources/Partners";
    $files = scandir($dir);
    $files2 = scandir($dir, 1);
    mysqli_query($connection, 'use FrontEnd');
    foreach( $files as $row)
    {
        if($row!='.' && $row!='..'  ) {
            $img_location = "$dir/$row";
            $sql = "INSERT into image_files (img_loc) VALUES ('$img_location')";
            mysqli_query($connection,$sql);
        }
    }

} else{
  echo 'Not Conected';
}
?>