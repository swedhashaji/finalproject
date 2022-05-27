<?php
session_start();
include('../cred/dbConnect.php');
if (isset($_SESSION["smymSessionId"]) == session_id()) {
    header("Location: ../index.php");
    die();
} else {
?>
    <!DOCTYPE html>
    <html dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
        <!-- Custom CSS -->
        <link href="../dist/css/style.min.css" rel="stylesheet">

        <title>DK | Login</title>
    </head>

    <body>
        <div class="main-wrapper">
            <!-- ============================================================== -->
            <!-- Preloader - style you can find in spinners.css -->
            <!-- ============================================================== -->
            <div class="preloader">
                <div class="lds-ripple">
                    <div class="lds-pos"></div>
                    <div class="lds-pos"></div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Preloader - style you can find in spinners.css -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Login box.scss -->
            <!-- ============================================================== -->
            <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
                <div class="auth-box bg-dark border-top border-secondary">
                    <!-- Alret for login -->
                    <?php
                    if (isset($_SESSION['loginMessage'])) {
                        echo "<div class='alert bg-danger text-light alert-dismissible fade show' role='alert'>
                                <center><strong>" . $_SESSION['loginMessage'] . "</strong></center>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>";
                        unset($_SESSION['loginMessage']);
                    }
                    ?>

                    <!-- form validation message -->
                    <div class="alert bg-danger text-light" id="fieldError" role="alert" hidden>
                        <center><strong>Fill all fields</strong></center>
                    </div>

                    <!-- Login form -->
                    <div id="loginform">
                        <div class="text-center p-t-20 p-b-20">
                            <span class="db"><img src="../assets/images/logo.png" alt="logo" /></span>
                        </div>
                        <!-- Form -->
                        <form class="form-horizontal m-t-20" id="loginForm" onsubmit="return(validateLoginForm());" name="loginform" method="POST" action="loginController.php">
                            <div class="row p-b-30">
                                <div class="col-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-mobile"></i></span>
                                        </div>
                                        <input type="number" name="loginUsername" id="loginUsername" class="form-control form-control-lg" placeholder="Mobile Number" aria-label="Username" aria-describedby="basic-addon1" required="">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-key"></i></span>
                                        </div>
                                        <input type="password" name="loginPassword" id="loginPassword" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row border-top border-secondary">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="p-t-20">
                                            <button class="btn btn-info" id="to-recover" type="button"><i class="fa fa-lock m-r-5"></i> Lost password?</button>
                                            <button type="submit" name="loginFormSubmit" class="btn col-5 btn-success float-right">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="recoverform">
                        <div class="text-center">
                            <span class="text-white">Enter your e-mail address below and we will send you instructions how to recover a password.</span>
                        </div>
                        <div class="row m-t-20">
                            <!-- Form -->
                            <form class="col-12" action="index.html">
                                <!-- email -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <!-- pwd -->
                                <div class="row m-t-20 p-t-20 border-top border-secondary">
                                    <div class="col-12">
                                        <a class="btn btn-success" href="#" id="to-login" name="action">Back To Login</a>
                                        <button class="btn btn-info float-right" type="button" name="action">Recover</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Credit -->
                    <h6 class="text-light mt-5">
                        <center><?php include('../layout/footerCredit.php'); ?></center>
                    </h6>


                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Login box.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper scss in scafholding.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper scss in scafholding.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right Sidebar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right Sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- Login validation -->
        <script>
            function validateLoginForm() {
                var fieldUsername = document.forms["loginForm"]["loginUsername"].value;
                var fieldPassword = document.forms["loginForm"]["loginPassword"].value;
                if (fieldUsername != "" && fieldPassword != "") {
                    return true;
                } else {
                    const error = document.getElementById('fieldError');
                    error.removeAttribute('hidden');
                    event.preventDefault();
                    return false;
                }
            }
        </script>


        <!-- ============================================================== -->
        <!-- All Required js -->
        <!-- ============================================================== -->
        <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- ============================================================== -->
        <!-- This page plugin js -->
        <!-- ============================================================== -->
        <script>
            $('[data-toggle="tooltip"]').tooltip();
            $(".preloader").fadeOut();
            // ============================================================== 
            // Login and Recover Password 
            // ============================================================== 
            $('#to-recover').on("click", function() {
                $("#loginform").slideUp();
                $("#recoverform").fadeIn();
            });
            $('#to-login').click(function() {

                $("#recoverform").hide();
                $("#loginform").fadeIn();
            });
        </script>

    </body>

    </html>
<?php
}
?>