<?php
session_start();
require_once('head.php');
?>
 <?php
$id=$_SESSION['login_id'];
 $db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
  $select_final_testimonial = "SELECT official_post FROM users WHERE id = $id;";
 $final_select_testimonial = mysqli_query($db_connect, $select_final_testimonial);
   $after_assoc_testimonial = mysqli_fetch_assoc( $final_select_testimonial);
    ?>

<div class="container">
    <div class="row">
        <div class=" app-content col-lg-6 ">
            <div class="example-container">
                <div class="example-content">
                    <form action="testimonial_post.php" method="post">
                        <div class=" mb-3 ">
                            <div class="from-control">
                                
                                <label for=" " class="from-control mb-3 ">
                                    <h1>Add Official Category</h1>
                                </label>

                                <div>
                                    <input type="text" class="form-control mb-3" placeholder="Exam Name" name="official_post"value="<?php echo  $after_assoc_testimonial ['official_post'];?>">
                                </div>

                                <button type="submit" class="btn btn-primary" name="add_testimonial">Add Testimonial</button>
                    </form>
               

                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('footer.php');
?>