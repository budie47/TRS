<?php

include "../../dbconn.php";
$conn = dbcon();

if($conn){
	$query = "SELECT record_category_id, name, description FROM `trs_record_category`";

	$response=array();
	$result=mysqli_query($conn, $query);
	while($row = mysqli_fetch_assoc($result))
	{
	  $response[]=$row;
	}
	header('Content-Type: application/json');
	echo json_encode($response);

}

?>
