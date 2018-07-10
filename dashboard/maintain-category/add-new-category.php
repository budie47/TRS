<?php

include '../../dbconn.php';
session_start();
if(!isset($_SESSION['token'])){
  header('Location: http://localhost/trs/TRS');
}
$categoryCode = $_POST["category_code"];
$categoryName = $_POST["category_name"];
$description = $_POST["description"];

$conn = dbcon();

$user_id = $_SESSION['userID'];

$check_query = "SELECT record_category_id from trs_record_category WHERE record_category_id = ".$categoryCode." ";

$resultList = $conn->query($check_query);
if ($resultList->num_rows > 0){

	$update_query = "UPDATE `trs_record_category` SET `name`='".$categoryName."',`description`='".$description."' WHERE record_category_id = ".$categoryCode."";

	if($conn->query($update_query) === TRUE){
		echo "|-SUCCESS-|";
	}else{
		echo "Error: " . $query . "<br>" . $conn->error;
	}


}else{
	$query = "INSERT INTO `trs_record_category` (`record_category_id`, `name`, `description`, `created_datetime`, created_by) VALUES ('".$categoryCode."','".$categoryName."','".$description."',NOW(), '".$user_id."')";
	if($conn->query($query) === TRUE){
		echo "|-SUCCESS-|";
	}else{
		echo "Error: " . $query . "<br>" . $conn->error;
	}
}


dbclose();



?>