<?php
session_start();
require_once('head.php');
?>
 <?php
$id=$_SESSION['login_id'];
 $db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
  $select_final_about = "SELECT about_me,exam_name_1,exam_year_1,exam_name_2,exam_year_2,exam_name_3,exam_year_3 FROM users WHERE id = $id;";
 $final_select_about = mysqli_query($db_connect, $select_final_about);
   $after_assoc_about = mysqli_fetch_assoc( $final_select_about);
    ?>

<div class="container">
    <div class="row">
        <div class=" app-content col-lg-6 ">
            <div class="example-container">
                <div class="example-content">
                    <form action="add_about_us_post.php" method="post">
                        <div class=" mb-3 ">
                            <div class="from-control">
                                
                                <label for=" " class="from-control mb-3 ">
                                    <h1>Add About Us</h1>
                                </label>
                                <div>
                                    <input type="text" class="form-control mb-3" placeholder="About Me" name="about_me" value="<?php echo  $after_assoc_about ['about_me'];?>">
                                </div>
                                <div>
                                    <input type="text" class="form-control mb-3" placeholder="Exam Name" name="exam_name_1"value="<?php echo  $after_assoc_about ['exam_name_1'];?>">
                                </div>
                                <div>
                                    <input type="text" class="form-control mb-3" placeholder="Exam Year " name="exam_year_1"value="<?php echo  $after_assoc_about ['exam_year_1'];?>">
                                </div>
                                </label>
                               
                                <div>
                                    <input type="text" class="form-control mb-3" placeholder="Exam Name" name="exam_name_2"value="<?php echo  $after_assoc_about ['exam_name_2'];?>">
                                </div>
                                <div>
                                    <input type="text" class="form-control mb-3" placeholder="Exam Year" name="exam_year_2"value="<?php echo  $after_assoc_about ['exam_year_2'];?>">
                                </div>  </label>
                               
                                <div>
                                    <input type="text" class="form-control mb-3" placeholder="Exam Name" name="exam_name_3"value="<?php echo  $after_assoc_about ['exam_name_3'];?>">
                                </div>
                                <div>
                                    <input type="text" class="form-control mb-3" placeholder="Exam Year" name="exam_year_3"value="<?php echo  $after_assoc_about ['exam_year_3'];?>">
                                </div>


                                <button type="submit" class="btn btn-primary" name="add_about">Add About</button>
                    </form>
               

                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('footer.php');
?>