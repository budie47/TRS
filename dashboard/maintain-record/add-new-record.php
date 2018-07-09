<?php

include '../../dbconn.php';

$user_id = 1;

$ProjectID = $_POST["ProjectID"];
$ProjectTitle = $_POST["ProjectTitle"];
$endUser = $_POST["endUser"];
$ProjectAmount = $_POST["ProjectAmount"];
$ProjectYear = $_POST["ProjectYear"];
$EndPeriod = $_POST["EndPeriod"];
$StartPeriod = $_POST["StartPeriod"];
$timePeriod = $_POST["timePeriod"];
$loposstno = $_POST["loposstno"];
$ProjectStatus = $_POST["ProjectStatus"];
$ProjectCategory = $_POST["ProjectCategory"];



$conn = dbcon();

$check_query = "SELECT track_record_id from trs_track_record WHERE track_record_id = ".$ProjectID." ";

$resultList = $conn->query($check_query);
if ($resultList->num_rows > 0){

	$update_query = "UPDATE `trs_track_record` SET `project_title`='".$ProjectTitle."',`year`='".$ProjectYear."',`amount`='".$ProjectAmount."',`status`='".$ProjectStatus."',`lo_po_sst_no`='".$loposstno."',`start_period`='".$StartPeriod."',`end_period`='".$EndPeriod."',`record_category_id`='".$ProjectCategory."',`status`='".$ProjectStatus."',`end_user`=".$endUser.",`time_period`=".$timePeriod." WHERE track_record_id = ".$ProjectID."";

	if($conn->query($update_query) === TRUE){
		echo "|-SUCCESS-|";
		//echo $update_query;
	}else{
		echo "Error: " . $query . "<br>" . $conn->error;
		echo $update_query;
	}


}else{
	$query = "INSERT INTO `trs_track_record` (`track_record_id`, `project_title`, `year`,`amount`,`status`,`lo_po_sst_no`,`start_period`,`end_period`,`time_period`,`record_category_id`,`end_user`, `created_datetime`, created_by) VALUES ('".$ProjectID."','".$ProjectTitle."','".$ProjectYear."','".$ProjectAmount."','".$ProjectStatus."','".$loposstno."','".$StartPeriod."','".$EndPeriod."',".$timePeriod.",'".$ProjectCategory."',".$endUser.",NOW(), ".$user_id.")";
	if($conn->query($query) === TRUE){
		echo "|-SUCCESS-|";
		//echo $query;
	}else{
		echo "Error: " . $query . "<br>" . $conn->error;
	}
}


dbclose();



?>