<?php
session_start();
$k = $_REQUEST['action'];

include_once 'query.php';

switch ($k) {
	case 'product_delete':
		product_delete();
		break;
	case 'role_delete':
		role_delete();
			break;
	case 'category_delete':
		category_delete();
		break;
	case 'unit_delete':
		unit_delete();
		break;
	case 'product_delete':
		product_delete();
		break;
	case 'city_delete':
		city_delete();
		break;
	case 'area_delete':
		area_delete();
		break;
	case 'purchase_delete_party':
		purchase_delete_party();
		break;
	case 'gst_delete':
		gst_delete();
		break;
	case 'purchase_delete_view':
		purchase_delete_view();
		break;
	default:
		# code...
		break;
}
	
 function product_delete()
{
 	 
 	$f = new database();
 	extract($_POST);
 	 $d =$f->delete('product',"product_id ='".$countt."' " );

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

 function role_delete()
{
 	 
 	$f = new database();
 	extract($_POST);
 	 $d =$f->delete('role_name',"role_id ='".$countt."' " );

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

 function category_delete()
{
 	 
 	$f = new database();
 	extract($_POST);
 	 $d =$f->delete('category',"category_id ='".$countt."' " );

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

 function unit_delete()
{
 	 
 	$f = new database();
 	extract($_POST);
 	 $d =$f->delete('unit',"unit_id ='".$countt."' " );

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

 function city_delete()
{
 	 
 	$f = new database();
 	extract($_POST);
 	 $d =$f->delete('city',"city_id ='".$countt."' " );

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

 function area_delete()
{
 	 
 	$f = new database();
 	extract($_POST);
 	 $d =$f->delete('area',"area_id ='".$countt."' " );

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

 function purchase_delete_party()
{
 	 
 	$f = new database();
 	extract($_POST);
 	 $d =$f->delete('purchase_party',"purchase_id ='".$countt."' " );

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

 function gst_delete()
{
 	 
 	$f = new database();
 	extract($_POST);
 	 $d =$f->delete('gst',"gst_id ='".$countt."' " );

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

 function purchase_delete_view()
{
 	 
 	$f = new database();
 	extract($_POST);
 	 $d =$f->delete('purchase_data',"purchase_data_id ='".$countt."' " );

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