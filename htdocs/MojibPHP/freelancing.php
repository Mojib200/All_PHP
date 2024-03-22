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
                <div class="card-header bg-success">
                    <h1 align="center">Login into UVA </h1>
                </div>
                <form action="post_F.php" method="post">
  <div class="mb-1">
  <input type="text" class="form-control mt-1" placeholder=" User Name"  name="U_name">
    <input type="password" class="form-control mt-1" placeholder="Password" name="password">
  <button type="submit" class="btn btn-primary mt-2" name="log_in">Log in</button>
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