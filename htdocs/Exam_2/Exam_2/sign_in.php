<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gymove - Fitness Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                      <img src="images/logo-full.png" alt="">
                                    </div>
                                    <h4 class="text-center mb-4 text-white"><a href="sign_up.php">Sign in </a> your account</h4>
                                    <?php
                                    if (isset($_SESSION['successfully_login'])) { ?>

                                        <div class="alert alert-success text_center">
                                            <?php
                                            echo $_SESSION['successfully_login'];
                                            ?>
                                        </div>
                                    <?php } ?>
                                    <form action="sign_in_post.php" method="post">
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email" placeholder="E-mail" value="<?php if (isset($_SESSION['login'])) { echo $_SESSION['login']; } ?>">
                                        </div>
                                        <?php if (isset($_SESSION['email_err'])) { ?>
                                            <div class="bg-danger form-control text-white">
                                                <?php
                                                echo  $_SESSION['email_err'];
                                                ?>
                                            </div>
                                        <?php
                                        } ?>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>

                                        <?php if (isset($_SESSION['password_err'])) { ?>
                                            <div class="bg-danger form-control text-white">
                                                <?php
                                                echo  $_SESSION['password_err'];
                                                ?>
                                            </div>
                                        <?php
                                        } ?>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox ml-1 text-white">
                                                    <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                                                    <label class="custom-control-label" for="basic_checkbox_1">Remember
                                                        my preference</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a class="text-white" href="page-forgot-password.html">Forgot
                                                    Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Sign Me
                                                In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-white">Don't have an account? <a class="text-white" href="./page-register.html">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="./vendor/global/global.min.js"></script>
    <script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./js/deznav-init.js"></script>

</body>

</html>
<?php
session_unset();
?>