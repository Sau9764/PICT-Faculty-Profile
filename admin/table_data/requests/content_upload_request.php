
<?php
  $content_count = 0;
?>

<div class="page-content mycontent"  style="display: block; margin-bottom: 10px; margin-top: 20px">
  <h4 style="" class="menu_title" onclick="hide_content_req()"><b> Content Upload Requests </b>(<?php echo $dept; ?>)   
    <span id="content_badge" class="badge"></span>
    &nbsp 
        <span id="content_up" class="glyphicon glyphicon-chevron-up"></span>
        <span id="content_down" style="display: none;" class="glyphicon glyphicon-chevron-down"></span> 
  </h4>

  <table class="table table-bordered table-striped fadeIn" id="content_request_tab" style="display: none;">
    
    <col width="10%">
    <col width="35%">
    <col width="35%">
    <col width="20%">

    <tr>
      <th>Employee id</th>
      <th>Title</th>
      <th>Content Type</th>
      <th hidden="true">problem</th>
      <th hidden="true">description</th>
      <th hidden="true">email</th>
      <th hidden="true">pdf</th>
      <th>View</th>
      
    </tr>

    <?php 

      $sql = "SELECT f.eid,t.eid,t.id,f.department,t.title,t.contenttype,t.problem,t.description,t.email,t.pdf FROM tpost t INNER JOIN faculty f ON f.eid = t.eid AND f.department = '$dept'";

      $personal_data = array();
      $result = $conn->query($sql);

      $counter = 0;

      while($row = $result->fetch_assoc()){

        $personal_data[$counter][0] = $row['id'];
        $personal_data[$counter][1] = $row['title'];
        $personal_data[$counter][2] = $row['contenttype'];
        $personal_data[$counter][3] = $row['problem'];
        $personal_data[$counter][4] = $row['description'];
        $personal_data[$counter][5] = $row['eid'];
        $personal_data[$counter][6] = $row['pdf'];

        $counter++;
      }

      $content_count = $counter;

      for($i = 0; $i < $counter; $i++){
        
        echo '<tr><td>'.$personal_data[$i][0].'</td>';
        echo '<td>'.$personal_data[$i][1].'</td>';
        echo '<td>'.$personal_data[$i][2].'</td>';

        echo '<td hidden="true">'.$personal_data[$i][3].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][4].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][5].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][6].'</td>';

        echo '<td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#content_request_data"> <span class="glyphicon glyphicon-list-alt"></button></center></td></tr>';
      }
    ?>
  </table>

   <hr>

  <script type="text/javascript">

     var badge = document.getElementById('content_badge');
    badge.innerHTML = '<?php echo $content_count; ?>';


    function hide_content_req(){
      var x = document.getElementById("content_request_tab");
      var up = document.getElementById("content_up");
      var down = document.getElementById("content_down");

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
          var t = document.getElementById('content_request_tab');
          var rows = t.rows; 

          for (var i=0; i<rows.length; i++) {
            rows[i].onclick = function (event) {

              var cells = this.cells; //cells collection
              
              var f1 = document.getElementById('coeid');
              var f2 = document.getElementById('cotitle');
              var f3 = document.getElementById('cocontenttype');
              var f4 = document.getElementById('coproblem');
              var f5 = document.getElementById('codescription');
              var f6 = document.getElementById('coemail');
              var f7 = document.getElementById('copdf');
              
              f1.value = cells[0].innerHTML;
              f2.value = cells[1].innerHTML;
              f3.value = cells[2].innerHTML;
              f4.value = cells[3].innerHTML;
              f5.value = cells[4].innerHTML;
              f6.value = cells[5].innerHTML;
              f7.value = cells[6].innerHTML;

            };
          }
        }

    })();

  </script>

</div>