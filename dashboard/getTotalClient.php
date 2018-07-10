<?php

include "../dbconn.php";
$conn = dbcon();

if($conn){
	$query = "SELECT COUNT(end_user_id) AS total FROM `trs_end_user`";

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
