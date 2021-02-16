<?php


include_once 'confing.php';
$con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
$result = mysqli_query($con,"SELECT city_id,cityname FROM city ")  or die( mysqli_error($con));

$rows = array();

while ($row = mysqli_fetch_array($result)) 
{
	$rows[] = $row;
}
echo json_encode($rows);





?>