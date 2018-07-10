<?php
include "../../dbconn.php";
$conn = dbcon();
$keyword = $_POST['category'];
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

   <!--Table-->
   <table class="table table-striped table-responsive-md btn-table">
    <!--Table head-->
    <thead>
      <tr>
        <th>
          <p>
            <label>
              <input type="checkbox" disabled="" />
              <span></span>
            </label>
          </p>
        </th>
        <th>#</th>
        <th>Project Title</th>
        <th>End User</th>
        <th>Year</th>
        <th>Amount</th>
        <th>Status</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Time Period</th>
      </tr>
    </thead>
    <!--Table head-->
    <!--Table body-->
    <tbody>
      <?php
      if($conn){
        $queryGetResult = "SELECT tr.track_record_id, tr.project_title, tr.year, tr.amount, tr.status, tr.lo_po_sst_no, tr.start_period, tr.end_period, tr.time_period, tr.end_user, eu.agency, tr.record_category_id FROM trs_track_record tr  INNER JOIN trs_end_user eu ON tr.end_user = eu.end_user_id  WHERE tr.record_category_id LIKE '%".$keyword."%'";
        $resultGR = $conn->query($queryGetResult);
        if($resultGR->num_rows > 0 ){
          while($row = $resultGR->fetch_assoc()){
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
            //$record_category_id = $row['record_category_id'];
            //$category = explode("-|-", $record_category_id);
            ?>
            <tr>
              <td>
                <p>
                  <label>
                    <input  type="checkbox"  value="<?php echo $track_record_id;?>"  id="cb_id_<?php echo $track_record_id;?>" />
                    <span></span>
                  </label>
                </p>
              </td>       
              <td>1</td>
              <td><?php echo $project_title;?></td>
              <td><?php echo $agency;?></td>
              <td><?php echo $year;?></td>
              <td>RM <?php echo $amount;?></td>
              <td><?php echo $status;?></td>
              <td><?php echo $start_period;?></td>
              <td><?php echo $end_period;?></td>
              <td><?php echo $time_period;?> Month</td>
            </tr>
            <?php
          }
        }
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

    $("input[type='checkbox']").on('change',function(){
      var record_checked_id = this.value;
      if($('#cb_id_'+this.value+':checked').val() === undefined){
        selected_record.splice(selected_record.indexOf(this.value),1);
      }else{
        selected_record.push(this.value);
      }
      console.log(selected_record);
    });

    $("#cb_select_all").click(function(){

      $( "input[type='checkbox']" ).trigger( "change" );

    })


  })

  

</script>

</body>
</html>