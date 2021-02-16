
     
     

 <script type="text/javascript" src="assets/party.init.js"></script>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm-dark.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="20">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm-light.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="20">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-backburger"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </header>



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">DataTable</h4>    
                                        <div class="table-responsive">
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Product Name(Number)</th>
                                                        <th>Billnumber</th>
                                                        <th>Xyz</th>
                                                        <th>Date And Time</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbody">
                                                   
                                                </tbody>
                                            </table>
                                     <!-- Extra Large modal -->
                                                            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" style="margin-top: 3%;float: right;"  onclick="abc()">Modal demo</button>

                                                            <!--  Modal content for the above example -->
                                                            <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="model">
                                                                <div class="modal-dialog modal-xl">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">Submit Form</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                             <form  id="form">
                                            <input type="hidden" name="action" value="partyinsert">
                                             <input type="hidden" name="id" value="0"  id="id">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Product Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Enter Product Name" id="productname" name="productname">
                                            </div>
                                        
                                        
                                            <label for="example-search-input" class="col-md-2 col-form-label">Product Number</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="number" placeholder="Enter Product Number" id="productnumber" name="productnumber">
                                            </div>
                                        
                                       
                                            <label for="example-email-input" class="col-md-2 col-form-label">Gst Code</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Enter Product Code" id="gstcode" name="gstcode">
                                            </div>
                                       
                                     <input type="button" onclick="save()" name="submit" value="Submit" class="btn btn-info btn-lg waves-effect waves-light" style="margin-top: 3%;">
                                                                           </form>
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div><!-- /.modal -->
                                        </div>
        
                                    </div>
                                    <div id="aaa"></div>
                                </div>
                            </div>

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

             