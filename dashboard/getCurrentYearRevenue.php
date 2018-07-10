<?php

include "../dbconn.php";
$conn = dbcon();

if($conn){
	$query = "SELECT SUM(amount) AS total FROM `trs_track_record` WHERE year = YEAR(NOW()) AND status = 'Complete'";

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
