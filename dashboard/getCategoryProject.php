<?php

include "../dbconn.php";
$conn = dbcon();

if($conn){
    $pctQuery = "SELECT record_category_id, name FROM trs_record_category";
    $resultPCTQ = $conn->query($pctQuery);
    $response=array();
    if($resultPCTQ->num_rows > 0){
        while ($rowPCT = $resultPCTQ->fetch_assoc()) {
            # code...
            $id = $rowPCT['record_category_id'];
            $name = $rowPCT['name'];
            $total = 0;
            $object = new stdClass();
            $object->name = $name;

            $gptQuery = "SELECT COUNT(track_record_id) AS total FROM trs_track_record WHERE record_category_id LIKE '".$id."%'";
            $resultGPTQ = $conn->query($gptQuery);
            while ($rowGPT = $resultGPTQ->fetch_assoc()) {
              # code...
              $total = $rowGPT['total'];
              $object->total = $total;
            }
            array_push($response, $object);
        }
    }
    header('Content-Type: application/json');
    echo json_encode($response);
}

?>