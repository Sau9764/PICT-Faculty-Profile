<?php
  $pat_count = 0;
?>
<div class="page-content mycontent"  style="display: block; margin-bottom: 10px; margin-top: 20px">
  <h4 style="" class="menu_title" onclick="hide_patent_req()">
    <b> Patent Update Requests </b>(<?php echo $dept; ?>)   
    <span id="pat_badge" class="badge"></span> 
    &nbsp 
        <span id="pa_up" class="glyphicon glyphicon-chevron-up"></span>
        <span id="pa_down" style="display: none;" class="glyphicon glyphicon-chevron-down"></span> 
  </h4>

  <table class="table table-bordered table-striped fadeIn" id="patent_request" style="display: none; ">
    
    <col width="10%">
    <col width="35%">
    <col width="35%">
    <col width="20%">

    <tr>
      <th>Employee id</th>
      <th>Title</th>
      <th>Year</th>
      <th hidden="true">country</th>
      <th hidden="true">assignee</th>
      <th hidden="true">tpatentno</th>
      <th hidden="true">pagenos</th>
      <th hidden="true">webadd</th>
      <th>View</th>
    </tr>

    <?php 
      $sql = "SELECT f.eid,t.eid,f.department,t.ptitle,t.year,t.country,t.assignee,t.tpatentno,t.pagenos,t.webadd FROM tpatent t INNER JOIN faculty f ON f.eid = t.eid AND f.department = '$dept'";

      $personal_data = array();
      $result = $conn->query($sql);

      $counter = 0;

      while($row = $result->fetch_assoc()){
        $personal_data[$counter][0] = $row['eid'];
        $personal_data[$counter][1] = $row['ptitle'];
        $personal_data[$counter][2] = $row['year'];
        $personal_data[$counter][3] = $row['country'];
        $personal_data[$counter][4] = $row['assignee'];
         $personal_data[$counter][5] = $row['tpatentno'];
        $personal_data[$counter][6] = $row['pagenos'];
        $personal_data[$counter][7] = $row['webadd'];
        $counter++;
      }

      $pat_count = $counter;

      for($i = 0; $i < $counter; $i++){
        
        echo '<tr><td>'.$personal_data[$i][0].'</td>';
        echo '<td>'.$personal_data[$i][1].'</td>';
        echo '<td>'.$personal_data[$i][2].'</td>';

        echo '<td hidden="true">'.$personal_data[$i][3].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][4].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][5].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][6].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][7].'</td>';

        echo '<td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#patent_request_data"> <span class="glyphicon glyphicon-list-alt"></button></center></td></tr>';
      }
    ?>
  </table>

  <hr>

  <script type="text/javascript">

     var badge = document.getElementById('pat_badge');
    badge.innerHTML = '<?php echo $pat_count; ?>';

    function hide_patent_req(){
      var x = document.getElementById("patent_request");
      var up = document.getElementById("pa_up");
      var down = document.getElementById("pa_down");

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
            window.addEventListener('load', patent_run, false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', patent_run);
        }

        function patent_run() {
        var t = document.getElementById('patent_request');
            var rows = t.rows; 
        for (var i=0; i<rows.length; i++) {
          rows[i].onclick = function (event) {

            var cells = this.cells; //cells collection
    
            var f1 = document.getElementById('peid');
            var f2 = document.getElementById('pptitle');
            var f3 = document.getElementById('pyear');
            var f4 = document.getElementById('pcountry');
            var f5 = document.getElementById('passignee');
            var f6 = document.getElementById('ptpatentno');
            var f7 = document.getElementById('ppagenos');
            var f8 = document.getElementById('pwebadd');

            f1.value = cells[0].innerHTML;
            f2.value = cells[1].innerHTML;
            f3.value = cells[3].innerHTML;
            f4.value = cells[2].innerHTML;
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