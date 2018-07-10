<?php
include "../dbconn.php";
$conn = dbcon();

?>
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
                      <p class="card-stats-title"><i class="mdi-social-group-add"></i> Total Project</p>
                      <h4 class="card-stats-number" id="head_total_project">-</h4>
                      <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> Number of Project</p>
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
                      <p class="card-stats-title"><i class="mdi-social-group-add"></i> Total Revenue this Year</p>
                      <h4 class="card-stats-number" id="head_total_revenue" >-</h4>
                      <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> including only 2018 complete project</span>
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
                      <p class="card-stats-title"><i class="mdi-social-group-add"></i> On Going Project</p>
                      <h4 class="card-stats-number" id="head_total_ongoing_project">-</h4>
                      <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> From <span class="green-text text-lighten-5" id="head_t_o_p">-</span> Project
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
                      <p class="card-stats-title"><i class="mdi-social-group-add"></i> Ongoing Project Client</p>
                      <h4 class="card-stats-number" id="head_ongoing_project_client">-</h4>
                      <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> From <span class="green-text text-lighten-5" id="head_o_p_c">-</span> Client
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
              <div class="card dashboard-top-card">
                <div class="card-tabs">
                  <ul class="tabs tabs-fixed-width" id="tabs-swipe-demo">
                    <li class="tab"><a class="active" href="#revenue">Revenue each year</a></li>

                  </ul>
                </div>

                <div class="card-content grey lighten-4">
                 <div id="revenue"> 
                  <canvas id="revenueChart" width="400" height="200"></canvas>
                </div>

              </div>
            </div>
          </div>
          <div class="col s6">

            <div class="card dashboard-top-card">
              <div class="card-tabs">
                <ul class="tabs tabs-fixed-width" id="tabs-swipe-demo">
                  <li class="tab"><a class="active" href="#ogp">On Going Project</a></li>

                </ul>
              </div>
              <div class="card-content grey lighten-4">
                <div id="ogp" class="card-tabs-container">
                  <table class="highlight">
                    <thead>
                      <tr>
                        <th width="50%">Project Title</th>
                        <th width="30%">Agency</th>
                        <th width="20%">End Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      if($conn){
                        $ogpQuery = "SELECT tr.project_title, teu.agency, tr.end_period, status FROM trs_track_record tr INNER JOIN trs_end_user teu ON tr.end_user = teu.end_user_id WHERE tr.status = 'On Going'";
                        $resultOGPQ = $conn->query($ogpQuery);
                        if($resultOGPQ->num_rows > 0){
                          while ($rowOGP = $resultOGPQ->fetch_assoc()) {
                                    # code...
                            $agency = $rowOGP['agency'];
                            $project_title = $rowOGP['project_title'];
                            $end_period = $rowOGP['end_period'];
                            $status = $rowOGP['status'];

                            ?>
                            <tr>
                              <td><?php echo $project_title;?></td>
                              <td><?php echo $agency;?></td>
                              <td><?php echo $end_period;?></td>
                            </tr>
                            <?php
                          }
                        }
                      }


                      ?>

                    </tbody>
                  </table>
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
                  <li class="tab"><a class="active" href="#pcgraph">Project Category Graph</a></li>
                  <li class="tab"><a  href="#pctable">Project Category Table</a></li>
                </ul>
              </div>
              <div class="card-content grey lighten-4">
                <div id="pcgraph" class="card-tabs">
                  <canvas id="projectCategoryChart" width="400" height="400"></canvas>
                </div>
                <div id="pctable" class="card-tabs">
                  <table class="highlight">
                    <thead>
                      <tr>
                        <th width="80%">Category</th>
                        <th width="20%">Number of Project</th>

                      </tr>
                    </thead> 
                    <tbody>
                      <?php

                      if($conn){
                        $pctQuery = "SELECT record_category_id, name FROM trs_record_category";
                        $resultPCTQ = $conn->query($pctQuery);
                        if($resultPCTQ->num_rows > 0){
                          while ($rowPCT = $resultPCTQ->fetch_assoc()) {
                            # code...
                            $id = $rowPCT['record_category_id'];
                            $name = $rowPCT['name'];
                            $total = 0;

                            $gptQuery = "SELECT COUNT(track_record_id) AS total FROM trs_track_record WHERE record_category_id LIKE '".$id."%'";
                            $resultGPTQ = $conn->query($gptQuery);
                            while ($rowGPT = $resultGPTQ->fetch_assoc()) {
                              # code...
                              $total = $rowGPT['total'];
                            }
                            ?>
                            <tr>
                              <td><?php echo $name;?></td>
                              <td><?php echo $total;?></td>
                              
                            </tr>
                            <?php
                          }
                        }
                      }


                      ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
          <div class="col s6">
            <div class="card">
              <div class="card-tabs">
                <ul class="tabs tabs-fixed-width" id="tabs-swipe-demo">
                  <li class="tab"><a class="active" href="#cgraph">Client Graph</a></li>
                  <li class="tab"><a href="#ctable">Client Table</a></li>
                </ul>
              </div>
              <div class="card-content grey lighten-4">
                <div id="cgraph" class="card-tabs">
                  <canvas id="clientProjectPieChart" width="400" height="300"></canvas>
                </div>
                <div id="ctable" class="card-tabs">
                  <table class="highlight">
                    <thead>
                      <tr>
                        <th width="80%">End User</th>
                        <th width="20%">Number of Project</th>    
                      </tr>
                    </thead> 
                    <tbody>
                      <?php

                      if($conn){
                        $ogpQuery = "SELECT  teu.agency, COUNT(tr.track_record_id) AS total FROM trs_track_record tr INNER JOIN trs_end_user teu ON tr.end_user = teu.end_user_id GROUP BY tr.end_user";
                        $resultOGPQ = $conn->query($ogpQuery);
                        if($resultOGPQ->num_rows > 0){
                          while ($rowOGP = $resultOGPQ->fetch_assoc()) {
                        # code...
                            $agency = $rowOGP['agency'];
                            $total = $rowOGP['total'];

                            ?>
                            <tr>
                              <td><?php echo $agency;?></td>
                              <td><?php echo $total;?></td>

                            </tr>
                            <?php
                          }
                        }
                      }
                      ?>

                    </tbody>
                  </table>
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

    $.get("getTotalProject.php",function(data){
      $("#head_total_project").text(data[0].total.trim());
      $("#head_t_o_p").text(data[0].total.trim());
    });
    $.get("getTotalClient.php",function(data){
      $("#head_o_p_c").text(data[0].total.trim());
    });
    $.get("getClientWithOngoingProject.php",function(data){
      $("#head_ongoing_project_client").text(data[0].total.trim());
    });
    $.get("getCurrentYearRevenue.php",function(data){
      $("#head_total_revenue").text("RM: "+data[0].total.trim()).digits();
    });
    $.get("getTotalOngoingProject.php",function(data){
      $("#head_total_ongoing_project").text(data[0].total.trim());
    })


    $.get("getTotalProjectClientBased.php",function(data){
      console.log(data);
      var agency = [];
      var total = [];
      var color = [];
      for(var i in data){
        agency.push(data[i].agency);
        total.push(parseInt(data[i].total));
        color.push(randomCalor());
      }

      var pieChartClient = document.getElementById("clientProjectPieChart");
      var DoughnutConfig = configDoughnutChart(agency,total,color);
      var myDoughnut = new Chart(pieChartClient,DoughnutConfig);
    })

    $.get( "getRevenueData.php", function( data ) {
      
      var year = [];
      var amount = [];

      for(var i in data){
        year.push(data[i].year);
        amount.push(parseInt(data[i].total));
      }

      var revenueConfig = configRevenueChart(year.reverse(),amount.reverse());
      var totalAmountYear = document.getElementById("revenueChart");
      var myLineChart = new Chart(totalAmountYear, revenueConfig);

      });
    $.get("getCategoryProject.php",function(data){
      
      var categoryList = [];
      var totalCatPro = [];
      for(var i in data){
        categoryList.push(data[i].name);
        totalCatPro.push(parseInt(data[i].total));
      }
      
      var pcConfig = configProjectChart(categoryList,totalCatPro);
      var projectCategoryChart = document.getElementById("projectCategoryChart");
      var myBarChartCategory = new Chart(projectCategoryChart, pcConfig);
    })

    $.fn.digits = function(){ 
        return this.each(function(){ 
            $(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") ); 
        })
    }


  });

  function configDoughnutChart(agency,total,color){
    var config = {
      type: 'doughnut',
      data: {
        datasets: [{
          data: total,
          backgroundColor: color,
          
          label: 'Dataset 1'
        }],
        labels: agency,
      },
      options: {
        responsive: true,
        legend: {
          display:false,
        },
        title: {
          display: true,
          text: 'Total Project Each Client'
        },
        animation: {
          animateScale: true,
          animateRotate: true
        }
      }
    };

    return config;
  }

  function configProjectChart(name, totalProject){
    var config = {
      type: 'bar',
      data: {
        labels: name,
        datasets: [{
          label: 'Number of Project',
          backgroundColor: "rgb(63, 127, 191)",
          borderColor: "rgb(63, 127, 191)",
          borderWidth: 1,
          data: totalProject
        }]

      },
      options: {
        responsive: true,
        legend: {
          position: 'top',
        },
        title: {
          display: true,
          text: 'Project Category'
        }
      }
    }
    return config;
  }


  function configRevenueChart(year,amount){

    var amountConfig = {
      type: 'line',
      data: {
        labels: year,
        datasets: [{
          label: 'Project Amount',
          backgroundColor: 'rgb(63, 127, 191)',
          borderColor: 'rgb(63, 127, 191)',
          data: amount,
          fill: false,
        }]
      },
      options: {
        responsive: true,
        title: {
          display: true,
          text: 'Project Revenue Each Year'
        },
        tooltips: {
          mode: 'index',
          intersect: false,
        },
        hover: {
          mode: 'nearest',
          intersect: true
        },
        scales: {
          xAxes: [{
            display: true,
            scaleLabel: {
              display: true,
              labelString: 'Year'
            }
          }],
          yAxes: [{
            display: true,
            scaleLabel: {
              display: true,
              labelString: 'Value Amount (RM)'
            }
          }]
        }
      }
    };
    return amountConfig;
  }

    function randomCalor(){
      return 'rgb(' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ')';
    }





</script>
</body>
</html>