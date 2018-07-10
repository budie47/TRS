<?php

include "../dbconn.php";
$conn = dbcon();
session_start();

if(!isset($_SESSION['token'])){
  header('Location: http://localhost/trs/TRS');
}

if($conn){
	$query = "SELECT year, SUM(amount) AS total FROM `trs_track_record` GROUP BY year DESC LIMIT 5";

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
