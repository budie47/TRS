<?php
include "../../dbconn.php";
$conn = dbcon();
session_start();
if(!isset($_SESSION['token'])){
  header('Location: http://localhost/trs/TRS');
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>TRS | Record List</title>
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
  <div>
    <div id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
          <li class="sidebar-brand">
            <a href="">
            </a>
          </li>
          <li>
            <a class="bold-text" href="../search-record/"><i class="material-icons">search</i>Search Record</a>
          </li>
          <li>
            <a class="bold-text text-selected" href="#"><i class="material-icons">assignment</i> Record List</a>
          </li>
          <li>
            <a class="bold-text " href="../client/"><i class="material-icons prefix">account_box</i> Client</a>
          </li>
          <li>
            <a class="bold-text " href="../maintain-category/"><i class="material-icons">description</i> Category List</a>
          </li>
        </ul>
      </div>
      <!-- /#sidebar-wrapper -->
      <!-- Page Content -->
      <div id="page-content-wrapper">
        <?php
        include '../nav/nav.php';
        ?>
        <div class="container-fluid">
          <!-- Card -->
          <div class="card">
            <!-- Card content -->
            <div class="card-body">
              <!-- Title -->
              <div>
                <h3 class="card-title">
                 Company Project Record
                 <!-- Modal Trigger -->
                 <button class="btn  float-right" id="btn_add_new_record">  <i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
               </h3>
             </div>
             <!--Table-->
             <table class="table table-striped table-responsive-md btn-table" id="table-record">
              <!--Table head-->
              <thead>
                <tr>
                  <th>#</th>
                  <th>Project Title</th>
                  <th>End User</th>
                  <th>Category</th>
                  <th>Year</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Time Period</th>
                  <th>Action</th>
                </tr>
              </thead>
              <!--Table head-->
              <!--Table body-->
              <tbody>
                <?php

                if($conn){

                  $queryGetRecord = "SELECT tr.track_record_id, tr.project_title, tr.year, tr.amount, tr.status, tr.lo_po_sst_no, tr.start_period, tr.end_period, tr.time_period, tr.end_user, eu.agency, tr.record_category_id FROM trs_track_record tr 
INNER JOIN trs_end_user eu ON tr.end_user = eu.end_user_id";
                  $resultGR = $conn->query($queryGetRecord);
                  if($resultGR->num_rows > 0){
                    while ($row = $resultGR->fetch_assoc()) {
                      # code...
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
                      $record_category_id = $row['record_category_id'];
                      $category = explode("-|-", $record_category_id);

                      ?>

                      <tr>       
                        <td id="record_id"><?php echo $track_record_id;?></td>
                        <td><?php echo $project_title;?></td>
                        <td><?php echo $agency;?></td>
                        <td>
                          <?php

                          for ($x=0; $x < sizeof($category)-1 ; $x++) { 
                            # code...
                            $nameCat = getCategoryName($category[$x]);
                              ?>

                              <span class="badge indigo"><?php echo $nameCat;?></span>

                              <?php
                          }


                          ?>
                          
                        </td>
                        <td><?php echo $year;?></td>
                        <td>RM <?php echo $amount;?></td>
                        <td><?php echo $status;?></td>
                        <td><?php echo $start_period;?></td>
                        <td><?php echo $end_period;?></td>
                        <td><?php echo $time_period;?> Month</td>
                        <td>
                          <button type="button" class="btn btn-primary btn-rounded btn-sm my-0 btn-bulat" id="btn_edit_record">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-danger btn-rounded btn-sm my-0 btn-bulat" id="btn_delete_record">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </button>
                        </td>
                      </tr>

                      <?php

                    }
                  }
                }



                ?>


              </tbody>
              <!--Table body-->
            </table>
            <!--Table-->
            <!-- Button -->
          </div>
        </div>
        <!-- Card -->

        <!-- Modal Structure -->
        <div id="modal1" class="modal modal-form" style=" max-height: 84%;">
          <div class="modal-content" >
            <h4>Company Record</h4>
            <p>Adding or Updating company record details</p>
            <div class="row form-row">
              <form class="col s12" id="trackForm">
                <div class="row">
                  <div class="input-field col s12">
                    <i class="fa fa-briefcase prefix "></i>
                    <input id="ProjectTitle" type="text">
                    <input id="ProjectID" type="hidden" >
                    <label for="ProjectTitle">Project Title</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <i class="fa fa-building prefix "></i>
                   <select id="endUser">
                      <option value="-" disabled selected>Choose your option</option>
                     <?php
                     if($conn){
                       $queryEU = "SELECT end_user_id, agency FROM `trs_end_user`";
                       $resultEU = $conn->query($queryEU);
                       if($resultEU->num_rows >0){
                         while ($row = $resultEU->fetch_assoc()) {
                           $euid = $row["end_user_id"];
                           $agency = $row["agency"];
                           ?>
                           <option value=<?php echo $euid; ?>><?php echo $agency; ?></option>
                           <?php
                         }
                       }
                     }
                     ?>
                   </select>
                   <label>End User</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <i class="fa fa-usd prefix"></i>
                    <input type="number" id="ProjectAmount">
                    <label for="ProjectAmount">Project Amount</label>
                  </div>
                  <div class="input-field col s6">
                    <i class="fa fa-calendar-o prefix"></i>
                    <select id="ProjectYear">
                       <option value="-" disabled selected>Choose your option</option>
                      <?php

                      $yearMinus = date("Y");
                      $yearAdd = date("Y");

                      for ($x = 0; $x <= 10; $x++) {
                         
                          ?>
                          <option value=<?php echo $yearMinus; ?>><?php echo $yearMinus; ?></option>
                          <?php
                           $yearMinus = $yearMinus - 1;
                      } 
                      ?>
                     
                    </select>
                    <label>Project Year</label>
                   <!--  <label for="ProjectYear">Project Year</label> -->
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <i class="fa fa-calendar-plus-o prefix"></i>
                    <input type="text" id="StartPeriod" class="datepicker">
                    <label for="StartPeriod">Start Period</label>
                  </div>
                  <div class="input-field col s6">
                    <i class="fa fa-calendar-minus-o prefix"></i>
                    <input type="text" id="EndPeriod" class="datepicker">
                    <label for="EndPeriod">End Period</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <i class="fa fa-calendar-plus-o prefix"></i>
                    <input type="text" id="loposstno" >
                    <label for="loposstno">LO/PO/SST No</label>
                  </div>
                  <div class="input-field col s6">
                    <i class="fa fa-calendar-minus-o prefix"></i>
                    <select id="ProjectStatus">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="Complete">Complete</option>
                        <option value="On Going">On Going</option>
                      </select>
<!--                       <label>Materialize Select</label>
                    <input type="text" > -->
                    <label for="ProjectStatus">Project Status</label>
                  </div>
                </div>
               <div class="row">
                 <div class="input-field col s12">
                    <i class="fa fa-thumb-tack prefix"></i>
                     <select multiple id="ProjectCategory">
                       <option value="-" disabled selected>Choose your option</option>
                       <?php
                       if($conn){
                         $queryEU = "SELECT record_category_id, name FROM `trs_record_category`";
                         $resultEU = $conn->query($queryEU);
                         if($resultEU->num_rows >0){
                           while ($row = $resultEU->fetch_assoc()) {
                             $rcid = $row["record_category_id"];
                             $name = $row["name"];
                             ?>
                             <option value=<?php echo $rcid; ?>><?php echo $name; ?></option>
                             <?php
                           }
                         }
                       }
                       ?>
                     </select>
                     <label>Project Category</label>
                     <!-- <label for="ProjectCategory">Project Category</label> -->
                 </div>
               </div>
             </form>
           </div>
         </div>
         <div class="modal-footer">
           <div>
             <button class="  btn waves-effect waves-light" id="btn_cancel_track_record">Cancel
               <i class="material-icons right">cancel</i>
             </button>
           </div>
           <div>
             <button class="btn waves-effect waves-light" id="btn_submit_track_record" >Submit
               <i class="material-icons right">send</i>
             </button>
           </div>
         </div>
       </div>
    </div>
  </div>
  <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->
</div>
<!-- div main div -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../../lib/MDB/js/jquery-3.2.1.min.js"></script>
<script src="../../lib/MDB/js/popper.min.js"></script>
<script src="../../lib/MDB/js/bootstrap.min.js"></script>
<!-- <script type="text/javascript" src="../../lib/MDB/js/mdb.min.js"></script> -->
<script src="../../lib/materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="../../js/trs.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.modal').modal();
    $('select').formSelect();
    //$('.datepicker').datepicker({ dateFormat: 'dd-mm-yy' });
    var options = {
      format: "dd-mm-yyyy"
    }
    var elemsDateS = document.querySelectorAll('#StartPeriod');
    var startDateInstance = M.Datepicker.init(elemsDateS, options);
    var elemsDateE = document.querySelectorAll('#EndPeriod');
    var endDateInstance = M.Datepicker.init(elemsDateE, options);

    var onModalClose = function() {
      console.log("modal close")
    };

    var onModalOpenStart = function(){
      $.get( "getID.php", function( data ) {
        var id = parseInt(data) + 1;
        $("#ProjectID").val(id);
        M.updateTextFields();
      });
    }

    var modal = document.querySelector('.modal');

    var instance = M.Modal.init(modal,{
      onCloseEnd: onModalClose, 
      onOpenStart:onModalOpenStart
    })
    var instance2 = M.Modal.init(modal,{
      onCloseEnd: onModalClose 
    })

    $("#btn_add_new_record").click(function(e){
      instance.open();
    })
    $("#btn_cancel_track_record").click(function(e){
      instance.close();
      instance2.close();
    });


    $("#btn_submit_track_record").click(function(e){
      e.preventDefault();
      var ProjectID = $("#ProjectID").val();
      var ProjectTitle = $("#ProjectTitle").val();
      var endUser = $("#endUser").val();
      var ProjectAmount = $("#ProjectAmount").val();
      var ProjectYear = $("#ProjectYear").val();
      var StartPeriod = $("#StartPeriod").val();
      var EndPeriod = $("#EndPeriod").val();
      var loposstno = $("#loposstno").val();
      var ProjectStatus = $("#ProjectStatus").val();
      var ProjectCategory = $("#ProjectCategory").val();

      var pCat = "";
      for(var i in ProjectCategory){
        pCat += ProjectCategory[i] +"-|-";
      }

      var startDate = StartPeriod.split("-");
      var EndDate = EndPeriod.split("-");

      var date1 = new Date(startDate[2],startDate[1]-1,startDate[0]);
      var date2 = new Date(EndDate[2],EndDate[1]-1,EndDate[0]);
      var timePeriod = monthDiff(date1, date2);

      var cStartDate = changeFormatDate(startDate[0],startDate[1],startDate[2]);
      var cEndDate = changeFormatDate(EndDate[0],EndDate[1],EndDate[2]); 

      var data = {
        ProjectID:ProjectID,
        ProjectTitle:ProjectTitle,
        endUser:endUser,
        ProjectAmount:ProjectAmount,
        ProjectYear:ProjectYear,
        StartPeriod:cStartDate,
        EndPeriod:cEndDate,
        timePeriod:timePeriod,
        loposstno:loposstno,
        ProjectStatus:ProjectStatus,
        ProjectCategory:pCat
      }

      $.ajax({
        url:'add-new-record.php',
        type:'POST',
        data:data,
        success:function(c){
          if (c.trim() === "|-SUCCESS-|") {
            alert("New track record added");
            $('#trackForm')[0].reset();
            $('#modal1').modal('close');
            location.reload();
          }else{
            console.log(c);
          }
        }
      }) 
    });

    $("#table-record").on('click','#btn_delete_record',function(e){
      var _record_id = $(this).closest('tr').find('#record_id').text();
      var r = confirm("Want to delete this record");
      if (r == true) {

        $.ajax({
          url:'delete-record.php',
          type:'POST',
          data:{
            projectID:_record_id
          },
          success:function(c){
            if (c.trim() === "|-SUCCESS-|") {
              //alert("New track record added");
              //$('#trackForm')[0].reset();
              $('#modal1').modal('close');
              location.reload();
            }else{
              console.log(c);
            }
          }
        })
          
      } else {
          
      }
    })

    $("#table-record").on('click','#btn_edit_record',function(e){
      var _record_id = $(this).closest('tr').find('#record_id').text();
      $.get('get-record.php?recordID='+_record_id, function(data){
        console.log(data);
        instance2.open();
        var record_array = data[0].record_category_id.split("-|-");
        record_array.pop();
        for(var i = 0; i < record_array.length; i++){
          $("#ProjectCategory").find('option[value="'+record_array[i]+'"]').prop('selected', true);
        }
        var _start_period = data[0].start_period.split("-");
        var _end_period = data[0].end_period.split("-");
        var cStartDate = changeFormatDate(_start_period[0],_start_period[1],_start_period[2]);
        var cEndDate = changeFormatDate(_end_period[0],_end_period[1],_end_period[2]);
        $("#ProjectID").val(_record_id);
        $("#ProjectTitle").val(data[0].project_title);
        //$("#endUser").val(data[0].endUser);
        $("#endUser").find('option[value="'+data[0].end_user+'"]').prop('selected', true);
        $("#endUser").formSelect();
        $("#ProjectAmount").val(data[0].amount);
        $("#ProjectYear").val(data[0].year);
        $("#StartPeriod").val(cStartDate);
        $("#EndPeriod").val(cEndDate);
        $("#loposstno").val(data[0].lo_po_sst_no);
        $("#ProjectStatus").val(data[0].status);
        M.updateTextFields();
        $("#ProjectCategory").find('option[value="-"]').prop('selected', false);
        $("#endUser").find('option[value="-"]').prop('selected', false);
        $("#ProjectCategory").formSelect();
        

      });

    });


  });

  function monthDiff(d1, d2) {
    var months;
    months = (d2.getFullYear() - d1.getFullYear()) * 12;
    months -= d1.getMonth() + 1;
    months += d2.getMonth();
    return months <= 0 ? 0 : months;
}

function changeFormatDate(d,m,y){
  var date = parseInt(y)+"-"+parseInt(m)+"-"+parseInt(d);
  return date;
}
</script>


<?php

function getCategoryName($id){
  $name= "";
  $conn = dbcon();
  if($conn){
    $queryCatName = "SELECT name FROM `trs_record_category` WHERE record_category_id = ".$id." ";
    //echo $queryCatName;

    $resultName=mysqli_query($conn, $queryCatName);
    
    while($row = mysqli_fetch_assoc($resultName))
    {
      $name=$row["name"];
    }
  }
  return $name;
}

?>
</body>
</html>