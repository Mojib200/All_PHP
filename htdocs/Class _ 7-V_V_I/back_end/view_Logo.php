<?php
session_start();
require_once('head.php');
?>
<?php
$db_connect = mysqli_connect('localhost', 'root', '', 'neptune');
$select_view_logo= "SELECT * FROM logo ";
$after_view_logo = mysqli_query($db_connect,  $select_view_logo);
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
                            <table   class="from-control table-bordered text-center">

                                <tr >
                                    <th >SL</th>
                                    <th >Data Base ID</th>
                                    <th>logo Title</th>
                                    <th>logo Description</th>
                                    <th>logo File</th>
                                    <th >logo Mood</th>
                                    <th >Action</th>
                                </tr>
                                <?php foreach ($after_view_logo as $view_logo) : ?>
                                    <tr>
                                        <td><?= $sl++; ?></td>
                                        <td><?= $view_logo['id']; ?></td>
                                        <td><?= $view_logo['logo_title']; ?></td>
                                        <td><?= $view_logo['logo_description']; ?></td>
                                        <td><?= $view_logo['logo_file']; ?></td>
                                        <td><?= $view_logo['logo_mood']; ?></td>
                                        <td><a class="btn btn-danger" href="logo_delete.php?id=<?= $view_logo['id'];?>">Delete</a></td>
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