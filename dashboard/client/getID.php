<?php

include "../../dbconn.php";
$conn = dbcon();

if($conn){
	$query = "SELECT end_user_id FROM `trs_end_user`";

	$result=mysqli_query($conn, $query);
	$id = 0;
	while($row = mysqli_fetch_assoc($result))
	{
	  $id=$row["end_user_id"];
	}
	header('Content-Type: application/json');
	echo $id;

}

?>
