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
      $sql = "SELECT eid,image,fullname,texperience,iexperience,responsibility,contact,aoi,other,cv,email FROM tfaculty WHERE department = '$dept'";
      $personal_data = array();
      $result = $conn->query($sql);

      $counter = 0;

      while($row = $result->fetch_assoc()){
        $personal_data[$counter][0] = $row['eid'];
        $personal_data[$counter][1] = $row['image'];
        $personal_data[$counter][2] = $row['fullname'];
        $personal_data[$counter][3] = $row['texperience'];
        $personal_data[$counter][4] = $row['iexperience'];
        $personal_data[$counter][5] = $row['responsibility'];
        $personal_data[$counter][6] = $row['contact'];
        $personal_data[$counter][7] = $row['aoi'];
        $personal_data[$counter][8] = $row['other'];
        $personal_data[$counter][9] = $row['cv'];
        $personal_data[$counter][10] = $row['email'];
        $counter++;
      }

       $pr_count = $counter;

      for($i = 0; $i < $counter; $i++){
        $eid = $personal_data[$i][0];
        
        echo '<tr><td>'.$personal_data[$i][0].'</td>';
        echo '<td>'.$personal_data[$i][2].'</td>';
        echo '<td>'.$personal_data[$i][10].'</td>';

        echo '<td hidden="true">'.$personal_data[$i][1].'</td>'; // 3
        echo '<td hidden="true">'.$personal_data[$i][3].'</td>'; // 4
        echo '<td hidden="true">'.$personal_data[$i][4].'</td>'; // 5
        echo '<td hidden="true">'.$personal_data[$i][5].'</td>'; // 6
        echo '<td hidden="true">'.$personal_data[$i][6].'</td>'; // 7
        echo '<td hidden="true">'.$personal_data[$i][7].'</td>'; // 8
        echo '<td hidden="true">'.$personal_data[$i][8].'</td>'; // 9
        echo '<td hidden="true">'.$personal_data[$i][9].'</td>'; // 10
        

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
            var req_img = document.getElementById('req_img');

            var req_te = document.getElementById('req_te');
            var req_ie = document.getElementById('req_ie');
            var req_aoi = document.getElementById('req_aoi');
            var req_other = document.getElementById('req_other');
            var req_cv = document.getElementById('req_cv');
            
            f1.value = cells[0].innerHTML;
            f2.value = cells[1].innerHTML;
            f3.value = cells[7].innerHTML;
            f4.value = cells[2].innerHTML;
            req_img.href = "/faculty/facultyPage/" + cells[3].innerHTML;
            req_te.value = cells[4].innerHTML;
            req_ie.value = cells[5].innerHTML;
            f5.value = cells[6].innerHTML;
            req_aoi.value = cells[8].innerHTML;
            req_other.value = cells[9].innerHTML;
            req_cv.href = "/faculty/facultyPage/" + cells[10].innerHTML;

          };
        }
      }

    })();

  </script>

</div>