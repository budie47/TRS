<?php

include "../../dbconn.php";
$conn = dbcon();

session_start();
if(!isset($_SESSION['token'])){
  header('Location: http://localhost/trs/TRS');
}

if($conn){
	$query = "SELECT record_category_id FROM `trs_record_category`";

	$result=mysqli_query($conn, $query);
	$latestCatID = 0;
	while($row = mysqli_fetch_assoc($result))
	{
	  $latestCatID=$row["record_category_id"];
	}
	header('Content-Type: application/json');
	echo $latestCatID;

}

?>
