 <script type="text/javascript" src="assets/party.init.js"></script>

  <body data-sidebar="dark">

            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-20" style="width: 100%;">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="header-title">Purchase</h4>

                                         <div class="table-responsive">
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" >
                                                <thead>
                                                    <tr>
                                                        <th>purchase_id</th>
                                                         <th>parchase date</th>
                                                        <th>bill no.</th>
                                                        <th>bill date</th>
                                                        <th>purchase party</th>
                                                        <th>Grand Total</th>
                                                        <th>PDF</th>
                                                        <th>delete</th>
                                                        <th>update</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="purchaseview">
                                                   
                                                </tbody>
                                            </table>




                                         <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-xl" style="float: right;">+</button>
                                                        
                                                          <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true"  id="model">
                                                                <div class="modal-dialog modal-xl">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">Purchase</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                               <div class="modal-body">
                                         <form class="custom-validation" id="purchase_dataa">
                                              <input type="hidden" name="action" value="purchase_dataa">
                                             <input type="hidden" name="purchase_idd" value="0"  id="purchase_idd">
                                                     <div class="form-group" style="float: left; width: 40%;">
                                                <label>Purchase No.:</label><br>
                                                <input type="text" class="form-control" required placeholder="Enter Purchase No" id="purchase_no" name="purchase_no" style="width: 100%;" />
                                                     </div>
                                             <div class="form-group" style="float: right; width: 40%;">
                                                <label>Bill No.:</label><br>
                                                <input type="number" class="form-control" required placeholder="Enter bill no" name="bill_no" id="bill_no" style="width: 100%;" />
                                            </div><br><br><br>
                                             <div class="form-group" style="float: left; width: 40%;">
                                                <label>Purchase Date:</label><br>
                                                <input type="date" class="form-control" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true" style="width: 100%;" name="purchase_date" id="purchase_date"/>
                                            </div>   
                                            <div class="form-group" style="float: right; width: 40%;">
                                                <label>Bill Date:</label><br>
                                                <input type="date" class="form-control" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true" style="width: 100%;" name="bill_date" id="bill_date">
                                            </div><br><br>          
                                            <div class="form-group" style="float: left;width: 40%;">
                                                <label>Purchase Party:</label><br>
                                                 <select class="form-control" name="purchase_id" id="purchase_id" style="width: 100%;"></select>
                                            </div><br><br>         
                                            <div class="form-group" style="float: right;width: 40%;">
                                                <label>Remarks:</label><br>
                                               <input type="text" name="remarks" id="remarks" class="form-control" style="width: 100%;"required placeholder="Enter Remarks">
                                            </div><br><br><br>
                                <table border="1" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead> 
                                            <tr>
                                                <th> Category</th>
                                                <th> Product</th>
                                                <th> Price</th>
                                                <th> Quality</th>
                                                <th>Unit</th>
                                                <th>Gst</th>
                                                <th> SubTOtal</th>
                                                <th>gst SubTOtal</th>
                                                <th>delete</th>
                                                </tr>
                                        </thead>
                                     <tbody id="cd">    
                                        
                                   </tbody>
                            </table>
                            <button type="button" onclick="addnew();" class="btn btn-primary waves-effect waves-light mr-1" name="button" value="add">Add</button>
                                            <div class="form-group" style="float: left;width: 40%;">                     
             <input type="button" name="submit" value="submit" class="btn btn-primary waves-effect waves-light mr-1" onclick="pus()" style="width: 17%;">
                                                    <button type="reset" class="btn btn-secondary waves-effect" href="home.php?p=edit_profile">
                                                        Cancel
                                                    </button>                            
                                                    </div>
                                                    <input type="text" name="total" id="total"  class="form-control" style="float: right; width: 20%;" required placeholder="All SubTotal" >
                                        </form>                            
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div><!-- /.modal -->
                                        
        
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<script>
var body =document.getElementById('cd');
var count=0;
var sum =0;
var y = 0;
function removeRow(abc,count){
    
    var e = document.getElementById("total").value;
        var t = document.getElementById('gsttotal'+abc).value;
      var u = parseFloat(e) - parseFloat(t);

       document.getElementById("total").value = u.toFixed(2);
   body.removeChild(document.getElementById("cat"+abc));
}

function addnew()
{

            count++;    
            var html = [
            '<td><select id="category_id',count,'" class="form-control" name="category_id[]"> </select></td>',

           '<td><select id="product_id',count,'" class="form-control" name="product_id[]"></select></td>',

             '<td><input type="number"  onKeyUp="cou(',count,')" style="width:100%;"name="price[]" class="form-control" id="price',count,'"></input></td>',
            '<td><select type="text" onchange="cou(',count,')" style="width:100%;" name="quan[]" class="form-control" id="quan',count,'"><option id="option">selectquantity</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></td>',

             '<td><select id="unitview_id',count,'" name="unitview_id[]" class="form-control" > </select></td>',

            '<td><select id="gst_id',count,'" onchange="cou(',count,');" class="form-control"  name="gst_id[]"> </select></td>',

            '<td><input type="text" id="subtotal',count,'" name="subtotal[]"  style="width:100%;" class="form-control"></input></td>',

            '<td><input type="text" id="gsttotal',count,'" name="gsttotal[]"  style="width:100%;" class="form-control"></input></td>',

            '<td><input type="button"  class="btn btn-primary waves-effect waves-light mr-1" value="delete" name="delete" onclick="removeRow(',count,')"></input></td>',].join('');

                    var div = document.createElement('tr');
                    div.innerHTML = html;
                    div.id="cat"+count;
                    body.appendChild(div);  
                    categoryss(count); 
                    purchase_unit(count); 
                    purchase_prodcut(count);
                    purchase_gst(count);
        }
        
var k = 0;
function cou(ii)
{
   
    var p = document.getElementById('price'+ii).value;
    var q = document.getElementById('quan'+ii).value;
   
    if(q == '' || p == '')
    {
        p = 0;
        q = 0;
    }

    var t = parseFloat(p) * parseInt(q);

    var o = document.getElementById('subtotal'+ii).value = t.toFixed(1);

    var tx = document.getElementById('gst_id'+ii).value;
    if(tx == '')
    {
        tx = 0;
    }
    var s = (parseFloat(t)) + ((parseFloat(t) * parseFloat(tx))/100);
    var d = document.getElementById('gsttotal'+ii).value = s.toFixed(2);
   grand(); 
}
function grand() {
      
    var aa = document.getElementsByName('gsttotal[]');
    var sy=0;
    for (var i = 0; i < aa.length; i++) {
        sy = parseFloat(sy)  + parseFloat(aa[i].value);
    }
    $('#total').val(sy);
 }
    



</script>