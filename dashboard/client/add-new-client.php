<?php

include '../../dbconn.php';

session_start();
if(!isset($_SESSION['token'])){
  header('Location: http://localhost/trs/TRS');
}

$user_id = $_SESSION['userID'];

$clientID = $_POST["clientID"];
$agencyName = $_POST["agencyName"];
$staffName = $_POST["staffName"];
$staffEmail = $_POST["staffEmail"];
$staffPhone = $_POST["staffPhone"];

$conn = dbcon();

$check_query = "SELECT end_user_id from trs_end_user WHERE end_user_id = ".$clientID." ";

$resultList = $conn->query($check_query);
if ($resultList->num_rows > 0){

	$update_query = "UPDATE `trs_end_user` SET `agency`='".$agencyName."',`end_user_staff_name`='".$staffName."',`end_user_staff_email`='".$staffEmail."',`end_user_staff_telno`='".$staffPhone."' WHERE end_user_id = ".$clientID."";

	if($conn->query($update_query) === TRUE){
		echo "|-SUCCESS-|";
	}else{
		echo "Error: " . $query . "<br>" . $conn->error;
	}


}else{
	$query = "INSERT INTO `trs_end_user` (`end_user_id`, `agency`, `end_user_staff_name`,`end_user_staff_email`,`end_user_staff_telno`, `created_datetime`, created_by) VALUES ('".$clientID."','".$agencyName."','".$staffName."','".$staffEmail."','".$staffPhone."',NOW(), ".$user_id.")";
	if($conn->query($query) === TRUE){
		echo "|-SUCCESS-|";
	}else{
		echo "Error: " . $query . "<br>" . $conn->error;
	}
}


dbclose();



?>