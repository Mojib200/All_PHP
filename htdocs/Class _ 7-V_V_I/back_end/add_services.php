<?php
session_start();
require_once('head.php');
?>

<div class="container">
    <div class="row">
        <div class=" app-content col-lg-6 ">
            <div class="example-container">
                <div class="example-content">
                    <form action="add_service_post.php" method="post" >
                        <div class=" mb-3 ">
                            <div class="from-control">
                                <label for=" " class="from-control mb-3 ">
                                    <h1>Add Service</h1>
                                </label>
                                <div>
                                    <input type="text" class="form-control mb-3"  placeholder="service_title" name="service_title">
                                </div>
                                <div class="form-control mb-3">
                                    <textarea rows="10"  class="from-control" placeholder="services_description"  name="services_description"></textarea>
                                </div>

                                <div>
                                    <input type="text" class="form-control mb-3" placeholder="service_icon" name="service_icon">
                                </div>

                                <div class="form-control mb-3">
                                    <select name="service_mood">
                                        <option value="Active" name="active">Active</option>
                                        <option value="Deactive" name="Deactive">Deactive</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary" name="add_service">Add Service</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('footer.php');
?>