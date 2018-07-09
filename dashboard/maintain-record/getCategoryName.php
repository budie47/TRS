<?php

include "../../dbconn.php";
$conn = dbcon();

$catID = $_GET["catID"];

if($conn){
	$query = "SELECT name FROM `trs_record_category` WHERE record_category_id = ".$catID." ";

	$result=mysqli_query($conn, $query);
	$latestTrackID = "";
	while($row = mysqli_fetch_assoc($result))
	{
	  $latestTrackID=$row["name"];
	}
	header('Content-Type: application/json');
	echo $latestTrackID;

}

?>
