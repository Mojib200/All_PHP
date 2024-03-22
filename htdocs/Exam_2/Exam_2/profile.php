<?php
session_start();
require_once('header.php');
?>

<div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-xxl-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card avtivity-card">
                                    <div class="card-body">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" name="name" value="<?=$_SESSION['login_name'];?>">
                                        <button class="alert alert-danger mt-3"> Change Name</button>
                                        
                                    </div>
                                    <!-- using for footer div -->
                                    <div class="effect bg-success"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card avtivity-card">
                                    <div class="card-body">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="name" value="<?=$_SESSION['login_email'];?>">
                                        <button class="alert alert-danger mt-3"> Change email</button>
                                        
                                    </div>
                                    <!-- using for footer div -->
                                    <div class="effect bg-success"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
<?php
require_once('footer.php');
?>