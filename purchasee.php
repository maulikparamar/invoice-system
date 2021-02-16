<?php
  //invoice.php  
  include('database_connection.php');

  $statement = $connect->prepare("
    SELECT * FROM tbl_order 
    ORDER BY order_id DESC
  ");

  $statement->execute();

  $all_result = $statement->fetchAll();

  $total_rows = $statement->rowCount();

  if(isset($_POST["create_invoice"]))
  { 
    $order_total_before_tax = 0;
    $order_total_tax1 = 0;
    $order_total_tax2 = 0;
    $order_total_tax3 = 0;
    $order_total_tax = 0;
    $order_total_after_tax = 0;
    $statement = $connect->prepare("
      INSERT INTO tbl_order 
        (order_no, order_date, order_receiver_name, order_receiver_address, order_total_before_tax, order_total_tax1, order_total_tax2, order_total_tax3, order_total_tax, order_total_after_tax, order_datetime)
        VALUES (:order_no, :order_date, :order_receiver_name, :order_receiver_address, :order_total_before_tax, :order_total_tax1, :order_total_tax2, :order_total_tax3, :order_total_tax, :order_total_after_tax, :order_datetime)
    ");
    $statement->execute(
      array(
          ':order_no'               =>  trim($_POST["order_no"]),
          ':order_date'             =>  trim($_POST["order_date"]),
          ':order_receiver_name'          =>  trim($_POST["order_receiver_name"]),
          ':order_receiver_address'       =>  trim($_POST["order_receiver_address"]),
          ':order_total_before_tax'       =>  $order_total_before_tax,
          ':order_total_tax1'           =>  $order_total_tax1,
          ':order_total_tax2'           =>  $order_total_tax2,
          ':order_total_tax3'           =>  $order_total_tax3,
          ':order_total_tax'            =>  $order_total_tax,
          ':order_total_after_tax'        =>  $order_total_after_tax,
          ':order_datetime'           =>  date("Y-m-d")
      )
    );

      $statement = $connect->query("SELECT LAST_INSERT_ID()");
      $order_id = $statement->fetchColumn();

      for($count=0; $count<$_POST["total_item"]; $count++)
      {
        $order_total_before_tax = $order_total_before_tax + floatval(trim($_POST["order_item_actual_amount"][$count]));

        $order_total_tax1 = $order_total_tax1 + floatval(trim($_POST["order_item_tax1_amount"][$count]));

        $order_total_tax2 = $order_total_tax2 + floatval(trim($_POST["order_item_tax2_amount"][$count]));

        $order_total_tax3 = $order_total_tax3 + floatval(trim($_POST["order_item_tax3_amount"][$count]));

        $order_total_after_tax = $order_total_after_tax + floatval(trim($_POST["order_item_final_amount"][$count]));

        $statement = $connect->prepare("
          INSERT INTO tbl_order_item 
          (order_id, item_name, order_item_quantity, order_item_price, order_item_actual_amount, order_item_tax1_rate, order_item_tax1_amount, order_item_tax2_rate, order_item_tax2_amount, order_item_tax3_rate, order_item_tax3_amount, order_item_final_amount)
          VALUES (:order_id, :item_name, :order_item_quantity, :order_item_price, :order_item_actual_amount, :order_item_tax1_rate, :order_item_tax1_amount, :order_item_tax2_rate, :order_item_tax2_amount, :order_item_tax3_rate, :order_item_tax3_amount, :order_item_final_amount)
        ");

        $statement->execute(
          array(
            ':order_id'               =>  $order_id,
            ':item_name'              =>  trim($_POST["item_name"][$count]),
            ':order_item_quantity'          =>  trim($_POST["order_item_quantity"][$count]),
            ':order_item_price'           =>  trim($_POST["order_item_price"][$count]),
            ':order_item_actual_amount'       =>  trim($_POST["order_item_actual_amount"][$count]),
            ':order_item_tax1_rate'         =>  trim($_POST["order_item_tax1_rate"][$count]),
            ':order_item_tax1_amount'       =>  trim($_POST["order_item_tax1_amount"][$count]),
            ':order_item_tax2_rate'         =>  trim($_POST["order_item_tax2_rate"][$count]),
            ':order_item_tax2_amount'       =>  trim($_POST["order_item_tax2_amount"][$count]),
            ':order_item_tax3_rate'         =>  trim($_POST["order_item_tax3_rate"][$count]),
            ':order_item_tax3_amount'       =>  trim($_POST["order_item_tax3_amount"][$count]),
            ':order_item_final_amount'        =>  trim($_POST["order_item_final_amount"][$count])
          )
        );
      }
      $order_total_tax = $order_total_tax1 + $order_total_tax2 + $order_total_tax3;

      $statement = $connect->prepare("
        UPDATE tbl_order 
        SET order_total_before_tax = :order_total_before_tax, 
        order_total_tax1 = :order_total_tax1, 
        order_total_tax2 = :order_total_tax2, 
        order_total_tax3 = :order_total_tax3, 
        order_total_tax = :order_total_tax, 
        order_total_after_tax = :order_total_after_tax 
        WHERE order_id = :order_id 
      ");
      $statement->execute(
        array(
          ':order_total_before_tax'     =>  $order_total_before_tax,
          ':order_total_tax1'         =>  $order_total_tax1,
          ':order_total_tax2'         =>  $order_total_tax2,
          ':order_total_tax3'         =>  $order_total_tax3,
          ':order_total_tax'          =>  $order_total_tax,
          ':order_total_after_tax'      =>  $order_total_after_tax,
          ':order_id'             =>  $order_id
        )
      );
      header("location:http://localhost/ajax/home.php?p=purchasee");
  }

  if(isset($_POST["update_invoice"]))
  {
    $order_total_before_tax = 0;
      $order_total_tax1 = 0;
      $order_total_tax2 = 0;
      $order_total_tax3 = 0;
      $order_total_tax = 0;
      $order_total_after_tax = 0;
      
      $order_id = $_POST["order_id"];
      
      
      
      $statement = $connect->prepare("
                DELETE FROM tbl_order_item WHERE order_id = :order_id
            ");
            $statement->execute(
                array(
                    ':order_id'       =>      $order_id
                )
            );
      
      for($count=0; $count<$_POST["total_item"]; $count++)
      {
        $order_total_before_tax = $order_total_before_tax + floatval(trim($_POST["order_item_actual_amount"][$count]));
        $order_total_tax1 = $order_total_tax1 + floatval(trim($_POST["order_item_tax1_amount"][$count]));
        $order_total_tax2 = $order_total_tax2 + floatval(trim($_POST["order_item_tax2_amount"][$count]));
        $order_total_tax3 = $order_total_tax3 + floatval(trim($_POST["order_item_tax3_amount"][$count]));
        $order_total_after_tax = $order_total_after_tax + floatval(trim($_POST["order_item_final_amount"][$count]));
        $statement = $connect->prepare("
          INSERT INTO tbl_order_item 
          (order_id, item_name, order_item_quantity, order_item_price, order_item_actual_amount, order_item_tax1_rate, order_item_tax1_amount, order_item_tax2_rate, order_item_tax2_amount, order_item_tax3_rate, order_item_tax3_amount, order_item_final_amount) 
          VALUES (:order_id, :item_name, :order_item_quantity, :order_item_price, :order_item_actual_amount, :order_item_tax1_rate, :order_item_tax1_amount, :order_item_tax2_rate, :order_item_tax2_amount, :order_item_tax3_rate, :order_item_tax3_amount, :order_item_final_amount)
        ");
        $statement->execute(
          array(
            ':order_id'                 =>  $order_id,
            ':item_name'                =>  trim($_POST["item_name"][$count]),
            ':order_item_quantity'          =>  trim($_POST["order_item_quantity"][$count]),
            ':order_item_price'            =>  trim($_POST["order_item_price"][$count]),
            ':order_item_actual_amount'     =>  trim($_POST["order_item_actual_amount"][$count]),
            ':order_item_tax1_rate'         =>  trim($_POST["order_item_tax1_rate"][$count]),
            ':order_item_tax1_amount'       =>  trim($_POST["order_item_tax1_amount"][$count]),
            ':order_item_tax2_rate'         =>  trim($_POST["order_item_tax2_rate"][$count]),
            ':order_item_tax2_amount'       =>  trim($_POST["order_item_tax2_amount"][$count]),
            ':order_item_tax3_rate'         =>  trim($_POST["order_item_tax3_rate"][$count]),
            ':order_item_tax3_amount'       =>  trim($_POST["order_item_tax3_amount"][$count]),
            ':order_item_final_amount'      =>  trim($_POST["order_item_final_amount"][$count])
          )
        );
        $result = $statement->fetchAll();
      }
      $order_total_tax = $order_total_tax1 + $order_total_tax2 + $order_total_tax3;
      
      $statement = $connect->prepare("
        UPDATE tbl_order 
        SET order_no = :order_no, 
        order_date = :order_date, 
        order_receiver_name = :order_receiver_name, 
        order_receiver_address = :order_receiver_address, 
        order_total_before_tax = :order_total_before_tax, 
        order_total_tax1 = :order_total_tax1, 
        order_total_tax2 = :order_total_tax2, 
        order_total_tax3 = :order_total_tax3, 
        order_total_tax = :order_total_tax, 
        order_total_after_tax = :order_total_after_tax 
        WHERE order_id = :order_id 
      ");
      
      $statement->execute(
        array(
          ':order_no'               =>  trim($_POST["order_no"]),
          ':order_date'             =>  trim($_POST["order_date"]),
          ':order_receiver_name'        =>  trim($_POST["order_receiver_name"]),
          ':order_receiver_address'     =>  trim($_POST["order_receiver_address"]),
          ':order_total_before_tax'     =>  $order_total_before_tax,
          ':order_total_tax1'          =>  $order_total_tax1,
          ':order_total_tax2'          =>  $order_total_tax2,
          ':order_total_tax3'          =>  $order_total_tax3,
          ':order_total_tax'           =>  $order_total_tax,
          ':order_total_after_tax'      =>  $order_total_after_tax,
          ':order_id'               =>  $order_id
        )
      );
      
      $result = $statement->fetchAll();
            
      header("location:http://localhost/ajax/home.php?p=purchasee");
  }

  if(isset($_GET["delete"]) && isset($_GET["id"]))
  {
    $statement = $connect->prepare("DELETE FROM tbl_order WHERE order_id = :id");
    $statement->execute(
      array(
        ':id'       =>      $_GET["id"]
      )
    );
    $statement = $connect->prepare(
      "DELETE FROM tbl_order_item WHERE order_id = :id");
    $statement->execute(
      array(
        ':id'       =>      $_GET["id"]
      )
    );
    header("location:http://localhost/ajax/home.php?p=purchasee");
  }

  ?>



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
                                                       <th>Invoice No.</th>
            <th>Invoice Date</th>
            <th>Receiver Name</th>
            <th>Invoice Total</th>
            <th>PDF</th>
            <th>Edit</th>
            <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="invoice">
                                                   
                                                </tbody>
                                            </table>




                                         <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-xl" style="float: right;">+</button>
                                                        
                                                          <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-xl">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                          
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                               <div class="modal-body">
                                         <form class="custom-validation" id="form">

    <div class="container-fluid">
            <form method="post" id="invoice_form">
        <div class="table-responsive">
          <table class="table table-bordered">
            <tr>
              <td colspan="2" align="center"><h2 style="">Create Invoice</h2></td>
            </tr>
            <tr>
                <td colspan="2">
                  <div class="row">
                    <div class="col-md-8">
                      To,<br />
                        <b>RECEIVER (BILL TO)</b><br />
                        <input type="text" name="order_receiver_name" id="order_receiver_name" class="form-control input-sm" placeholder="Enter Receiver Name" />
                        <textarea name="order_receiver_address" id="order_receiver_address" class="form-control" placeholder="Enter Billing Address"></textarea>
                    </div>
                    <div class="col-md-4">
                      Reverse Charge<br />
                      <input type="text" name="order_no" id="order_no" class="form-control input-sm" placeholder="Enter Invoice No." />
                      <input type="date" name="order_date" id="order_date" class="form-control input-sm" placeholder="Select Invoice Date" />
                    </div>
                  </div>
                  <br />
                  <table id="invoice-item-table" class="table table-bordered">
                    <tr>
                      <th width="7%">Sr No.</th>
                      <th width="20%">Item Name</th>
                      <th width="5%">Quantity</th>
                      <th width="5%">Price</th>
                      <th width="10%">Actual Amt.</th>
                      <th width="12.5%" colspan="2">Tax1 (%)</th>
                      <th width="12.5%" colspan="2">Tax2 (%)</th>
                      <th width="12.5%" colspan="2">Tax3 (%)</th>
                      <th width="12.5%" rowspan="2">Total</th>
                      <th width="3%" rowspan="2"></th>
                    </tr>
                    <tr>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th>Rate</th>
                      <th>Amt.</th>
                      <th>Rate</th>
                      <th>Amt.</th>
                      <th>Rate</th>
                      <th>Amt.</th>
                    </tr>
                    <tr>
                      <td><span id="sr_no">1</span></td>
                      <td><input type="text" name="item_name[]" id="item_name1" class="form-control input-sm" /></td>
                      <td><input type="text" name="order_item_quantity[]" id="order_item_quantity1" data-srno="1" class="form-control input-sm order_item_quantity" /></td>
                      <td><input type="text" name="order_item_price[]" id="order_item_price1" data-srno="1" class="form-control input-sm number_only order_item_price" /></td>
                      <td><input type="text" name="order_item_actual_amount[]" id="order_item_actual_amount1" data-srno="1" class="form-control input-sm order_item_actual_amount" readonly /></td>
                      <td><input type="text" name="order_item_tax1_rate[]" id="order_item_tax1_rate1" data-srno="1" class="form-control input-sm number_only order_item_tax1_rate" /></td>
                      <td><input type="text" name="order_item_tax1_amount[]" id="order_item_tax1_amount1" data-srno="1" readonly class="form-control input-sm order_item_tax1_amount" /></td>
                      <td><input type="text" name="order_item_tax2_rate[]" id="order_item_tax2_rate1" data-srno="1" class="form-control input-sm number_only order_item_tax2_rate" /></td>
                      <td><input type="text" name="order_item_tax2_amount[]" id="order_item_tax2_amount1" data-srno="1" readonly class="form-control input-sm order_item_tax2_amount" /></td>
                      <td><input type="text" name="order_item_tax3_rate[]" id="order_item_tax3_rate1" data-srno="1" class="form-control input-sm number_only order_item_tax3_rate" /></td>
                      <td><input type="text" name="order_item_tax3_amount[]" id="order_item_tax3_amount1" data-srno="1" readonly class="form-control input-sm order_item_tax3_amount" /></td>
                      <td><input type="text" name="order_item_final_amount[]" id="order_item_final_amount1" data-srno="1" readonly class="form-control input-sm order_item_final_amount" /></td>
                      <td></td>
                    </tr>
                  </table>
                  <div align="right">
                    <button type="button" name="add_row" id="add_row" class="btn btn-success btn-xs">+</button>
                  </div>
                </td>
              </tr>
              <tr>
                <td align="right"><b>Total</td>
                <td align="right"><b><span id="final_total_amt"></span></b></td>
              </tr>
              <tr>
                <td colspan="2"></td>
              </tr>
              <tr>
                <td colspan="2" align="center">
                  <input type="hidden" name="total_item" id="total_item" value="1" />
                  <input type="submit" name="create_invoice" id="create_invoice" class="btn btn-info" value="Create" />
                </td>
              </tr>
          </table>
        </div>
      </form>
      <script>
      $(document).ready(function(){
        var final_total_amt = $('#final_total_amt').text();
        var count = 1;
        
        $(document).on('click', '#add_row', function(){
          count++;
          $('#total_item').val(count);
          var html_code = '';
          html_code += '<tr id="row_id_'+count+'">';
          html_code += '<td><span id="sr_no">'+count+'</span></td>';
          
          html_code += '<td><input type="text" name="item_name[]" id="item_name'+count+'" class="form-control input-sm" /></td>';
          
          html_code += '<td><input type="text" name="order_item_quantity[]" id="order_item_quantity'+count+'" data-srno="'+count+'" class="form-control input-sm number_only order_item_quantity" /></td>';
          html_code += '<td><input type="text" name="order_item_price[]" id="order_item_price'+count+'" data-srno="'+count+'" class="form-control input-sm number_only order_item_price" /></td>';
          html_code += '<td><input type="text" name="order_item_actual_amount[]" id="order_item_actual_amount'+count+'" data-srno="'+count+'" class="form-control input-sm order_item_actual_amount" readonly /></td>';
          
          html_code += '<td><input type="text" name="order_item_tax1_rate[]" id="order_item_tax1_rate'+count+'" data-srno="'+count+'" class="form-control input-sm number_only order_item_tax1_rate" /></td>';
          html_code += '<td><input type="text" name="order_item_tax1_amount[]" id="order_item_tax1_amount'+count+'" data-srno="'+count+'" readonly class="form-control input-sm order_item_tax1_amount" /></td>';
          html_code += '<td><input type="text" name="order_item_tax2_rate[]" id="order_item_tax2_rate'+count+'" data-srno="'+count+'" class="form-control input-sm number_only order_item_tax2_rate" /></td>';
          html_code += '<td><input type="text" name="order_item_tax2_amount[]" id="order_item_tax2_amount'+count+'" data-srno="'+count+'" readonly class="form-control input-sm order_item_tax2_amount" /></td>';
          html_code += '<td><input type="text" name="order_item_tax3_rate[]" id="order_item_tax3_rate'+count+'" data-srno="'+count+'" class="form-control input-sm number_only order_item_tax3_rate" /></td>';
          html_code += '<td><input type="text" name="order_item_tax3_amount[]" id="order_item_tax3_amount'+count+'" data-srno="'+count+'" readonly class="form-control input-sm order_item_tax3_amount" /></td>';
          html_code += '<td><input type="text" name="order_item_final_amount[]" id="order_item_final_amount'+count+'" data-srno="'+count+'" readonly class="form-control input-sm order_item_final_amount" /></td>';
          html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-xs remove_row">X</button></td>';
          html_code += '</tr>';
          $('#invoice-item-table').append(html_code);
        });
        
        $(document).on('click', '.remove_row', function(){
          var row_id = $(this).attr("id");
          var total_item_amount = $('#order_item_final_amount'+row_id).val();
          var final_amount = $('#final_total_amt').text();
          var result_amount = parseFloat(final_amount) - parseFloat(total_item_amount);
          $('#final_total_amt').text(result_amount);
          $('#row_id_'+row_id).remove();
          count--;
          $('#total_item').val(count);
        });

        function cal_final_total(count)
        {
          var final_item_total = 0;
          for(j=1; j<=count; j++)
          {
            var quantity = 0;
            var price = 0;
            var actual_amount = 0;
            var tax1_rate = 0;
            var tax1_amount = 0;
            var tax2_rate = 0;
            var tax2_amount = 0;
            var tax3_rate = 0;
            var tax3_amount = 0;
            var item_total = 0;
            quantity = $('#order_item_quantity'+j).val();
            if(quantity > 0)
            {
              price = $('#order_item_price'+j).val();
              if(price > 0)
              {
                actual_amount = parseFloat(quantity) * parseFloat(price);
                $('#order_item_actual_amount'+j).val(actual_amount);
                tax1_rate = $('#order_item_tax1_rate'+j).val();
                if(tax1_rate > 0)
                {
                  tax1_amount = parseFloat(actual_amount)*parseFloat(tax1_rate)/100;
                  $('#order_item_tax1_amount'+j).val(tax1_amount);
                }
                tax2_rate = $('#order_item_tax2_rate'+j).val();
                if(tax2_rate > 0)
                {
                  tax2_amount = parseFloat(actual_amount)*parseFloat(tax2_rate)/100;
                  $('#order_item_tax2_amount'+j).val(tax2_amount);
                }
                tax3_rate = $('#order_item_tax3_rate'+j).val();
                if(tax3_rate > 0)
                {
                  tax3_amount = parseFloat(actual_amount)*parseFloat(tax3_rate)/100;
                  $('#order_item_tax3_amount'+j).val(tax3_amount);
                }
                item_total = parseFloat(actual_amount) + parseFloat(tax1_amount) + parseFloat(tax2_amount) + parseFloat(tax3_amount);
                final_item_total = parseFloat(final_item_total) + parseFloat(item_total);
                $('#order_item_final_amount'+j).val(item_total);
              }
            }
          }
          $('#final_total_amt').text(final_item_total);
        }

        $(document).on('blur', '.order_item_price', function(){
          cal_final_total(count);
        });

        $(document).on('blur', '.order_item_tax1_rate', function(){
          cal_final_total(count);
        });

        $(document).on('blur', '.order_item_tax2_rate', function(){
          cal_final_total(count);
        });

        $(document).on('blur', '.order_item_tax3_rate', function(){
          cal_final_total(count);
        });

        $('#create_invoice').click(function(){
          if($.trim($('#order_receiver_name').val()).length == 0)
          {
            alert("Please Enter Reciever Name");
            return false;
          }

          if($.trim($('#order_no').val()).length == 0)
          {
            alert("Please Enter Invoice Number");
            return false;
          }

          if($.trim($('#order_date').val()).length == 0)
          {
            alert("Please Select Invoice Date");
            return false;
          }

          for(var no=1; no<=count; no++)
          {
            if($.trim($('#item_name'+no).val()).length == 0)
            {
              alert("Please Enter Item Name");
              $('#item_name'+no).focus();
              return false;
            }

            if($.trim($('#order_item_quantity'+no).val()).length == 0)
            {
              alert("Please Enter Quantity");
              $('#order_item_quantity'+no).focus();
              return false;
            }

            if($.trim($('#order_item_price'+no).val()).length == 0)
            {
              alert("Please Enter Price");
              $('#order_item_price'+no).focus();
              return false;
            }

          }

          $('#invoice_form').submit();

        });

      });
      </script>
          </div>
    <br>
    <div align="center">
    <script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
                <!-- webslesson_mainblogsec_Blog1_1x1_as -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-4529508631166774"
                     data-ad-host="ca-host-pub-1556223355139109"
                     data-ad-host-channel="L0007"
                     data-ad-slot="6573078845"
                     data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
    </div>
   
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-87739877-1', 'auto');
      ga('send', 'pageview');

    </script>
  </body>

<!-- Mirrored from demo.webslesson.info/php-invoice-system/invoice.php?add=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Apr 2020 06:36:48 GMT -->
</html>
<script type="text/javascript">
  $(document).ready(function(){
    var table = $('#data-table').DataTable({
          "order":[],
          "columnDefs":[
          {
            "targets":[4, 5, 6],
            "orderable":false,
          },
        ],
        "pageLength": 25
        });
    $(document).on('click', '.delete', function(){
      var id = $(this).attr("id");
      if(confirm("Are you sure you want to remove this?"))
      {
        window.location.href="invoice.html?delete=1&amp;id="+id;
      }
      else
      {
        return false;
      }
    });
  });

</script>

<script>
$(document).ready(function(){
$('.number_only').keypress(function(e){
return isNumbers(e, this);      
});
function isNumbers(evt, element) 
{
var charCode = (evt.which) ? evt.which : event.keyCode;
if (
(charCode != 46 || $(element).val().indexOf('.') != -1) &&      // “.” CHECK DOT, AND ONLY ONE.
(charCode < 48 || charCode > 57))
return false;
return true;
}
});
</script>
                
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

<!-- <script>
var body =document.getElementById('cd');
var count=0;
var sum =0;
function removeRow(abc){
    body.removeChild(document.getElementById("cat"+abc));
           document.getElementById('gsttotal'+abc).value = d;
       y = parseFloat(y)- parseFloat(d); 
}

function addnew()
{

            count++;    
            var html = [
            '<td><select id="category_id',count,'" class="form-control" name="category_id"> </select></td>',

           '<td><select id="product_id',count,'" class="form-control" name="product_id"></select></td>',

             '<td><input type="text"  onKeyUp="cou()" style="width:100%;" class="form-control" id="price',count,'"></input></td>',
            '<td><select type="text" onChange="cou()" style="width:100%;" class="form-control" id="quan',count,'"><option id="option">selectquantity</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></td>',

             '<td><select id="unitview_id',count,'" class="form-control" name="unitview_id"> </select></td>',

            '<td><select id="gst_id',count,'" onChange="cou(this);" class="form-control"  name="gst_id"> </select></td>',

            '<td><input type="text" id="subtotal',count,'" style="width:100%;" class="form-control"></input></td>',

            '<td><input type="text" id="gsttotal',count,'" style="width:100%;" class="form-control"></input></td>',

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
function cou(id)
{
   
    var p = document.getElementById('price'+count).value;
    var q = document.getElementById('quan'+count).value;
    var t = parseFloat(p) * parseInt(q);
    var o = document.getElementById('subtotal'+count).value = t.toFixed(1);

    var tx = document.getElementById('gst_id'+count);
     var m = (tx.options[tx.selectedIndex].innerHTML);

    var s = (parseFloat(t)) + ((parseFloat(t) * parseFloat(m))/100);
    var d = document.getElementById('gsttotal'+count).value = s.toFixed(2);
    if ( d > 0) {
        grand(d);
    }        
}
function grand(d) {
      k = parseFloat(k) + parseFloat(d);
    var d = document.getElementById('gsttotal'+count).innerHTML;
  
     document.getElementById('total').value = k.toFixed(2);
}



</script> -->