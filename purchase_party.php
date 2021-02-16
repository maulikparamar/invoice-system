<script type="text/javascript" src="assets/party.init.js"></script>
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

 <div class="row">
                            <div class="col-lg-20" style="width: 100%;">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="header-title">Purchase Party</h4>
                                                                             <div class="table-responsive">
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" >
                                                <thead>
                                                    <tr>
                                                        <th>purchase id</th>
                                                        <th>party name</th>
                                                        <th>address</th>
                                                        <th>city</th>
                                                        <th>area</th>
                                                        <th>pin code</th>
                                                         <th>number</th>
                                                        <th>secound number</th>
                                                        <th>email</th>
                                                         <th>gst no</th>
                                                        <th>bank details</th>
                                                        <th>company name</th>
                                                         <th>url</th>
                                                        <th>delete</th>
                                                        <th>update</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="Purchase_Partybody">
                                                   
                                                </tbody>
                                            </table>

                                              <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">+</button>
                                                        
                                                            <!--  Modal content for the above example -->
                                                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="model">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">purchase party</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
        
                                        <form class="custom-validation" id="purchasek">
                                            <input type="hidden" name="action" value="purchase">
                                            <input type="hidden" name="purchase_id" id="purchase_id" value="0">
                                            <div class="form-group">
                                                <label>Party Name</label><br>
                                                <input type="text" class="form-control" required placeholder="Enter Name" id="party_name" name="party_name" />
                                            </div><br><br>
                                             <div class="form-group">
                                                <label>Address</label><br>
                                                <input type="text" class="form-control" required placeholder="Enter Address" id="address" name="address" />
                                            </div><br><br>
                                             <div class="form-group">
                                                <label>City</label><br>
                                                <input type="text" class="form-control" required placeholder="Enter City" id="city" name="city" />
                                            </div><br><br>
                                            <div class="form-group">
                                                <label>Area</label><br>
                                                <input type="text" class="form-control" required placeholder="Enter Area" id="area" name="area" />
                                            </div><br><br>
                                             <div class="form-group">
                                                <label>Pin Code</label><br>
                                                <input type="number" class="form-control" required placeholder="Enter Pin Code" id="pin_code" name="pin_code" />
                                            </div><br><br>
                                             <div class="form-group" style="width: 40%; float: left;">
                                                <label>Number</label><br>
                                                <input type="number" class="form-control" style="width: 100%;" required placeholder="Enter Number" id="number" name="number" />
                                            </div>
                                            <div class="form-group" style="float: right; width: 48%;">
                                                <label>Number two</label><br>
                                                <input type="number" class="form-control" style="width: 100%;" required placeholder="Enter Number" id="number1"name="number1" />
                                            </div><br><br><br><br><br>
                                             <div class="form-group">
                                                <label>Email</label><br>
                                                <input type="email" class="form-control" required placeholder="Enter Email" id="email" name="email" />
                                            </div><br><br>
                                             <div class="form-group">
                                                <label>Gst No.</label><br>
                                                <input type="text" class="form-control" required placeholder="Enter Gst No." id="gst_no" name="gst_no" />
                                            </div><br><br>
                                            <div class="form-group">
                                                <label>Bank Details</label><br>
                                                <input type="text" class="form-control" required placeholder="Enter Bank Details" id="bank_details" name="bank_details" />
                                            </div><br><br>
                                             <div class="form-group">
                                                <label>Company Name</label><br>
                                                <input type="text" class="form-control" required placeholder="Enter Password" id="company_name" name="company_name" />
                                            </div><br><br>
                                             <div class="form-group">
                                                <label>Url</label><br>
                                                <input type="text" class="form-control" required placeholder="Enter Company Name" id="url" name="url" />
                                            </div><br><br>
        
                                           
                                            
                                            <div class="form-group mb-0">
                                                <div>
                                                     <input type="button" name="submit" value="submit" class="btn btn-primary waves-effect waves-light mr-1" onclick="purchase()"  style="width: 10%;">                          
                                                         <button type="reset" class="btn btn-secondary waves-effect" href="home.php?p=edit_profile">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
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
                    </div>
                </div>
                         
                                    </div>
                                </div>
                            </div>
