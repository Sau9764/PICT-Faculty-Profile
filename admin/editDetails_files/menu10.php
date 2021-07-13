<div id="menu10" class="container tab-pane fade"><br>
	<div class="card mycard" id="CVupload">

		<form action="uploadContent.php" method="post" enctype="multipart/form-data">

			<div class="card-header" align="center"><h2>Curriculum Vitae</h2></div>
			<div class="card-body" align="center">
			<p><a href="/faculty/facultyPage/<?php echo($cv) ?>" target="_blank">Click</a> to view Complete CV</p>
			<input class="btn btn-info" type="file" accept="application/pdf" name="fileToUpload" id="fileToUpload" required="">
			</div>
			<div class="m-3" align="center">
			<input type="submit" name="ccvsubmit" value="Update" class="btn btn-success">
			</div>					
		</form>



	</div>

</div>