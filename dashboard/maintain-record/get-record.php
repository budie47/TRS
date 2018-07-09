<?php

include "../../dbconn.php";
$conn = dbcon();

$recordID = $_GET["recordID"];

if($conn){
	$query = "SELECT track_record_id, project_title, year, amount, status, lo_po_sst_no, start_period, end_period, time_period, end_user, record_category_id FROM `trs_track_record` WHERE track_record_id = ".$recordID." ";

	$result=mysqli_query($conn, $query);
	$response = array();
	while($row = mysqli_fetch_assoc($result))
	{
	  $response[]=$row;
	}
	header('Content-Type: application/json');
	echo json_encode($response);

}

?>
