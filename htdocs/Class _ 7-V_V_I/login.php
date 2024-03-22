<?php
session_start();
$email = $_POST['email'];
$Password_1 = ($_POST['password']);
if ($email) {
    $_SESSION['old_email'] = $email;

} else {
    $_SESSION['email_err'] = "Plz E-mail Must Be";
    header('location:sign-in.php');
}
if ($Password_1) {
    $Password = md5($Password_1);

} else {
    $_SESSION['Password_err'] = "Plz Password Must Be";
    header('location:sign-in.php');
}
$db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
$select_count_Q = "SELECT COUNT(*) AS 'Result' FROM users WHERE email='$email' AND password='$Password'";
$count_login = mysqli_query($db_connect, $select_count_Q);

$after_assoc = mysqli_fetch_assoc($count_login)['Result'];

if ($after_assoc == 1) {
   
  //$db_connect_final = mysqli_connect('localhost', 'root', '', 'neptune');
   $select_final = "SELECT id,name,email FROM users WHERE email='$email';";
   $final_select = mysqli_query($db_connect, $select_final);
   $after_assoc = mysqli_fetch_assoc($final_select);
   $_SESSION['login_name']=$after_assoc ['name'];
   $_SESSION['login_email']=$after_assoc ['email'];
   $_SESSION['login_id']=$after_assoc ['id'];
 //echo  $_SESSION['login_name'].$_SESSION['login_email'];
 header('location:back_end/deshbroad.php');
   //header('location:back_end/head.php');
     //$total_person="SELECT COUNT(id) AS total_records FROM users";


} else {
    $_SESSION['login_err']="Email & Password dosn't match";
    header('location:sign-in.php');
}
?>