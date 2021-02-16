function save()
  {
    var form = $("#insert_form").serialize();
    
    $.ajax({
      url:"control.php",
      method:"POST",
      data:form,
      dataType:"JSON",
      success:function(data)
      {
        if(data.status == true)
        {
          $('#aaa').html(data.message);
          getdata();
          $("#form")[0].reset();
         $('#model').modal('hide');  
              
        }
        else {
          $('#aaa').html(data.mesage);
        }
      }
    });
  }



$(document).ready(function(){
    getdata();
    getparty();
  });


  function getparty()
  {
    $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"getparty"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        $("#partyid").html('');
        if(data.status)
        {
          var row = "<option value=''>---select party---</option>";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<option value="+data.rows[i].id+">"+data.rows[i].partyname+"-"+data.rows[i].partynumber+"</option>";
                // print(row);
          }
        
          $("#partyid").html(row);
        }
        
      }
    });
}

  function getdata()
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
                  "<td>"+data.rows[i].partyname+"("+data.rows[i].partynumber+")</td>"+
                "<td>"+data.rows[i].billnumber+"</td>"+
                "<td>"+data.rows[i].xyz+"</td>"+
                "<td><button type='button' class='btn btn-warning' onclick='deleterow("+data.rows[i].bill_id+")'>Delete</button>&nbsp;<button type='button' onclick='updaterow("+data.rows[i].bill_id+")'>Update</button></td>"+
                "</tr>";
                // print(row);
          }
        
          $("#tbody").html(row);
        }
        
      }
    });
}
    function updaterow(id)
  {
    $.ajax({
      url:'control.php',
      method:'POST',
      data:{'idd':id,'action':'update'},
      dataType:'JSON',
      success:function(trd)
      {

          $("#partyname").val(trd.list.partyname);
          $("#id").val(trd.list.id);   
          $("#partynumber").val(trd.list.partynumber);
            $("#partyaddress").val(trd.list.partyaddress);
            $("#partyemailid").val(trd.list.partyemailid);
             $('.bs-example-modal-lg').modal('show');      
          
      }

    });
    
  }
 function abc() {
   $("#insert_form")[0].reset();
   $('.bs-example-modal-lg').modal('show');
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
          $('#aaa').html(data.mesage);
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
      buttonsStyling:!1}).then(function(t){t.value?delet(id):t.dismiss===Swal.DismissReason.cancel&&Swal.fire({title:"Cancelled",text:"Your imaginary file is safe :)",icon:"error"})});
    
  } 
