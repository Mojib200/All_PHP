<!DOCTYPE html>
<html>
<body>

<?php
session_start();
require_once'headerr.php';
?>
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header bg-info">
                    <h1 align="center">Personal Information</h1>
                </div>
                <form action="post.php"  method="post">
  <div class="mb-1">
  <input type="text" class="form-control mt-1" placeholder="Name" name="name">
  <?php
  if(isset($_SESSION["name_err"]))
  {
    echo $_SESSION["name_err"];
  }
  ?>
  <input type="text" class="form-control mt-1" placeholder="Father Name" name="F_name">
 
  <?php
   if(isset($_SESSION["F_name_err"]))
  {
    echo $_SESSION["F_name_err"];
  }
  ?>
  <input type="text" class="form-control mt-1" placeholder="Mather Name"name="M_name">
  <?php
   if(isset($_SESSION["M_name_err"]))
  {
    echo $_SESSION["M_name_err"];
  }
  ?>
    <input type="email" class="form-control mt-1" placeholder="E-mail" name="email">
    <?php
   if(isset($_SESSION["email_err"]))
  {
    echo $_SESSION["email_err"];
  }
  ?>
    <input type="number" class="form-control mt-1" placeholder="Phone Number" name="P_No">
    <?php
   if(isset($_SESSION["phone_err"]))
  {
    echo $_SESSION["phone_err"];
  }
  ?>
    <textarea rows="10" class="form-control mt-1" placeholder="SMS" name="sms"></textarea>
    <?php
   if(isset($_SESSION["sms_err"]))
  {
    echo $_SESSION["sms_err"];
  }
  ?>
  <button type="submit" class="btn btn-primary mt-3 "name="submit">Submit</button>
</div>
</form>
            </div>
        </div>
    </div>
    <?php
session_unset();
require_once'footer.php';
?>
</body>
</html>