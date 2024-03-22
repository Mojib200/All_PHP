<?php
session_start();
require_once('head.php');
?>
<?php
$db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
$select_view = "SELECT * FROM services";
$after_views = mysqli_query($db_connect,  $select_view);
$sl = 1;
?>
<?php
// only delete query
// $id=$_SESSION['login_id'];
// $db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
// $delete_view = "DELETE FROM `services` WHERE id=$id;";
// $after_delete_views = mysqli_query($db_connect,  $delete_view);

?>


<div class="container">
    <div class="row">
        <div class=" app-content ">
            <div class="example-container  text-center">
                <div class="example-content">
                    <div class=" mb-3 ">
                        <div class="from-control">

                            <h1>Add Views</h1>
                            <table class="from-control table-bordered text-center">

                                <tr>
                                    <th class="">SL</th>
                                    <th>Data Base ID</th>
                                    <th>Service Title</th>
                                    <th>Service Description</th>
                                    <th>Service Icon</th>
                                    <th>Service Mood</th>
                                    <th>Action</th>
                                </tr>
                                <?php foreach ($after_views as $views) : ?>
                                    <tr>
                                        <td><?= $sl++; ?></td>
                                        <td><?= $views['id']; ?></td>
                                        <td><?= $views['service_title']; ?></td>
                                        <td><?= $views['services_description']; ?></td>
                                        <td><?= $views['service_icon']; ?></td>
                                        <td><?= $views['service_mood']; ?></td>
                                        <td><a class="btn btn-danger" href="delete.php?id=<?= $views['id']; ?>"><i class="material-icons">delete</i>Delete</a>
                                            <a class="btn btn-info" href="edit_services.php?id=<?= $views['id']; ?>"><i class="material-icons">edit_note</i>Edit </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
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