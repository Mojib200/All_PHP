<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$flag=false;
if($email)
{
   
}
else{
    $_SESSION['email_err']="Email Mistake";
    // $flag=true;
  header('location:sign_in.php');
}

if($password)
{
}
else{
$_SESSION['password_err']="Password Mistake";
// $flag=true;
header('location:sign_in.php');
}

$ec_password=md5($password);
$db_connect=mysqli_connect('localhost', 'root', '', 'exam');
$db_select="SELECT COUNT(*) AS 'result' FROM users
WHERE email='$email' AND password='$ec_password';";
$count_login=mysqli_query($db_connect,$db_select);
$after_assoc=mysqli_fetch_assoc($count_login)['result'];
if($after_assoc==1)
{
    
    $select_final = "SELECT id,name,email FROM users WHERE email='$email';";
    $final_select = mysqli_query($db_connect, $select_final);
    $after_assoc = mysqli_fetch_assoc($final_select);
    $_SESSION['login_name']=$after_assoc ['name'];
    $_SESSION['login_email']=$after_assoc ['email'];
    $_SESSION['login_id']=$after_assoc ['id'];
    header('location:dashboard.php');
}
else
{
    echo "Not found this mail and password";
}
