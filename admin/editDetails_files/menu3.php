<div id="menu3" class="container tab-pane fade"><br>
	<div id="experience" class="card mycard" >
		<div class="card-header" align="center">
			<h2>Experience
				<span><button class="btn btn-primary pl-4 pr-4" style=";float: right;" onclick="editexperience()">Edit</button></span>
			</h2>
		</div>

		<form action="uploadContent.php" method="post" onsubmit="return checkeditexperience()">
			<table style="margin-top: 10px; margin-bottom: 10px;width:100%;" class="ml-5 pl-5">
				<tr>
					<td class="NameHeadings mytbstyle">Areas of Interest:</td>
					<td><input class="exdetails" type="text" name="exaoi" placeholder="<?php echo $aoi; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td class="NameHeadings mytbstyle">Teaching Experience:</td>
					<td><input class="exdetails" type="text" name="extexperience" pattern="[0-9]+" title="Enter integer values only" placeholder="<?php echo $texperience; ?>" disabled >
					</td>
				</tr>
				<tr>
					<td class="NameHeadings mytbstyle">Industrial Experience:</td>
					<td><input class="exdetails" type="text" name="exiexperience" pattern="[0-9]+" title="Enter integer values only" placeholder="<?php echo $iexperience; ?>" disabled >
					</td>
				</tr>
			</table>
			<div class="m-3" align="center" style="margin-top: 0px;">
				<input type="submit" name="exsubmit" value="Update" class="btn btn-success">
			</div>
		</form>
	</div>
</div>