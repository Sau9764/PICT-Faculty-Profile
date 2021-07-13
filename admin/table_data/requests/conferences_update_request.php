<?php
  $conf_count = 0;
?>

<div class="page-content mycontent"  style="display: block; margin-bottom: 10px; margin-top: 20px">
  <h4 style="" class="menu_title" onclick="hide_confer_req()"><b> Conferences Update Requests </b>(<?php echo $dept; ?>)  
   
     <span id="conf_badge" class="badge"></span>
    &nbsp 
        <span id="conf_up" class="glyphicon glyphicon-chevron-up"></span>
        <span id="conf_down" style="display: none;" class="glyphicon glyphicon-chevron-down"></span> 

  </h4>

  <table class="table table-bordered table-striped fadeIn" id="conf_request_tab" style="display: none;">
    
    <col width="10%">
    <col width="35%">
    <col width="35%">
    <col width="20%">

    <tr>
      <th>Employee id</th>
      <th>Fullname</th>
      <th>Title</th>
      <th hidden="true">Type</th>
      <th hidden="true">Year</th>
      <th hidden="true">Details</th>
      <th>View</th>
      

    </tr>

    <?php 
      $sql = "SELECT t.eid,f.department,f.fullname,ctitle,ctype,year,cdetails FROM tconferences t INNER JOIN faculty f ON t.eid = f.eid AND f.department = '$dept'";

      $personal_data = array();
      $result = $conn->query($sql);

      $counter = 0;

      while($row = $result->fetch_assoc()){

        $personal_data[$counter][0] = $row['eid'];
        $personal_data[$counter][1] = $row['fullname'];
        $personal_data[$counter][2] = $row['ctitle'];
        $personal_data[$counter][3] = $row['ctype'];
        $personal_data[$counter][4] = $row['year'];
        $personal_data[$counter][5] = $row['cdetails'];
        $counter++;
      }

      $conf_count = $counter;

      for($i = 0; $i < $counter; $i++){
        
        echo '<tr><td>'.$personal_data[$i][0].'</td>';
        echo '<td>'.$personal_data[$i][1].'</td>';
        echo '<td>'.$personal_data[$i][2].'</td>';

        echo '<td hidden="true">'.$personal_data[$i][3].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][4].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][5].'</td>';

        echo '<td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#conf_request_data"> <span class="glyphicon glyphicon-list-alt"></button></center></td></tr>';
      }
    ?>
  </table>

    <hr>

  <script type="text/javascript">

    var badge = document.getElementById('conf_badge');
    badge.innerHTML = '<?php echo $conf_count; ?>';

    function hide_confer_req(){
      var x = document.getElementById("conf_request_tab");
      var up = document.getElementById("conf_up");
      var down = document.getElementById("conf_down");

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
            window.addEventListener('load', run_conf, false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', run_conf);
        }

        function run_conf() {
          var t = document.getElementById('conf_request_tab');
          var rows = t.rows; 

          for (var i=0; i<rows.length; i++) {
            rows[i].onclick = function (event) {

              var cells = this.cells; //cells collection
              
              var f1 = document.getElementById('eid');
              var f2 = document.getElementById('name');
              var f3 = document.getElementById('title');
              var f4 = document.getElementById('type');
              var f5 = document.getElementById('year');
              var f6 = document.getElementById('detail');
              
              f1.value = cells[0].innerHTML;
              f2.value = cells[1].innerHTML;
              f3.value = cells[2].innerHTML;
              f4.value = cells[3].innerHTML;
              f5.value = cells[4].innerHTML;
              f6.value = cells[5].innerHTML;

            };
          }
        }

    })();

  </script>

</div>