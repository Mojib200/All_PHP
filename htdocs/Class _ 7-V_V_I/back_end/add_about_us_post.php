<?php
session_start();
if(isset($_POST['add_about']))
{
    $id=$_SESSION['login_id'];
$about_me = $_POST['about_me'];
$exam_name_1 = $_POST['exam_name_1'];
$exam_year_1 =$_POST['exam_year_1'];
$exam_name_2 = $_POST['exam_name_2'];
$exam_year_2 =$_POST['exam_year_2'];
$exam_name_3 = $_POST['exam_name_3'];
$exam_year_3 =$_POST['exam_year_3'];

$db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
$about = "UPDATE users SET about_me ='$about_me',exam_name_1='$exam_name_1',exam_year_1='$exam_year_1',exam_name_2='$exam_name_2',exam_year_2='$exam_year_2',exam_name_3='$exam_name_3',exam_year_3='$exam_year_3' WHERE id = $id;";
//$update_name_email = "UPDATE users SET email='$email' WHERE id = $id;";
$final_about = mysqli_query($db_connect, $about);
// $_SESSION['about_me']= $about_me ;
//  echo  $_SESSION['about_me'];
$_SESSION['login_id']= $id;
// $_SESSION['exam_year_1']=$exam_year_1 ;
// $_SESSION['exam_name_2']=$exam_name_2;
// $_SESSION['exam_year_2']=$exam_year_2 ;
// $_SESSION['exam_name_3']=$exam_name_3;
$_SESSION['exam_year_3']=$exam_year_3 ;
header('location:add_about_us.php');
}
?>
