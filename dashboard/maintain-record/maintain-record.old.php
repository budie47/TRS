<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>TRS | Maintain Category</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../lib/font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- JqueryUI CSS -->
  <link rel="stylesheet" href="../../lib/jquery-ui-1.12.1/jquery-ui.min.css">
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
            <a class="bold-text" href="../search-record/search-record.php">Search Record</a>
          </li>
          <li>
            <a class="bold-text text-selected" href="#">Record List</a>
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
                 Company Project Record
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
                <tr>       
                  <td>1</td>
                  <td>Membekal, Menghantar, Memasang, Menguji Dan Mentaulliah Serta Menyelenggara (Dalam Tempoh Jaminan) Peralatan Komputer Dan Sistem Rangkaian Untuk Universiti Teknikal Malaysia Melaka (UTeM)</td>
                  <td>Universiti Teknikal Malaysia Melaka</td>
                  <td>
                    <span class="badge indigo">Membekal</span>
                    <span class="badge indigo">Menghantar</span>
                    <span class="badge indigo">Memasang</span>
                    <span class="badge indigo">Menguji</span>
                    <span class="badge indigo">Mentauliah</span>
                    <span class="badge indigo">Menyelenggara</span>
                    <span class="badge red">ICT Equipment</span>
                    <span class="badge red">Network System</span>
                  </td>
                  <td>2018</td>
                  <td>RM 400,000</td>
                  <td>Ongoing</td>
                  <td>5-Feb-2018</td>
                  <td>20-Jul-2018</td>
                  <td>6 Month</td>
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


        <div mdbModal #catModal="mdb-modal" class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <form>
                <div class="modal-header">
                  <h4 class="modal-title bold-text" id="myModalLabel">Project Record</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" (click)="catModal.hide()">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">

                  <!-- Material form contact -->

                  <div class="row">
                    <div class="col-md-12">
                      <!-- Material textarea message -->
                      <div class="md-form">
                        <i class="fa fa-briefcase prefix grey-text"></i>
                        <textarea type="text" id="materialFormProjectTitle" class="form-control md-textarea" rows="3"></textarea>
                        <label for="materialFormProjectTitle">Project Title</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <!-- Material input text -->
                      <div class="md-form">
                        <i class="fa fa-building prefix grey-text"></i>
                        <input type="text" id="materialFormEndUserAgency" class="form-control">
                        <label for="materialFormEndUserAgency">End User Agency</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <!-- Material input text -->
                      <div class="md-form">
                        <i class="fa fa-usd prefix grey-text"></i>
                        <input type="text" id="materialFormAmount" class="form-control">
                        <label for="materialFormAmount">Amount</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <!-- Material input text -->
                      <div class="md-form">
                        <i class="fa fa-calendar-o prefix grey-text"></i>
                        <input type="text" id="materialFormYear" class="form-control">
                        <label for="materialFormYear">Year</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <!-- Material input text -->
                      <div class="md-form">
                        <i class="fa fa-calendar-plus-o prefix grey-text"></i>
                        <input type="text" id="materialFormStartPeriod" class="form-control">
                        <label for="materialFormStartPeriod">Start Period</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <!-- Material input text -->
                      <div class="md-form">
                        <i class="fa fa-calendar-minus-o prefix grey-text"></i>
                        <input type="text" id="materialFormEndPeriod" class="form-control">
                        <label for="materialFormEndPeriod">End Period</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <!-- Material input text -->
                      <div class="md-form">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="materialFormEndUserContactPerson" class="form-control">
                        <label for="materialFormEndUserContactPerson">End User Contact Person</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <!-- Material input text -->
                      <div class="md-form">
                        <i class="fa fa-thumb-tack prefix grey-text"></i>
                        <input type="text" id="materialFormCategory" class="form-control">
                        <label for="materialFormCategory">Category</label>
                      </div>
                    </div>
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
<script src="../../lib/jquery-ui-1.12.1/jquery-ui.min.js"></script>

<script src="../../lib/MDB/js/popper.min.js"></script>
<script src="../../lib/MDB/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../lib/MDB/js/mdb.min.js"></script>
<script src="../../lib/moment/moment.min.js"></script>
<script type="text/javascript" src="../../js/trs.js"></script>
<script type="text/javascript">

</script>
</body>
</html>