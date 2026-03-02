<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="icon" type="image/png" href="../images/favicon.png" />
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="./assets/css/pages/auth-light.css" rel="stylesheet" />
    <style>
    /* Basic styling */
    body {
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

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


    .content form {
        padding: 15px 20px 20px 20px;
        background-color: rgba(252, 248, 253, 0.0);
        color: white;
    }

    .content {
        background: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 2px 10px #0e4a1c;
        width: 100%;
        max-width: 500px;
        box-sizing: border-box;
    }

    h2.login-title {
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .input-group-icon {
        position: relative;
    }

    .input-group-icon .input-icon {
        position: absolute;
        top: 50%;
        left: 12px;
        transform: translateY(-50%);
    }

    .form-control {
        width: 100%;
        padding: 12px 20px;
        padding-left: 40px;
        border: 1px solid #638f6d63;
        border-radius: 5px;
        font-size: 14px;
    }

    .ui-checkbox {
        display: flex;
        align-items: center;
    }

    .ui-checkbox input {
        margin-right: 5px;
    }

    .btn-primary {
        background-color: #227034;
        border-color: #227034;
        color: white;
        padding: 12px;
        border-radius: 5px;
        text-align: center;
        width: 100%;
    }

    .btn-primary:hover {
        background-color: #227034 !important;
        cursor: pointer;
    }

    label {
        font-size: 15px;
        color: black;
        font-weight: bold;
        color: #227034;
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .content {
            padding: 20px;
            width: 90%;
        }

        h2.login-title {
            font-size: 20px;
        }
    }

    @media (max-width: 576px) {
        .form-control {
            padding: 10px 15px;
        }

        .btn-primary {
            padding: 10px;
        }
    }

    .bg-silver-300 {
        background-color: #c38100 !important;
    }
    </style>
</head>

<body class="bg-silver-300">
    <div class="content">
        <form id="login-form" method="POST" action="check_login.php">
            <div class="d-flex justify-content-center">
                <img style="width:200px" src="../images/quikzy-logo.png" alt="">
            </div>
            <h2 class="login-title mb-5 text-dark">Admin Login</h2>
            <div class="form-group">
                <div class="input-group-icon right">
                    <label for="email">Email</label>
                    <div class="input-icon"><i class="fa fa-envelope mt-4"></i></div>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right" style="position: relative;">
                    <label for="password">Password</label>
                    <div class="input-icon"></div>
                    <img id="togglePassword" src="https://img.icons8.com/ios-filled/50/737373/hide.png"
                        alt="Show/Hide Password"
                        style="position: absolute; right: 10px; top: 70%; transform: translateY(-50%); cursor: pointer; width: 25px; height: 25px;">
                    <input type="password" name="password" class="form-control" placeholder="Password" required
                        style="padding-right: 40px;">

                </div>
            </div>

            <div class="form-group mt-3">
                <button type="submit" name="Submit"
                    class="btn btn-primary btn-block text-white mt-3 mb-0 fw-bold fs-4 mt-5">Log In</button>
            </div>
        </form>
    </div>

    <!-- CORE PLUGINS -->
    <script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS -->
    <script src="./assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script>
    const passwordInput = document.querySelector('input[name="password"]');
    const togglePassword = document.getElementById('togglePassword');

    togglePassword.addEventListener('click', () => {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            togglePassword.src = "https://img.icons8.com/ios-filled/50/737373/visible.png";
        } else {
            passwordInput.type = 'password';
            togglePassword.src = "https://img.icons8.com/ios-filled/50/737373/hide.png";
        }
    });
    </script>
    <script type="text/javascript">
    $(function() {
        $('#login-form').validate({
            errorClass: "help-block",
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true
                }
            },
            highlight: function(e) {
                $(e).closest(".form-group").addClass("has-error")
            },
            unhighlight: function(e) {
                $(e).closest(".form-group").removeClass("has-error")
            },
        });
    });
    </script>

</body>

</html>