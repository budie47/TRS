<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>TRS | Maintain Category</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../lib/font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../lib/MDB/css/bootstrap.min.css" >
  <!-- Material Design Bootstrap -->
  <link href="../../lib/MDB/css/mdb.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../../lib/MDB/css/mdb.min.css" rel="stylesheet">
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
            <a class="bold-text text-selected" href="#">Search Record</a>
          </li>
          <li>
            <a class="bold-text " href="../maintain-record/maintain-record.php">Record List</a>
          </li>
          <li>
            <a class="bold-text " href="../maintain-category/maintain-category.php">Category List</a>
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
                 Search Record
                 <button type="button" class="btn btn-primary waves-light float-right" data-toggle="modal" data-target="#categoryModal" (click)="catModal.show()" mdbWavesEffect>
                   <i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
                 </button>
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
<script type="text/javascript" src="../../lib/MDB/js/mdb.min.js"></script>
<script type="text/javascript" src="../../js/trs.js"></script>
</body>
</html>