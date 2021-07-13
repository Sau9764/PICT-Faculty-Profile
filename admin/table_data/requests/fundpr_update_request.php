<?php
  $fnd_count = 0;
?>

<div class="page-content mycontent"  style="display: block; margin-bottom: 10px; margin-top: 20px">

  <h4 style="" class="menu_title" onclick="hide_fundpr_req()">
    
    <b>Funded Projects Update Requests</b>(<?php echo $dept; ?>)
    <span id="fndpr_badge" class="badge"></span> 
    &nbsp 
    <span id="conf_up" class="glyphicon glyphicon-chevron-up"></span>
    <span id="conf_down" style="display: none;" class="glyphicon glyphicon-chevron-down"></span> 
  </h4>

  <table class="table table-bordered table-striped fadeIn" id="fundpr_request" style="display: none; ">
    
    <col width="10%">
    <col width="35%">
    <col width="35%">
    <col width="20%">

    <tr>
      <th>Employee id</th>
      <th>Title</th>
      <th>PI & CO-PI</th>
      <th hidden="true">duration</th>
      <th hidden="true">famount</th>
      <th hidden="true">fegency</th>
      <th hidden="true">remark</th>
      <th>View</th>
    </tr>

    <?php 
      $sql = "SELECT f.eid,t.eid,f.department,t.ptitle,t.picoi,t.duration,t.famount,t.fegency,t.remark FROM tfundedrp t INNER JOIN faculty f ON f.eid = t.eid AND f.department = '$dept'";

      $personal_data = array();
      $result = $conn->query($sql);

      $counter = 0;

      while($row = $result->fetch_assoc()){
        $personal_data[$counter][0] = $row['eid'];
        $personal_data[$counter][1] = $row['ptitle'];
        $personal_data[$counter][2] = $row['picoi'];
        $personal_data[$counter][3] = $row['duration'];
        $personal_data[$counter][4] = $row['famount'];
        $personal_data[$counter][5] = $row['fegency'];
        $personal_data[$counter][6] = $row['remark'];
        $counter++;
      }

      $fnd_count = $counter;

      for($i = 0; $i < $counter; $i++){
        
        echo '<tr><td>'.$personal_data[$i][0].'</td>';
        echo '<td>'.$personal_data[$i][1].'</td>';
        echo '<td>'.$personal_data[$i][2].'</td>';

        echo '<td hidden="true">'.$personal_data[$i][3].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][4].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][5].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][6].'</td>';


        echo '<td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fundpr_request_data"> <span class="glyphicon glyphicon-list-alt"></button></center></td></tr>';
      }
    ?>
  </table>

    <hr>
    
  <script type="text/javascript">

    var badge = document.getElementById('fndpr_badge');
    badge.innerHTML = '<?php echo $fnd_count; ?>';


    function hide_fundpr_req(){
      var x = document.getElementById("fundpr_request");
      var up = document.getElementById("fu_up");
      var down = document.getElementById("fu_down");

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
            window.addEventListener('load', run_fund, false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', run_fund);
        }

        function run_fund() {
        var t = document.getElementById('fundpr_request');
            var rows = t.rows; 
        for (var i=0; i<rows.length; i++) {
          rows[i].onclick = function (event) {

            var cells = this.cells; //cells collection
                
            var f1 = document.getElementById('feid');
            var f2 = document.getElementById('fptitle');
            var f3 = document.getElementById('fpicoi');
            var f4 = document.getElementById('fduration');
            var f5 = document.getElementById('ffamount');
            var f6 = document.getElementById('ffegency');
            var f7 = document.getElementById('fremark');
            
            f1.value = cells[0].innerHTML;
            f2.value = cells[1].innerHTML;
            f3.value = cells[3].innerHTML;
            f4.value = cells[2].innerHTML;
            f5.value = cells[4].innerHTML;
            f6.value = cells[5].innerHTML;
            f7.value = cells[6].innerHTML;

          };
        }
        }

    })();

  </script>

</div>