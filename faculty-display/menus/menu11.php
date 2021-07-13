<div id="menu11" class="container tab-pane fade"><br>
                          <div class="card mycard" id ="other">
			<div class="card-header" align="center">
					<h2>Other Details</h2>
			</div>  
			<form action="uploadContent.php" method="post" onsubmit="return checkeditotherdetails()">
				<table class=" mt-3" style="width: 100%; text-align: center;">
					<tr><th></th></tr>
							<tr>
								<td>
									<input class="oddetails" type="text" name="odother" placeholder="<?php echo $other; ?>" disabled style="padding: 10px;" required="">
								</td>
							</tr>
				</table>
				
			</form>
			<br>
		</div>
                        </div>