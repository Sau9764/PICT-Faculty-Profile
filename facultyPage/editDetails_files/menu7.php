<div id="menu7" class="container tab-pane fade"><br>
                          <div class="card mycard" id="conference" style="margin-bottom: 10px;">
				<div class="card-header" align="center">
					<h2>Conferences Details
						<span>
							<button class="personalclick btn btn-primary" data-toggle="modal" data-target="#add_conf_model" style="margin: 5px;float: right;">
								Add new
							</button>
						</span>
					</h2>
				</div>
				<form action="uploadContentf.php" method="post" onsubmit="return checkeditconferences()">
					<div class="card-body">
						<?php
						echo '<table class="table-striped table-bordered table-responsive card-body"  style="width: 100%;">';
						$sql1 = "SELECT * FROM conferences WHERE eid = '$eid'";
						$result1 = $conn->query($sql1);
						if($result1->num_rows>0)
						{
							echo'<h5>Total Number of Conferences: <a href="#">'.$result1->num_rows.'</a></h5>
							
								<tr>
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