<?php

include "../dbconn.php";
$conn = dbcon();

if($conn){
	$query = "SELECT COUNT(end_user) AS total FROM `trs_track_record` WHERE status = 'On Going'";

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