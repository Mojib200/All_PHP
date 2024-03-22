<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/plugins/pace/pace.css" rel="stylesheet">
    <link href="assets/css/main.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/neptune.png" />
</head>

<body>
    <div class="app app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please enter your credentials to create an account.<br>Already have an account? <a href="s_in.php">Sign In</a></p>
            <form action="s_up_post.php" method="post">
                <div class="auth-credentials m-b-xxl">
                    <label for="" class="form-label">Name</label>
                    <input type="name" class="form-control m-b-md" placeholder="Enter Name" name="name" value="<?php if(isset($_SESSION['old_name'])){
                        echo $_SESSION['old_name'];}?>">

                    <?php if (isset($_SESSION['name_err'])) : ?>
                        <div class="alert alert-danger">
                            <?= $_SESSION['name_err']; ?>
                        </div>
                    <?php endif; ?>
                    <label for="" class="form-label">Email Address</label>
                    <input type="email" class="form-control m-b-md" placeholder="Email" name="email"value="<?php if(isset($_SESSION['old_email'])){
                        echo $_SESSION['old_email'];}?>">

                    <?php if (isset($_SESSION['email_err'])) : ?>
                        <div class="alert alert-danger">
                            <?= $_SESSION['email_err']; ?>
                        </div>
                    <?php endif; ?>
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <?php if (isset($_SESSION['password_err'])) : ?>
                        <div class="alert alert-danger">
                            <?= $_SESSION['password_err']; ?>
                        </div>
                    <?php endif; ?>
                    <label for="signUpPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Confirm Password" name="c_password">
                    <?php if (isset($_SESSION['c_password_err'])) : ?>
                        <div class="alert alert-danger">
                            <?= $_SESSION['c_password_err']; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="auth-submit">
                    <button class="btn btn-primary"> Sign Up </button>

                </div>
            </form>

            <div class="divider"></div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="assets/plugins/pace/pace.min.js"></script>
    <script src="assets/js/main.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>

<?php
session_unset();
?>