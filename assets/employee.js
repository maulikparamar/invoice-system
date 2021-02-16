$(document).ready(function(){
    getdata();
  });
 function getdata()
  {
    $.ajax({
      url:"control.php",
      method:"POST",
      data:{"action":"view_employee"},
      // dataType:"JSON",
      success:function(data)
      {
        var data = JSON.parse(data);
        if(data.status)
        {
          var count = 1;
          var row = "";
          for(var i=0;i<data.rows.length;i++)
          {
            row +="<tr><td>"+data.rows[i].employee_id+"</td>"+ 
                  "<td>"+data.rows[i].role_name+"</td>"+
                "<td>"+data.rows[i].emp_username+"</td>"+
                "<td>"+data.rows[i].emp_password+"</td>"+
                "<td>"+data.rows[i].email+"</td>"+
                "<td>"+data.rows[i].job+"</td>"+
                "<td>"+data.rows[i].birthdate+"</td>"+
                "<td>"+data.rows[i].textarea+"</td>"+
                "<td><img src="+data.rows[i].image+" style='width:100%;height:30%;'></img></td>"+
                "<td>"+data.rows[i].emp_number+"</td>"+
                "<td>"+data.rows[i].dateandtime+"</td>"+
                "<td> <button type='button' class='btn btn-danger' id='status1' onclick='statusrow("+data.rows[i].employee_id+")'>deactive</button><button type='button' class='btn btn-danger' id='status' onclick='status1row("+data.rows[i].employee_id+")'>active</button><span id='show'></span></td>"+
                "<td><button type='button' class='btn btn-danger' onclick='deleterow("+data.rows[i].employee_id+")'>Delete</button></td>"+
                // "<td><button type='button' class='btn btn-warning' onclick='employee_update("+data.rows[i].employee_id+")'>Update</button></td>"+
                // "<td><span id="+data.rows[i].emp_status=0+">active</span><span id="+data.rows[i].emp_status=1+">deactive</span></td>"+
                "</tr>";
                // print(row);
                count++;

          }
        
          $("#obody").html(row);
        }
        
      }
    });
}


 function delet(id) {
        $.ajax({
      url:'control.php',
      method:'POST',
      data:{'count':id,'action':'delete_view'},
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



function statusrow(id)

{
    $.ajax({
      url:'control.php',
      method:'POST',
      data:{'count':id,'action':'status'},
      dataType:'JSON',
      success:function(data)
      {
      if(data.status == 1)
        {
          $('#show').html(data.message);
          
        }
        else {
          $('#status1').show();
                    $('#status').hide();
          $('#aaa').html(data.message);
        } 
      }

    });

}

function status1row(id)

{
    $.ajax({
      url:'control.php',
      method:'POST',
      data:{'count':id,'action':'status1'},
      dataType:'JSON',
      success:function(data)
      {
      if(data.status == 1)
        {
         $('#show').html(data.message);
          location.reload();
          
        }
        else {
        
          $('#aaa').html(data.message);
        } 
      }

    });

}

