<?php
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$F_N=$_POST['F_N'];
$M_N=$_POST['M_N'];
$P_ON=$_POST['P_ON'];
$Password=$_POST['Password'];
$upper=preg_match('@[A-Z]@',$Password);
$lower=preg_match('@[a-z]@',$Password);
$number=preg_match('@[0-9]@',$Password);
$special=preg_match('@@',$Password);
if(empty($name)) 
{

    $_SESSION['name_err']="Missing Your name";
    header('loaction:index.php');
}
 else if(empty($F_N))
{

    $_SESSION['F_N_err']="Missing Father name";
    header('loaction:index.php');
}

else if(empty($M_N))
{

    $_SESSION['M_N_err']="Missing Mother name";
    header('loaction:index.php');
}

else if(empty($P_ON))
{

    $_SESSION['P_ON_err']="Missing Phone number ";
    header('loaction:index.php');
}

else if(empty($email))
{

    $_SESSION['email_err']="Missing Email";
    header('loaction:index.php');
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{

    $_SESSION['email_err']=" Must be Validate Email";
    header('loaction:index.php');
}
else if(empty($Password))
{

    $_SESSION['Password_err']="Missing Password";
    header('loaction:index.php');
}
else if(!$upper)
{

    $_SESSION['Password_err']="Password Missing Upper Lower Number And Special charecter And Must be 8 Bit ";
    header('loaction:index.php');
}
else
{
    echo "Name:".$name ,'<br>';
    echo "Father Name:".$F_N ,'<br>';
    echo "Mother Name:".$M_N ,'<br>';
    echo "Phone Number:".$P_ON ,'<br>';
    echo "Email:".$email ,'<br>';
    echo "Password:".$Password ,'<br>';

}




?>