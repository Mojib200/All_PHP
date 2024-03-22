<?php
session_start();
$name=$_POST['U_name'];
$S_ID=$_POST['S_id'];
$email=$_POST['email'];
$P_No=$_POST['P_No'];

//freelancing


if(!$_POST['U_name'])
{
    if(!$_POST['S_id'])
    {
            if(!$_POST['email'])
            {
                if(!$_POST['P_No'])
                {

                    echo "information plz";
                }
        }
    }
}
else{
    if(isset($_POST['log_in']))
    { echo $name.'<br>'.$S_ID.'<br>'.$email.'<br>'.$P_No;
    }
   
}

?>