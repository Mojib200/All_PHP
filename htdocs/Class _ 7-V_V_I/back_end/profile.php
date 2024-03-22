<?php
session_start();
require_once('head.php');
?>
<div class="app-content col-lg-6">
    <div class="example-container ">
        <div class="example-content">
            <form action="profile_post.php" method="post">
                <div class=" mb-3">
                   
                    <label for=" " class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" value="<?php echo $_SESSION['login_name']; ?>">
                    </div>
                </div>
                <div class=" mb-3">
                    <label for=" " class="col-sm-2 col-form-label ">email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email"value="<?php echo $_SESSION['login_email']; ?>">
                    </div>
                <button type="submit" class="btn btn-primary" name="email_change">Change Name</button>
            </form>
            
        </div>
    </div>
</div>

<div class=" app-content col-lg-6 form-control">
    <div class="example-container">
        <div class="example-content">
            <form action="profile_post.php" method="post" enctype="multipart/form-data" >
                <div class=" mb-3 ">
                <div class="from-control" align="center" >
                   <img src="../assets/photo/profile_photo/<?=$after_accoc_photo;?>"class="rounded-circle"  alt="" height="80" width="80">
                   </div>
                    <label for=" " class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="chang_image">Change Image</button>
            </form>
            
        </div>
    </div>
</div>
<?php
require_once('footer.php');
?>