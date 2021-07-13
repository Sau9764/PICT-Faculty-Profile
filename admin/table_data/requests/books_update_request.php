<?php

  $book_count = 0;

?>

<div class="page-content mycontent"  style="display: block; margin-bottom: 10px; margin-top: 20px">
  <div style="width: 100%; ">
      <h4 class="menu_title" onclick="hide_book_req()"><b> Books Update Requests </b>(<?php echo $dept; ?>)  
        <span id="book_badge" class="badge"></span>
        &nbsp 
        <span id="bk_up" class="glyphicon glyphicon-chevron-up"></span>
        <span id="bk_down" style="display: none;" class="glyphicon glyphicon-chevron-down"></span> 
    </h4>
  </div>
  
  

  <table class="table table-bordered table-striped fadeIn" id="books_request_tab" style="display: none;">
    
    <col width="10%">
    <col width="35%">
    <col width="35%">
    <col width="20%">

    <tr>
      <th>Employee id</th>
      <th>Book Name</th>
      <th>Publication</th>
      <th hidden="true">year</th>
      <th hidden="true">description</th>
      <th>View</th>
      
    </tr>

    <?php 
      $sql = "SELECT f.eid,b.eid,f.department,b.bname,b.publication,b.year,b.description FROM tbooks b INNER JOIN faculty f ON f.eid = b.eid AND f.department = '$dept'";

      $personal_data = array();
      $result = $conn->query($sql);

      $counter = 0;

      while($row = $result->fetch_assoc()){

        $personal_data[$counter][0] = $row['eid'];
        $personal_data[$counter][1] = $row['bname'];
        $personal_data[$counter][2] = $row['publication'];
        $personal_data[$counter][3] = $row['year'];
        $personal_data[$counter][4] = $row['description'];

        $counter++;
      }

      $book_count = $counter;

      for($i = 0; $i < $counter; $i++){
        
        echo '<tr><td>'.$personal_data[$i][0].'</td>';
        echo '<td>'.$personal_data[$i][1].'</td>';
        echo '<td>'.$personal_data[$i][2].'</td>';

        echo '<td hidden="true">'.$personal_data[$i][3].'</td>';
        echo '<td hidden="true">'.$personal_data[$i][4].'</td>';

        echo '<td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#book_request_data"> <span class="glyphicon glyphicon-list-alt"></button></center></td></tr>';
      }
    ?>
  </table>

  <hr>

  <script type="text/javascript">

    var badge = document.getElementById('book_badge');
    badge.innerHTML = '<?php echo $book_count; ?>';

    function hide_book_req(){
      var x = document.getElementById("books_request_tab");
      var up = document.getElementById("bk_up");
      var down = document.getElementById("bk_down");

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
            window.addEventListener('load', run_book, false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', run_book);
        }

        function run_book() {
          var t = document.getElementById('books_request_tab');
          var rows = t.rows; 

          for (var i=0; i<rows.length; i++) {
            rows[i].onclick = function (event) {

              var cells = this.cells; //cells collection
              
              var f1 = document.getElementById('beid');
              var f2 = document.getElementById('bname');
              var f3 = document.getElementById('bpub');
              var f4 = document.getElementById('byear');
              var f5 = document.getElementById('bdesc');
              
              f1.value = cells[0].innerHTML;
              f2.value = cells[1].innerHTML;
              f3.value = cells[2].innerHTML;
              f4.value = cells[3].innerHTML;
              f5.value = cells[4].innerHTML;

            };
          }
        }

    })();

  </script>

</div>