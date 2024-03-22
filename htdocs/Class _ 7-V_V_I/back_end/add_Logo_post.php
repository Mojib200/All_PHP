<?php


$logo_title = $_POST['logo_title'];
$logo_description = $_POST['logo_description'];
$logo_mood=$_POST['logo_mood'];


$db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
$user_logos = "INSERT INTO logo(logo_title,logo_description,logo_mood) VALUES('$logo_title','$logo_description','$logo_mood')";
$final_logo = mysqli_query($db_connect, $user_logos);



$id=mysqli_insert_id($db_connect);
$logo_name = $_FILES['logo_file']['name'];
$after_image_explode = explode('.', $logo_name);
$after_image_explode_format = end($after_image_explode);
$new_name_now = $id . "." . $after_image_explode_format;
$logo_location = $_FILES['logo_file']['tmp_name'];
$new_logo_location = "../assets/photo/logo_photo/" . $new_name_now;
move_uploaded_file($logo_location, $new_logo_location);
$db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
$update_name = "UPDATE logo SET logo_file ='$new_name_now' WHERE id = $id;";
$final_update = mysqli_query($db_connect, $update_name);
header('location:add_logo.php');
?>