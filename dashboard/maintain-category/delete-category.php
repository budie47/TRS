<?php

include '../../dbconn.php';
$categoryCode = $_POST["category_code"];
$conn = dbcon();

$query = "DELETE FROM `trs_record_category` WHERE `record_category_id` = ".$categoryCode." ";

if($conn->query($query) === TRUE){
	echo "|-SUCCESS-|";
}else{
	echo "Error: " . $query . "<br>" . $conn->error;
}

dbclose();

?>