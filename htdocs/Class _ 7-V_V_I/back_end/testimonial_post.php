<?php
session_start();
if(isset($_POST['add_testimonial']))
{
    $id=$_SESSION['login_id'];
$official_post =$_POST['official_post'];

$db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
$testimonial = "UPDATE users SET official_post ='$official_post' WHERE id = '$id';";
$final_testimonial = mysqli_query($db_connect, $testimonial);

$_SESSION['login_id']= $id;
header('location:testimonial.php');
}
?>
