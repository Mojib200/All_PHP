<?php
session_start();
$U_name=$_POST['U_name'];
$password=$_POST['password'];
if(!$_POST['U_name'])
{
    if(!$_POST['password'])
    {
        echo "freelancing information plz";
    }
}
else{
    if(isset($_POST['log_in']))
    { echo $U_name.'<br>'.$password;
    }
   
}

?>