   <script type="text/javascript" src="assets/party.init.js"></script>
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

 <div class="row">
                            <div class="col-lg-20" style="width: 100%;">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="header-title">Product</h4>
                                                                                <div class="table-responsive">
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" >
                                                <thead>
                                                    <tr>
                                                        <th>product id</th>
                                                        <th>category id</th>
                                                        <th>product code</th>
                                                        <th>product name</th>
                                                        <th>hsn code</th>
                                                        <th>price</th>
                                                        <th>unitview id</th>
                                                        <th>quality</th>
                                                        <th>description</th>
                                                        <th>delete</th>
                                                        <th>update</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="productbody">
                                                   
                                                </tbody>
                                            </table>

                                              <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">+</button>
                                                        
                                                            <!--  Modal content for the above example -->
                                                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="model">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">product</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
        
                                        <form class="custom-validation" action="#" id="productk">
                                            <input type="hidden" name="action" value="product">
                                            <input type="hidden" name="product_id" id="product_id" value="0">
                                            <div class="form-group" style="float: left; width: 50%">
                                                <label>Category</label><br>
                                                <select class="form-control" name="category_id" id="category_id" style="width: 100%;"></select>
                                            </div>
                                             <div class="form-group" style="float: right; width: 48%">
                                                <label>Product Code</label><br>
                                                <input type="text" class="form-control" required placeholder="Enter product code" id="product_code" name="product_code" style="width: 100%;"/>
                                            </div><br><br>
                                             <div class="form-group" style="float: left; width: 50%">
                                                <label>Product Name</label><br>
                                                <input type="text" class="form-control" required placeholder="Enter product name" id="product_name" name="product_name" style="width: 100%;" />
                                            </div><br><br>
                                            <div class="form-group" style="float: right; width: 48%">
                                                <label>Hsn Code</label><br>
                                                <input type="number" class="form-control" required placeholder="Enter hsn code" id="hsn_code" name="hsn_code" style="width: 100%;"/>
                                            </div><br><br>
                                            <div class="form-group" style="float: left; width: 50%">
                                                <label>Price</label><br>
                                                <input type="number" class="form-control" required placeholder="Enter price" id="price" name="price"  style="width: 100%;"/>
                                            </div>
                                            <div class="form-group" style="float: right; width: 48%">
                                                <label>Unit</label><br>
                                               <select class="form-control" name="unitview_id" id="unitview_id"  style="width: 100%;"></select>
                                            </div>
                                            <div class="form-group">
                                                <label>Alert Quality</label><br>
                                                <input type="number" class="form-control" required placeholder="Enter Alert Quality" id="quality" name="quality"/>
                                            </div><br><br>
                                            <div class="form-group">
                                                   <label>Description</label><br>
                                                <textarea class="form-control" id="description" name="description"></textarea>
                                            </div><br><br>
        
                                           
                                            
                                            <div class="form-group mb-0">
                                                <div>
                                                     <input type="button" name="submit" value="submit" class="btn btn-primary waves-effect waves-light mr-1" onclick="product()"  style="width: 10%;">
                                                    <button type="reset" class="btn btn-secondary waves-effect">
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
