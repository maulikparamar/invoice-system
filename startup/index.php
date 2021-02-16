<!doctype html> <html lang="en"> <head>
        <meta charset="utf-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>
    <body class="bg-primary bg-pattern">
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row" style="margin-top: -4%;">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                           <!--  <a href="index.html" class="logo"><img src="assets/images/logo-light.png" height="24" alt="logo"></a> -->
                            <h2 class="font-size-30 text-white-50 mb-4">S.G.Corporation</h2>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                    <h5 class="mb-5 text-center">Login Account to S.G.Corporation.</h5>
                                   <form class="form-horizontal" action="../control.php" id="login" method="post">
                                            <input type="hidden" value="loginv" name="action"/>
                            
                                            
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mb-4">
                                                    <label for="role">role</label>
                                                    <input type="text" class="form-control" id="role_name" placeholder="Enter role" name="role_name">
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="username">username</label>
                                                    <input type="text" class="form-control" id="emp_username" placeholder="Enter username" name="emp_username">
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="userpassword">Password</label>
                                                    <input type="text" class="form-control" id="emp_password" placeholder="Enter password" name="emp_password">
                                                </div>
                                                
                                                <div class="mt-4">
                                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit" value="submit" name="submit">Login</button>
                                                </div>
                                                <div class="mt-4 text-center">
                                                    <a href="auth-login.html" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Already have account?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->

        <!-- JAVASCRIPT -->
        <script src="../assets/js/libs/jquery/jquery.min.js"></script>
        <script src="../assets/js/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/libs/metismenu/metisMenu.min.js"></script>
        <script src="../assets/js/libs/simplebar/simplebar.min.js"></script>
        <script src="../assets/js/libs/node-waves/waves.min.js"></script>

        <script src="../assets/js/app.js"></script>
    </body>
</html>