<?php
session_start();
if (!isset($_SESSION['login_name'])) {
    header('location:error.php');
}
require_once('head.php');
?>
<?php
$db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
$select_count = "SELECT count(*) AS 'total_user' FROM users ;";
$final_count = mysqli_query($db_connect, $select_count);
$count_assoc = mysqli_fetch_assoc($final_count);
?>
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Dashboard</h1>
                        <h2>Name:<?php
                                    echo  $_SESSION['login_name'];
                                    ?></h2>
                        <h3>Email:<?php
                                    echo  $_SESSION['login_email'];
                                    ?></h3>
                        <h4>ID:<?php
                                echo  $_SESSION['login_id'];
                                ?></h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <div class="widget-stats-container d-flex">
                                <div class="widget-stats-icon widget-stats-icon-primary">
                                    <i class="material-icons-outlined">paid</i>
                                </div>
                                <div class="widget-stats-content flex-fill">
                                    <span class="widget-stats-title">Today's Sales</span>
                                    <span class="widget-stats-amount">$38,211</span>
                                    <span class="widget-stats-info">471 Orders Total</span>
                                </div>
                                <div class="widget-stats-indicator widget-stats-indicator-negative align-self-start">
                                    <i class="material-icons">keyboard_arrow_down</i> 4%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <div class="widget-stats-container d-flex">
                                <div class="widget-stats-icon widget-stats-icon-warning">
                                    <i class="material-icons-outlined">person</i>
                                </div>
                                <div class="widget-stats-content flex-fill">
                                    <span class="widget-stats-title">Active Users</span>
                                    <span class="widget-stats-amount"><?=$count_assoc['total_user'];?></span>
                                    <span class="widget-stats-info">790 unique this month</span>
                                </div>
                                <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                                    <i class="material-icons">keyboard_arrow_up</i> 12%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <div class="widget-stats-container d-flex">
                                <div class="widget-stats-icon widget-stats-icon-danger">
                                    <i class="material-icons-outlined">file_download</i>
                                </div>
                                <div class="widget-stats-content flex-fill">
                                    <span class="widget-stats-title">Downloads</span>
                                    <span class="widget-stats-amount">140,390</span>
                                    <span class="widget-stats-info">87 items downloaded</span>
                                </div>
                                <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                                    <i class="material-icons">keyboard_arrow_up</i> 7%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card widget widget-list">
                        <div cla$after_accoc_aboutss="card-header">
                            <h5 class="card-title">Users List <span class="badge badge-success badge-style-light">Total Users :<?=$count_assoc['total_user'];?></span></h5>
                        </div>
                        <div class="card-body">
                            <ul class="widget-list-content list-unstyled" style="overflow-y: scroll;height:310px">
                                <?php
                                $db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
                                $select_final = "SELECT id,name,email FROM users ;";
                                $final_select = mysqli_query($db_connect, $select_final);
                                //$after_assoc = mysqli_fetch_assoc($final_select);
                                ?>
                                <?php
                                foreach ($final_select as $users) {
                                ?>
                                    <li class="widget-list-item widget-list-item-green">
                                        <span class="widget-list-item-icon"><i class="material-icons-outlined">article</i> <?= $users['id']; ?></span>
                                        <span class="widget-list-item-description">
                                            <a href="#" class="widget-list-item-description-title">
                                                <?= $users['name']; ?>
                                            </a>
                                            <span class="widget-list-item-description-subtitle">
                                                <?= $users['email']; ?>
                                            </span>
                                        </span>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card widget widget-list">
                        <div class="card-header">
                            <h5 class="card-title">Todo<span class="badge badge-success badge-style-light">14 completed</span></h5>
                        </div>
                        <div class="card-body">
                            <span class="text-muted m-b-xs d-block">showing 5 out of 23 active tasks.</span>
                            <ul class="widget-list-content list-unstyled">
                                <li class="widget-list-item widget-list-item-green">
                                    <span class="widget-list-item-check">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </span>

                                </li>
                                <li class="widget-list-item widget-list-item-blue">
                                    <span class="widget-list-item-check">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" value="" checked>
                                        </div>
                                    </span>
                                    <span class="widget-list-item-description">
                                        <a href="#" class="widget-list-item-description-title">
                                            Mailbox cleanup
                                        </a>
                                        <span class="widget-list-item-description-subtitle">
                                            Woodrow Hawkins
                                        </span>
                                    </span>
                                </li>
                                <li class="widget-list-item widget-list-item-purple">
                                    <span class="widget-list-item-check">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" value="" checked>
                                        </div>
                                    </span>
                                    <span class="widget-list-item-description">
                                        <a href="#" class="widget-list-item-description-title">
                                            Header scroll bugfix
                                        </a>
                                        <span class="widget-list-item-description-subtitle">
                                            Sky Meyers
                                        </span>
                                    </span>
                                </li>
                                <li class="widget-list-item widget-list-item-yellow">
                                    <span class="widget-list-item-check">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </span>
                                    <span class="widget-list-item-description">
                                        <a href="#" class="widget-list-item-description-title">
                                            Localization for file manager
                                        </a>
                                        <span class="widget-list-item-description-subtitle">
                                            Oskar Hudson
                                        </span>
                                    </span>
                                </li>

                            </ul>
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