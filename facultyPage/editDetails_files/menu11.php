<div id="menu11" class="container tab-pane fade"><br>
              <div class="card mycard" id ="other">
<div class="card-header" align="center">
		<h2>Other Details
			<span>
				<button class="btn btn-primary pl-3 pr-3" style="float: right;" onclick="editotherdetails()">
					Edit
				</button>
			</span>
		</h2>
</div>  
<form action="uploadContentf.php" method="post" onsubmit="return checkeditotherdetails()">
	<table class=" mt-3" style="width: 100%; text-align: center;">
		<tr><th></th></tr>
				<tr>
					<td>
						<input class="oddetails" type="text" name="odother" placeholder="<?php echo $other; ?>" disabled style="padding: 10px;">
					</td>
				</tr>
	</table>
	<div class="m-3" align="center" style="margin-top: 0px;">
		<input type="submit" name="odsubmit" value="Update" class="btn btn-success">
	</div>
</form>
</div>
            </div>	