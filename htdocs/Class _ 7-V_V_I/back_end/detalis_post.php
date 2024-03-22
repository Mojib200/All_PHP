<?php


$work_title = $_POST['work_title'];
$work_description = $_POST['work_description'];
$work_mood=$_POST['work_mood'];


$db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
$user_workers = "INSERT INTO workers(work_title,work_description,work_mood) VALUES('$work_title','$work_description','$work_mood')";
$final_work = mysqli_query($db_connect, $user_workers);



$id=mysqli_insert_id($db_connect);
$work_name = $_FILES['worker_file']['name'];
$after_image_explode = explode('.', $work_name);
$after_image_explode_format = end($after_image_explode);
$new_name_now = $id . "." . $after_image_explode_format;
$work_location = $_FILES['worker_file']['tmp_name'];
$new_work_location = "../assets/photo/work_photo/" . $new_name_now;
move_uploaded_file($work_location, $new_work_location);
$db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
$update_name = "UPDATE workers SET work_file ='$new_name_now' WHERE id = $id;";
$final_update = mysqli_query($db_connect, $update_name);
header('location:detalis.php');
?>