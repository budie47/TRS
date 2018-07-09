<?php

include '../../dbconn.php';
$id = $_POST["projectID"];
$conn = dbcon();

$query = "DELETE FROM `trs_track_record` WHERE `track_record_id` = ".$id." ";

if($conn->query($query) === TRUE){
	echo "|-SUCCESS-|";
}else{
	echo "Error: " . $query . "<br>" . $conn->error;
}

dbclose();

?>