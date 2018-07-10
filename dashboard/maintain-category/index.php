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
  <title>TRS | Category List</title>
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
            <a class="bold-text " href="../client/"><i class="material-icons prefix">account_box</i> Client</a>
          </li>
          <li>
            <a class="bold-text text-selected" href="#"><i class="material-icons prefix">description</i> Category List</a>
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
                 Category List

                 <button class="waves-effect waves-light btn  float-right" id="btn_add_new_category" ><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>

               </h3>
             </div>
             <!--Table-->
             <table class="table table-striped table-responsive-md btn-table" id="table_category">
              <!--Table head-->
              <thead>
                <tr>

                  <th>Code</th>
                  <th>Category Name</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <!--Table head-->
              <!--Table body-->
              <tbody>
                <?php
                if($conn){
                  $query = "SELECT record_category_id, name, description FROM `trs_record_category`";
                  $result = $conn->query($query);

                  if($result->num_rows >0){
                    while($row = $result->fetch_assoc()){
                      $record_category_id = $row['record_category_id'];
                      $name = $row['name'];
                      $description = $row['description'];
                      ?>
                      <tr>       
                        <td id="record_category_id"><?php echo $record_category_id; ?></td>
                        <td id="name"><?php echo $name; ?></td>
                        <td id="description"><?php echo $description; ?></td>
                        <td>
                          <button type="button" class="btn btn-primary btn-rounded btn-sm my-0 btn-bulat" id="btn_edit_category">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-danger btn-rounded btn-sm my-0 btn-bulat" id="btn_delete_category">
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
        <div id="modal-category" class="modal" style="height: 56%;width: 35%">
          <div class="modal-content">
            <h4>Category</h4>
            <p>Enter or edit category detail</p>

            <form id="categoryForm">
              <!-- Material input category code -->
              <div class="input-field col s12">
                <i class="material-icons prefix">code</i>
                <input id="categoryCode" type="text">
                <label for="categoryCode" class="active">Category Code (Cannot change)</label>
              </div>

              <div class="input-field col s12">
                <i class="material-icons prefix">create</i>
                <input id="categoryName" type="text" >
                <label for="categoryName">Category Name</label>
              </div>

              <div class="input-field col s12">
                <i class="material-icons prefix">Description</i>
                <input id="categoryDescription" type="text" >
                <label for="categoryDescription">Description</label>
              </div>
            </form>
            <!-- Material form login -->

          </div>
          <div class="modal-footer">
            <div>
              <button class=" modal-close btn waves-effect waves-light" id="btn_cancel_category">Cancel
                <i class="material-icons right">cancel</i>
              </button>
            </div>
            <div>
              <button class="btn waves-effect waves-light" id="btn_submit_category">Submit
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




  var onModalClose = function() {
    console.log("modal close")
  };

  var onModalOpenStart = function(){
    $.get( "getID.php", function( data ) {
      var id = parseInt(data) + 1;
      $("#categoryCode").val(id);
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

  $("#btn_add_new_category").click(function(e){

    instance.open();
  })


  $("#btn_submit_category").click(function(e){
    e.preventDefault();
    var category_code = $("#categoryCode").val();
    var category_name =  $("#categoryName").val();
    var description = $("#categoryDescription").val();

    var data = {
      category_code:category_code,
      category_name:category_name,
      description:description
    }

    $.ajax({
      url:'add-new-category.php',
      type:'POST',
      data:data,
      success:function(c){
        if (c.trim() === "|-SUCCESS-|") {
          alert("Your new category added");
          $('#categoryForm')[0].reset();
          $('#modal21').modal('close');
          location.reload();

        }
      }
    })

  })

  $("#table_category").on("click", " #btn_edit_category", function (e){
    instance2.open();
    var $record_category_id = $(this).closest("tr")   
    .find("#record_category_id")    
    .text();  
    var $name = $(this).closest("tr")   
    .find("#name")    
    .text();  
    var $description = $(this).closest("tr")   
    .find("#description")    
    .text();
    $("#categoryCode").val($record_category_id);
    $("#categoryName").val($name);
    $("#categoryDescription").val($description);
    M.updateTextFields();
  })



  $("#btn_cancel_category").click(function(e){
    instance.close();
    instance2.close();
    $('#categoryForm')[0].reset();
  });

  $("#table_category").on("click", " #btn_delete_category", function (e){

    var r = confirm("Are want to delete this category?");
    if(r == true){
      alert("Category Deleted");
      var $record_category_id = $(this).closest("tr")   
      .find("#record_category_id")    
      .text();  

      var data = {
        category_code:$record_category_id
      }

      $.ajax({
        url:'delete-category.php',
        type:'POST',
        data:data,
        success:function(c){
          if (c.trim() === "|-SUCCESS-|") {
            alert("Category Deleted");
            location.reload();

          }
        }
      })
    }else{

    }

  })

});
</script>
</body>
</html>