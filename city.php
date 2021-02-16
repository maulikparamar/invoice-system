  <script type="text/javascript" language="javascript" src="assets/js/pages/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="assets/js/pages/jquery.dataTables.js"></script>
 <script type="text/javascript" src="assets/party.init.js"></script>

  <body data-sidebar="dark">

            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-20" style="width: 100%;">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="header-title">City</h4>

                                         <div class="table-responsive">
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>city_id</th>
                                                        <th>city</th>
                                                        <th>delete</th>
                                                        <th>update</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="cbody">
                                                   
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
                                        <form class="custom-validation" id="form">
                                            <input type="hidden" name="action" value="city">
                                             <input type="hidden" name="city_id" value="0"  id="city_id">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="cityname" name="cityname" placeholder="Enter City"/>
                                            </div><br><br><br><br>

             <input type="button" name="submit" value="submit" class="btn btn-primary waves-effect waves-light mr-1" onclick="cityk()">
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
 <script type="text/javascript">
//      $(document).ready( function () {
//     $('#datatable-buttons').DataTable({
//          dom: "Bfrtip",
//             "processing": true,
//             "serverSide": true,
            
//         "ajax":{
//             "url":"data.php",
//              "type": "POST",
//             "dataSrc": "",
//             "dataType": "JSON",
//         },
//         "columns": [
//         {"data" : "city_id"},
//         {"data" : "cityname"},
//         ]
//     });
// } );

 </script> 