<?php
session_start();
$id = $_SESSION['login_id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
$update_photo = "SELECT name,email,photo,about_me,exam_name_1,exam_year_1,exam_name_2,exam_year_2,exam_name_3,exam_year_3,official_post,official_number,official_address,official_mail FROM users WHERE id=$id";
$final_photo = mysqli_query($db_connect, $update_photo);
$after_accoc_photo = mysqli_fetch_assoc($final_photo);
?>





<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My First WebSite Over All PHP Use</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/index/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/index/css/animate.min.css">
    <link rel="stylesheet" href="assets/index/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/index/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/index/css/flaticon.css">
    <link rel="stylesheet" href="assets/index/css/slick.css">
    <link rel="stylesheet" href="assets/index/css/aos.css">
    <link rel="stylesheet" href="assets/index/css/default.css">
    <link rel="stylesheet" href="assets/index/css/style.css">
    <link rel="stylesheet" href="assets/index/css/responsive.css">
</head>

<body class="theme-bg">

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- header-start -->
    <header>
        <div id="header-sticky" class="transparent-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <a href="index.html" class="navbar-brand logo-sticky-none"><img src="assets/index/img/logo/logo.png" alt="Logo"></a>
                                <a href="index.html" class="navbar-brand s-logo-none"><img src="assets/index/img/logo/s_logo.png" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="header-btn">
                                    <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offcanvas-start -->
        <div class="extra-info">
            <div class="close-icon menu-close">
                <button>
                    <i class="far fa-window-close"></i>
                </button>
            </div>
            <div class="logo-side mb-30">
                <a href="index-2.html">
                    <img src="assets/index/img/logo/logo.png" alt="" />
                </a>
            </div>
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p>123/A, Miranda City Likaoli
                        Prikano, Dope</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p>+0989 7876 9865 9</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p>info@example.com</p>
                </div>
            </div>
            <div class="social-icon-right mt-20">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="offcanvas-overly"></div>
        <!-- offcanvas-end -->
    </header>
    <!-- header-end -->

    <!-- main-area -->
    <main>

        <!-- banner-area -->
        <section id="home" class="banner-area banner-bg fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6">
                        <div class="banner-content">
                            <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                            <h3 class="wow fadeInUp" data-wow-delay="0.4s">I am <?php echo  $_SESSION['login_name']; ?></h3>
                            <p class="wow fadeInUp" data-wow-delay="0.6s">I'm <?php echo  $_SESSION['login_name']; ?>, professional web developer with long time experience in this field​.</p>
                            <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                <ul>
                                    <li><a href="https://www.facebook.com/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i> </a></li>

                                    <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="  https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                        <div class="banner-img text-right">
                            <img src="assets/photo/profile_photo/<?= $after_accoc_photo['photo']; ?>" width=650px height=840px>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shape"><img src="assets/index/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
        </section>
        <!-- banner-area-end -->

        <!-- about-area-->
        <section id="about" class="about-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="assets/photo/profile_photo/<?= $after_accoc_photo['photo']; ?>" width="600px" height="600px" class="rounded-circle" title="me-01" alt="me-01">
                        </div>
                    </div>

                    <div class="col-lg-6 pr-90">
                        <div class="section-title mb-25">
                            <span>Introduction</span>
                            <h2>About Me</h2>
                        </div>
                        <div class="about-content">
                            <p><?= $after_accoc_photo['about_me'] ?></p>
                            <h3>Education:</h3>
                        </div>
                        <!-- Education Item -->
                        <div class="education">
                            <table border="1">
                                <tr>
                                    <th>Exam Name</th>
                                    <th>Exam Year</th>
                                </tr>
                                <tr>
                                    <td><?= $after_accoc_photo['exam_name_1'] ?></td>
                                    <td><?= $after_accoc_photo['exam_year_1'] ?></td>
                                </tr>
                                <tr>
                                    <td><?= $after_accoc_photo['exam_name_2'] ?></td>
                                    <td><?= $after_accoc_photo['exam_year_2'] ?></td>
                                </tr>
                                <tr>
                                    <td><?= $after_accoc_photo['exam_name_3'] ?></td>
                                    <td><?= $after_accoc_photo['exam_year_3'] ?></td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- Services-area -->
        <section id="service" class="services-area pt-120 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>WHAT WE DO</span>
                            <h2>Services and Solutions</h2>
                        </div>
                    </div>
                </div>
                <?php
                $db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
                $select_services = "SELECT * FROM services where service_mood='Active';";
                $after_services = mysqli_query($db_connect,  $select_services);

                ?>

                <div class="row">
                    <?php foreach ($after_services as $services) : ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?php echo $services['service_icon'] ?>"></i>
                                <h3><?= $services['service_title']; ?></h3>
                                <p> <?= $services['services_description']; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>
        <!-- Services-area-end -->

        <!-- Portfolios-area -->
        <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>Portfolio Showcase</span>
                            <h2>My Recent Best Works</h2>
                        </div>
                    </div>
                </div>
                <?php
                $db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
                $workers = "SELECT * FROM workers where work_mood='Active';";
                $after_workes_best = mysqli_query($db_connect, $workers);
                ?>
                <div class="row">
                    <?php foreach ($after_workes_best as $work) : ?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
                                <div class="speaker-thumb">
                                    <img src="assets/photo/work_photo/<?= $work['work_file']; ?>" alt="img">
                                </div>
                                <div class="speaker-overlay">
                                    <span><?= $work['work_title']; ?></span>
                                    <h4><a href=""><?= $work['work_description']; ?></a></h4>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- services-area-end -->


        <!-- over all Data base use kore then count user and service best worker etc -->
        <!-- Total User -->
        <?php
        $db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
        $select_count = "SELECT count(*) AS 'total_user' FROM users ;";
        $final_count = mysqli_query($db_connect, $select_count);
        $count_assoc = mysqli_fetch_assoc($final_count);
        ?>

        <!-- Services -->
        <?php
        $db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
        $select_services = "SELECT count(*) AS 'total_services' FROM services ;";
        $after_services = mysqli_query($db_connect,  $select_services);
        $services = mysqli_fetch_assoc($after_services);
        ?>
 <?php
        $db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
        $select_services_active = "SELECT count(*) AS 'total_services_active' FROM services where service_mood='Active' ;";
        $after_services_active = mysqli_query($db_connect,    $select_services_active);
        $services_active = mysqli_fetch_assoc( $after_services_active);
        ?>
        <!-- Best Worker -->
        <?php
        $db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
        $select_workers = "SELECT count(*) AS 'total_workers' FROM workers ;";
        $after_workes_best = mysqli_query($db_connect, $select_workers);
        $final_workes_best = mysqli_fetch_assoc($after_workes_best);
        ?>



        <!-- fact-area -->
        <section class="fact-area">
            <div class="container">
                <div class="fact-wrap">
                    <div class="row justify-content-between">
                        <div class="col-xl-2 col-lg-3 col-sm-6">
                            <div class="fact-box text-center mb-50">
                                <div class="fact-icon">
                                    <i class="fa-solid fa-users-between-lines"></i>
                                </div>
                                <div class="fact-content">
                                    <h2><span class="count"><?= $count_assoc['total_user']; ?></span></h2>
                                    <span>All User</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-6">
                            <div class="fact-box text-center mb-50">
                                <div class="fact-icon">
                                    <i class="fa-solid fa-taxi"></i>
                                </div>
                                <div class="fact-content">
                                    <h2><span class="count"><?= $services['total_services']; ?></span></h2>
                                    <span>Total Services </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-6">
                            <div class="fact-box text-center mb-50">
                                <div class="fact-icon">
                                <i class="fa-solid fa-circle-user"></i>
                                </div>
                                <div class="fact-content">
                                    <h2><span class="count"><?=  $final_workes_best['total_workers']; ?></span></h2>
                                    <span>Yearly Best Workers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-6">
                            <div class="fact-box text-center mb-50">
                                <div class="fact-icon">
                                <i class="fa-solid fa-taxi"></i>
                                </div>
                                <div class="fact-content">
                                    <h2><span class="count"><?= $services_active['total_services_active']; ?></span></h2>
                                    <span>Active Services </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- fact-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial-area primary-bg pt-115 pb-115">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>testimonial</span>
                            <h2>happy customer quotes</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10">
                        <div class="testimonial-active">
                            <div class="single-testimonial text-center">
                                <div class="testi-avatar">
                                    <img src="assets/photo/profile_photo/<?= $after_accoc_photo['photo']; ?>" alt="img" width="100" height="100" class="rounded-circle">
                                </div>
                                <div class="testi-content">
                                    <h4><span>“</span> An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result <span>”</span></h4>
                                    <div class="testi-avatar-info">
                                        <h5><?= $after_accoc_photo['name']; ?></h5>
                                        <h5><?= $after_accoc_photo['email']; ?></h5>
                                        <span>head of <?= $after_accoc_photo['official_post']; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- brand-area -->
        <?php
        $db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
        $logos = "SELECT * FROM logo where logo_mood='Active';";
        $after_logos_best = mysqli_query($db_connect, $logos);
        ?>

        <div class="barnd-area pt-100 pb-100">
            <div class="container">
                <div class="row brand-active">
                    <?php foreach ($after_logos_best as $logoss) : ?>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="assets/photo/logo_photo/<?= $logoss['logo_file']; ?>" alt="img" width="120" height="70">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- contact-area -->
        <section id="contact" class="contact-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-20">
                            <span>information</span>
                            <h2>Contact Information</h2>
                        </div>
                        <div class="contact-content">
                            <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                            <h5>OFFICE IN <span>Bangladesh</span></h5>
                            <div class="contact-list">
                                <ul>
                                    <li><i class="fas fa-map-marker"></i><span>Address :</span><?= $after_accoc_photo['official_address']; ?></li>
                                    <li><i class="fas fa-headphones"></i><span>Phone :</span><?= $after_accoc_photo['official_number']; ?></li>
                                    <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?= $after_accoc_photo['official_mail']; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <form action="#">
                                <input type="text" placeholder="your name *">
                                <input type="email" placeholder="your email *">
                                <textarea name="message" id="message" placeholder="your message *"></textarea>
                                <button class="btn">SEND</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="copyright-text text-center">
                            <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->





    <!-- JS here -->
    <script src="assets/index/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/index/js/popper.min.js"></script>
    <script src="assets/index/js/bootstrap.min.js"></script>
    <script src="assets/index/js/isotope.pkgd.min.js"></script>
    <script src="assets/index/js/one-page-nav-min.js"></script>
    <script src="assets/index/js/slick.min.js"></script>
    <script src="assets/index/js/ajax-form.js"></script>
    <script src="assets/index/js/wow.min.js"></script>
    <script src="assets/index/js/aos.js"></script>
    <script src="assets/index/js/jquery.waypoints.min.js"></script>
    <script src="assets/index/js/jquery.counterup.min.js"></script>
    <script src="assets/index/js/jquery.scrollUp.min.js"></script>
    <script src="assets/index/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/index/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/index/js/plugins.js"></script>
    <script src="assets/index/js/main.js"></script>
</body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->

</html>