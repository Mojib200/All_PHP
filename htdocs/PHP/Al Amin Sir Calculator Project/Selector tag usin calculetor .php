 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator</title>
    <style>
        .mojib{
    background: #380;
    top: ;
        }
        #color{
          color: Red;
          font-size: 30px;
        }
        
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
<div class ="mojib"class=" pt-10 pb-10  " class="form-control>
<div class="col-lg-8 m-auto container">
<div class="col-lg-6 m-auto">
    <form action="" method="post">
  <div class="pt-1">
    <input type="number" class="form-control" name="number_1" placeholder="Number_1">
  </div>
  <div class="pt-1">
  <input type="number" class="form-control" name="number_2" placeholder="Number_2">
  </div>
  <div class="pt-1">
  <input type="number" class="form-control" name="number_3" placeholder="Number_3">
  </div>
  <div class="pt-1">
  <input type="number" class="form-control" name="number_4" placeholder="Number_4">
  </div>
  <div class="pt-1">
  <input type="number" class="form-control" name="number_5" placeholder="Number_5">
  </div>
  
  <div class="pt-1">
    <label for="cars">Choose a car:</label>
  <select name="cars" id="cars" name="select">
    <option value="add" name="add">Add(+)</option>
    <option value="sub"name="sub" class="sub">Sub(-)</option>
    <option value="mul" name="mul">Mul(*)</option>
    <option value="div" name="div">Div(/)</option>
    <option value="power" name="power">Power(^)</option>
  </select>
    </div>
 <div class="pt-2">
     <button type="submit" class="btn btn-primary "name="add"> Add(+) </button>
     <button type="submit" class="btn btn-primary " name="sub">Sub(-) </button>
     <button type="submit" class="btn btn-primary " name="mul">Mul(*) </button>
     <button type="submit" class="btn btn-primary " name="div"> Div(/) </button>
     <button type="submit" class="btn btn-primary " name="power"> Power(^) </button>
</div>
<?php if(isset($_POST['number_1']) && isset($_POST['number_2']) && isset($_POST['number_3']) && isset($_POST['number_3'])&& isset($_POST['number_4'])){?>
 <div class="alert alert-success mt-2 pb-5 " id="color">
  <?php
if(isset($_POST['number_1']))
{
if($_POST['number_2'])
{
    if($_POST['number_3'])
    {
        if($_POST['number_4'])
        {
            if($_POST['number_5'])
{
  

    $a=$_POST['number_1'];
    $b=$_POST['number_2'];
    $c=$_POST['number_3'];
    $d=$_POST['number_4'];
    $e=$_POST['number_5'];
    
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
</div>
<?php }?>
</form>
    </div>
    
</div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

