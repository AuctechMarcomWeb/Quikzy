<?php include 'check_session.php' ?>
<?php
include('../db_con.php');
include('header.php');
// Get total count of projects
$total_testimonials = $con->query("SELECT COUNT(*) AS total FROM testimonials")->fetch_assoc()['total'];
$total_con = $con->query("SELECT COUNT(*) AS total FROM contact_inquiries")->fetch_assoc()['total'];
$total_cab_bookings = $con->query("SELECT COUNT(*) AS total FROM cab_bookings")->fetch_assoc()['total'];
?>
<!-- END SIDEBAR-->
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->

    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <a href="all-booking-list.php">
                    <div class="ibox bg-success color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong"><?php echo $total_cab_bookings; ?></h2>
                            <div class="m-b-5 fw-bold mt-2">Total Bookings </div><i class=" widget-stat-icon"><img
                                    width="50" height="50"
                                    src="https://img.icons8.com/glyph-neue/64/FFFFFF/question-shield.png"
                                    alt="google-blog-search" /></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="querylist.php">
                    <div class="ibox bg-warning color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong"><?php echo $total_con; ?></h2>
                            <div class="m-b-5 fw-bold mt-2">Total Query </div><i class=" widget-stat-icon"><img
                                    width="50" height="50"
                                    src="https://img.icons8.com/glyph-neue/64/FFFFFF/question-shield.png"
                                    alt="google-blog-search" /></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="querylist.php">
                    <div class="ibox bg-primary color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong"><?php echo $total_con; ?></h2>
                            <div class="m-b-5 fw-bold mt-2">Total Query </div><i class=" widget-stat-icon"><img
                                    width="50" height="50"
                                    src="https://img.icons8.com/glyph-neue/64/FFFFFF/question-shield.png"
                                    alt="google-blog-search" /></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php
    include('footer.php');
    ?>