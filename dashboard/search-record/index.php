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
            <a class="bold-text text-selected" href="#"><i class="material-icons">search</i> Search Record</a>
          </li>
          <li>
            <a class="bold-text " href="../maintain-record/"> <i class="material-icons">assignment</i>Record List</a>
          </li>
          <li>
            <a class="bold-text " href="../client/"><i class="material-icons prefix">account_box</i> Client</a>
          </li>
          <li>
            <a class="bold-text " href="../maintain-category/"><i class="material-icons">description</i> Category List</a>
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
                  <div class="row">
                    <ul id="tabs-swipe-demo" class="tabs">
                      <li class="tab col s6"><a class="active" href="#test-swipe-1">Search Keyword</a></li>
                      <li class="tab col s6"><a  href="#test-swipe-2">Categories Search</a></li>
                      
                    </ul>
                    <div id="test-swipe-1" class="col s12 ">
                      <br>
                      <span class="card-title text-center">Search Record</span>
                        <form class="col s12">
                          <div class="row search-row">
                            <div class="input-field col s10 ">
                             <i class="material-icons prefix ">search</i>
                             <input id="SearchRecord" type="text">
                           </div>
                           <div class="input-field col s2" >
                            <button class="btn waves-effect waves-light" id="btn-search-keyword">Submit
                              <i class="material-icons right">send</i>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div id="test-swipe-2" class="col s12 ">
                      <br>
                      <span class="card-title text-center">List Record By Category</span>
                        <form class="col s12">
                          <div class="row search-row">
                            <div class="input-field col s10 ">
                             <i class="material-icons prefix ">search</i>
                             
                               <select id="search_category_select">
                                 <option value="" disabled selected>Choose your option</option>
                                 <?php
                                 if($conn){
                                   $queryEU = "SELECT record_category_id, name FROM `trs_record_category`";
                                   $resultEU = $conn->query($queryEU);
                                   if($resultEU->num_rows >0){
                                     while ($row = $resultEU->fetch_assoc()) {
                                       $rcid = $row["record_category_id"];
                                       $name = $row["name"];
                                       ?>
                                       <option value=<?php echo $rcid; ?>><?php echo $name; ?></option>
                                       <?php
                                     }
                                   }
                                 }
                                 ?>
                                
                               </select>
                               <label>Select Category</label>
                             
                           </div>
                           <div class="input-field col s2" >
                            <button class="btn waves-effect waves-light" id="btn-list-category">Submit
                              <i class="material-icons right">send</i>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                    
                  </div>
                  
                  <div class="row ">


                </div>
                <div class="table-head">
                  <h3 class="card-title">
                   Search Result
                 </h3>
                 <button class="btn waves-effect waves-light float-right "  id="show_list_btn">Show List
                   <i class="material-icons right">featured_play_list</i>
                 </button>
                 <button class="btn waves-effect waves-light float-right" id="add_to_print_btn">Add to print
                   <i class="material-icons right">add</i>
                 </button>

               </div>
               <div id="result-table">
                 

               </div>

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
          <input value="SENARAI PENGALAMAN SYARIKAT" id="doc_title_print" type="text">
          <label class="active" for="first_name2">Document Title</label>
          <button class="btn waves-effect waves-light float-right" id="change_title_doc">Change
            <i class="material-icons right">print</i>
          </button>
        </div>
        <div class="input-field col s3">
          <button class="btn waves-effect waves-light float-right" id="print_record_list_btn">Print
            <i class="material-icons right">print</i>
          </button>
        </div>
      </div>
    </div>
    <div>
     <!--Table-->

     <div id="divShow_list">
       
     </div>
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

  var selected_record = [];
  

  document.addEventListener('DOMContentLoaded',function(){
    var elems = document.querySelectorAll('.modal');
    var options = {
      onOpenEnd: function(){
        //console.log("lol");
      }
    }
    var instances = M.Modal.init(elems,options)
  })

  $(document).ready(function(){
    $('select').formSelect();
    var wtp_record = [];  
    $('.tabs').tabs();

    var onModalClose = function() {
       $(".btn-bulat").css("display","inline-block");
    };

     var modal = document.querySelector('.modal');

    var showListInstance = M.Modal.init(modal,{
      onCloseEnd: onModalClose 
    });

    $("#btn-list-category").click(function(e){
      e.preventDefault();
      var category = $("#search_category_select").val()+"-|-";
      var data = {
        category:category
      }

      $.ajax({
        url:'result-search-category.php',
        type:'POST',
        data:data,
        success:function(c){
          $("#result-table").html(c);
        }
      })


    })

    $("#btn-search-keyword").click(function(e){
      e.preventDefault();
      var search_keyword =  $("#SearchRecord").val();
      var data = {
        key:search_keyword
      }

      $.ajax({
        url:'result-search.php',
        type:'POST',
        data:data,
        success:function(c){
          $("#result-table").html(c);
        }
      })
    });

    $("#add_to_print_btn").click(function(e){
      for(var i=0; i<selected_record.length; i++){
        console.log("----------------first Loop ----------------")
        if(wtp_record.length == 0){
          wtp_record.push(selected_record[i]);
        }else{
          for(var x=0; x<wtp_record.length; x++){
            console.log("----------------second Loop ----------------")
            console.log(wtp_record[i]);
            console.log(selected_record[i])
            if(wtp_record[i] === selected_record[i]){
              //alert("checked record already insert")
            }else{
              wtp_record.push(selected_record[i]);
            }
          }
        }
      }
      alert("record added");
      console.log(wtp_record);
    })

    $("#show_list_btn").click(function(e){
      showListInstance.open();

      var jsonString = JSON.stringify(wtp_record);
      $.ajax({
        type:'POST',
        url:'show-list.php',
        data:{data:jsonString},
        success:function(c){
          //console.log(c);
          $("#divShow_list").html(c);
        }
      });

    });

    $("#print_record_list_btn").click(function(e){

      $(".btn-bulat").css("display","none");
      printDiv();

      location.reload();

    });

    $("#change_title_doc").click(function(e){
      e.preventDefault();
      $("#title_doc").text($("#doc_title_print").val());

    })

  })

  function printDiv() 
{

  var divToPrint=document.getElementById('divShow_list');

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}

</script>

</body>
</html>