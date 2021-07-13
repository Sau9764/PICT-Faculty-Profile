<?php
  $jr_count = 0;
?>
<div class="page-content mycontent"  style="display: block; margin-bottom: 10px; margin-top: 20px">
  <h4 style="" class="menu_title" onclick="hide_journal_req()">
    <b> Journals Update Requests </b>(<?php echo $dept; ?>)  
     <span id="jr_badge" class="badge"></span> 
    &nbsp 
        <span id="jo_up" class="glyphicon glyphicon-chevron-up"></span>
        <span id="jo_down" style="display: none;" class="glyphicon glyphicon-chevron-down"></span>  
  </h4>

  <table class="table table-bordered table-striped fadeIn" id="journal_request" style="display: none; ">
    
    <col width="10%">
    <col width="35%">
    <col width="35%">
    <col width="20%">

    <tr>
      <th>Employee id</th>
      <th>Title</th>
      <th>Type</th>
      <th hidden="true">Year</th>
      <th hidden="true">description</th>
      <th>View</th>
    </tr>

    <?php 
      $sql = "SELECT f.eid,t.eid,f.department,t.title,t.type,t.year,t.description FROM tjournals t INNER JOIN faculty f ON f.eid = t.eid AND f.department = '$dept'";

      $personal_data = array();
      $result = $conn->query($sql);

      $counter = 0;

      while($row = $result->fetch_assoc()){
        $personal_data[$counter][0] = $row['eid'];
        $personal_data[$counter][1] = $row['title'];
        $personal_data[$counter][2] = $row['type'];
        $personal_data[$counter][3] = $row['year'];
        $personal_data[$counter][4] = $row['description'];
        $counter++;
      }

       $jr_count = $counter;

      for($i = 0; $i < $counter; $i++){
        
        echo '<tr><td>'.$personal_data[$i][0].'</td>';
        echo '<td>'.$personal_data[$i][1].'</td>';
        echo '<td>'.$personal_data[$i][2].'</td>';

        echo '<td hidden="true">'.$personal_data[$i][3].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][4].'</td>';

        echo '<td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#journal_request_data"> <span class="glyphicon glyphicon-list-alt"></button></center></td></tr>';
      }
    ?>
  </table>

    <hr>
    
  <script type="text/javascript">

    var badge = document.getElementById('jr_badge');
    badge.innerHTML = '<?php echo $jr_count; ?>';

    function hide_journal_req(){
      var x = document.getElementById("journal_request");
      var up = document.getElementById("jo_up");
      var down = document.getElementById("jo_down");

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
        var t = document.getElementById('journal_request');
            var rows = t.rows; 
        for (var i=0; i<rows.length; i++) {
          rows[i].onclick = function (event) {

            var cells = this.cells; //cells collection
          
            var f1 = document.getElementById('jeid');
            var f2 = document.getElementById('jtitle');
            var f3 = document.getElementById('jtype');
            var f4 = document.getElementById('jyear');
            var f5 = document.getElementById('jdescription');

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