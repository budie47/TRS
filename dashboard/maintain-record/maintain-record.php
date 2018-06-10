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
            <a class="bold-text" href="../search-record/search-record.php"><i class="material-icons">search</i>Search Record</a>
          </li>
          <li>
            <a class="bold-text text-selected" href="#"><i class="material-icons">assignment</i> Record List</a>
          </li>
          <li>
            <a class="bold-text " href="../maintain-category/maintain-category.php"><i class="material-icons">description</i> Category List</a>
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
                 <button data-target="modal1" class="btn modal-trigger float-right">  <i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
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

        <!-- Modal Structure -->
        <div id="modal1" class="modal modal-form" style=" max-height: 84%;">
          <div class="modal-content" >
            <h4>Company Record</h4>
            <p>Adding or Updating company record details</p>
            <div class="row form-row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s12">
                    <i class="fa fa-briefcase prefix "></i>
                    <input id="ProjectTitle" type="text">
                    <label for="ProjectTitle">Project Title</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <i class="fa fa-building prefix "></i>
                    <input type="text"  id="EndUserAgency">
                    <label for="EndUserAgency">End User Agency</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <i class="fa fa-usd prefix"></i>
                    <input type="text" id="ProjectAmount">
                    <label for="ProjectAmount">Project Amount</label>
                  </div>
                  <div class="input-field col s6">
                    <i class="fa fa-calendar-o prefix"></i>
                    <select>
                      <option value="" disabled selected>Choose your option</option>
                      <option value="2015">2015</option>
                      <option value="2016">2016</option>
                      <option value="2017">2017</option>
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
                   <i class="fa fa-user prefix"></i>
                   <input type="text" id="EndUserPersonContact" >
                   <label for="EndUserPersonContact">End User Person Contact Name</label>
                 </div>
                 <div class="input-field col s6">
                   <i class="fa fa-phone prefix"></i>
                   <input type="text" id="EndUserPersonContactNo" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$
">
                   <label for="EndUserPersonContactNo">End User Person Contact Phone No</label>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s12">
                    <i class="fa fa-thumb-tack prefix"></i>
                     <select multiple>
                       <option value="" disabled selected>Choose your option</option>
                       <option value="1">Membekal</option>
                       <option value="2">Memasang</option>
                       <option value="3">Menguji</option>
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
    $('.datepicker').datepicker();

  });
</script>
</body>
</html>