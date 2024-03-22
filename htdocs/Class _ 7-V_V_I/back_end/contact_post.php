<?php
session_start();
if(isset($_POST['add_contact']))
{
    $id=$_SESSION['login_id'];
$official_number =$_POST['official_number'];
$official_address =$_POST['official_address'];
$official_mail =$_POST['official_mail'];

$db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
$contact = "UPDATE users SET official_number ='$official_number',official_address ='$official_address',official_mail ='$official_mail' WHERE id = '$id';";
$final_contact = mysqli_query($db_connect, $contact);

$_SESSION['login_id']= $id;
header('location:contact.php');
}
?>
