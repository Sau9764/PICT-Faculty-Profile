<div id="menu7" class="container tab-pane fade"><br>
                          <div class="card mycard" id="conference" style="margin-bottom: 10px;">
				<div class="card-header" align="center">
					<h2>Conferences Details</h2>
				</div>
				<form action="uploadContent.php" method="post" onsubmit="return checkeditconferences()">
					<div class="card-body">
						<?php
						echo '<table class="table-striped table-responsive card-body"  style="width: 100%;">';
						$sql1 = "SELECT * FROM conferences WHERE eid = '$eid'";
						$result1 = $conn->query($sql1);
						if($result1->num_rows>0)
						{
							echo'<h5>Total Number of Conference Records: <a href="#">'.$result1->num_rows.'</a></h5>
							
								<tr>
									<th class="mytbstyle">ID. </th>
									<th class="mytbstyle">Conference Title</th>
									<th>Type</th>
									<th>Year</th>
									<th>Details</th>
								</tr>';
								$rowcnt = 0;
								while($row1 = $result1->fetch_assoc())
								{
									$rowcnt = $rowcnt + 1;
									$rowname = "rowc".$rowcnt;
									$_SESSION[$rowname] = $row1;
			
									echo'<tr>
										<td><input class="cdetails mytbstyle" type="text" name="ctitle[]" placeholder="'.$row1["cid"].'" disabled></td>
										<td><input class="cdetails mytbstyle" type="text" name="ctitle[]" placeholder="'.$row1["ctitle"].'" disabled></td>
										<td><input class="cdetails mytbstyle" type="text" name="ctype[]" placeholder="'.$row1["ctype"].'" disabled></td>
										<td><input class="cdetails mytbstyle" type="text" name="cyear[]" placeholder="'.$row1["year"].'" disabled></td>
										<td><input class="cdetails mytbstyle" name="cdetails[]" placeholder="'.$row1["cdetails"].'" disabled ></td>
									</tr>';
								}
								$_SESSION['rowcntc'] = $rowcnt;
				
						}
						else
						{
							echo "<tr><td class='mytbstyle'>NA</td></tr>";
						}
						echo '</table>';
						?>
					</div>
		
				</form>
				
			</div>

			

                        </div>