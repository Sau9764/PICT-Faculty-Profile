<?php
  $qu_count = 0;
?>

<div class="page-content mycontent"  style="display: block; margin-bottom: 10px; margin-top: 20px">
  <h4 style="" class="menu_title" onclick="hide_quali_req()">
    <b> Qualification Update Requests </b>(<?php echo $dept; ?>)  
    <span id="qu_badge" class="badge"></span> 
     &nbsp 
        <span id="q_up" class="glyphicon glyphicon-chevron-up"></span>
        <span id="q_down" style="display: none;" class="glyphicon glyphicon-chevron-down"></span>  
  </h4>

  <table class="table table-bordered table-striped fadeIn" id="quali_request" style="display: none; ">
    
    <col width="10%">
    <col width="35%">
    <col width="35%">
    <col width="20%">
    <tr>
      <th>Employee id</th>
      <th>Level</th>
      <th>Degree</th>
      <th hidden="true">specialization</th>
      <th hidden="true">uname</th>
      <th hidden="true">college</th>
      <th hidden="true">year</th>
      <th>View</th>
    </tr>

    <?php 
      $sql = "SELECT f.eid,t.eid,f.department,t.level,t.degree,t.specialization,t.uname,t.college,t.year FROM tqualifications t INNER JOIN faculty f ON f.eid = t.eid AND f.department = '$dept'";

      $personal_data = array();
      $result = $conn->query($sql);

      $counter = 0;

      while($row = $result->fetch_assoc()){
        $personal_data[$counter][0] = $row['eid'];
        $personal_data[$counter][1] = $row['level'];
        $personal_data[$counter][2] = $row['degree'];
        $personal_data[$counter][3] = $row['specialization'];
        $personal_data[$counter][4] = $row['uname'];
         $personal_data[$counter][5] = $row['college'];
        $personal_data[$counter][6] = $row['year'];

        $counter++;
      }

      $qu_count = $counter;


      for($i = 0; $i < $counter; $i++){
        
        echo '<tr><td>'.$personal_data[$i][0].'</td>';
        echo '<td>'.$personal_data[$i][1].'</td>';
        echo '<td>'.$personal_data[$i][2].'</td>';

        echo '<td hidden="true">'.$personal_data[$i][3].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][4].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][5].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][6].'</td>';

        echo '<td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#quali_request_data"> <span class="glyphicon glyphicon-list-alt"></button></center></td></tr>';
      }
    ?>
  </table>

    <hr>

  <script type="text/javascript">

    var badge = document.getElementById('qu_badge');
    badge.innerHTML = '<?php echo $qu_count; ?>';

    function hide_quali_req(){
      var x = document.getElementById("quali_request");
      var up = document.getElementById("q_up");
      var down = document.getElementById("q_down");

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
            window.addEventListener('load', quali_run, false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', quali_run);
        }

        function quali_run() {
        var t = document.getElementById('quali_request');
            var rows = t.rows; 
        for (var i=0; i<rows.length; i++) {
          rows[i].onclick = function (event) {

            var cells = this.cells; //cells collection
            var f1 = document.getElementById('qeid');
            var f2 = document.getElementById('qlevel');
            var f3 = document.getElementById('qdegree');
            var f4 = document.getElementById('qspecialization');
            var f5 = document.getElementById('quname');
            var f6 = document.getElementById('qcollege');
            var f7 = document.getElementById('qyear');

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