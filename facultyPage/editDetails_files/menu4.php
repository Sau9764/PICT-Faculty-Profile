<div id="menu4" class="container tab-pane fade"><br>
	<div class="card mycard" id="journals" style="margin-bottom: 10px;">
		<div class="card-header" align="center">
			<h2>Journal Details
				<span><button class="personalclick btn btn-primary ml-2" data-toggle="modal" data-target="#add_journal_model" style="float: right;">Add Journal</button></span>
				
			</h2>
		</div>

		<form action="uploadContentf.php" method="post" onsubmit="return checkeditjournal()">
			<div class="card-body">
				<?php
					$sql1 = "SELECT * from journals WHERE eid = '$eid'";
					$result1 = $conn->query($sql1);
					echo '<table class="table-striped card-body table-responsive"  style="width: 100%;">';
					if($result1->num_rows>0){
						echo'<h5>Total Number of Journals: <a href="#">'.$result1->num_rows.'</a></h5>
							<tr>
								<th class="mytbstyle" >Journal Title</th>
								<th class="mytbstyle" >Journal Type</th>
								<th class="mytbstyle" >Journal Year</th>
								<th class="mytbstyle" >Journal Details</th>
							</tr>';
						$rowcnt = 0;
						while($row1 = $result1->fetch_assoc()){
							$rowcnt = $rowcnt + 1;
							$rowname = "rowj".$rowcnt;
							$_SESSION[$rowname] = $row1;
							echo'<tr>
							<td><input class="jdetails mytbstyle" type="text" name="jtitle[]" placeholder="'.$row1["title"].'" disabled></td>
							<td><input class="jdetails mytbstyle" type="text" name="jtype[]" placeholder="'.$row1["type"].'" disabled></td>
							<td><input class="jdetails mytbstyle" type="text" name="jyear[]" placeholder="'.$row1["year"].'" disabled></td>
							<td><input class="jdetails mytbstyle" type="text" name="jdes[]" placeholder="'.$row1["description"].'" disabled ></td>
							</tr>';
						}	
						$_SESSION['rowcntj'] = $rowcnt;
					}else{
						echo "<tr><td class='mytbstyle'>NA</td></tr>";
					}
					echo'</table>';
				?>
			</div>	
		</form>
	</div>
</div>
