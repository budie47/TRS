<?php

include "../dbconn.php";
$conn = dbcon();

session_start();
if(!isset($_SESSION['token'])){
  header('Location: http://localhost/trs/TRS');
}

if($conn){
	$query = "SELECT  teu.agency, COUNT(tr.track_record_id) AS total FROM trs_track_record tr INNER JOIN trs_end_user teu ON tr.end_user = teu.end_user_id GROUP BY tr.end_user";

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
