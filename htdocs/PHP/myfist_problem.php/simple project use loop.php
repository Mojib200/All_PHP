<html>
<head>
    <title>Document</title>
</head>
<body>
   <table border="1" align="center" >
    <?php
     for($N=1;$N<=15;$N++)
     {
        echo '<td bgcolor="blue" align="center">'.$N;
     }
for($R=1;$R<=15;$R++)
{
    echo '<tr>';
    for($C=1;$C<=15;$C++)
    {
        if($C%2==0)
        {
            echo '<td bgcolor="Red" align="center">'.$R.'x'.$C.'='.$R*$C.'<br>';
        }
        else
        {
            echo '<td bgcolor="green" align="center">'.$R.'x'.$C.'='.$R*$C.'<br>';
        }
    }
    echo '</tr>';
}?>
   </table>
</body>
</html>