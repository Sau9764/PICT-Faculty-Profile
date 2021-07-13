<!-- Assistant Professor -->



<div class="page-content mycontent" id="COMP" style="display: block; margin-bottom: 10px;">
  <h4 style="color: blue;"> <b>Assistant Professor</b> </h4>
  <table class="table table-bordered table-striped">
    <col width="20%">
    <col width="45%">
    <col width="5%">
    <col width="10%">
    <col width="10%">
    <col width="10%">
    <tr>
      <th>Employee id</th>
      <th>Name</th>
      <th>Edit</th>
      <th>Enable</th>
      <th>Disable</th>
      <th>Delete</th>
    </tr>

    <?php 
      $sql = "SELECT eid,fullname,enable FROM faculty WHERE department = '$dept' AND designation = 'Assistant Professor'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()){
        $eid = $row["eid"];
        echo '<tr><td>'.$row["eid"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
        echo '<td><a href="editDetailspage.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></button></td>';
        if($row["enable"]=='1'){

          echo '<td><button type="button" class="btn btn-primary disabled btn-sm">Enable</button></td>';
          echo '<td><a href="table_data/enableDissable.php?eid='.$eid.'"><button type="button" class="btn btn-primary btn-sm ">Disable</button></td>';

        }else{

          echo '<td><a href="table_data/enableDissable.php?eid='.$eid.'"><button type="button" class="btn btn-sm btn-primary ">Enable</button></td>';
          echo '<td><button type="button" class="btn btn-primary disabled btn-sm">Disable</button></td>';

        }
        echo '<td><a href="table_data/delete.php?eid='.$eid.'"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
      }
    ?>
  </table>
</div>


