<?php
include 'check_session.php';
if (isset($_POST['submit']))
{
    include '../db_con.php';

    // Get form data
    $name = $_POST['name'];
    $review = $_POST['review'];
    $designation = $_POST['designation'];

    $target_dir = "testimonial_uploads/";


    $unique_id = uniqid();
    $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
    $image_name = "testimonial_" . $unique_id . "." . $extension;
    $target_file = $target_dir . $image_name;


    if (getimagesize($_FILES["image"]["tmp_name"]) === false)
    {
        echo "File is not an image.";
        exit;
    }


    if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))
    {
        echo "Error uploading file.";
        exit;
    }


    $sql = "INSERT INTO testimonials (name, review, designation, image_path) 
            VALUES ('$name', '$review', '$designation', '$target_file')";

    if ($con->query($sql) === TRUE)
    {
        header('Location: testimonials_list.php');
        exit;
    } else
    {
        echo "Error: " . $con->error;
    }

    $con->close();
}
?>


<?php

include('header.php');
?>
<!-- END SIDEBAR-->
<div class="content-wrapper">

    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-6 col-lg-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Add Testimonials</div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Testimonials Profile  </label>
                                    <input type="file" name='image' class="form-control file"  accept="image/*" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Testimonials Name </label>
                                    <input type="text" name='name' class="form-control file" required
                                        placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Testimonials Review</label>
                                    <input type="text" name='review' class="form-control" placeholder="Enter Review">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Testimonials designation</label>
                                    <input type="text" name="designation" class="form-control"
                                        placeholder="Enter designation">
                                </div>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .note-editable {
            height: 400px;
        }
    </style>
    <?php
    include('footer.php');
    ?>