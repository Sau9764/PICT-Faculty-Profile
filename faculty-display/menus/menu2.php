<div id="menu2" class="container tab-pane fade"><br>
	<div id="qualifications" class="card mycard">
		<div class="card-header" align="center">
			<h2>Qualifications</h2>
		</div>

		<form action="uploadContent.php" method="post" onsubmit ="return checkeditqualifications()">
			<div class="card-body mt-3 mb-3">
				<table class="table-striped card-body table-responsive" id="qualificationstable">
					<?php
						$sql1 = "SELECT * FROM qualifications WHERE eid = '$eid'";
						$result1 = $conn->query($sql1);
						if($result1->num_rows > 0){
							echo'<h5>Total Number of Qualifications Records : <a href="#">'.$result1->num_rows.'</a></h5>';
							echo '<tr>
							<th class="mytbstyle"> ID. </th>
							<th>Level</th>
							<th>Degree</th>
							<th>Specialization</th>
							<th>Name of University</th>
							<th>Name of College</th>
							<th>Year of Passing</th>
							</tr>';
							$rowcnt = 0;
							while ($row1 = $result1->fetch_assoc()) {
								$rowcnt = $rowcnt + 1;
								$rowname = "rowq".$rowcnt;
								$_SESSION[$rowname] = $row1;



								echo'<tr>
								<td><input class="qdetails mytbstyle" type="text" name="qlevel[]" placeholder="'.$row1["qid"].'" disabled> </td>
								<td><input class="qdetails mytbstyle" type="text" name="qlevel[]" placeholder="'.$row1["level"].'" disabled></td>
								<td><input class="qdetails mytbstyle" type="text" name="qdegree[]" placeholder="'.$row1["degree"].'" disabled></td>
								<td><input class="qdetails mytbstyle" type="text" name="qspec[]" placeholder="'.$row1["specialization"].'" disabled></td>
								<td><input class="qdetails mytbstyle" type="text" name="quname[]" placeholder="'.$row1["uname"].'" disabled></td>
								<td><input class="qdetails mytbstyle" type="text" name="qcollege[]" placeholder="'.$row1["college"].'" disabled></td>
								<td><input class="qdetails mytbstyle" type="text" name="qyear[]" placeholder="'.$row1["year"].'" disabled></td>
								</tr>';
							}
							$_SESSION['rowcntq'] = $rowcnt;
						} else {
							echo "<tr><td class='mytbstyle'>NA</td></tr>";
						}
					?>
				</table>
			</div>
		</form>
	</div>
</div>