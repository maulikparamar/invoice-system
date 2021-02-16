<?php
session_start();
$action = $_REQUEST['action'];

include_once 'query.php';

switch ($action) {
	case 'category_update':
		category_update();
		break;
	case 'unit_update':
		unit_update();
		break;
	case 'product_update':
		product_update();
		break;
	case 'city_update':
		city_update();
		break;
	case 'area_update':
		area_update();
		break;
	case 'purchase_update_party':
		purchase_update_party();
		break;
	case 'gst_update':
		gst_update();
		break;
	case 'purchase_update_view':
		purchase_update_view();
		break;
}


function category_update()
{

	$f= new database();
	    	extract($_POST);
	$r = $_POST['countt'];

	$t = $f->view('category','*',"category_id='".$r."'");
	
	if(mysqli_num_rows($t) > 0)
	{
		$c = mysqli_fetch_array($t);
		echo json_encode(array('status'=>true,'list'=>$c));
	}
	else{
		echo json_encode(array('status'=>flase));
	}	

}

function purchase_update_view()
{

	$f= new database();
	    	extract($_POST);
	$r = $_POST['countt'];

	$t = $f->view('purchase_data','*',"purchase_data_id='".$r."'");
	
	if(mysqli_num_rows($t) > 0)
	{
		$c = mysqli_fetch_array($t);
		echo json_encode(array('status'=>true,'list'=>$c));
	}
	else{
		echo json_encode(array('status'=>flase));
	}	

}


function unit_update()
{

	$f= new database();
	    	extract($_POST);
	$r = $_POST['countt'];

	$t = $f->view('unit','*',"unit_id='".$r."'");
	
	if(mysqli_num_rows($t) > 0)
	{
		$c = mysqli_fetch_array($t);
		echo json_encode(array('status'=>true,'list'=>$c));
	}
	else{
		echo json_encode(array('status'=>flase));
	}	

}

function product_update()
{

	$f= new database();
	    	extract($_POST);
	$r = $_POST['countt'];

	$t = $f->view('product','*',"product_id='".$r."'");
	
	if(mysqli_num_rows($t) > 0)
	{
		$c = mysqli_fetch_array($t);
		echo json_encode(array('status'=>true,'list'=>$c));
	}
	else{
		echo json_encode(array('status'=>flase));
	}	

}


function city_update()
{

	$f= new database();
	    	extract($_POST);
	$r = $_POST['countt'];

	$t = $f->view('city','*',"city_id='".$r."'");
	
	if(mysqli_num_rows($t) > 0)
	{
		$c = mysqli_fetch_array($t);
		echo json_encode(array('status'=>true,'list'=>$c));
	}
	else{
		echo json_encode(array('status'=>flase));
	}	

}

function area_update()
{

	$f= new database();
	    	extract($_POST);
	$r = $_POST['countt'];

	$t = $f->view('area','*',"area_id='".$r."'");
	
	if(mysqli_num_rows($t) > 0)
	{
		$c = mysqli_fetch_array($t);
		echo json_encode(array('status'=>true,'list'=>$c));
	}
	else{
		echo json_encode(array('status'=>flase));
	}	

}



function purchase_update_party()
{

	$f= new database();
	    	extract($_POST);
	$r = $_POST['countt'];

	$t = $f->view('purchase_party','*',"purchase_id='".$r."'");
	
	if(mysqli_num_rows($t) > 0)
	{
		$c = mysqli_fetch_array($t);
		echo json_encode(array('status'=>true,'list'=>$c));
	}
	else{
		echo json_encode(array('status'=>flase));
	}	

}



function gst_update()
{

	$f= new database();
	    	extract($_POST);
	$r = $_POST['countt'];

	$t = $f->view('gst','*',"gst_id='".$r."'");
	
	if(mysqli_num_rows($t) > 0)
	{
		$c = mysqli_fetch_array($t);
		echo json_encode(array('status'=>true,'list'=>$c));
	}
	else{
		echo json_encode(array('status'=>flase));
	}	

}
?>