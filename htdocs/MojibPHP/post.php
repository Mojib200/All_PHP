<?php
session_start();
$name=$_POST['name'];
$F_name=$_POST['F_name'];
$M_name=$_POST['M_name'];
$email=$_POST['email'];
$P_No=$_POST['P_No'];
$sms=$_POST['sms'];


if(!$_POST['name'])
{
    header('location:home.php');
    $_SESSION["name_err"]="Your Name Mistake";
    if(!$_POST['F_name'])
    {
        header('location:home.php');
        $_SESSION["F_name_err"]="Father Name Mistake";
          if(!$_POST['M_name'])
        {
            header('location:home.php');
            $_SESSION["M_name_err"]="Mother Name Mistake";

            if(!$_POST['email'])
            {
                header('location:home.php');
                $_SESSION["email_err"]="E-mail Mistake";

                if(!$_POST['P_No'])
                {
                    header('location:home.php');
                    $_SESSION["phone_err"]="Phone Number Mistake";

                if(!$_POST['sms'])
                {
                    header('location:home.php');
                    $_SESSION["sms_err"]="SMS Mistake";
                }
                }
            }
        }
    }
    
}
else{
    if(isset($_POST['submit']))
    { echo $name.'<br>'.$F_name.'<br>'.$M_name.'<br>'.$email.'<br>'.$P_No.'<br>'.$sms;
    }
}

?>