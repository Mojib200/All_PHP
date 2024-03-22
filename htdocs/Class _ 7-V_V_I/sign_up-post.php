/*<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$Password = $_POST['Password'];
$L_Password = strlen($Password);
$C_password = $_POST['C_password'];

$preg_maa = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $Password);
// $upper = preg_match('@[A-Z]@', $Password);
// $lower = preg_match('@[a-z]@', $Password);
// $number = preg_match('@[0-9]@', $Password);
// $special = preg_match('@[?],[#],[$],[%],[^],[&],[*],@', $Password);
//////////////////jokkhon all code ek header use korbo tokhon flag use korbo onno thay simple header use korte thakbo 
$flag = false;

if ($name) {
  $_SESSION['old_name'] = $name;
} else {
  $_SESSION['name_err'] = "Must be name plz";
  $flag = true;
  //header('location:sign_up.php');
}
if ($email) {
  $_SESSION['old_email'] = $email;
} else {
  $_SESSION['email_err'] = "Must be email plz";
  $flag = true;
  //header('location:sign_up.php');
}
if ($Password) {
  if (!$preg_maa) {
    $_SESSION['Password_err'] = "Password Missing Lower & Upper & Number Digit & 8 Bit";
    $flag = true;
    //header('location:sign_up.php');

//   } else if (!$upper) {
//     $_SESSION['Password_err'] = "Password Missing Upper";
//     $flag = true;
//     //header('location:sign_up.php');
//   } else if (!$number) {
//     $_SESSION['Password_err'] = "Password Missing Number Digit";
//     $flag = true;
//     //header('location:sign_up.php');
//   }
//   // else if(!$special)
// //     {$_SESSION['Password_err']="Password Missing Special Key";
// //       //header('location:sign_up.php');

//   // }
//   else if ($L_Password <= 8) {
//     $_SESSION['Password_err'] = "Password Dosn't 8 Bit ";
//     $flag = true;
//     //header('location:sign_up.php');
  } else {
    if ($C_password) {
      if (!strcmp($Password, $C_password)) {

        //echo $Password;
      } else {
        $_SESSION['C_Password_err'] = "Password And Confirm Password Dosn't Matching";
        $flag = true;
        //header('location:sign_up.php');
      }
    } else {
      $_SESSION['C_Password_err'] = "Missing Confirm Password";
      $flag = true;
      //header('location:sign_up.php');
    }
  }
} else {
  $_SESSION['Password_err'] = "Missing Password";
  $flag = true;
  // header('location:sign_up.php');
}



if ($flag) {
  header('location:sign_up.php');
} else {
  $ec_password = md5($Password);
  $ec_c_password = md5($C_password);
  $db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
  $user_insert = "INSERT INTO users(name,email,password,c_password) VALUES('$name','$email','$ec_password','$ec_c_password')";
  mysqli_query($db_connect, $user_insert);
  $_SESSION['successfully_login'] = "Welcome $name Registration Done.";
  $_SESSION['login'] = "$email";
  header('location:sign-in.php');
}
?>