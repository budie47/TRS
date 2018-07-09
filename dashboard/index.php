<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TRS | Dashboard</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../lib/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../lib/MDB/css/bootstrap.min.css" >

    <link rel="stylesheet" href="../lib/materialize/css/materialize.min.css" >
    <!-- Side Bar CSS -->
    <link href="../lib/simple-sidebar.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../css/style.css" rel="stylesheet">

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
                    <a class="bold-text" href="search-record/"><i class="material-icons">search</i> Search Record</a>
                </li>
                <li>
                    <a class="bold-text" href="maintain-record/"><i class="material-icons">assignment</i> Record List</a>
                </li>
                <li>
                  <a class="bold-text " href="../client/"><i class="material-icons prefix">account_box</i> Client</a>
                </li>
                <li>
                    <a class="bold-text" href="maintain-category/"><i class="material-icons">description</i> Category List</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <?php
            include 'nav/nav.php';
            ?>
            <!--/.Navbar -->
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col s3">
                        <div class="row">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content dashboard-card  purple darken-2 white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> New Clients</p>
                                        <h4 class="card-stats-number">566</h4>
                                    </div>
                                    <div class="card-action   purple darken-4"> 
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col s3">
                        <div class="row">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content dashboard-card green white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> New Clients</p>
                                        <h4 class="card-stats-number">566</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action  green darken-2">
                                        <div id="clients-bar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col s3">
                        <div class="row">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content dashboard-card green white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> New Clients</p>
                                        <h4 class="card-stats-number">566</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action  green darken-2">
                                        <div id="clients-bar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col s3">
                        <div class="row">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content dashboard-card green white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> New Clients</p>
                                        <h4 class="card-stats-number">566</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action  green darken-2">
                                        <div id="clients-bar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <div class="card">
                          <div class="card-tabs">
                            <ul class="tabs tabs-fixed-width" id="tabs-swipe-demo">
                              <li class="tab"><a href="#month">Month</a></li>
                              <li class="tab"><a class="active" href="#year">Year</a></li>
                          </ul>
                      </div>
                      <div class="card-content grey lighten-4">
                        <div id="month">
                            Month
                        </div>
                        <div id="year">
                            Year
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s6">

                <div class="card">
                  <div class="card-tabs">
                    <ul class="tabs tabs-fixed-width" id="tabs-swipe-demo">
                      <li class="tab"><a href="#month">Month</a></li>
                      <li class="tab"><a class="active" href="#year">Year</a></li>
                  </ul>
              </div>
              <div class="card-content grey lighten-4">
                <div id="month">
                    Month
                </div>
                <div id="year">
                    Year
                </div>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col s6">
        <div class="card">
          <div class="card-tabs">
            <ul class="tabs tabs-fixed-width" id="tabs-swipe-demo">
              <li class="tab"><a href="#month">Month</a></li>
              <li class="tab"><a class="active" href="#year">Year</a></li>
          </ul>
      </div>
      <div class="card-content grey lighten-4">
        <div id="month">
            Month
        </div>
        <div id="year">
            Year
        </div>
    </div>
</div>

</div>
<div class="col s6">
    <div class="card">
      <div class="card-tabs">
        <ul class="tabs tabs-fixed-width" id="tabs-swipe-demo">
          <li class="tab"><a href="#month">Month</a></li>
          <li class="tab"><a class="active" href="#year">Year</a></li>
      </ul>
  </div>
  <div class="card-content grey lighten-4">
    <div id="month">
        Month
    </div>
    <div id="year">
        Year
    </div>
</div>
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
<script src="../lib/MDB/js/jquery-3.2.1.min.js"></script>
<script src="../lib/MDB/js/popper.min.js"></script>
<script src="../lib/MDB/js/bootstrap.min.js"></script>
<script src="../lib/materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="../lib/moment/moment.min.js"></script>
<script type="text/javascript" src="../lib/Chart.js-2.7.2/dist/Chart.js"></script>
<script type="text/javascript" src="../js/trs.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.tabs').tabs();
});
</script>
</body>
</html>