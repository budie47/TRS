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
                <a class="bold-text" href="search-record/search-record.php"><i class="material-icons">search</i> Search Record</a>
            </li>
            <li>
                <a class="bold-text" href="maintain-record/maintain-record.php"><i class="material-icons">assignment</i> Record List</a>
            </li>
            <li>
                <a class="bold-text" href="maintain-category/maintain-category.php"><i class="material-icons">description</i> Category List</a>
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
            
            <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
            <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
            <a >Toggle Menu</a>
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

</body>
</html>