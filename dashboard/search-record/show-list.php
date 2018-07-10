<?php
include "../../dbconn.php";
$conn = dbcon();
$data = json_decode(stripslashes($_POST['data']));



?>	


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>TRS | Search Record</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../lib/font-awesome-4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../lib/MDB/css/bootstrap.min.css" >

  <link rel="stylesheet" href="../../lib/materialize/css/materialize.min.css" >
  <!-- Side Bar CSS -->
  <link href="../../lib/simple-sidebar.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../../css/style.css" rel="stylesheet">
</head>
<body>

	<h5 align="center" id="title_doc">SENARAI NAMA SYARIKAT</h5>

     <table class="table table-striped table-responsive-md btn-table" id="show_list_table">
      <!--Table head-->
      <thead>
        <tr>
          <th>No.</th>
          <th>Project Title</th>
          <th>End User</th>
          <th>Year</th>
          <th>Amount</th>
          <th>Status</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Time Period</th>
          <th id="btnDeleteRowHead"></th>
        </tr>
      </thead><!--Table head-->
      <tbody><!--Table body-->
      	<?php

      	$counter = 1;

      	foreach ($data as $d) {
      		# code...

      		if($conn){
      			$queryGetRecord = "SELECT tr.track_record_id, tr.project_title, tr.year, tr.amount, tr.status, tr.lo_po_sst_no, tr.start_period, tr.end_period, tr.time_period, tr.end_user, eu.agency, tr.record_category_id FROM trs_track_record tr  INNER JOIN trs_end_user eu ON tr.end_user = eu.end_user_id  WHERE tr.track_record_id=".$d;
      			
      			$resultGR = $conn->query($queryGetRecord);
      			if($resultGR->num_rows > 0){
      				while ($row = $resultGR->fetch_assoc()) {
      					$track_record_id = $row['track_record_id'];
      					$project_title = $row['project_title'];
      					$year = $row['year'];
      					$amount = $row['amount'];
      					$status = $row['status'];
      					$lo_po_sst_no = $row['lo_po_sst_no'];
      					$start_period = $row['start_period'];
      					$end_period = $row['end_period'];
      					$time_period = $row['time_period'];
      					$end_user = $row['end_user'];
      					$agency = $row['agency'];
      					# code...
      					?>

      					<tr>      
      					  <td><?php echo $counter; ?></td>
      					  <td><?php echo $project_title; ?></td>
      					  <td><?php echo $agency; ?></td>
      					  <td><?php echo $year; ?></td>
      					  <td>RM <?php echo $year; ?></td>
      					  <td><?php echo $status; ?></td>
			              <td><?php echo $start_period;?></td>
			              <td><?php echo $end_period;?></td>
			              <td><?php echo $time_period;?> Month</td>
      					  <td id="btnDeleteRowBody">
      					    <button type="button" class="btn btn-danger btn-rounded btn-sm my-0 btn-bulat" id="btn_delete_record_list">
      					      <i class="fa fa-trash" aria-hidden="true"></i>
      					    </button>
      					  </td>
      					</tr>


      					<?php
      				}
      			}
      		}

      		$counter++;

      	}



      	?>

      </tbody> <!--Table body-->
    </table><!--Table-->


<!-- list of require library -->
<script src="../../lib/MDB/js/jquery-3.2.1.min.js"></script>
<script src="../../lib/MDB/js/popper.min.js"></script>
<script src="../../lib/MDB/js/bootstrap.min.js"></script>
<script src="../../lib/materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="../../js/trs.js"></script>

<script type="text/javascript">

  document.addEventListener('DOMContentLoaded',function(){
    var elems = document.querySelectorAll('.modal');
    var options = {
      onOpenEnd: function(){
        console.log("lol");
      }
    }
    var instances = M.Modal.init(elems,options)
  })

  $(document).ready(function(){
    $("#show_list_table").on('click','#btn_delete_record_list',function(e){
    	e.preventDefault();
    	var _tr = $(this).closest('tr');
    	_tr.remove();
    })


  })

  

</script>

</body>
</html>