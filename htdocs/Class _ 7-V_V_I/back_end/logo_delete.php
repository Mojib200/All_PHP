<?php
$id=$_GET['id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
$delete_view_logo = "DELETE FROM `logo` WHERE id='$id';";
$after_delete_logo= mysqli_query($db_connect,  $delete_view_logo);
header('location:view_logo.php');
?>