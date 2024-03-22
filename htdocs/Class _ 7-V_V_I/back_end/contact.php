<?php
session_start();
require_once('head.php');
?>
 <?php
$id=$_SESSION['login_id'];
 $db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
  $select_final_contact = "SELECT official_number,official_address,official_mail FROM users WHERE id = '$id';";
 $final_select_contact = mysqli_query($db_connect, $select_final_contact);
   $after_assoc_contact = mysqli_fetch_assoc( $final_select_contact);
    ?>

<div class="container">
    <div class="row">
        <div class=" app-content col-lg-6 ">
            <div class="example-container">
                <div class="example-content">
                    <form action="contact_post.php" method="post">
                        <div class=" mb-3 ">
                            <div class="from-control">
                                
                                <label for=" " class="from-control mb-3 ">
                                    <h1>Add Contact</h1>
                                </label>
                                <div>
                                    <input type="number" class="form-control mb-3" placeholder="Exam Name" name="official_number"value="<?php echo  $after_assoc_contact ['official_number'];?>">
                                </div>
                                <div>
                                    <input type="text" class="form-control mb-3" placeholder="Exam Name" name="official_address"value="<?php echo  $after_assoc_contact ['official_address'];?>">
                                </div>
                                <div>
                                    <input type="email" class="form-control mb-3" placeholder="Exam Name" name="official_mail"value="<?php echo  $after_assoc_contact ['official_mail'];?>">
                                </div>

                                <button type="submit" class="btn btn-primary" name="add_contact">Add Contact</button>
                    </form>
               

                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('footer.php');
?>