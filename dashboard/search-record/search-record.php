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
        <div class="container-fluid" style="margin-top: 0px;">
          <div class="row">
            <div class="col s12 m6">
              <div class="card">
                <div class="card-content">
                  <span class="card-title text-center">Search Record</span>
                  <div class="row ">
                    <form class="col s12">
                      <div class="row search-row">
                        <div class="input-field col s10 ">
                         <i class="material-icons prefix ">search</i>
                         <input id="SearchRecord" type="text">
                       </div>
                       <div class="input-field col s2" >
                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                          <i class="material-icons right">send</i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="table-head">
                  <h3 class="card-title">
                   Search Result
                 </h3>
                 <button class="btn waves-effect waves-light float-right  modal-trigger" data-target="ShowRecordList">Show List
                   <i class="material-icons right">featured_play_list</i>
                 </button>
                 <button class="btn waves-effect waves-light float-right" >Add to print
                   <i class="material-icons right">add</i>
                 </button>

               </div>
               <!--Table-->
               <table class="table table-striped table-responsive-md btn-table">
                <!--Table head-->
                <thead>
                  <tr>
                    <th>
                      <p>
                        <label>
                          <input type="checkbox" />
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
                  <tr>
                    <td>
                      <p>
                        <label>
                          <input type="checkbox" />
                          <span></span>
                        </label>
                      </p>
                    </td>       
                    <td>1</td>
                    <td>Membekal, Menghantar, Memasang, Menguji Dan Mentaulliah Serta Menyelenggara (Dalam Tempoh Jaminan) Peralatan Komputer Dan Sistem Rangkaian Untuk Universiti Teknikal Malaysia Melaka (UTeM)</td>
                    <td>Universiti Teknikal Malaysia Melaka</td>
                    <td>2018</td>
                    <td>RM 400,000</td>
                    <td>Ongoing</td>
                    <td>5-Feb-2018</td>
                    <td>20-Jul-2018</td>
                    <td>6 Month</td>
                  </tr>
                </tbody> <!--Table body-->
              </table><!--Table-->
            </div> <!-- #card-content -->
          </div> <!-- #card -->
        </div> <!--# col s2 m6 -->
      </div> <!-- #row -->
    </div> <!-- #container-fluid -->
  </div> <!-- #page-content-wrapper -->
</div> <!-- #wrapper -->
</div> <!-- div outside wrapper -->

<!-- Modal Structure -->
<div id="ShowRecordList" class="modal record-list-modal">
  <div class="modal-content">
     <div class="table-head">
      <div class="row">
        <div class="input-field col s3">
           <h3 class="card-title">
            Record List
          </h3>
        </div>
        <div class="input-field col s6">
          <input value="SENARAI PENGALAMAN SYARIKAT" id="first_name2" type="text">
          <label class="active" for="first_name2">Document Title</label>
        </div>
        <div class="input-field col s3">
          <button class="btn waves-effect waves-light float-right" >Print
            <i class="material-icons right">print</i>
          </button>
        </div>
      </div>
     

      

    </div>
    <div>
     <!--Table-->
     <table class="table table-striped table-responsive-md btn-table">
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
          <th>Delete</th>
        </tr>
      </thead><!--Table head-->
      <tbody><!--Table body-->
        <tr>      
          <td>1</td>
          <td>Membekal, Menghantar, Memasang, Menguji Dan Mentaulliah Serta Menyelenggara (Dalam Tempoh Jaminan) Peralatan Komputer Dan Sistem Rangkaian Untuk Universiti Teknikal Malaysia Melaka (UTeM)</td>
          <td>Universiti Teknikal Malaysia Melaka</td>
          <td>2018</td>
          <td>RM 400,000</td>
          <td>Ongoing</td>
          <td>5-Feb-2018</td>
          <td>20-Jul-2018</td>
          <td>6 Month</td>
          <td>
            <button type="button" class="btn btn-danger btn-rounded btn-sm my-0 btn-bulat">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
          </td>
        </tr>
        <tr>      
          <td>1</td>
          <td>Membekal, Menghantar, Memasang, Menguji Dan Mentaulliah Serta Menyelenggara (Dalam Tempoh Jaminan) Peralatan Komputer Dan Sistem Rangkaian Untuk Universiti Teknikal Malaysia Melaka (UTeM)</td>
          <td>Universiti Teknikal Malaysia Melaka</td>
          <td>2018</td>
          <td>RM 400,000</td>
          <td>Ongoing</td>
          <td>5-Feb-2018</td>
          <td>20-Jul-2018</td>
          <td>6 Month</td>
          <td>
            <button type="button" class="btn btn-danger btn-rounded btn-sm my-0 btn-bulat">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
          </td>
        </tr>
        <tr>      
          <td>1</td>
          <td>Membekal, Menghantar, Memasang, Menguji Dan Mentaulliah Serta Menyelenggara (Dalam Tempoh Jaminan) Peralatan Komputer Dan Sistem Rangkaian Untuk Universiti Teknikal Malaysia Melaka (UTeM)</td>
          <td>Universiti Teknikal Malaysia Melaka</td>
          <td>2018</td>
          <td>RM 400,000</td>
          <td>Ongoing</td>
          <td>5-Feb-2018</td>
          <td>20-Jul-2018</td>
          <td>6 Month</td>
          <td>
            <button type="button" class="btn btn-danger btn-rounded btn-sm my-0 btn-bulat">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
          </td>
        </tr>
        <tr>      
          <td>1</td>
          <td>Membekal, Menghantar, Memasang, Menguji Dan Mentaulliah Serta Menyelenggara (Dalam Tempoh Jaminan) Peralatan Komputer Dan Sistem Rangkaian Untuk Universiti Teknikal Malaysia Melaka (UTeM)</td>
          <td>Universiti Teknikal Malaysia Melaka</td>
          <td>2018</td>
          <td>RM 400,000</td>
          <td>Ongoing</td>
          <td>5-Feb-2018</td>
          <td>20-Jul-2018</td>
          <td>6 Month</td>
          <td>
            <button type="button" class="btn btn-danger btn-rounded btn-sm my-0 btn-bulat">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
          </td>
        </tr>
      </tbody> <!--Table body-->
    </table><!--Table-->
  </div>
</div>
</div>


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

</script>

</body>
</html>