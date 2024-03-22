<?php
// session_start();

$id = $_SESSION['login_id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
$update_photo = "SELECT photo FROM users WHERE id=$id";
$final_photo = mysqli_query($db_connect, $update_photo);
$after_accoc_photo = mysqli_fetch_assoc($final_photo)['photo'];


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
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../assets/plugins/pace/pace.css" rel="stylesheet">



    <!-- Theme Styles -->
    <link href="../assets/css/main.min.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/neptune.png" />


</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
                <div align="center" class="mb-3"><img src="../assets/photo/profile_photo/<?= $after_accoc_photo; ?>" class="rounded-circle" alt="" height="80" width="100"></div>
                <div class="sidebar-user-switcher user-activity-online">
                    <h6><?php echo  $_SESSION['login_name']; ?></h6>
                    <h6><?php echo  $_SESSION['login_email']; ?></h6>
                    <h6 align="center">USER ID : <?php echo  $_SESSION['login_id']; ?></h6>
                </div>
            </div>
            <div class="app-menu ">
                <ul class="accordion-menu" style="overflow-y: scroll;height:310px">
                    <li class="sidebar-title">
                        Apps
                    </li>
                    <li class="active-page">
                        <a href="../inbex.php" class="active"><i class="material-icons">house</i>Home</a>
                    </li>
                    <li class="active-page">
                        <a href="deshbroad.php" class="active"><i class="material-icons">dashboard</i>Dashboard</a>
                    </li>
                    <li class="active-page">
                        <a href="profile.php" class="active"><i class="material-icons">account_circle</i>Profile</a>
                    </li>
                    <li class="active-page">
                        <a href="" class="active"><i class="material-icons">dataset</i>About Us</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="add_about_us.php" class="active">Add About Us</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active-page">
                        <a href="" class="active"><i class="material-icons">medical_services</i>Services</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="add_services.php" class="active">Add Services</a>
                            </li>
                            <li>
                                <a href="view_services.php">Viwe Services</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active-page">
                        <a href="" class="active"><i class="material-icons">south_america</i>Best Logo</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="add_Logo.php" class="active">Add logo</a>
                            </li>
                            <li>
                                <a href="view_Logo.php">Viwe Logo</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active-page">
                        <a href="" class="active"><i class="material-icons">engineering</i>BEST WORKS</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="detalis.php" class="active">Details</a>
                            </li>
                            <li>
                                <a href="view_detalis.php">View Details</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active-page">
                        <a href="" class="active"><i class="material-icons">local_police </i>Official Category</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="testimonial.php" class="active">Category/testimonial</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active-page">
                        <a href="" class="active"><i class="material-icons">call </i>Contact</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="contact.php" class="active">Contact Information</a>
                            </li>
                        </ul>
                        </li>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light bg-dark navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <h6 class="text-white">Welcome <?php
                                                            echo $_SESSION['login_name'];
                                                            ?></h6>
                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item hidden-on-mobile">
                                    <a class="alert alert-danger " href="logout.php">Log Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>