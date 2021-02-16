<script type="text/javascript" src="assets/party.init.js"></script>
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

 <div class="row">
                            <div class="col-lg-20" style="width: 100%;">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="header-title">Area</h4>
                                        
                                            <div class="table-responsive">
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" >
                                                <thead>
                                                    <tr>
                                                        <th>Area_id</th>
                                                        <th>city name</th>
                                                        <th>Area</th>
                                                        <th>Pin Code</th>
                                                        <th>delete</th>
                                                        <th>update</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="areabody">
                                                   
                                                </tbody>
                                            </table>

                                         <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">+</button>
                                                        
                                                            <!--  Modal content for the above example -->
                                                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="model">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">City</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                               <form class="custom-validation"id="area">
                                            <input type="hidden" name="action" value="area">
                                            <input type="hidden" name="area_id" id="area_id" value="0">
                                            <div class="form-group">
                                                <div class="form-group">
                                                <label>City</label><br>
                                                <select class="form-control" name="city_id" id="city_id" style="width: 50%;">
                                              
                                            </select><br>

                                                <label>area</label><br>
                                                <input type="text" class="form-control" required placeholder="Enter Area" id="area" name="area" />
                                            </div><br><br>

                                            <div class="form-group">
                                                <label>Pincode</label><br>
                                                <input type="number" class="form-control" required placeholder="Enter Pincode" id="pincode" name="pincode"/>
                                            </div><br><br>
        
                                            <input type="button" name="submit" value="submit" class="btn btn-primary waves-effect waves-light mr-1" onclick="areka()" style="width: 9%;">
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

        
                                                             
                                    </div>
                                </div>
                            </div>



                                     