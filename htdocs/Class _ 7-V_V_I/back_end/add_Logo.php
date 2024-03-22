<?php
session_start();
require_once('head.php');
?>

<div class="container">
    <div class="row">
        <div class=" app-content col-lg-6 ">
            <div class="example-container">
                <div class="example-content">
                    <form action="add_logo_post.php" method="post" enctype="multipart/form-data">
                        <div class=" mb-3 ">
                            <div class="from-control">
                                
                                <label for=" " class="from-control mb-3 ">
                                    <h1>Add Best Logo</h1>
                                </label>
                                <div>
                                    <input type="text" class="form-control mb-3" placeholder="logo Title" name="logo_title">
                                </div>
                                <div>
                                    <input type="text" class="form-control mb-3" placeholder="logo Description" name="logo_description">
                                </div>
                                <div>
                                    <input type="file" class="form-control mb-3" placeholder="logo File" name="logo_file">
                                </div>
                                <div class="form-control mb-3">
                                    <select name="logo_mood">
                                        <option value="Active" name="active">Active</option>
                                        <option value="Deactive" name="Deactive">Deactive</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary" name="add_logo">Add Logo</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('footer.php');
?>