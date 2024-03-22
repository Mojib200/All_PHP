<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <!-- header part start -->
    <section>
        <nav class="navbar navbar-expand-lg bg-primary ">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </section>
    <!-- header part end -->

    <!-- Calculator part start -->

    <section class="bg-dark pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card">
                        <div class="card_header bg-danger text-center text-white ">
                            <h1>Calculator</h1>
                        </div>
                        <div class="card_body pt-3 pb-3">
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Number One </label>
                                    <input type="number" class="form-control" placeholder="Put Your Number"
                                        name="number_one">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Number Two </label>
                                    <input type="number" class="form-control" placeholder="Put Your Number"
                                        name="number_two">
                                </div>
                                <button type="submit" class="btn btn-info" name="add">ADD(+)</button>
                                <button type="submit" class="btn btn-info" name="minus">MINUS(-)</button>
                                <button type="submit" class="btn btn-info" name="multi">MULTIFLY(*)</button>
                                <button type="submit" class="btn btn-info" name="divi">DIVISION(/)</button>

                                <?php if (isset($_POST['number_one']) && isset($_POST['number_two']) ) { ?>

<div class="alert alert-success mt-3">
    <?php
             if ($_POST['number_one']) {
               if ($_POST['number_two']) {
                    if (isset($_POST['add'])) {
                         print_r($_POST['number_one'] + $_POST['number_two']);
                    }
                    if (isset($_POST['minus'])) {
                        print_r($_POST['number_one'] - $_POST['number_two']);
                    }
                    if (isset($_POST['multi'])) {
                        print_r($_POST['number_one'] * $_POST['number_two']);
                    }
                    if (isset($_POST['divi'])) {
                        print_r($_POST['number_one'] / $_POST['number_two']);
                    }
                }
                else {
                    echo 'number nai';
                    }
                }
                else {
                    echo 'number nai';
            }
    ?>

</div>

<?php } ?>

                            </form>

                            
                            
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Calculator part end -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>