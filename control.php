<?php
session_start();
$action = $_REQUEST['action'];

include_once 'query.php';

switch ($action) {
	case 'partyinsert':
		insert();
		break;
	case 'invoice':
		invoice();
		break;
	case 'status':
		status();
		break;
	case 'status1':
		status1();
		break;
	case 'Purchase_Partybody':
		Purchase_Partybody();
		break;
	case 'insertbill':
	    insertbill();
	    break;
	case 'gstbody':
	   	gstbody();
	   	break;
	 case 'product_view_purchase':
	 	product_view_purchase();
	 	break;
	case 'update':
		update();
		break;
	case 'purchase_gst':
		purchase_gst();
		break;
	case 'purchase_party_purchase':
		purchase_party_purchase();
		break;
	case 'productbody':
		productbody();
		break;
	case 'purchase_dataa':
		purchase_dataa();
		break;
	case 'areaview':
		areaview();
			break;	
	case 'view':
		view();
		break;
	case 'unitbody':
		unitbody();
			break;	
	case 'viewbill':
		viewbill();
	break;	
	case 'category_view_purchase':
		category_view_purchase();
		break;
	case 'categoryviewk':
		categoryviewk();
		break;
	case 'roleview':
		roleview();
		break;
	case 'gstk':
		gstk();
		break;
	case 'delete':
		delete();
		break;			
	case 'login':
		login();
		break;
	case 'loginv';
		loginv();
		break;
	case 'logout';
	    session_destroy();
	header('location:index.php');
		break;
	case 'view_employee';
		view_employee();
		break;
	case 'city':
		city();
		break;
	case 'cityview':
		cityview();
		break;
	case 'area':
		area();
		break;
	case 'cate':
		cate();
		break;
	case 'purchase_view_category':
		purchase_view_category();
		break;
	case 'view_city':
		view_city();
		break;
	case 'unit':
		unit();
		break;
	case 'categoryview':
		categoryview();
		break;
	case 'unitview':
		unitview();
		break;
	case 'product':
		product();
		break;
	case 'purchase':
		purchase();
		break;
	case 'changepassword':
		changepassword();
		break;
	case 'profile':
		profile();
		break;
	case 'purchase_new_view':
		purchase_new_view();
		break;

	case 'delete_view':
		delete_view();
		break;
	default:
		# code...
		break;
}


 function insertbill()
{
	$f = new database();

		extract($_POST);
	   $aa= array('productid'=>$productid,'billnumber'=>$billnumber,'xyz'=>$xyz);
		if($id == 0)
		{
        $status = $f->insert('partybill',$aa);	
		}
		else{

	    $status = $f->update('partybill',$aa,"id='".$id."'");	
		}
		if($status > 0)
		{
			$json = array('status'=>true,'message'=>'Data saved succesfully');
		}
		else
		{
			$json = array('status'=>false,'message'=>'Error! Data could not be saved!');

		}
		echo json_encode($json);	
	
}

 function purchase_dataa()
{
	$f = new database();
		extract($_POST);
	   $aa = array('purchase_no'=>$purchase_no,'bill_no'=>$bill_no,'purchase_date'=>$purchase_date,'bill_date'=>$bill_date,'purchase_id'=>$purchase_id,'remarks'=>$remarks,'category_id' => json_encode($category_id),'product_id'=>json_encode($product_id),'price' => json_encode($price),'quan'=>json_encode($quan),'unitview_id' => json_encode($unitview_id),'gst_id' => json_encode($gst_id),'subtotal' => json_encode($subtotal),'gsttotal' => json_encode($gsttotal),'total' => json_encode($total));

		if($purchase_idd == 0)
		{
        //$status = $f->insert('purchase_data',$aa);	
		}
		 else{
		 $status = $f->update('purchase_data',$aa,"purchase_data_id='".$purchase_idd."'");
		}

		if($status > 0)
		{
			$json = array('status'=>true,'message'=>'Data saved succesfully');
		}
		else
		{
			$json = array('status'=>false,'message'=>'Error! Data could not be saved!');

		}
		echo json_encode($json);		
}

 function profile()
{
	$f = new database();

		extract($_POST);
		if($_FILES["image"]["name"] != '')
		{
		 $target_dir = "assets/profile/";
		 $target_file = $target_dir . basename($_FILES["image"]["name"]);
				if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

		  $aa= array('emp_username'=>$username,'emp_number'=>$number,'email'=>$email,'image'=>$target_file,'job'=>$job,'birthdate'=>$birthdate,'textarea'=>$textarea);
 		
 		 $status = $f->update('employee',$aa,"employee_id='".$_SESSION['id']."'");	
  		if($status > 0)
		{
			$_SESSION['name'] = $username;
			$json = array('status'=>true,'message'=>'Data saved succesfully');
		}
		else
		{
			 $json = array('status'=>false,'message'=>'Error! Data could not be saved!');

		}

	echo json_encode($json);
}
else{
	  $aa= array('emp_username'=>$username,'emp_number'=>$number,'email'=>$email,'image'=>$kkkk,'job'=>$job,'birthdate'=>$birthdate,'textarea'=>$textarea);
 		
 		 $status = $f->update('employee',$aa,"employee_id='".$_SESSION['id']."'");	
  		if($status > 0)
		{
			$_SESSION['name'] = $username;
			$json = array('status'=>true,'message'=>'Data saved succesfully');
		}
		else
		{
			 $json = array('status'=>false,'message'=>'Error! Data could not be saved!');

		}

	echo json_encode($json);
}

	}
}

function insert()
{
	$f = new database();

		extract($_POST);
	   $aa= array('productname'=>$productname,'productnumber'=>$productnumber,'gstcode'=>$gstcode);
		if($id == 0)
		{
        $status = $f->insert('abc',$aa);	
		}
		else{

	    $status = $f->update('abc',$aa,"id='".$id."'");	
		
		}
		if($status > 0)
		{
			$json = array('status'=>true,'message'=>'Data saved succesfully');
			
		}
		else
		{
			$json = array('status'=>false,'message'=>'Error! Data could not be saved!');

		}
		echo json_encode($json);	
	}



function update()
{
	if(isset($_POST['id']))
{
	$f= new database();
	    	extract($_POST);
	$r = $_POST['id'];

	$t = $f->view('abc','*',"id='".$r."'");
	
	if(mysqli_num_rows($t) > 0)
	{
		$c = mysqli_fetch_array($t);
		echo json_encode(array('status'=>true,'list'=>$c));
	}
	else{
		echo json_encode(array('status'=>flase));
	}	
}

}
function view()
{
    $f= new database();

	$rr = $f->view('abc');
	
	while($m = mysqli_fetch_array($rr)){
		$data['id'] = $m['id'];
		$data['productname'] = $m['productname'];
		$data['productnumber'] = $m['productnumber'];
		$data['gstcode'] = $m['gstcode'];
		$data['dateandtime'] = $m['dateandtime'];
		
		$c[] = $data;
	}
	echo json_encode(array("status"=>true,"rows"=>$c));
}

function purchase_new_view()
{
    $f= new database();

	$rr = $f->view('purchase_data a,purchase_party c','a.*,c.purchase_id,c.party_name',"c.purchase_id = a.purchase_id");
	
	while($m = mysqli_fetch_array($rr)){
		$data['purchase_data_id'] = $m['purchase_data_id'];
		$data['purchase_date'] = $m['purchase_date'];
		$data['bill_no'] = $m['bill_no'];
		$data['bill_date'] = $m['bill_date'];
		$data['party_name'] = $m['party_name'];
		$data['total'] = $m['total'];
		
		$c[] = $data;
	}
	echo json_encode(array("status"=>true,"rows"=>$c));
}

function unitbody()
{
    $f= new database();

	$rr = $f->view('unit');
	
	while($m = mysqli_fetch_array($rr)){
		$data['unit_id'] = $m['unit_id'];
		$data['unit'] = $m['unit'];
		$c[] = $data;
	}
	echo json_encode(array("status"=>true,"rows"=>$c));
}



function viewbill()
{
	$f = new database();
	$rr = $f->view('employee e,partybill p','p.*,e.emp_username,e.emp_number');
	while ($m =  mysqli_fetch_array($rr)) {
		$data['bill_id'] = $m['bill_id'];
		$data['emp_username'] = $m['emp_username'];
		$data['emp_number'] = $m['emp_number'];
		$data['billnumber'] = $m['billnumber'];
		$data['xyz'] = $m['xyz'];
		$data['dateandtime'] = $m['dateandtime'];
		$c[] = $data;
	}
	echo json_encode(array("status"=>true,"rows"=>$c));
}

function areaview(){
    $f= new database();

	$rr = $f->view('area a,city c','a.*,c.city_id,c.cityname',"c.city_id=a.city_id");
	
	while($m = mysqli_fetch_array($rr)){
		$data['area_id'] = $m['area_id'];
		$data['cityname'] = $m['cityname'];
		$data['area'] = $m['area'];
		$data['pincode'] = $m['pincode'];
		
		$c[] = $data;
	}
	echo json_encode(array("status"=>true,"rows"=>$c));
}

function roleview()
{
	    $f= new database();
	$rr = $f->view('role_name');
	
	while($m = mysqli_fetch_array($rr)){
		$data['role_id'] = $m['role_id'];
		$data['role_name'] = $m['role_name'];
		$c[] = $data;
	}
	echo json_encode(array("status"=>true,"rows"=>$c));
}


function categoryviewk()
{
	    $f= new database();
	$rr = $f->view('category');
	
	while($m = mysqli_fetch_array($rr)){
		$data['category_id'] = $m['category_id'];
		$data['category'] = $m['category'];
		$data['image'] = $m['image'];
		$data['description'] = $m['description'];
		$c[] = $data;
	}
	echo json_encode(array("status"=>true,"rows"=>$c));
}

function gstbody()
{
	    $f= new database();
	$rr = $f->view('gst');
	
	while($m = mysqli_fetch_array($rr)){
		$data['gst_id'] = $m['gst_id'];
		$data['gst'] = $m['gst'];
		$data['gst_value'] = $m['gst_value'];
		$c[] = $data;
	}
	echo json_encode(array("status"=>true,"rows"=>$c));
}


function productbody()
{
	    $f= new database();
	$rr = $f->view('product p,category c','p.*,c.category_id,c.category',"c.category_id=p.category_id");
	
	while($m = mysqli_fetch_array($rr)){
		$data['product_id'] = $m['product_id'];
		$data['category'] = $m['category'];
		$data['product_code'] = $m['product_code'];
		$data['product_name'] = $m['product_name'];
		$data['hsn_code'] = $m['hsn_code'];
		$data['price'] = $m['price'];
		$data['unitview_id'] = $m['unitview_id'];
		$data['quality'] = $m['quality'];
		$data['description'] = $m['description'];
		$c[] = $data;
	}
	echo json_encode(array("status"=>true,"rows"=>$c));
}


function cityview()
{
	    $f= new database();
	$rr = $f->view('city','city_id,cityname');
	
	while($m = mysqli_fetch_array($rr)){
		$data['city_id'] = $m['city_id'];
		$data['cityname'] = $m['cityname'];
		$c[] = $data;
	}
	echo json_encode(array("status"=>true,"rows"=>$c));
}

function purchase_party_purchase()
{
	    $f= new database();
	$rr = $f->view('purchase_party','purchase_id,party_name');
	
	while($m = mysqli_fetch_array($rr)){
		$data['purchase_id'] = $m['purchase_id'];
		$data['party_name'] = $m['party_name'];
		$c[] = $data;
	}
	echo json_encode(array("status"=>true,"rows"=>$c));
}

function purchase_gst()
{
	    $f= new database();
	$rr = $f->view('gst','gst_id,gst_value');
	
	while($m = mysqli_fetch_array($rr)){
		$data['gst_id'] = $m['gst_id'];
		$data['gst_value'] = $m['gst_value'];
		$c[] = $data;
	}
	echo json_encode(array("status"=>true,"rows"=>$c));
}

function purchase_view_category()
{
	    $f= new database();
	$rr = $f->view('category','category_id,category');
	
	while($m = mysqli_fetch_array($rr)){
		$data['category_id'] = $m['category_id'];
		$data['category'] = $m['category'];
		$c[] = $data;
	}
	echo json_encode(array("status"=>true,"rows"=>$c));
}

function category_view_purchase()
{
	    $f= new database();
	$rr = $f->view('category','categoru_id,category');
	
	while($m = mysqli_fetch_array($rr)){
		$data['categoru_id'] = $m['categoru_id'];
		$data['category'] = $m['category'];
		$c[] = $data;
	}
	echo json_encode(array("status"=>true,"rows"=>$c));
}


function delete(){
 if (isset($_POST['id'])) {
 	 
 	$f = new database();
 	extract($_POST);
 	 $d =$f->delete('abc',"id ='".$_POST['id']."' " );

 	 if($d > 0)
		{
			$json = array('status'=>true,'message'=>'Data deleted succesfully');
		}
		else
		{
			$json = array('status'=>false,'message'=>'Error! Data could not be deleted!');

		}
		echo json_encode($json);
 }

}

function login(){

	
	$r = new database();
	extract($_REQUEST);
	$t = $r->view('employee','employee_id',"emp_username = '".$username."'");
	if(mysqli_num_rows($t) > 0)
	{
		$j = $r->view('employee','employee_id',"emp_username = '".$username."' and emp_password = '".$userpassword."'");
		if(mysqli_num_rows($j) > 0)
		{
			$i = $r->view('employee','employee_id,emp_username',"emp_username = '".$username."' and emp_password = '".$userpassword."' and emp_status = '0'");
			if(mysqli_num_rows($i) > 0)
			{
				$k = mysqli_fetch_array($i);
				$_SESSION['name'] = $k['emp_username'];
				$_SESSION['id'] = $k['employee_id'];
				// header('location:home.php');
				$json = array('status'=>'1','message'=>'welcome');
			}
			else{
				$json = array('status'=>'0','message'=>'you r blocked!!');
			}
		}
		else{
			$json = array('status'=>'0','message'=>'you r wrong password!!!!');
		}
	}
	else{
		 $json = array('status'=>'0','message'=>'you r wrong unsername!!');
	}
	echo json_encode($json);
}

function loginv(){
	$f = new database();

		extract($_POST);
	   
	   $aa= array('role_name'=>$role_name);

        $status = $f->insert('role_name',$aa);

       $xx = array('emp_username'=>$emp_username,'emp_password'=>$emp_password,'role_id'=>$status,'emp_status'=>$id);

        $pp = $f->insert('employee',$xx);

			if ($pp>0) {	
						$_SESSION['name'] = $emp_username;
						$_SESSION['id'] = $pp;
					header('location:home.php');
			}
			
		else
		{
			echo "pela thi add che ;)";

		}	
}

function view_employee(){
	    $f= new database();

	$rr = $f->view('employee e,role_name r','e.*,r.role_id,r.role_name',"e.role_id = r.role_id");
	
	while($m = mysqli_fetch_array($rr)){
		$data['employee_id'] = $m['employee_id'];
		$data['role_name'] = $m['role_name'];
		$data['emp_username'] = $m['emp_username'];
		$data['emp_password'] = $m['emp_password'];
		$data['email'] = $m['email'];
		$data['job'] = $m['job'];
		$data['birthdate'] = $m['birthdate'];
		$data['textarea'] = $m['textarea'];
		$data['image'] = $m['image'];
		$data['emp_number'] = $m['emp_number'];
		$data['dateandtime'] = $m['dateandtime'];
		
		$c[] = $data;
	}
	echo json_encode(array("status"=>true,"rows"=>$c));


}

function view_city(){
	    $f= new database();

	$rr = $f->view('city');
	
	while($m = mysqli_fetch_array($rr)){
		$data['city_id'] = $m['city_id'];
		$data['cityname'] = $m['cityname'];
		
		$c[] = $data;
	}
	echo json_encode(array("status"=>true,"rows"=>$c));


}

function city(){
	$f = new database();

		extract($_POST);
	   $aa= array('cityname'=>$cityname);
		if($city_id == 0)
		{
        $status = $f->insert('city',$aa);	
		}
		else{
	    $status = $f->update('city',$aa,"city_id='".$city_id."'");	
		}
		if($status > 0)
		{
			$json = array('status'=>true,'message'=>'Data saved succesfully');
		}
		else
		{
			 $json = array('status'=>false,'message'=>'Error! Data could not be saved!');
		}
		echo json_encode($json);	
}

	function area(){
		$f = new database();
		extract($_POST);
	   $aa= array('city_id'=>$city_id,'area'=>$area,'pincode'=>$pincode);
		if($area_id == 0)
		{
        $status = $f->insert('area',$aa);	
		}
		else{
			$status = $f->update('area',$aa,"area_id='".$area_id."'");		
		}
		
		if($status > 0)
		{
			$json = array('status'=>true,'message'=>'Data saved succesfully');
			
		}
		else
		{
			  $json = array('status'=>false,'message'=>'Error! Data could not be saved!');
		}
		echo json_encode($json);
	}

	function cate(){
		$f = new database();
		extract($_POST);

		 $target_dir = "assets/uploads/";
		 $target_file = $target_dir . basename($_FILES["image"]["name"]);

				if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
     			
				$aa= array('category'=>$category,'image'=>$target_file,'description'=>$description);
					 if($category_id == 0){
       				 $status = $f->insert('category',$aa);		
						}
                    else{
                       $status = $f->update('category',$aa,"category_id='".$category_id."'");	        
						}
			 		if($status > 0){
							$json = array('status'=>true,'message'=>'Data saved succesfully');				
						} 
						else{
							$json = array('status'=>false,'message'=>'not succesfully');
						} 
		 }
		
		 echo json_encode($json);
	}


function unit(){
		$f = new database();
		extract($_POST);
	   $aa= array('unit'=>$unit);
		if($unit_id == 0)
		{
        $status = $f->insert('unit',$aa);	
		}
		 else{
             $status = $f->update('unit',$aa,"unit_id='".$unit_id."'");	        
			}
		if($status > 0)
		{
			$json = array('status'=>true,'message'=>'Data saved succesfully');
			
		}
		else
		{
			  $json = array('status'=>false,'message'=>'Error! Data could not be saved!');
		}
		echo json_encode($json);
	}


	function categoryview()
{
	    $f= new database();
	$rr = $f->view('category','category_id,category');
	
	while($m = mysqli_fetch_array($rr)){
		$data['category_id'] = $m['category_id'];
		$data['category'] = $m['category'];
		$c[] = $data;
	}
	echo json_encode(array("status"=>true,"rows"=>$c));
}


function Purchase_Partybody()
{
	    $f= new database();
	$rr = $f->view('purchase_party');
	
	while($m = mysqli_fetch_array($rr)){
		$data['purchase_id'] = $m['purchase_id'];
		$data['party_name'] = $m['party_name'];
		$data['address'] = $m['address'];
		$data['city'] = $m['city'];
		$data['area'] = $m['area'];
		$data['pin_code'] = $m['pin_code'];
		$data['number'] = $m['number'];
		$data['number1'] = $m['number1'];
		$data['email'] = $m['email'];
		$data['gst_no'] = $m['gst_no'];
		$data['bank_details'] = $m['bank_details'];
		$data['company_name'] = $m['company_name'];
		$data['url'] = $m['url'];
		$c[] = $data;
	}
	echo json_encode(array("status"=>true,"rows"=>$c));
}




	function unitview()
{
	    $f= new database();
	$rr = $f->view('unit','unit_id,unit');
	
	while($m = mysqli_fetch_array($rr)){
		$data['unit_id'] = $m['unit_id'];
		$data['unit'] = $m['unit'];
		$c[] = $data;
	}
	echo json_encode(array("status"=>true,"rows"=>$c));
}


	function product_view_purchase()
{
	    $f= new database();
	$rr = $f->view('product','product_id,product_name');
	
	while($m = mysqli_fetch_array($rr)){
		$data['product_id'] = $m['product_id'];
		$data['product_name'] = $m['product_name'];
		$c[] = $data;
	}
	echo json_encode(array("status"=>true,"rows"=>$c));
}



function product()
{
	$f = new database();

		extract($_POST);
	   $aa= array('category_id'=>$category_id,'product_code'=>$product_code,'product_name'=>$product_name,'hsn_code'=>$hsn_code,
					'price'=>$price,'unitview_id'=>$unitview_id,'quality'=>$quality,'description'=>$description);
		if($product_id == 0)
		{
        $status = $f->insert('product',$aa);	
		}
		else{

	    $status = $f->update('product',$aa,"product_id='".$product_id."'");	
		
		}
		if($status > 0)
		{
			$json = array('status'=>true,'message'=>'Data saved succesfully');
			
		}
		else
		{
			$json = array('status'=>false,'message'=>'Error! Data could not be saved!');

		}
		echo json_encode($json);	
	}


function purchase()
{
	$f = new database();

		extract($_POST);
	   $aa= array('party_name'=>$party_name,'address'=>$address,'city'=>$city,'area'=>$area,
					'pin_code'=>$pin_code,'number'=>$number,'number1'=>$number1,'email'=>$email,'gst_no'=>$gst_no,'bank_details'=>$bank_details,'company_name'=>$company_name,'url'=>$url);
		if($purchase_id == 0)
		{
        $status = $f->insert('purchase_party',$aa);	
		}
		else{

	    $status = $f->update('purchase_party',$aa,"purchase_id='".$purchase_id."'");	
		
		}
		if($status > 0)
		{
			$json = array('status'=>true,'message'=>'Data saved succesfully');
			
		}
		else
		{
			$json = array('status'=>false,'message'=>'Error! Data could not be saved!');

		}
		echo json_encode($json);	
	}

function gstk()
{
	$f = new database();

		extract($_POST);

	   $aa= array('gst'=>$gst,'gst_value'=>$gst_value);
		if($gst_id == 0)
		{
        $status = $f->insert('gst',$aa);	
		}
		else{

	    $status = $f->update('gst',$aa,"gst_id='".$gst_id."'");	
		
		}
		if($status > 0)
		{
			$json = array('status'=>true,'message'=>'Data saved succesfully');
			
		}
		else
		{
			$json = array('status'=>false,'message'=>'Error! Data could not be saved!');

		}
		echo json_encode($json);	
	}

	function changepassword()
	{
		$f = new database();
			extract($_POST);
			if ($newpassword == $newpassword1) {
				
			
			$aa = array('emp_password'=>$newpassword);
		
			$t = $f->view('employee','employee_id',"employee_id = '".$_SESSION['id']."' and emp_password = '".$emp_password."'");
		
			if (mysqli_num_rows($t)>0) {
				
						$j = $f->update('employee',$aa,"employee_id='".$_SESSION['id']."'");
						if($j>0)
						{
							$json = array('status'=>'1','message'=>'succesfully changepassword');
						}	
						else{
							$json = array('status'=>'0','message'=>'some problems');
						}
				
			}
			else{
				$json = array('status'=>'0','message'=>'wrong old password');

		}
		}
		else{
		$json = array('status'=>'0','message'=>'not match password');
			}			
		echo json_encode($json);	
	}

function status()
{
	$f = new database();

		extract($_POST);
		$emp_status = 1;
		 $aa= array('emp_status'=>$emp_status);

		 if ($aa > 0 ) {
		 		$j = $f->update('employee',$aa,"employee_id='".$count."'");
		 }
		 
		 if($j>0)
						{
							$json = array('status'=>'1','message'=>'succesfully status change');
						}	
						else{
							$json = array('status'=>'0','message'=>'some problems');
						}
				
						echo json_encode($json);
}

function status1()
{
	$f = new database();

		extract($_POST);
		$emp_status = 0;
		 $aa= array('emp_status'=>$emp_status);

		 if ($aa > 0 ) {
		 		$j = $f->update('employee',$aa,"employee_id='".$count."'");
		 }
		 
		 if($j>0)
						{
							$json = array('status'=>'1','message'=>'succesfully status change');
						}	
						else{
							$json = array('status'=>'0','message'=>'some problems');
						}
				
						echo json_encode($json);
}





// delete

function delete_view(){
 	 
 	$f = new database();
 	extract($_POST);
 	 $d =$f->delete('employee',"employee_id ='".$count."' " );

 	 if($d > 0)
		{
			$json = array('status'=>true,'message'=>'Data deleted succesfully');
		}
		else
		{
			$json = array('status'=>false,'message'=>'Error! Data could not be deleted!');

		}
		echo json_encode($json);
 }

	
?>

