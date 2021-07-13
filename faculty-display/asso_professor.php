
<div class="col-md-1"></div>
<div class="Facultytable col-md-10 lower" style="border-radius: 10px; transition: 1s;" data-aos="fade-up">

  <div class="page-content mycontent " id="COMP" style="display: block; margin-bottom: 10px; margin-top: 20px">
    <h4 style=""><b> Associate Professor </b> </h4>
    <table class="table table-bordered table-striped">
      <col width="30%">
      <col width="30%">
      <col width="30%">
       <col width="10%">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>View Deails</th>
      </tr>

      <?php 
        $sql = "SELECT eid,fullname,contact,email FROM faculty WHERE department = '$dept' AND designation = 'Associate Professor'";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
          $eid = $row["eid"];

          echo '<tr><td><b>'.$row["fullname"].'</b></td>';
          echo '<td>'.$row["email"].'</td>';
          echo '<td>'.$row["contact"].'</td>';

          echo '<td><center><a href="view_faculty_profile.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-list-alt"></span></button></center></td></tr>';
        }
      ?>
    </table>
  </div>

</div>
<div class="col-md-1"></div>
