<?php
include "../../dbconn.php";
$conn = dbcon();

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>TRS | Client</title>
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

  <style type="text/css">
  .input-field{
    margin-top: 20px;
  }
</style>
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
            <a class="bold-text" href="../search-record/"><i class="material-icons prefix">search</i> Search Record</a>
          </li>
          <li>
            <a class="bold-text" href="../maintain-record/"><i class="material-icons prefix">description</i> Record List</a>
          </li>
          <li>
            <a class="bold-text text-selected" href="#"><i class="material-icons prefix">account_box</i> Client</a>
          </li>
          <li>
            <a class="bold-text" href="../maintain-category"><i class="material-icons prefix">description</i> Category List</a>
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
                 Client List
                 <button class="waves-effect waves-light btn  float-right" id="btn_add_new_client" ><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
               </h3>
             </div>
             <!--Table-->
             <table class="table table-striped table-responsive-md btn-table" id="table_client">
              <!--Table head-->
              <thead>
                <tr>

                  <th>ID</th>
                  <th>Agency</th>
                  <th>Staff Name</th>
                  <th>Staff Email</th>
                  <th>Staff Tel no</th>
                  <th>Action</th>
                </tr>
              </thead>
              <!--Table head-->
              <!--Table body-->
              <tbody>
                <?php

                if($conn){
                  $query = "SELECT end_user_id,agency,end_user_staff_name,end_user_staff_email,end_user_staff_telno FROM `trs_end_user`";
                  $result = $conn->query($query);

                  if($result->num_rows >0){
                    while($row = $result->fetch_assoc()){
                      $end_user_id = $row['end_user_id'];
                      $agency = $row['agency'];
                      $end_user_staff_name = $row['end_user_staff_name'];
                      $end_user_staff_email = $row['end_user_staff_email'];
                      $end_user_staff_telno = $row['end_user_staff_telno'];
                      ?>
                      <tr>       
                        <td id="end_user_id"><?php echo $end_user_id; ?></td>
                        <td id="agency"><?php echo $agency; ?></td>
                        <td id="end_user_staff_name"><?php echo $end_user_staff_name; ?></td>
                        <td id="end_user_staff_email"><?php echo $end_user_staff_email; ?></td>
                        <td id="end_user_staff_telno"><?php echo $end_user_staff_telno; ?></td>
                        <td>
                          <button type="button" class="btn btn-primary btn-rounded btn-sm my-0 btn-bulat" id="btn_edit_client">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-danger btn-rounded btn-sm my-0 btn-bulat" id="btn_delete_client">
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
        <div id="modal-client" class="modal" style="height: 56%;width: 35%">
          <div class="modal-content">
            <h4>Category</h4>
            <p>Enter or edit category detail</p>

            <form id="clientForm">
              <!-- Material input category code -->
              <div class="input-field col s12">
                <i class="material-icons prefix">code</i>
                <input id="clientID" type="text">
                <label for="clientID" class="active">Client ID (Cannot change)</label>
              </div>

              <div class="input-field col s12">
                <i class="material-icons prefix">account_balance</i>
                <input id="agencyName" type="text" >
                <label for="agencyName">Agency Name</label>
              </div>

              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="staffName" type="text" >
                <label for="staffName">Staff Name</label>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input id="staffEmail" type="email" >
                <label for="staffEmail">Staff Email</label>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">local_phone</i>
                <input id="staffPhone" type="text" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$
">
                <label for="staffPhone">Staff Phone No</label>
              </div>

            </form>
            <!-- Material form login -->

          </div>
          <div class="modal-footer">
            <div>
              <button class=" modal-close btn waves-effect waves-light" id="btn_cancel_client">Cancel
                <i class="material-icons right">cancel</i>
              </button>
            </div>
            <div>
              <button class="btn waves-effect waves-light" id="btn_submit_client">Submit
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

  var onModalClose = function() { };

  var onModalOpenStart = function(){  };

  var modal = document.querySelector('.modal');
  var M_instance = M.Modal.init(modal,{
    onCloseEnd: onModalClose, 
    onOpenStart:onModalOpenStart
  });

  $("#btn_add_new_client").click(function(e){
    M_instance.open();
  });

  $("#btn_cancel_client").click(function(e){
    M_instance.close();
  });


  $("#btn_submit_client").click(function(e){
    e.preventDefault();
    var clientID = $("#clientID").val();
    var agencyName = $("#agencyName").val();
    var staffName = $("#staffName").val();
    var staffEmail = $("#staffEmail").val();
    var staffPhone = $("#staffPhone").val();

    var data = {
      clientID:clientID,
      agencyName:agencyName,
      staffName:staffName,
      staffEmail:staffEmail,
      staffPhone:staffPhone
    }

    $.ajax({
      url:'add-new-client.php',
      type:'POST',
      data:data,
      success:function(c){
        if (c.trim() === "|-SUCCESS-|") {
          alert("Your new client added");
          $('#clientForm')[0].reset();
          $('#modal21').modal('close');
          location.reload();

        }
      }
    })





  })






})

</script>
</body>
</html>