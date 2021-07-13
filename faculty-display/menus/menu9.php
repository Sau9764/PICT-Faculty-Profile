<div id="menu9" class="container tab-pane fade"><br>
                          <div class="card mycard" id="consultancy">

				<div class="card-header" align="center">
					<h2>Consultancy Details</h2>
				</div>
			
				<form action="uploadContent.php" method="post" onsubmit="return checkeditconsul()">
					<div class="card-body">
						<?php
							echo '<table class="table-striped table-bordered card-body table-responsive" style="width: 100%;">';
							$sql1 = "SELECT * FROM consultancy WHERE eid = '$eid'";
							$result1 = $conn->query($sql1);
							if($result1->num_rows>0)
							{
								echo'
									<h5>Total Number of Consultancy Records : <a href="#">'.$result1->num_rows.'</a></h5>
									<tr>
									<th>ID. </th>
									<th class="mytbstyle">Industry/Organization/Institute/University</th>
									<th>Start Date</th>
									<th>End Date</th>
									<th>Duration</th>
									<th>Amount</th>
									<th>Status</th>
									<th>Details</th>
									<th></th>		
									</tr>';
								$i=1;
								$rowcnt = 0;
								while($row1 = $result1->fetch_assoc())
								{
									$rowcnt = $rowcnt + 1;
									$rowname = "rowcd ".$rowcnt;
									$_SESSION[$rowname] = $row1;
									echo'<tr>
									<td><input class="conddetails mytbstyle" type="text" name="condioiu[]" placeholder="'.$row1["csid"].'" disabled></td>
									<td><input class="conddetails mytbstyle" type="text" name="condioiu[]" placeholder="'.$row1["ioiu"].'" disabled></td>
									<td><input class="conddetails mytbstyle" type="text" name="condsdate[]" placeholder="'.$row1["sdate"].'" disabled></td>
									<td><input class="conddetails mytbstyle" type="text" name="condedate[]" placeholder="'.$row1["edate"].'" disabled></td>
									<td><input class="conddetails mytbstyle" type="text" name="condduration[]" placeholder="'.$row1["duration"].'" disabled></td>
									<td><input class="conddetails mytbstyle" type="text" name="condamount[]" placeholder="'.$row1["amount"].'" disabled></td>
									<td><input class="conddetails mytbstyle" type="text" name="condstatus[]" placeholder="'.$row1["status"].'" disabled></td>
									<td><input class="conddetails mytbstyle" type="text" name="conddetails[]" placeholder="'.$row1["details"].'" disabled></td>
									</tr>';

								}
								$_SESSION['rowcntcd'] = $rowcnt;

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
                        
                        