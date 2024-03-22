<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];
$flag = false;
$preg_maa = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password);
if ($name) {
   $_SESSION['old_name']=$name;

}
else {
    $_SESSION['name_err'] = "Name mistake";
    $flag = true;
    
    
}

if ($email) {
    $_SESSION['old_email']=$email;
} 
    else {
    $_SESSION['email_err'] = "Email Mistake";
    $flag = true;
    // header('location:sign_up.php');
}

if ($password) {
    if ($c_password) {
        if ($password == $c_password) {
            if($preg_maa)
            {
               
            }
            else{
                $_SESSION['c_password_err'] = "Password  Dosn't Strong";
                $flag = true;
            // header('location:sign_up.php');
            }
        } 
        else {
            $_SESSION['c_password_err'] = "Password & Confirm Password Dosn't Same";
            // header('location:sign_up.php');
            $flag = true;
        }
        
    } else {
        $_SESSION['c_password_err'] = "Confirm Password Mistake";
        // header('location:sign_up.php');
        $flag = true;
    }
} else {
    $_SESSION['password_err'] = "Password Mistake";
    // header('location:sign_up.php');
    $flag = true;
}

if($flag==true)
{
    header('location:sign_up.php');
}

else {
    $ec_password=md5($password);
    $db_connect=mysqli_connect('localhost', 'root', '', 'exam');
    $db_insert="INSERT INTO users(name,email,password) VALUES('$name','$email','$ec_password');";
    mysqli_query($db_connect,$db_insert);
    $_SESSION['successfully_login'] = "Welcome $name Registration Done.";
  $_SESSION['login'] = "$email";
  header('location:sign_in.php');
}
