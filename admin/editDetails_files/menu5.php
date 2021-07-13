<div id="menu5" class="container tab-pane fade"><br>
	<div class="card mycard" id="books" style="margin-bottom: 10px;">
		<div class="card-header" align="center">
			<h2>Books Details

				<span><button class="personalclick btn btn-danger ml-2" data-toggle="modal" data-target="#delete_books_model" style=";float: right;" onclick="editpersonal()">Delete Book</button></span>

				<span><button class="personalclick btn btn-primary ml-2" data-toggle="modal" data-target="#add_books_model" style=";float: right;" onclick="editpersonal()">Add Book</button></span>
			</h2>
		</div>

		<form action="uploadContent.php" method="post" onsubmit="return checkeditbooks()">
			<div class="card-body">
				<?php
					echo '<table class="table-striped table-responsive card-body" style="width: 100%;">';
					$sql1 = "SELECT * FROM books WHERE eid = '$eid'";
					$result1 = $conn->query($sql1);						

					if($result1->num_rows>0){
						echo'<h5>Total Number of Books Records: <a href="#">'.$result1->num_rows.'</a></h5>

						<tr>
						<th class="mytbstyle">ID. </th>
						<th class="mytbstyle">Book Name</th>
						<th>Publication</th>
						<th>Published year</th>
						<th>Details</th>

						</tr>';
						$rowcnt = 0;
						while($row1 = $result1->fetch_assoc()){
							$rowcnt = $rowcnt + 1;
							$rowname = "rowb".$rowcnt;
							$_SESSION[$rowname] = $row1;
							echo'<tr>
							<td><input class="bdetails mytbstyle" type="text" name="bname[]" placeholder="'.$row1["bid"].'" disabled></td>
							<td><input class="bdetails mytbstyle" type="text" name="bname[]" placeholder="'.$row1["bname"].'" disabled></td>
							<td><input class="bdetails mytbstyle" type="text" name="bpub[]" placeholder="'.$row1["publication"].'" disabled></td>
							<td><input class="bdetails mytbstyle" type="text" name="byear[]" placeholder="'.$row1["year"].'" disabled></td>
							<td><input class="bdetails mytbstyle" name="bdes[]" placeholder="'.$row1["description"].'" disabled ></td>
							</tr>';
						}
						$_SESSION['rowcntb'] = $rowcnt;
					}else{
						echo "<tr><td class='mytbstyle'>NA</td></tr>";
					}
					echo '</table>';
				?>
			</div>	
		</form>
	</div>
</div>