

 <script type="text/javascript" src="assets/party.init.js"></script>


  <body data-sidebar="dark">

            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-20" style="width: 100%;">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="header-title">Gst</h4>

                                         <div class="table-responsive">
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" >
                                                <thead>
                                                    <tr>
                                                        <th>Gst id</th>
                                                        <th>Gst</th>
                                                        <th>Gst value</th>
                                                        <th>delete</th>
                                                        <th>update</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="gstbody">
                                                   
                                                </tbody>
                                            </table>




                                         <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">+</button>
                                                        
                                                            <!--  Modal content for the above example -->
                                                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="model">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Gst</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form class="custom-validation" id="form">
                                            <input type="hidden" name="action" value="gstk">
                                             <input type="hidden" name="gst_id" value="0"  id="gst_id">
                                            <div class="form-group">
                                                <label>Enter Gst</label>
                                               <select id="gst" name="gst" class="form-control">
                                                   <option id="0">select gst</option>
                                                   <option id="1">igst</option>
                                                   <option id="2">cgst</option>
                                                   <option id="3">sgst</option>
                                               </select><br><br>
                                               <label>Enter Gst value</label>
                                               <input type="number" name="gst_value" id="gst_value" class="form-control" style="width: 100%;margin-bottom: 3%;">
                                            </div><br>

             <input type="button" name="submit" value="submit" class="btn btn-primary waves-effect waves-light mr-1" onclick="gstk()">
                                                    <button type="reset" class="btn btn-secondary waves-effect" href="home.php?p=edit_profile">
                                                        Cancel
                                                    </button>
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


