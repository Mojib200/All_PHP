<?php
function sub()
{
    $a=20;
    $b=30;
    return $a-$b;
}
echo "Sub=", sub(),"<br>";

function sum()
{
    $a=30;
    $b=30;
    return $a+$b;
}
echo "Sum=", sum() ,"<br>";

function mul()
{
    $a=30;
    $b=30;
    echo "Mul=",  $a*$b,"<br>";
}
mul();

function div()
{
    $a=30;
    $b=30;
    echo "Div =",  $a/$b,"<br>";
}
div();



?>