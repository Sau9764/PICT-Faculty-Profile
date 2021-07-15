<div id="menu8" class="container tab-pane fade"><br>
                            

		<div class="card mycard" id="frp">
				<div class="card-header" align="center">
					<h2>Funded Research Projects

						<span>
							<button class="personalclick btn btn-primary" data-toggle="modal" data-target="#add_fund_model" style="margin: 5px;float: right;">
								Add Research Project
							</button>
						</span>

					</h2>
				</div>
				<form action="uploadContentf.php" method="post" onsubmit="return checkeditfrp()">
					<div class="card-body">
						<?php
							echo '<table class="table-striped table-bordered card-body table-responsive" style="width: 100%;">';
							$sql1 = "SELECT * FROM fundedrp WHERE eid = '$eid'";
							$result1 = $conn->query($sql1);
							if($result1->num_rows>0)
							{
								echo'<p>Total Number of projects: <a href="#">'.$result1->num_rows.'</a></p>
									<tr>
									<th>Sr.No.</th>
									<th class="mytbstyle">Project Title</th>
									<th>PI & CO-PI</th>
									<th>Duration</th>
									<th>Funding Amount</th>
									<th>Funding Agency</th>
									<th>Remark</th>			
									</tr>';
								$i=1;
								$rowcnt = 0;
								while($row1 = $result1->fetch_assoc())
								{
									$rowcnt = $rowcnt + 1;
									$rowname = "rowfrp".$rowcnt;
									$_SESSION[$rowname] = $row1;
									echo'<tr>
									<td class="mytbstyle">'.$i.'</td>
									<td><input class="frpdetails mytbstyle" type="text" name="frptitle[]" placeholder="'.$row1["ptitle"].'" disabled></td>
									<td><input class="frpdetails mytbstyle" type="text" name="frpicoi[]" placeholder="'.$row1["picoi"].'" disabled></td>
									<td><input class="frpdetails mytbstyle" type="text" name="frpduration[]" placeholder="'.$row1["duration"].'" disabled></td>
									<td><input class="frpdetails mytbstyle" type="text" name="frpfamount[]" placeholder="'.$row1["famount"].'" disabled></td>
									<td><input class="frpdetails mytbstyle" type="text" name="frpfegency[]" placeholder="'.$row1["fegency"].'" disabled></td>
									<td><input class="frpdetails mytbstyle" type="text" name="frpremark[]" placeholder="'.$row1["remark"].'" disabled></td>
									</tr>';
								}
								$_SESSION['rowcntfrp'] = $rowcnt;
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