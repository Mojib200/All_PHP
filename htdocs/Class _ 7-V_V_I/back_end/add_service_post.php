<?php
$service_title=$_POST['service_title'];
$services_description=$_POST['services_description'];
$service_icon=$_POST['service_icon'];
$service_mood=$_POST['service_mood'];
$db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
$user_services = "INSERT INTO services (service_title,services_description,service_icon,service_mood) VALUES('$service_title','$services_description','$service_icon','$service_mood')";
mysqli_query($db_connect, $user_services);
header('location:add_services.php');

?>