function save()
  {
    var form = $("#form").serialize();
    
    $.ajax({
      url:"control.php",
      method:"POST",
      data:form,
      dataType:"JSON",
      success:function(data)
      { 
       if(data.status == true)
        {
          $(kk()).html(data.message);
          getdata();
          $("#form")[0].reset();
          
         $('#model').modal('hide');  
        }
        else {
          $(kk()).html(data.message);
        }
      }
    });
  }



function product()
  {
    var product = $("#productk").serialize();
    
    $.ajax({
      url:"control.php",
      method:"POST",
      data:product,
      dataType:"JSON",
      success:function(data)
      { 
       if(data.status == true)
        {
          $(kk()).html(data.message);
          getdata();
          $("#productk")[0].reset();

           window.location.href="home.php?p=product";
        }
        else {
          $(kk()).html(data.message);
        }
      }
    });
  }



function cate(){
   {
    var cate = $("#cate").serialize();
    
    var form_data = new FormData();

    var file_data = $('#image').prop('files')[0];

    var other_data = $('#cate').serializeArray();

        $.each(other_data,function(key,input)
        {
            form_data.append(input.name,input.value);
        });
    form_data.append('image', file_data);
    
    $.ajax({
        url : 'control.php',
        type: "POST",
        cache: false,
        contentType: false,
        processData: false,
        data: form_data, 
      dataType:"JSON",
      success:function(data)
      { 
       if(data.status == true)
        {
          $(kk()).html(data.message);
          getdata();
          $("#cate")[0].reset();
         $('#model').modal('hide');
          window.location.href="home.php?p=category";  
        }
        else {
          $(kk()).html(data.message);
        }
      }
    });
  }
}


function unitu(){
   {
    var unitu = $("#unitu").serialize();
    
    $.ajax({
      url:"control.php",
      method:"POST",
      data:unitu,
      dataType:"JSON",
      success:function(data)
      { 
       if(data.status == true)
        {
          $(kk()).html(data.message);
          getdata();
          $("#unitu")[0].reset();
          
         $('#model').modal('hide'); 
         window.location.href="home.php?p=unit";   
        }
        else {
          $(kk()).html(data.message);
        }
      }
    });
  }
}

function pus(){
   {
    var purchase_dataa = $("#purchase_dataa").serialize();
    
    $.ajax({
      url:"control.php",
      method:"POST",
      data:purchase_dataa,
      dataType:"JSON",
      success:function(data)
      { 
       if(data.status == true)
        {
          $(kk()).html(data.message);
          getdata();
          $("#purchase_dataa")[0].reset();
          
         $('#model').modal('hide'); 
         window.location.href="home.php?p=purchase";   
        }
        else {
          $(kk()).html(data.message);
        }
      }
    });
  }
}

$(document).ready(function(){
    purchase_new_view();
  });



  function purchase_new_view()
  {
    $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"purchase_new_view"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        if(data.status)
        {
          var row = "";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<tr><td>"+data.rows[i].purchase_data_id+"</td>"+ 
                   "<td>"+data.rows[i].purchase_date+"</td>"+
                  "<td>"+data.rows[i].bill_no+"</td>"+
                "<td>"+data.rows[i].bill_date+"</td>"+
                "<td>"+data.rows[i].party_name+"</td>"+
                "<td>"+data.rows[i].total+"</td>"+
                 "<td><a type='submit' class='btn btn-success' href='try.html' value='print'>PDF</a></td>"+
                "<td><button type='button' class='btn btn-danger' onclick='purchase_delete_view("+data.rows[i].purchase_data_id+")'>Delete</button></td>"+
                "<td><button type='button' class='btn btn-warning' onclick='purchase_update_view("+data.rows[i].purchase_data_id+")'>Update</button></td>"+
                "</tr>";
                // print(row);
          }
        
          $("#purchaseview").html(row);
        }
        
      }
    });
}

  function purchase_update_view(id)
  {
    $.ajax({
      url:'controlupdate.php',
      method:'POST',
      data:{'countt':id,'action':'purchase_update_view'},
      dataType:'JSON',
      success:function(trd)
      {
      
          $("#purchase_idd").val(trd.list.purchase_data_id);
         $("#purchase_no").val(trd.list.purchase_no);        
               $("#bill_no").val(trd.list.bill_no);

         $("#purchase_date").val(trd.list.purchase_date); 
          $("#bill_date").val(trd.list.bill_date);
         $("#purchase_id").val(trd.list.purchase_id);        
               $("#remarks").val(trd.list.remarks);
          
          var tt = JSON.parse(trd.list.category_id);
          var product_id = JSON.parse(trd.list.product_id);
          var price = JSON.parse(trd.list.price);
          var quan = JSON.parse(trd.list.quan);
           var unitview_id = JSON.parse(trd.list.unitview_id);
          var gst_id = JSON.parse(trd.list.gst_id);
          var subtotal = JSON.parse(trd.list.subtotal);
          var gsttotal = JSON.parse(trd.list.gsttotal);
          var total = JSON.parse(trd.list.total);
        
          for(var i =0; i <tt.length; i++)
          {
              count++;  
                    var html = [
            '<td><select id="category_id',count,'" value="'+tt[i]+'" class="form-control" name="category_id[]"></select></td>',

           '<td><select id="product_id',count,'" value="'+product_id[i]+'"  class="form-control" name="product_id[]">"'+product_id[i]+'"</select></td>',

             '<td><input type="number"  onKeyUp="cou(',count,')" value="'+price[i]+'" style="width:100%;"name="price[]" class="form-control" id="price',count,'"></input></td>',
            '<td><select type="text" onchange="cou(',count,')" value="' + quan[i] + '"  style="width:100%;" name="quan[]" class="form-control" id="quan',count,'"><option id="option" >selectquantity</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></td>',

             '<td><select id="unitview_id',count,'" name="unitview_id[]" class="form-control" > </select></td>',

            '<td><select id="gst_id',count,'" onchange="cou(',count,');" class="form-control"  name="gst_id[]"> </select></td>',
            '<td><input type="text" id="subtotal',count,'" value="'+subtotal[i]+'" name="subtotal[]"  style="width:100%;" class="form-control"></input></td>',

            '<td><input type="text" id="gsttotal',count,'"value="'+gsttotal[i]+'" name="gsttotal[]"  style="width:100%;" class="form-control"></input></td>',

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

          $("#total").val(total);   
          $('#model').modal('show'); 

          }
    
    });
    
  }
function abc() {
   $("#form")[0].reset();
   $('#model').modal('show');

 }

function areka(){
    var area = $("#area").serialize();
    
    $.ajax({
      url:"control.php",
      method:"POST",
      data:area,
      dataType:"JSON",
      success:function(data)
      { 
       if(data.status == true)
        {
          $(kk()).html(data.message);
          getdata();
          $("#area")[0].reset();
          
         $('#model').modal('hide'); 
           window.location.href="home.php?p=area";  
        }
        else {
          $(kk()).html(data.message);
        }
      }
    });
}

  $(document).ready(function(){
    cityview();
  });



function cityview(){
       $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"cityview"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        $("#city_id").html('');
        if(data.status)
        {
          var row = "<option value=''>---select city---</option>";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<option value="+data.rows[i].city_id+">"+data.rows[i].cityname+"</option>";
          }
        
          $("#city_id").html(row);

        }
        
      }
    });
}


  $(document).ready(function(){
    purchase_view_category();
  });



function purchase_view_category(){
       $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"purchase_view_category"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        $("#category_id_purchase").html('');
        if(data.status)
        {
          var row = "<option value=''>---select category---</option>";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<option value="+data.rows[i].category_id+">"+data.rows[i].category+"</option>";
          }
        
          $("#category_id_purchase").html(row);

        }
        
      }
    });
}



function cityk()
{
  var form = $("#form").serialize();
  $.ajax({
    url:"control.php",
    method:"POST",
    data:form,
    dataType:"JSON",
    success:function(data){
      if (data.status == true) {
        $(kk()).html(data.message);
        getdata();

        $("#form")[0].reset();
        $('#model').modal('hide');
         window.location.href="home.php?p=city";
      }
      else{
        $(kk()).html(data.message);
      }
    }
  });
}


function gstk()
{
  var form = $("#form").serialize();
  $.ajax({
    url:"control.php",
    method:"POST",
    data:form,
    dataType:"JSON",
    success:function(data){
      if (data.status == true) {
        $(kk()).html(data.message);
        getdata();

        $("#form")[0].reset();
        $('#model').modal('hide');
         window.location.href="home.php?p=gst";
      }
      else{
        $(kk()).html(data.message);
      }
    }
  });
}

$(document).ready(function(){
    getdataa();
  });



  function getdataa()
  {
    $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"viewbill"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        if(data.status)
        {
          var row = "";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<tr><td>"+data.rows[i].bill_id+"</td>"+ 
                  "<td>"+data.rows[i].emp_username+"</td>"+
                "<td>"+data.rows[i].emp_number+"</td>"+
                "<td>"+data.rows[i].productname+"</td>"+
                "<td>"+data.rows[i].billnumber+"</td>"+
                "<td>"+data.rows[i].xyz+"</td>"+
                "<td>"+data.rows[i].dateandtime+"</td>"+
                "<td><button type='button' class='btn btn-danger' onclick='deleterow("+data.rows[i].id+")'>Delete</button></td>"+
                "<td><button type='button' class='btn btn-warning' onclick='updaterow("+data.rows[i].id+")'>Update</button></td>"+
                "</tr>";
                // print(row);
          }
        
          $("#kbody").html(row);
        }
        
      }
    });
}


$(document).ready(function(){
    city();
  });



  function city()
  {
    $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"view_city"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        if(data.status)
        {
          var row = "";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<tr><td>"+data.rows[i].city_id+"</td>"+ 
                  "<td>"+data.rows[i].cityname+"</td>"+
                "<td><button type='button' class='btn btn-danger' onclick='city_delete("+data.rows[i].city_id+")'>Delete</button></td>"+
                "<td><button type='button' class='btn btn-warning' onclick='city_update("+data.rows[i].city_id+")'>Update</button></td>"+
                "</tr>";
                // print(row);
          }
        
          $("#cbody").html(row);
        }
        
      }
    });
}

    function city_update(id)
  {
    $.ajax({
      url:'controlupdate.php',
      method:'POST',
      data:{'countt':id,'action':'city_update'},
      dataType:'JSON',
      success:function(trd)
      {

          $("#cityname").val(trd.list.cityname);
         $("#city_id").val(trd.list.city_id);        
          $('#model').modal('show');      
          
      }

    });
    
  }

function abc() {
   $("#form")[0].reset();
   $('#model').modal('show');

 }



$(document).ready(function(){
    areaa();
  });


 function areaa()
  {
    $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"areaview"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        if(data.status)
        {
          var row = "";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<tr><td>"+data.rows[i].area_id+"</td>"+ 
                  "<td>"+data.rows[i].cityname+"</td>"+
                "<td>"+data.rows[i].area+"</td>"+
                "<td>"+data.rows[i].pincode+"</td>"+
                "<td><button type='button' class='btn btn-danger' onclick='area_delete("+data.rows[i].area_id+")'>Delete</button></td>"+
                "<td><button type='button' class='btn btn-warning' onclick='area_update("+data.rows[i].area_id+")'>Update</button></td>"+
                "</tr>";
                // print(row);
          }
        
          $("#areabody").html(row);
        }
        
      }
    });
}

  function area_update(id)
  {
    $.ajax({
      url:'controlupdate.php',
      method:'POST',
      data:{'countt':id,'action':'area_update'},
      dataType:'JSON',
      success:function(trd)
      {

          $("#area_id").val(trd.list.area_id);
         $("#city_id").val(trd.list.city_id);        
             $("#area").val(trd.list.area);  
         $("#pincode").val(trd.list.pincode);       
          $('#model').modal('show');      
          
      }

    });
    
  }

function abc() {
   $("#form")[0].reset();
   $('#model').modal('show');

 }


$(document).ready(function(){
    roleview();
  });



$(document).ready(function(){
    categoryview();
  });


 function categoryview()
  {
    $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"categoryviewk"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        if(data.status)
        {
          var row = "";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<tr><td>"+data.rows[i].category_id+"</td>"+ 
                  "<td>"+data.rows[i].category+"</td>"+
                "<td><img src="+data.rows[i].image+" style='width: 60%;height:60%;'></img></td>"+
                "<td>"+data.rows[i].description+"</td>"+
                "<td><button type='button' class='btn btn-danger' onclick='category_delete("+data.rows[i].category_id+")'>Delete</button></td>"+
                "<td><button type='button' class='btn btn-warning' onclick='category_update("+data.rows[i].category_id+")'>Update</button></td>"+
                "</tr>";
                // print(row);

          }
        
          $("#categorybody").html(row);
        }
        
      }
    });
}



    function category_update(id)
  {
    $.ajax({
      url:'controlupdate.php',
      method:'POST',
      data:{'countt':id,'action':'category_update'},
      dataType:'JSON',
      success:function(trd)
      {

          $("#category").val(trd.list.category);
         $("#category_id").val(trd.list.category_id);         
          $("#description").val(trd.list.description);
          $('#model').modal('show');      
          
      }

    });
    
  }

function abc() {
   $("#form")[0].reset();
   $('#model').modal('show');

 }



$(document).ready(function(){
    getdata();
  });


 function getdata()
  {
    $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"view"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        if(data.status)
        {
          var row = "";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<tr><td>"+data.rows[i].id+"</td>"+ 
                  "<td>"+data.rows[i].productname+"</td>"+
                "<td>"+data.rows[i].productnumber+"</td>"+
                "<td>"+data.rows[i].gstcode+"</td>"+
                "<td>"+data.rows[i].dateandtime+"</td>"+
                "<td><button type='button' class='btn btn-danger' onclick='deleterow("+data.rows[i].id+")'>Delete</button></td>"+
                "<td><button type='button' class='btn btn-warning' onclick='updaterow("+data.rows[i].id+")'>Update</button></td>"+
                "</tr>";
                // print(row);
          }
        
          $("#tbody").html(row);
        }
        
      }
    });
}


$(document).ready(function(){
    unitbody();
  });


 function unitbody()
  {
    $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"unitbody"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        if(data.status)
        {
          var row = "";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<tr><td>"+data.rows[i].unit_id+"</td>"+ 
                  "<td>"+data.rows[i].unit+"</td>"+
                "<td><button type='button' class='btn btn-danger' onclick='unit_delete("+data.rows[i].unit_id+")'>Delete</button></td>"+
                "<td><button type='button' class='btn btn-warning' onclick='unit_update("+data.rows[i].unit_id+")'>Update</button></td>"+
                "</tr>";
                // print(row);
          }
        
          $("#unitbody").html(row);
        }
        
      }
    });
}


    function unit_update(id)
  {
    $.ajax({
      url:'controlupdate.php',
      method:'POST',
      data:{'countt':id,'action':'unit_update'},
      dataType:'JSON',
      success:function(trd)
      {

          $("#unit").val(trd.list.unit);
         $("#unit_id").val(trd.list.unit_id);        
          $('#model').modal('show');      
          
      }

    });
    
  }

function abc() {
   $("#form")[0].reset();
   $('#model').modal('show');

 }

$(document).ready(function(){
    productbody();
  });


 function productbody()
  {
    $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"productbody"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        if(data.status)
        {
          var row = "";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<tr><td>"+data.rows[i].product_id+"</td>"+ 
                  "<td>"+data.rows[i].category+"</td>"+
                  "<td>"+data.rows[i].product_code+"</td>"+
                  "<td>"+data.rows[i].product_name+"</td>"+
                  "<td>"+data.rows[i].hsn_code+"</td>"+
                  "<td>"+data.rows[i].price+"</td>"+
                  "<td>"+data.rows[i].unitview_id+"</td>"+
                  "<td>"+data.rows[i].quality+"</td>"+
                  "<td>"+data.rows[i].description+"</td>"+
                "<td><button type='button' class='btn btn-danger' onclick='product_delete("+data.rows[i].product_id+")'>Delete</button></td>"+
                "<td><button type='button' class='btn btn-warning' onclick='product_update("+data.rows[i].product_id+")'>Update</button></td>"+
                "</tr>";
                // print(row);
          }
        
          $("#productbody").html(row);
        }
        
      }
    });
}

   function product_update(id)
  {
    $.ajax({
      url:'controlupdate.php',
      method:'POST',
      data:{'countt':id,'action':'product_update'},
      dataType:'JSON',
      success:function(trd)
      {

          $("#hsn_code").val(trd.list.hsn_code);
          $("#category_id").val(trd.list.category_id);
          $("#product_id").val(trd.list.product_id);        
          $("#product_code").val(trd.list.product_code);
           $("#price").val(trd.list.price);  
          $("#product_name").val(trd.list.product_name);  
          $("#unitview_id").val(trd.list.unitview_id);
          $("#quality").val(trd.list.quality);
          $("#description").val(trd.list.description);
          $('#model').modal('show');      
          
      }

    });
    
  }

function abc() {
   $("#form")[0].reset();
   $('#model').modal('show');

 }



$(document).ready(function(){
    gstbody();
  });


 function gstbody()
  {
    $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"gstbody"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        if(data.status)
        {
          var row = "";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<tr><td>"+data.rows[i].gst_id+"</td>"+ 
                  "<td>"+data.rows[i].gst+"</td>"+
                  "<td>"+data.rows[i].gst_value+"</td>"+
                "<td><button type='button' class='btn btn-danger' onclick='gst_delete("+data.rows[i].gst_id+")'>Delete</button></td>"+
                "<td><button type='button' class='btn btn-warning' onclick='gst_update("+data.rows[i].gst_id+")'>Update</button></td>"+
                "</tr>";
                // print(row);
          }
        
          $("#gstbody").html(row);
        }
        
      }
    });
}
   function gst_update(id)
  {
    $.ajax({
      url:'controlupdate.php',
      method:'POST',
      data:{'countt':id,'action':'gst_update'},
      dataType:'JSON',
      success:function(trd)
      {

          $("#gst_id").val(trd.list.gst_id);
         $("#gst").val(trd.list.gst);        
             
    
          $("#gst_value").val(trd.list.gst_value);
          $('#model').modal('show');      
          
      }

    });
    
  }

function abc() {
   $("#form")[0].reset();
   $('#model').modal('show');

 }



$(document).ready(function(){
    Purchase_Partybody();
  });


 function Purchase_Partybody()
  {
    $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"Purchase_Partybody"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        if(data.status)
        {
          var row = "";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<tr><td>"+data.rows[i].purchase_id+"</td>"+ 
                  "<td>"+data.rows[i].party_name+"</td>"+
                  "<td>"+data.rows[i].address+"</td>"+
                  "<td>"+data.rows[i].city+"</td>"+
                  "<td>"+data.rows[i].area+"</td>"+
                  "<td>"+data.rows[i].pin_code+"</td>"+
                  "<td>"+data.rows[i].number+"</td>"+
                  "<td>"+data.rows[i].number1+"</td>"+
                  "<td>"+data.rows[i].email+"</td>"+
                  "<td>"+data.rows[i].gst_no+"</td>"+
                  "<td>"+data.rows[i].bank_details+"</td>"+
                  "<td>"+data.rows[i].company_name+"</td>"+
                  "<td>"+data.rows[i].url+"</td>"+
                "<td><button type='button' class='btn btn-danger' onclick='purchase_delete_party("+data.rows[i].purchase_id+")'>Delete</button></td>"+
                "<td><button type='button' class='btn btn-warning' onclick='purchase_update_party("+data.rows[i].purchase_id+")'>Update</button></td>"+
                "</tr>";
                // print(row);
          }
        
          $("#Purchase_Partybody").html(row);
        }
        
      }
    });
}


   function purchase_update_party(id)
  {
    $.ajax({
      url:'controlupdate.php',
      method:'POST',
      data:{'countt':id,'action':'purchase_update_party'},
      dataType:'JSON',
      success:function(trd)
      {
           $("#purchase_id").val(trd.list.purchase_id);
          $("#party_name").val(trd.list.party_name);
         $("#address").val(trd.list.address);        
            
          $("#city").val(trd.list.city);
         $("#area").val(trd.list.area);   

          $("#pin_code").val(trd.list.pin_code);
         $("#number").val(trd.list.number);   

          $("#number1").val(trd.list.number1);
         $("#email").val(trd.list.email);   

          $("#gst_no").val(trd.list.gst_no);
         $("#bank_details").val(trd.list.bank_details);   
    
          $("#company_name").val(trd.list.company_name);
          $("#url").val(trd.list.url);
          $('#model').modal('show');      
          
      }

    });
    
  }

function abc() {
   $("#form")[0].reset();
   $('#model').modal('show');

 }

    function updaterow(id)
  {
    $.ajax({
      url:'control.php',
      method:'POST',
      data:{'id':id,'action':'update'},
      dataType:'JSON',
      success:function(trd)
      {

          $("#productname").val(trd.list.productname);
          $("#id").val(trd.list.id);
             
          $("#productnumber").val(trd.list.productnumber);
          $("#gstcode").val(trd.list.gstcode);
          $('#model').modal('show');      
          
      }

    });
    
  }


 function abc() {
   $("#form")[0].reset();
   $('#model').modal('show');

 }


  function delet(id) {
        $.ajax({
      url:'control.php',
      method:'POST',
      data:{'id':id,'action':'delete'},
      dataType:'JSON',
      success:function(data)
      {
      if(data.status == true)
        {
          $('#aaa').html(data.message);
          getdata();
          
        }
        else {
          $('#aaa').html(data.message);
        } 
      }

    });

  }



 function deleterow(id)
  {

    Swal.fire({
      title:"Are you sure?",
      text:"You won't be able to revert this!",
      icon:"warning",
      showCancelButton:!0,
      confirmButtonText:"Yes, delete it!",
      cancelButtonText:"No, cancel!",
      confirmButtonClass:"btn btn-success mt-2",
      cancelButtonClass:"btn btn-danger ml-2 mt-2",
      buttonsStyling:!1}).then(function(t){t.value?delet(id):t.dismiss===Swal.DismissReason.cancel&&Swal.fire({title:"Cancelled",text:"No No No NO",icon:"error"})});
    
  } 



  function kk(id) {
            Swal.fire({
                title: "Success Data Add!",
                text: "Thank You :)",
                icon: "success",
                timer:1500,
                confirmButtonColor: "#3d8ef8",
            });
          
  }



  $(document).ready(function(){
    category();
  });

function categoryss(id){
       $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"categoryview"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        $("#category_id"+id).html('');
        if(data.status)
        {
          var row = "<option value=''>select category</option>";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<option value="+data.rows[i].category_id+">"+data.rows[i].category+"</option>";
          }
        
          $("#category_id"+count).html(row);
        }
        
      }
    });
}

  $(document).ready(function(){
    purchase_party_purchase();
  });
function purchase_party_purchase(){
       $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"purchase_party_purchase"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        $("#purchase_id").html('');
        if(data.status)
        {
          var row = "<option value=''>select purchase party</option>";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<option value="+data.rows[i].purchase_id+">"+data.rows[i].party_name+"</option>";
          }
        
          $("#purchase_id").html(row);
        }
        
      }
    });
}

function category(){
       $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"categoryview"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        $("#category_id").html('');
        if(data.status)
        {
          var row = "<option value=''>select category</option>";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<option value="+data.rows[i].category_id+">"+data.rows[i].category+"</option>";
          }
        
          $("#category_id").html(row);
        }
        
      }
    });
}

$(document).ready(function(){
    unitviewk();
  });



function unitviewk(){
       $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"unitview"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        $("#unitview_id").html('');
        if(data.status)
        {
          var row = "<option value=''>select unit</option>";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<option value="+data.rows[i].unit_id+">"+data.rows[i].unit+"</option>";
          }
        
          $("#unitview_id").html(row);
        }
        
      }
    });
}


function purchase_unit(id){
       $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"unitview"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        $("#unitview_id"+id).html('');
        if(data.status)
        {
          var row = "<option value=''>select unit</option>";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<option value="+data.rows[i].unit_id+">"+data.rows[i].unit+"</option>";
          }
        
          $("#unitview_id"+count).html(row);
        }
        
      }
    });
}


function purchase_prodcut(id){
       $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"product_view_purchase"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        $("#product_id"+id).html('');
        if(data.status)
        {
          var row = "<option value=''>select product</option>";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<option value="+data.rows[i].product_id+">"+data.rows[i].product_name+"</option>";
          }
        
          $("#product_id"+count).html(row);
        }
        
      }
    });
}

function purchase_gst(id){
       $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"purchase_gst"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        $("#gst_id"+id).html('');
        if(data.status)
        {
          var row = "<option value=''>select gst</option>";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<option value="+data.rows[i].gst_id+">"+data.rows[i].gst_value+"</option>";
          }
        
          $("#gst_id"+count).html(row);
        }
        
      }
    });
}



function purchase()
  {
    var form = $("#purchasek").serialize();
    
    $.ajax({
      url:"control.php",
      method:"POST",
      data:form,
      dataType:"JSON",
      success:function(data)
      { 
       if(data.status == true)
        {
          $(kk()).html(data.message);
          getdata();
          $("#purchasek")[0].reset(); 
          window.location.href="home.php?p=purchase_party"; 
        }
        else {
          $(kk()).html(data.message);
        }
      }
    });
  }


function login()
  {
    var form = $("#login").serialize();
    
    $.ajax({
      url:"control.php",
      method:"POST",
      data:form,
      dataType:"JSON",
      success:function(data)
      {
        if(data.status == '1')
        {
          window.location.href="home.php";    
        }
        else {
          alert(data.message);
        }
      }
    });
  }

  function changepassword()
  {
    var form = $("#changepassword").serialize();
    
    $.ajax({
      url:"control.php",
      method:"POST",
      data:form,
      dataType:"JSON",
      success:function(data)
      { 
             if(data.status == '1')
        {
          $(changealert()).html(data.message);
          $("#changepassword")[0].reset();
         window.location.href="home.php?p=changepass";  
        }
        else {
          alert(data.message);
        }
      }
    });
  }


  function changealert(id)
  {
       Swal.fire({
                title: "Successfully changepassword password!",
                text: "Thank You :)",
                icon: "success",
                timer:1500,
                confirmButtonColor: "#3d8ef8",
            });
  }

 function profile(){
   {
    var form = $("#form").serialize();
    var form_data = new FormData();

    var file_data = $('#image').prop('files')[0];

    var other_data = $('#form').serializeArray();

        $.each(other_data,function(key,input)
        {
            form_data.append(input.name,input.value);
        });
    form_data.append('image', file_data);
    
    $.ajax({
        url : 'control.php',
        type: "POST",
        cache: false,
        contentType: false,
        processData: false,
        data: form_data, 
      dataType:"JSON",
      success:function(data)
      { 
       if(data.status == true)
        {
          $(kk()).html(data.message);
          getdata();
          $("#form")[0].reset();
          
        }
        else {
          $.alert().html(data.message);
        }
      }
    });
  }
}


 function roleview()
  {
    $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"roleview"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        if(data.status)
        {
          var row = "";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<tr><td>"+data.rows[i].role_id+"</td>"+ 
                  "<td>"+data.rows[i].role_name+"</td>"+
                "<td><button type='button' class='btn btn-danger' onclick='role_delete("+data.rows[i].role_id+")'>Delete</button></td>"+
                // "<td><button type='button' class='btn btn-warning' onclick='role_update("+data.rows[i].role_id+")'>Update</button></td>"+
                "</tr>";
                // print(row);
          }
        
          $("#rolebody").html(row);
        }
        
      }
    });
}






// delete



  function productdeletee(id) {
        $.ajax({
      url:'delete.php',
      method:'POST',
      data:{'count':id,'action':'product_delete'},
      dataType:'JSON',
      success:function(data)
      {
      if(data.status == true)
        {
          $('#aaa').html(data.message);
          getdata();
          window.location.href='home.php?p=product';
        }
        else {
          $('#aaa').html(data.message);
        } 
      }

    });

  }



 function productdelete(id)
  {

    Swal.fire({
      title:"Are you sure?",
      text:"You won't be able to revert this!",
      icon:"warning",
      showCancelButton:!0,
      confirmButtonText:"Yes, delete it!",
      cancelButtonText:"No, cancel!",
      confirmButtonClass:"btn btn-success mt-2",
      cancelButtonClass:"btn btn-danger ml-2 mt-2",
      buttonsStyling:!1}).then(function(t){t.value?productdeletee(id):t.dismiss===Swal.DismissReason.cancel&&Swal.fire({title:"Cancelled",text:"No No No NO",icon:"error"})});
    
  } 


    function role_deletee(id) {
        $.ajax({
      url:'delete.php',
      method:'POST',
      data:{'countt':id,'action':'role_delete'},
      dataType:'JSON',
      success:function(data)
      {
      if(data.status == true)
        {
          $('#aaa').html(data.message);
          getdata();
          window.location.href='home.php?p=role';
        }
        else {
          $('#aaa').html(data.message);
        } 
      }

    });

  }



 function role_delete(id)
  {

    Swal.fire({
      title:"Are you sure?",
      text:"You won't be able to revert this!",
      icon:"warning",
      showCancelButton:!0,
      confirmButtonText:"Yes, delete it!",
      cancelButtonText:"No, cancel!",
      confirmButtonClass:"btn btn-success mt-2",
      cancelButtonClass:"btn btn-danger ml-2 mt-2",
      buttonsStyling:!1}).then(function(t){t.value?role_deletee(id):t.dismiss===Swal.DismissReason.cancel&&Swal.fire({title:"Cancelled",text:"No No No NO",icon:"error"})});
    
  } 




    function category_deletee(id) {
        $.ajax({
      url:'delete.php',
      method:'POST',
      data:{'countt':id,'action':'category_delete'},
      dataType:'JSON',
      success:function(data)
      {
      if(data.status == true)
        {
          $('#aaa').html(data.message);
          getdata();
          window.location.href='home.php?p=category';
        }
        else {
          $('#aaa').html(data.message);
        } 
      }

    });

  }



 function category_delete(id)
  {

    Swal.fire({
      title:"Are you sure?",
      text:"You won't be able to revert this!",
      icon:"warning",
      showCancelButton:!0,
      confirmButtonText:"Yes, delete it!",
      cancelButtonText:"No, cancel!",
      confirmButtonClass:"btn btn-success mt-2",
      cancelButtonClass:"btn btn-danger ml-2 mt-2",
      buttonsStyling:!1}).then(function(t){t.value?category_deletee(id):t.dismiss===Swal.DismissReason.cancel&&Swal.fire({title:"Cancelled",text:"No No No NO",icon:"error"})});
    
  } 

      function unit_deletee(id) {
        $.ajax({
      url:'delete.php',
      method:'POST',
      data:{'countt':id,'action':'unit_delete'},
      dataType:'JSON',
      success:function(data)
      {
      if(data.status == true)
        {
          $('#aaa').html(data.message);
          getdata();
          window.location.href='home.php?p=unit';
        }
        else {
          $('#aaa').html(data.message);
        } 
      }

    });

  }



 function unit_delete(id)
  {

    Swal.fire({
      title:"Are you sure?",
      text:"You won't be able to revert this!",
      icon:"warning",
      showCancelButton:!0,
      confirmButtonText:"Yes, delete it!",
      cancelButtonText:"No, cancel!",
      confirmButtonClass:"btn btn-success mt-2",
      cancelButtonClass:"btn btn-danger ml-2 mt-2",
      buttonsStyling:!1}).then(function(t){t.value?unit_deletee(id):t.dismiss===Swal.DismissReason.cancel&&Swal.fire({title:"Cancelled",text:"No No No NO",icon:"error"})});
    
  } 

        function product_deletee(id) {
        $.ajax({
      url:'delete.php',
      method:'POST',
      data:{'countt':id,'action':'product_delete'},
      dataType:'JSON',
      success:function(data)
      {
      if(data.status == true)
        {
          $('#aaa').html(data.message);
          getdata();
          window.location.href='home.php?p=product';
        }
        else {
          $('#aaa').html(data.message);
        } 
      }

    });

  }



 function product_delete(id)
  {

    Swal.fire({
      title:"Are you sure?",
      text:"You won't be able to revert this!",
      icon:"warning",
      showCancelButton:!0,
      confirmButtonText:"Yes, delete it!",
      cancelButtonText:"No, cancel!",
      confirmButtonClass:"btn btn-success mt-2",
      cancelButtonClass:"btn btn-danger ml-2 mt-2",
      buttonsStyling:!1}).then(function(t){t.value?product_deletee(id):t.dismiss===Swal.DismissReason.cancel&&Swal.fire({title:"Cancelled",text:"No No No NO",icon:"error"})});
    
  } 

          function city_deletee(id) {
        $.ajax({
      url:'delete.php',
      method:'POST',
      data:{'countt':id,'action':'city_delete'},
      dataType:'JSON',
      success:function(data)
      {
      if(data.status == true)
        {
          $('#aaa').html(data.message);
          getdata();
          window.location.href='home.php?p=city';
        }
        else {
          $('#aaa').html(data.message);
        } 
      }

    });

  }



 function city_delete(id)
  {

    Swal.fire({
      title:"Are you sure?",
      text:"You won't be able to revert this!",
      icon:"warning",
      showCancelButton:!0,
      confirmButtonText:"Yes, delete it!",
      cancelButtonText:"No, cancel!",
      confirmButtonClass:"btn btn-success mt-2",
      cancelButtonClass:"btn btn-danger ml-2 mt-2",
      buttonsStyling:!1}).then(function(t){t.value?city_deletee(id):t.dismiss===Swal.DismissReason.cancel&&Swal.fire({title:"Cancelled",text:"No No No NO",icon:"error"})});
    
  } 


          function area_deletee(id) {
        $.ajax({
      url:'delete.php',
      method:'POST',
      data:{'countt':id,'action':'area_delete'},
      dataType:'JSON',
      success:function(data)
      {
      if(data.status == true)
        {
          $('#aaa').html(data.message);
          getdata();
          window.location.href='home.php?p=area';
        }
        else {
          $('#aaa').html(data.message);
        } 
      }

    });

  }



 function area_delete(id)
  {

    Swal.fire({
      title:"Are you sure?",
      text:"You won't be able to revert this!",
      icon:"warning",
      showCancelButton:!0,
      confirmButtonText:"Yes, delete it!",
      cancelButtonText:"No, cancel!",
      confirmButtonClass:"btn btn-success mt-2",
      cancelButtonClass:"btn btn-danger ml-2 mt-2",
      buttonsStyling:!1}).then(function(t){t.value?area_deletee(id):t.dismiss===Swal.DismissReason.cancel&&Swal.fire({title:"Cancelled",text:"No No No NO",icon:"error"})});
    
  } 


           function purchase_delete_partyy(id) {
        $.ajax({
      url:'delete.php',
      method:'POST',
      data:{'countt':id,'action':'purchase_delete_party'},
      dataType:'JSON',
      success:function(data)
      {
      if(data.status == true)
        {
          $('#aaa').html(data.message);
          getdata();
          window.location.href='home.php?p=purchase_party';
        }
        else {
          $('#aaa').html(data.message);
        } 
      }

    });

  }



 function purchase_delete_party(id)
  {

    Swal.fire({
      title:"Are you sure?",
      text:"You won't be able to revert this!",
      icon:"warning",
      showCancelButton:!0,
      confirmButtonText:"Yes, delete it!",
      cancelButtonText:"No, cancel!",
      confirmButtonClass:"btn btn-success mt-2",
      cancelButtonClass:"btn btn-danger ml-2 mt-2",
      buttonsStyling:!1}).then(function(t){t.value?purchase_delete_partyy(id):t.dismiss===Swal.DismissReason.cancel&&Swal.fire({title:"Cancelled",text:"No No No NO",icon:"error"})});
    
  } 

             function gst_deletee(id) {
        $.ajax({
      url:'delete.php',
      method:'POST',
      data:{'countt':id,'action':'gst_delete'},
      dataType:'JSON',
      success:function(data)
      {
      if(data.status == true)
        {
          $('#aaa').html(data.message);
          getdata();
          window.location.href='home.php?p=gst';
        }
        else {
          $('#aaa').html(data.message);
        } 
      }

    });

  }



 function gst_delete(id)
  {

    Swal.fire({
      title:"Are you sure?",
      text:"You won't be able to revert this!",
      icon:"warning",
      showCancelButton:!0,
      confirmButtonText:"Yes, delete it!",
      cancelButtonText:"No, cancel!",
      confirmButtonClass:"btn btn-success mt-2",
      cancelButtonClass:"btn btn-danger ml-2 mt-2",
      buttonsStyling:!1}).then(function(t){t.value?gst_deletee(id):t.dismiss===Swal.DismissReason.cancel&&Swal.fire({title:"Cancelled",text:"No No No NO",icon:"error"})});
    
  } 


function purchase_delete_vieww(id) {
        $.ajax({
      url:'delete.php',
      method:'POST',
      data:{'countt':id,'action':'purchase_delete_view'},
      dataType:'JSON',
      success:function(data)
      {
      if(data.status == true)
        {
          $('#aaa').html(data.message);
          getdata();
          window.location.href='home.php?p=purchase';
        }
        else {
          $('#aaa').html(data.message);
        } 
      }

    });

  }



 function purchase_delete_view(id)
  {

    Swal.fire({
      title:"Are you sure?",
      text:"You won't be able to revert this!",
      icon:"warning",
      showCancelButton:!0,
      confirmButtonText:"Yes, delete it!",
      cancelButtonText:"No, cancel!",
      confirmButtonClass:"btn btn-success mt-2",
      cancelButtonClass:"btn btn-danger ml-2 mt-2",
      buttonsStyling:!1}).then(function(t){t.value?purchase_delete_vieww(id):t.dismiss===Swal.DismissReason.cancel&&Swal.fire({title:"Cancelled",text:"No No No NO",icon:"error"})});
    
  }