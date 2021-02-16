<?php
session_start();

?>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>S.G.Corporation</title>
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="assets/css/a.css">

        <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        <!--datatable-->
         <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

        <script src="assets/libs/jquery/jquery.min.js"></script>


    </head>

    <body data-sidebar="dark">
        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <!-- <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm-dark.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="20">
                                </span>
                            </a>-->

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/sg.png" alt="" height="22" style="width: 10px; padding: 10px;">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/sg.png" alt="" height="20" style="width: 100px; height: 100px; padding-top: 10px; ">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-backburger"></i>
                        </button>

                        <!-- App Search-->
                      <!--   <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form> -->
                    </div>
                     <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ml-1"><?=$_SESSION['name']?></span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href="home.php?p=<?=('edit_profile')?>"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a>
                                <a class="dropdown-item" href="home.php?p=<?=('purchase')?>"><i class="mdi mdi-credit-card-outline font-size-16 align-middle mr-1"></i> Billing</a>
                                <a class="dropdown-item" href="home.php?p=<?=('changepass')?>"><i class="mdi mdi-credit-card-outline font-size-16 align-middle mr-1"></i> Change password</a>
                               <!--  <a class="dropdown-item" href="#"><i class="mdi mdi-account-settings font-size-16 align-middle mr-1"></i> Settings</a> -->
                               <!--  <a class="dropdown-item" href="#"><i class="mdi mdi-lock font-size-16 align-middle mr-1"></i> Lock screen</a>
                                <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="control.php?action=logout"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>
                            </div>
                        </div>
            
                    </div>

          
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi dripicons-view-list"></i>
                                    <span>Manage Employee</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="home.php?p=<?=('employee')?>">Employee</a></li>
                                    <li><a href="home.php?p=<?=('role')?>">Role</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi dripicons-view-list"></i>
                                    <span>Manage Product</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="home.php?p=<?=('category')?>">Category</a></li>
                                    <li><a href="home.php?p=<?=('unit')?>">Unit</a></li>
                                    <li><a href="home.php?p=<?=('product')?>">Product</a></li>
                                </ul>
                            </li>
                             <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi dripicons-view-list"></i>
                                    <span>Manage Location</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="home.php?p=<?=('city')?>">City</a></li>                                 
                                    <li><a href="home.php?p=<?=('area')?>">Aera</a></li>
                                </ul>
                            </li>
                             <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi dripicons-view-list"></i>
                                    <span>Purchase</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="home.php?p=<?=('purchase_party')?>">Purchase Party</a></li>
                                      <li><a href="home.php?p=<?=('gst')?>">Gst</a></li> 
                                    <li><a href="home.php?p=<?=('purchase')?>">Purchase</a></li>
                                    
                                </ul>
                            </li>

                        

                         <!--    <li class="menu-title">Components</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi dripicons-view-list"></i>
                                    <span>Tables</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="home.php?p=<?=('tables-basic')?>">Basic Tables</a></li>
                                    <li><a href="home.php?p=<?=('tables-datatable')?>">Data Tables</a></li>
                                </ul>
                                <ul class="sub-menu">
                                    <li><a href="home.php?p=<?=('bill')?>">bill</a></li>
                                </ul>
                            </li> -->


                       <!--  <div class="sidebar-section mt-5 mb-3">
                            <h6 class="text-reset font-weight-medium">
                                Project Completed
                                <span class="float-right">5%</span>
                            </h6>
                            <div class="progress mt-3" style="height: 4px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 5%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div> -->
                    </div>


                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->



                       <?php
                    
                    if (isset($_GET['p']) && file_exists($_GET['p'].'.php')) {
                        include_once($_GET['p'].'.php');
                    }   
                 
                ?>
                        

            <!-- ============================================================== -->
            
            <!-- end main content-->

      
        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>

        <!--datatable-->
         <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
       

       <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
        <script src="assets/js/app.js"></script> 



    </body>
</html>
