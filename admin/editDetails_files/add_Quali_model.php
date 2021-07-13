	<!-- The Modal Add new qualification -->
		<div class="modal fade" id="AddQualiModel" role="dialog" >
		  <div class="modal-dialog modal-dialog-centered modal-lg">
		    <div class="modal-content">

		      <!-- Modal Header -->
		      <div class="modal-header">
		        <h4 class="modal-title">Add Qualification</h4>
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>
		      
		      <!-- Modal body -->
		      <div class="modal-body pl-3 pr-3">
                  <p class="mandatory" style="color:red;">(* All Fields Are Required!)</p>
		        <form action="uploadContent.php" method="POST">

			      <input type="hidden" name="eid" value="<?php echo $eid; ?>">

				  <div class="form-group">
				   	<label for="level">Level:<span class="mandatory">*</span></label><br>	
				    <select name="level" class="myselect form-control" onchange="AdjustDegree(this.id, 'degree')" id="level">
				    	<option value="">Select Level</option>
				    	<option value="Graduate">Graduate</option>
				    	<option value="Post-Graduate">Post-Graduate</option>
				    	<option value="PhD">Phd</option>
				    </select>
				  </div>

				  <div class="form-group">
				    <label for="degree">Degree:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="degree" name="degree" placeholder="ex. BE/B.Tech, ME, etc." >
				  </div>

				  <div class="form-group">
				    <label for="email">Specialization:<span class="mandatory">*</span></label>
				    <input type="text" class="form-control" id="email" name="specialization">
				  </div>

				  <div class="form-group">
				    <label for="email">Name of University:<span class="mandatory">*</span></label>
				    <input type="text" class="form-control" id="email" name="nou">
				  </div>

				  <div class="form-group">
				    <label for="email">Name of College:<span class="mandatory">*</span></label>
				    <input type="text" class="form-control" id="email" name="college">
				  </div>

				  <div class="form-group">
				    <label for="email">Year of Passing:<span class="mandatory">*</span></label>
				    <input type="text" class="form-control" id="email" name="year">
				  </div>
				  <button type="submit" name="submitQualifications" class="btn btn-primary">Submit</button>
				</form>

		      </div>

		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      </div>

		    </div>
		  </div>
		</div>