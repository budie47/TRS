<?php

include "../../dbconn.php";
$conn = dbcon();

if($conn){
	$query = "SELECT track_record_id FROM `trs_track_record`";

	$result=mysqli_query($conn, $query);
	$latestTrackID = 0;
	while($row = mysqli_fetch_assoc($result))
	{
	  $latestTrackID=$row["track_record_id"];
	}
	header('Content-Type: application/json');
	echo $latestTrackID;

}

?>
