<div id="menu1" class="container tab-pane fade"><br>
	<div id="personaltab" class="card mycard" >
		<div class="card-header" align="center">
			<h2>Personal Details</h2>
		</div>

		<div class="col-md-12 ">
			<form action="uploadContent.php" method="post" onsubmit ="return checkeditpersonal()">
				<div class="card-body mt-3 " style=" padding: 0px;" align="center">
					<table style="margin-top: 10px; margin-bottom: 10px;width:100%;">
						
						<tr>
							<td class="NameHeadings mytbstyle">Name:</td>
							<td><input class="pdetails-no-drop" style="width:100%; cursor: no-drop;" type="text" name="pdname" placeholder="<?php echo $fullname; ?>" disabled></td>
						</tr>
						<tr>
							<td class="NameHeadings mytbstyle">Phone:</td><td>
							<input class="pdetails" style="width:100%;" type="text" name="pdphone" placeholder="<?php echo $contact; ?>" disabled></td>
						</tr>
						<tr>
							<td class="NameHeadings mytbstyle">Department:</td>
							<td><input class="pdetails-no-drop" type="text" style="width:100%; cursor: no-drop;" name="pddept" placeholder="<?php echo $department; ?>" disabled></td>
						</tr>
						<tr>
							<td class="NameHeadings mytbstyle">Designation:</td><td>
							<input class="pdetails-no-drop" type="text" style="width:100%; cursor: no-drop;" name="pddesg" placeholder="<?php echo $designation; ?>" disabled></td>
						</tr>
						<tr>
							<td class="NameHeadings mytbstyle">Date of joining:</td><td>
							<?php
								if($doj == ''){
									?>
										<input class="pdetails-no-drop" style="width:100%; cursor: no-drop;" type="text" name="pddoj" placeholder="DD-MM-YYYY"  disabled></td>
									<?php
								}else{
									?>
										<input class="pdetails-no-drop" style="width:100%;" type="text" name="pddoj" placeholder="<?php echo $doj; ?>"  disabled></td>
									<?php
								}
							?>
							
						</tr>
						<tr>
							<td class="NameHeadings mytbstyle">Responsibility:</td><td>
							<input class="pdetails" style="width:100%;" type="text" name="pdresp" placeholder="<?php echo $responsibility; ?>" disabled></td>
						</tr>
					</table>
				</div>
			</form>
		</div>
	</div>
</div>
