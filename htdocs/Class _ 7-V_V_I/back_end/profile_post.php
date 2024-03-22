<?php
session_start();
if(isset($_POST['email_change']))
{
        $name=$_POST['name'];
        $email=$_POST['email'];
        $id=$_SESSION['login_id'];
        $db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
    $update_name = "UPDATE users SET name ='$name',email='$email' WHERE id = $id;";
    //$update_name_email = "UPDATE users SET email='$email' WHERE id = $id;";
    $final_update = mysqli_query($db_connect, $update_name);
    $_SESSION['login_name']=$name;
    $_SESSION['login_email']=$email;
    header('location:profile.php');
    
}
if(isset($_POST['chang_image']))
{ $id=$_SESSION['login_id'];
    $image_name=$_FILES['image']['name'];
    $after_image_explode=explode('.',$image_name);
    $after_image_explode_format=end( $after_image_explode);
    $new_name_now=$id.".".$after_image_explode_format;
    $old_location=$_FILES['image']['tmp_name'];
    $new_location="../assets/photo/profile_photo/".$new_name_now;
    move_uploaded_file($old_location,$new_location);
    $db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
    $update_name = "UPDATE users SET photo ='$new_name_now' WHERE id = $id;";
    $final_update = mysqli_query($db_connect, $update_name);
    if($final_update){
        header('location:profile.php');
    }

    //header('location:profile.php');
    
}
?>
