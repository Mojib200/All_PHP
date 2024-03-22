<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once'headerr.php';
?>
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header bg-danger">
                    <h1 align="center"class="display-6"><b>Success Student Information</b></h1>
                </div>
                <form action="post_S.php" method="post">
  <div class="mb-1">
  <input type="text" class="form-control mt-1" placeholder="User Name" name="U_name">
  <input type="number" class="form-control mt-1" placeholder="Student ID" name="S_id">
    <input type="email" class="form-control mt-1" placeholder="E-mail" name="email">
    <input type="number" class="form-control mt-1" placeholder="Phone Number" name="P_No">
  <button type="submit" class="btn btn-primary mt-2" name="log_in">Log In </button>
</div>
</form>
            </div>
        </div>
    </div>
    <?php
require_once'footer.php';
?>
</body>
</html>