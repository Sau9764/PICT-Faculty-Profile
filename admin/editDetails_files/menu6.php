<div id="menu6" class="container tab-pane fade"><br>
	<div class="card mycard" id="patents" style="margin-bottom: 10px;">
		<div class="card-header" align="center">
			<h2>Patents Details
				<span><button class="personalclick btn btn-danger" data-toggle="modal" data-target="#delete_patent_model" style="margin: 5px;float: right;" onclick="editpersonal()">Delete Patent</button></span>

				<span><button class="personalclick btn btn-primary" data-toggle="modal" data-target="#add_patent_model" style="margin: 5px;float: right;" onclick="editpersonal()">Add Patent</button></span>
			</h2>
		</div>

		<form action="uploadContent.php" method="post" onsubmit="return checkeditpatents()">
			<div class="card-body">
				<?php
					echo '<table class="table-striped table-bordered card-body table-responsive" style="width:100%">';
					$sql1 = "SELECT * FROM patent WHERE eid = '$eid'";
					$result1 = $conn->query($sql1);
					if($result1->num_rows>0){
						echo'<h5>Total Number of Patent Records : <a href="#">'.$result1->num_rows.'</a></h5>
						<tr>
						<th class="mytbstyle">ID. </th>
						<th class="mytbstyle">Patent Number</th>
						<th>Patent Title</th>
						<th>Assignee</th>
						<th>Country</th>
						<th>Year</th>
						<th>Web Address</th>
						</tr>';
						$rowcnt = 0;
						while($row1 = $result1->fetch_assoc())
						{
							$rowcnt = $rowcnt + 1;
							$rowname = "rowpp".$rowcnt;
							$_SESSION[$rowname] = $row1;
							echo'<tr>
							<td><input class="ptdetails mytbstyle" type="text" name="ptpatentno[]" placeholder="'.$row1["pid"].'" disabled></td>
							<td><input class="ptdetails mytbstyle" type="text" name="ptpatentno[]" placeholder="'.$row1["patentno"].'" disabled></td>
							<td><input class="ptdetails mytbstyle" type="text" name="pttitle[]" placeholder="'.$row1["ptitle"].'" disabled></td>
							<td><input class="ptdetails mytbstyle" type="text" name="ptassignee[]" placeholder="'.$row1["assignee"].'" disabled></td>
							<td><input class="ptdetails mytbstyle" type="text" name="ptcountry[]" placeholder="'.$row1["country"].'" disabled></td>
							<td><input class="ptdetails mytbstyle" type="text" name="ptyear[]" placeholder="'.$row1["year"].'" disabled></td>
							<td><input class="ptdetails mytbstyle" type="text" name="ptwebadd[]" placeholder="'.$row1["webadd"].'" disabled></td>		
							</tr>';
						}
						$_SESSION['rowcntpp'] = $rowcnt;
					}else{
						echo "<tr><td class='mytbstyle'>NA</td></tr>";
					}
					echo '</table>';
				?>
			</div>
		</form>
	</div>
</div>