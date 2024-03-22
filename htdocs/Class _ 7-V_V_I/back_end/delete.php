<?php
$id=$_GET['id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
$delete_view = "DELETE FROM `services` WHERE id=$id;";
$after_delete_views = mysqli_query($db_connect,  $delete_view);
header('location:view_services.php');
?>