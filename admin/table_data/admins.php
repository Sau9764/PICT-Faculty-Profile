
<div class="page-content mycontent" style="display: block; margin-bottom: 10px; margin-top: 20px">
  <h4 style="color: blue;"> <b>Admin</b> </h4>

  <table class="table table-bordered table-striped">
    <col width="20%">
    <col width="30%">
    <col width="25%">
    <col width="25%">

    <tr>
      <th>Employee id</th>
      <th>Name</th>
      <th>Department</th>
      <th>Email ID</th>
    </tr>


    <?php 
      $sql = "SELECT emp_id,fullname,dept,email  FROM admin";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()){

        echo '<tr><td>'.$row["emp_id"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
        echo '<td>'.$row["dept"].'</td>';
        echo '<td>'.$row["email"].'</td></tr>';
      }
    ?>
  </table>
</div>