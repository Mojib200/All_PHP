<?php
session_start();
require_once('head.php');
?>

<div class="container">
    <div class="row">
        <div class=" app-content col-lg-6 ">
            <div class="example-container">
                <div class="example-content">
                    <form action="detalis_post.php" method="post" enctype="multipart/form-data">
                        <div class=" mb-3 ">
                            <div class="from-control">
                                
                                <label for=" " class="from-control mb-3 ">
                                    <h1>Add Best Workers</h1>
                                </label>
                                <div>
                                    <input type="text" class="form-control mb-3" placeholder="Worker Title" name="work_title">
                                </div>
                                <div>
                                    <input type="text" class="form-control mb-3" placeholder="Worker Description" name="work_description">
                                </div>
                                <div>
                                    <input type="file" class="form-control mb-3" placeholder="Worker File" name="worker_file">
                                </div>
                                <div class="form-control mb-3">
                                    <select name="work_mood">
                                        <option value="Active" name="active">Active</option>
                                        <option value="Deactive" name="Deactive">Deactive</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary" name="add_details">Add Details</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('footer.php');
?>