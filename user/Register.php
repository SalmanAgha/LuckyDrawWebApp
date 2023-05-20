<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <?php include 'meta.php';?>
   
      <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">


    <!--  <link rel="manifest" href="./manifest.webmanifest"> -->
</head>
<body class="account-body">
    <!-- Log In page -->
    <div class="row vh-100 ">
        <div class="col-12 align-self-center">
            <div class="auth-page">
                <div class="card auth-card shadow-lg">
                    <div class="card-body">
                        <div class="px-3">
                            <div class="auth-logo-box">
                                <a href="index.php" class="logo logo-admin"><img src="../assets/cust_images/logo_blue.svg" height="55" alt="logo" class="auth-logo"></a>
                            </div><!--end auth-logo-box-->
                            <center>
                                <div class="login-logo">
                                    <br><br>
                                    <h1 style="font-size: 20px;"><strong>Welcome to Signup</strong></h1>
                                    <p style="font-size: 16px;"><strong>Login</strong></p>
                                </div>
                            </center>
                            <form id="registerform" class="needs-validation" novalidate>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"  required >
                                                    <div class="invalid-tooltip">

                                                    Please fill this correctly!
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-md-12 mb-3">
                                                <label for="username">User Name</label>
                                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter User Name" required>
                                                <div class="invalid-tooltip">

                                                      Please fill this correctly!
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-12 mb-3">
                                                <label for="email">Email</label>
                                                <div class="input-group">
                                                  
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email "  required>
                                                    <div class="invalid-tooltip">
                                                          Please fill this correctly!
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                        

                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="password">Password</label>
                                                <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                                                <div class="invalid-tooltip">
                                                    Please fill this correctly!
                                                </div>
                                            </div><!--end col-->
                                              <div class="col-md-12 mb-3">
                                                <label for="cpassword">Confirm Password</label>
                                                <input type="text" class="form-control" id="cpassword" name="cpassword" placeholder="Enter Confirm Password" required>
                                                <div class="invalid-tooltip">
                                                      Please fill this correctly!
                                                </div>
                                                <div class="password-match-tooltip"></div> <!-- add this line -->
                                            </div><!--end col-->
  
                                        </div><!--end form-row-->
                                        <button class="btn btn-primary" type="submit">Register</button>
                                    </form><!--end form-->  
                        </div><!--end /div-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end auth-page-->
        </div><!--end col-->           
    </div><!--end row-->
    <!-- End Log In page -->
   
   <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/metisMenu.min.js"></script>
        <script src="../assets/js/waves.min.js"></script>
        <script src="../assets/js/jquery.slimscroll.min.js"></script>
            <script src="../assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
    <script src="../assets/pages/jquery.sweet-alert.init.js"></script>

        <!-- Parsley js -->
        <script src="../assets/plugins/parsleyjs/parsley.min.js"></script>
        <script src="../assets/pages/jquery.validation.init.js"></script> 

        <script src="../assets/js/jquery.core.js"></script>
 

        <!-- App js -->
        <script src="../assets/js/app.js"></script>

    <script src="functions/signup.js"></script>
    <!-- App js --> 
<!-- App js --> 
<script type="text/javascript">
    var input = document.getElementById("password");
    input.addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
        event.preventDefault();
        document.getElementById("btnlogin").click();
    }
});
</script>
</body>
</html>