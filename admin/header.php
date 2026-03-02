<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="icon" type="image/png" href="../images/favicon.png" />
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->


    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/summernote/dist/summernote.css" rel="stylesheet" />
    <link href="./assets/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <style>
    @import url("https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap");

    body,
    a,
    table,
    tr,
    td,
    th,
    span,
    div,
    ul,
    li,
    button,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "IBM Plex Sans", sans-serif;
    }

    a {
        color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));
        text-decoration: none !important;
    }

    .content-wrapper {
        min-height: 100vh;
    }
    </style>
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="index.php">
                    <span class="brand">
                        <img src="../images/quikzy-logo.png" alt="" width="100px;">
                    </span>
                    <span class="brand-mini"> <img style="border-radius:50%; background:#000; height:30px; width:30px"
                            src="../images/favicon.png" alt="" /></span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img style="background:#000; height:40px; width:44px" src="../images/favicon.png" alt="" />
                            <span></span>Admin<i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">

                            <a class="dropdown-item" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active mt-5" href="index.php"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a class="" href="all-booking-list.php"><img width="25" height="25"
                                src="https://img.icons8.com/pastel-glyph/FFFFFF/chat-with-taxi-driver.png"
                                alt="question-shield" />
                            <span class="nav-label"> &nbsp;&nbsp;All Bookings</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:;"><img width="25" height="25"
                                src="https://img.icons8.com/external-kmg-design-glyph-kmg-design/32/FFFFFF/external-feedback-feedback-kmg-design-glyph-kmg-design.png"
                                alt="publication" />
                            <span class="nav-label"> &nbsp;&nbsp;Testimonials</span><i
                                class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="add_testimonial.php">Add New Testimonials </a>
                            </li>
                            <li>
                                <a href="testimonials_list.php">Testimonials List</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a class="" href="querylist.php"><img width="25" height="25"
                                src="https://img.icons8.com/glyph-neue/64/FFFFFF/question-shield.png"
                                alt="question-shield" />
                            <span class="nav-label"> &nbsp;&nbsp;Query List</span>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>