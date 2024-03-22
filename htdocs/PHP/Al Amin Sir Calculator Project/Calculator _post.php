<?php
$a=$_POST['number_1'];
$b=$_POST['number_2'];
$c=$_POST['number_3'];
$d=$_POST['number_4'];
$e=$_POST['number_5'];

if($_POST['number_1'])
{
if($_POST['number_2'])
{
    if($_POST['number_3'])
    {
        if($_POST['number_4'])
        {
            if($_POST['number_5'])
{
    if(isset($_POST['add']))
    {$result1=$a+$b+$c+$d+$e;
        echo "Addtion Value= ".$result1;
    }
    else if(isset($_POST['sub']))
    {
        $result2=$a-$b-$c-$d-$e;  
        echo "Subtraction Value= " .$result2;
    }
   else if(isset($_POST['mul']))
    {
        $result3=$a*$b*$c*$d*$e;
        echo "Multiply value= " .$result3;
    }
    else if(isset($_POST['div']))
    {
        $result4=$a/$b;   
        echo "Divided value= ".$result4;
    }
   else if(isset($_POST['power']))
    {
        $result5=pow($a,$b);
        echo "Power value  =  ".$result5;
    }
}
else{
    echo 'Number Five Mistake';
}
        }
        else{
            echo 'Number Four Mistake';
        } 
    }
    else{
        echo 'Number Three Mistake';
    } 
}
else{
    echo 'Number Two Mistake';
}
}
else{
    echo 'Number One Mistake';
}


?>