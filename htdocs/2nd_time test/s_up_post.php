<?php
session_start();
$name=$_POST['name'];

$email=$_POST['email'];
$password=$_POST['password'];
$c_password=$_POST['c_password'];
$preg_maa = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password);
$flag=false;
if($name)
{
    $_SESSION['old_name']=$name;
}
else
{
    $_SESSION['name_err']="name Mistake";
    $flag=true;

}
if($email)
{
    $_SESSION['old_email']=$email;
}
else
{
    $_SESSION['email_err']="Email Mistake";
    $flag=true;

}
if($password)
{
    if($c_password)
    {
        if($c_password==$password)
    {
        if($preg_maa)
        {
           
        }
        else
        {
            $_SESSION['c_password_err']="Password Dosn't Strong ";
            $flag=true;
        
        }
    }
    else
    {
        $_SESSION['c_password_err']="Password & Confirm Dosn't Same";
        $flag=true;
    
    }
    }
    else
    {
        $_SESSION['c_password_err']="Confirm Password Mistake";
        $flag=true;
    
    }
   
}
else
{
    $_SESSION['password_err']="Password Mistake";
    $flag=true;

}

if($flag)
{
    header('location:s_up.php');
}
else
{
    $en_password=md5($password);
    $en_c_password=md5($c_password);
 $db_connect=mysqli_connect('localhost', 'root', '', 'mojib');
  $user_insert ="INSERT INTO users (name, email, password, c_password) VALUES ('$name', '$email', '$en_password', '$en_c_password');";
  mysqli_query($db_connect, $user_insert);

    $_SESSION['success_msg']="Welcome $name";
    header('location:s_in.php');
}
