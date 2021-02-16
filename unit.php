   <script type="text/javascript" src="assets/party.init.js"></script>
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

 <div class="row">
                            <div class="col-lg-20" style="width: 100%;">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="header-title">Unit</h4>
                                                      <div class="table-responsive">
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" >
                                                <thead>
                                                    <tr>
                                                        <th>Unit_id</th>
                                                        <th>Unit</th>
                                                        <th>delete</th>
                                                        <th>update</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="unitbody">
                                                   
                                                </tbody>
                                            </table>

                                              <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">+</button>
                                                        
                                                            <!--  Modal content for the above example -->
                                                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="model">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">unit</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
        
                                        <form class="custom-validation" action="#" id="unitu">
                                             <input type="hidden" name="action" value="unit">
                                             <input type="hidden" name="unit_id" value="0"  id="unit_id">
                                            <div class="form-group">
                                                <label>Unit</label><br>
                                                <input type="number" class="form-control" required placeholder="Enter unit" id="unit" name="unit" />
                                            </div><br><br>
        
                                           
                                            
                                            <div class="form-group mb-0">
                                                <div>
                                                     <input type="button" name="submit" value="submit" class="btn btn-primary waves-effect waves-light mr-1" onclick="unitu()" style="width: 10%;">
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
