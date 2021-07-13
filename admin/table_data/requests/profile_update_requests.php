<?php
  $pr_count = 0;
?>
<div class="page-content mycontent"  style="display: block; margin-bottom: 10px; margin-top: 20px">
  <h4 style=""  class="menu_title" onclick="hide_profile_req()">
    <b> Profile Update Requests </b>(<?php echo $dept; ?>)   
    <span id="pr_badge" class="badge"></span> 
     &nbsp 
        <span id="pr_up" class="glyphicon glyphicon-chevron-up"></span>
        <span id="pr_down" style="display: none;" class="glyphicon glyphicon-chevron-down"></span> 
  </h4>

  <table class="table table-bordered table-striped fadeIn" id="request_tab" style="display: none; ">
    
    <col width="10%">
    <col width="35%">
    <col width="35%">
    <col width="20%">

    <tr>
      <th>Employee id</th>
      <th>Name</th>
      <th>Email</th>
      <th hidden="true">Contact</th>
      <th hidden="true">Responsibility</th>
      <th>View</th>
    </tr>

    <?php 
      $sql = "SELECT eid,fullname,contact,responsibility,email FROM tfaculty WHERE department = '$dept'";
      $personal_data = array();
      $result = $conn->query($sql);

      $counter = 0;

      while($row = $result->fetch_assoc()){
        $personal_data[$counter][0] = $row['eid'];
        $personal_data[$counter][1] = $row['fullname'];
        $personal_data[$counter][2] = $row['contact'];
        $personal_data[$counter][3] = $row['responsibility'];
        $personal_data[$counter][4] = $row['email'];
        $counter++;
      }

       $pr_count = $counter;

      for($i = 0; $i < $counter; $i++){
        $eid = $personal_data[$i][0];
        
        echo '<tr><td>'.$personal_data[$i][0].'</td>';
        echo '<td>'.$personal_data[$i][1].'</td>';
        echo '<td>'.$personal_data[$i][4].'</td>';

        echo '<td hidden="true">'.$personal_data[$i][2].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][3].'</td>';

        echo '<td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#view_request_data"> <span class="glyphicon glyphicon-list-alt"></button></center></td></tr>';
      }
    ?>
  </table>

   <hr>

  <script type="text/javascript">

    var badge = document.getElementById('pr_badge');
    badge.innerHTML = '<?php echo $pr_count; ?>';

    function hide_profile_req(){
      var x = document.getElementById("request_tab");
      var up = document.getElementById("pr_up");
      var down = document.getElementById("pr_down");

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
            window.addEventListener('load', run, false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', run);
        }

        function run() {
        var t = document.getElementById('request_tab');
            var rows = t.rows; 
        for (var i=0; i<rows.length; i++) {
          rows[i].onclick = function (event) {

            var cells = this.cells; //cells collection
            
            var f1 = document.getElementById('req_id');
            var f2 = document.getElementById('req_name');
            var f3 = document.getElementById('req_cont');
            var f4 = document.getElementById('req_email');
            var f5 = document.getElementById('req_res');
            
            f1.value = cells[0].innerHTML;
            f2.value = cells[1].innerHTML;
            f3.value = cells[3].innerHTML;
            f4.value = cells[2].innerHTML;
            f5.value = cells[4].innerHTML;

          };
        }
        }

    })();

  </script>

</div>