<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$flag=false;
if($email)
{

}
else
{
    $_SESSION['email_err']="Email Mistake";
    $flag=true;
}
if($password)
{

}
else
{
    $_SESSION['password_err']="Password Mistake";
    $flag=true;
}
if($flag)
{
    header('location:s_in.php');

}
else{
    $en_password=md5($password);
    $en_c_password=md5($c_password);
 $db_connect=mysqli_connect('localhost', 'root', '', 'mojib');
  $user_query ="INSERT INTO users (name, email, password, c_password) VALUES ('$name', '$email', '$en_password', '$en_c_password');";
  mysqli_query($db_connect, $user_insert);
}
?>