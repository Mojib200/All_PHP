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
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
<div class ="mojib"class=" pt-10 pb-10  ">
<div class="col-lg-8 m-auto container">
    <div class="col-lg-6 m-auto">
    <form action="Calculator _post.php" method="post">
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
 <div class="pt-2">
     <button type="submit" class="btn btn-primary "name="add"> Add(+) </button>
     <button type="submit" class="btn btn-primary " name="sub">Sub(-) </button>
     <button type="submit" class="btn btn-primary " name="mul">Mul(*) </button>
     <button type="submit" class="btn btn-primary " name="div"> Div(/) </button>
     <button type="submit" class="btn btn-primary " name="power"> Power(^) </button>
</div>
</form>

    </div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>