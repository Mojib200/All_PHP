<?php
 session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      .Pass{
        position: relative;
      }
 #mojib{
  width :38px;
  height:38px;
  background-color:teal;
  color: white;
  font-size:20px;
  text-align:center;
  line-height:40px;
  position: absolute;
  top:490px;
  right:398px;
  border-radius:10px,10px,10px,10px;


}

    </style>
  </head>
  <body>


  <div class="row mt-5">
<div class ="col-lg-5 m-auto ">
    <div class="card">
        <div class="card-header">
            <h3 align="center">Register</h3>
        </div>
    </div>
</div>

  </div>

    
  <div class="card-body" >
<form action="Post file.php" method ="post">


<div class ="col-lg-5 m-auto " class="mb-3">
<label for=" " class="form-label">Name</label>
<input type="text" name="name" class="form-control">
<?php if(isset($_SESSION['name_err'])) 
{?>
<strong class="text-danger"><?=$_SESSION['name_err']?></strong>
<?php } unset($_SESSION['name_err'])?>
</div>



<div class ="col-lg-5 m-auto " class="mb-3">
<label for=" " class="form-label">Father Name</label>
<input type="text" name="F_N" class="form-control">
<?php if(isset($_SESSION['F_N_err'])) 
{?>
<strong class="text-danger"><?=$_SESSION['F_N_err']?></strong>
<?php } unset($_SESSION['F_N_err'])?>
</div>

<div class ="col-lg-5 m-auto " class="mb-3">
<label for=" " class="form-label">Mather Name</label>
<input type="text" name="M_N" class="form-control">
<?php if(isset($_SESSION['M_N_err'])) 
{?>
<strong class="text-danger"><?=$_SESSION['M_N_err']?></strong>
<?php } unset($_SESSION['M_N_err'])?>
</div>




<div class ="col-lg-5 m-auto " class="mb-3">
<label for=" " class="form-label">Phone Number </label>
<input type="number" name="P_ON" class="form-control">
<?php if(isset($_SESSION['P_ON_err'])) 
{?>
<strong class="text-danger"><?=$_SESSION['P_ON_err']?></strong>
<?php } unset($_SESSION['P_ON_err'])?>
</div>



<div class ="col-lg-5 m-auto " class="mb-3">
<label for=" " class="form-label">Email</label>
<input type="email" name="email" class="form-control">
<?php if(isset($_SESSION['email_err'])) 
{?>
<strong class="text-danger"><?=$_SESSION['email_err']?></strong>

<?php } unset($_SESSION['email_err'])?>
</div>


<div  class ="col-lg-5 m-auto" class="Pass" class="mb-3">
<label for=" " class="form-label">Password</label>
<input type="password" name="Password" class="form-control">
<?php if(isset($_SESSION['Password_err'])) 
{?>
<strong class="text-danger"><?=$_SESSION['Password_err']?></strong>
<?php } unset($_SESSION['Password_err'])?>
<i id="mojib" class="fa fa-eye"></i>
</div>


   


<div class ="col-lg-5 m-auto " class="mb-3">
    <button type="submit" class="btn-btn-success">Register</button>

    </div>
</form>

    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>