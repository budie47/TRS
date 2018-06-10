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
                    <a class="bold-text" href="../search-record/search-record.php"><i class="material-icons prefix">search</i> Search Record</a>
                </li>
                <li>
                    <a class="bold-text" href="../maintain-record/maintain-record.php"><i class="material-icons prefix">description</i> Record List</a>
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
     
                      
                       <!-- Modal Trigger -->
                       <button data-target="modal21" class="btn modal-trigger float-right"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>

                   </h3>
               </div>
               <!--Table-->
               <table class="table table-striped table-responsive-md btn-table">
                  <!--Table head-->
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Code</th>
                      <th>Category Name</th>
                      <th>Description</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <!--Table head-->
              <!--Table body-->
              <tbody>
                <tr>       
                  <td>1</td>
                  <td>M12341</td>
                  <td>Wireless / WiFi</td>
                  <td>Record for Wireless / WiFi Class</td>
                  <td>
                    <button type="button" class="btn btn-primary btn-rounded btn-sm my-0 btn-bulat">
                      <i class="fa fa-pencil" aria-hidden="true"></i>
                  </button>
                  <button type="button" class="btn btn-danger btn-rounded btn-sm my-0 btn-bulat">
                      <i class="fa fa-trash" aria-hidden="true"></i>
                  </button>
              </td>
          </tr>
      </tbody>
      <!--Table body-->
  </table>
  <!--Table-->
  <!-- Button -->
</div>
</div>
<!-- Card -->

  <!-- Modal Structure -->
  <div id="modal21" class="modal" style="height: 56%;width: 35%">
    <div class="modal-content">
      <h4>Category</h4>
      <p>Enter or edit category detail</p>

      <form>
        <!-- Material input category code -->
        <div class="input-field col s12">
          <i class="material-icons prefix">code</i>
          <input id="categoryCode" type="text">
          <label for="categoryCode">Category Code</label>
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">create</i>
          <input id="categoryName" type="text" >
          <label for="categoryName">Category Name</label>
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">description</i>
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Textarea</label>
        </div>
      </form>
      <!-- Material form login -->

    </div>
    <div class="modal-footer">
      <div>
        <a href="#!" class=" modal-close btn waves-effect waves-light">Cancel
          <i class="material-icons right">cancel</i>
        </a>
      </div>
      <div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
          <i class="material-icons right">send</i>
        </button>
      </div>
    </div>
  </div>




<div mdbModal #catModal="mdb-modal" class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title bold-text" id="myModalLabel">Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" (click)="catModal.hide()">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- Material form contact -->
                    
                    <!-- Material input text -->
                    <div class="md-form">
                        <i class="fa fa-code prefix grey-text"></i>
                        <input type="text" id="materialFormContactNameEx" class="form-control">
                        <label for="materialFormContactNameEx">Category Code</label>
                    </div>

                    <!-- Material input email -->
                    <div class="md-form">
                        <i class="fa fa-pencil prefix grey-text"></i>
                        <input type="email" id="materialFormContactEmailEx" class="form-control">
                        <label for="materialFormContactEmailEx">Category Name</label>
                    </div>

                    <!-- Material textarea message -->
                    <div class="md-form">
                        <i class="fa fa-commenting prefix grey-text"></i>
                        <textarea type="text" id="materialFormContactMessageEx" class="form-control md-textarea" rows="3"></textarea>
                        <label for="materialFormContactMessageEx">Description</label>
                    </div>
                    
                    <!-- Material form contact -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm waves-light" data-dismiss="modal" (click)="catModal.hide()" mdbWavesEffect>Close</button>
                    <button type="button" class="btn btn-primary btn-sm waves-light" mdbWavesEffect>Save changes</button>
                </div>
            </form>
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
    });
</script>
</body>
</html>