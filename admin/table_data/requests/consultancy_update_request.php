<?php
  $con_count = 0;
?>
<div class="page-content mycontent"  style="display: block; margin-bottom: 10px; margin-top: 20px">
  <h4 style="" class="menu_title" onclick="hide_conf_req()"><b> Consultancy Update Requests </b>(<?php echo $dept; ?>)   
    <span id="con_badge" class="badge"></span>
    &nbsp 
        <span id="co_up" class="glyphicon glyphicon-chevron-up"></span>
        <span id="co_down" style="display: none;" class="glyphicon glyphicon-chevron-down"></span> 

  </h4>

  <table class="table table-bordered table-striped fadeIn" id="consul_request_tab" style="display: none;">
    
    <col width="10%">
    <col width="35%">
    <col width="35%">
    <col width="20%">

    <tr>
      <th>Employee id</th>
      <th>Organization/ Institute/ University</th>
      <th>Start Date</th>
      <th hidden="true">end date</th>
      <th hidden="true">duration</th>
      <th hidden="true">amount</th>
      <th hidden="true">status</th>
      <th hidden="true">details</th>
      <th>View</th>
      
    </tr>

    <?php 

      $sql = "SELECT f.eid,t.eid,f.department,t.ioiu,t.sdate,t.edate,t.duration,t.amount,t.status,t.details FROM tconsultancy t INNER JOIN faculty f ON f.eid = t.eid AND f.department = '$dept'";

      $personal_data = array();
      $result = $conn->query($sql);

      $counter = 0;

      while($row = $result->fetch_assoc()){

        $personal_data[$counter][0] = $row['eid'];
        $personal_data[$counter][1] = $row['ioiu'];
        $personal_data[$counter][2] = $row['sdate'];
        $personal_data[$counter][3] = $row['edate'];
        $personal_data[$counter][4] = $row['duration'];
        $personal_data[$counter][5] = $row['amount'];
        $personal_data[$counter][6] = $row['status'];
        $personal_data[$counter][7] = $row['details'];

        $counter++;
      }

      $con_count = $counter;

      for($i = 0; $i < $counter; $i++){
        
        echo '<tr><td>'.$personal_data[$i][0].'</td>';
        echo '<td>'.$personal_data[$i][1].'</td>';
        echo '<td>'.$personal_data[$i][2].'</td>';

        echo '<td hidden="true">'.$personal_data[$i][3].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][4].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][5].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][6].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][7].'</td>';

        echo '<td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#consl_request_data"> <span class="glyphicon glyphicon-list-alt"></button></center></td></tr>';
      }
    ?>
  </table>

   <hr>

  <script type="text/javascript">

     var badge = document.getElementById('con_badge');
    badge.innerHTML = '<?php echo $con_count; ?>';


    function hide_conf_req(){
      var x = document.getElementById("consul_request_tab");
      var up = document.getElementById("co_up");
      var down = document.getElementById("co_down");

      if (x.style.display === "none") {
        x.style.display = "";
        up.style.display = "none";
        down.style.display = "";
      } else {
        x.style.display = "none";
        up.style.display = "";
        down.style.display = "none";
      }
    }

    
    (function () {
        if (window.addEventListener) {
            window.addEventListener('load', run_conlst, false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', run_conlst);
        }

        function run_conlst() {
          var t = document.getElementById('consul_request_tab');
          var rows = t.rows; 

          for (var i=0; i<rows.length; i++) {
            rows[i].onclick = function (event) {

              var cells = this.cells; //cells collection
              
              var f1 = document.getElementById('ceid');
              var f2 = document.getElementById('cioiu');
              var f3 = document.getElementById('csdate');
              var f4 = document.getElementById('cedate');
              var f5 = document.getElementById('cduration');
              var f6 = document.getElementById('camount');
              var f7 = document.getElementById('cstatus');
              var f8 = document.getElementById('cdetails');
              
              f1.value = cells[0].innerHTML;
              f2.value = cells[1].innerHTML;
              f3.value = cells[2].innerHTML;
              f4.value = cells[3].innerHTML;
              f5.value = cells[4].innerHTML;
              f6.value = cells[5].innerHTML;
              f7.value = cells[6].innerHTML;
              f8.value = cells[7].innerHTML;

            };
          }
        }

    })();

  </script>

</div>