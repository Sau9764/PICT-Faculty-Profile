<!-- The Modal Add new Patents -->
		<div class="modal fade" id="add_patent_model">
		  <div class="modal-dialog modal-dialog-centered modal-lg">
		    <div class="modal-content">

		      <!-- Modal Header -->
		      <div class="modal-header">
		        <h4 class="modal-title">Add New Patent Details</h4>
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>
		      
		      <!-- Modal body -->
		      <div class="modal-body p-2 pl-4 pr-4">
                  <p class="mandatory" style="color:red">(* All Fields Are Required!)</p>

		        <form action="uploadContent.php" method="POST">
				  
				  <div class="form-group">
				   	<label for="level">Patent Number:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="patentnumber" required="true">
				  </div>

				  <div class="form-group">
				    <label for="level">Patent Title:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="patenttitle" required="true">
				  </div>

				   <div class="form-group">
				    <label for="level">Page Numbers:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="pagenos" required="true">
				  </div>

				  <div class="form-group">
				    <label for="level">Assignee:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="assignee" required="true">
				  </div>

				  <div class="form-group">
				    <label for="level">Country:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="country" required="true">
				  </div>

				  <div class="form-group">
				    <label for="level">Year:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="year" required="true">
				  </div>

				  <div class="form-group">
				    <label for="level">Web Address:</label><br>	
				    <input type="text" class="form-control" id="email" name="webaddress">
				  </div>
				 
				  <button type="submit" name="submitPatent" class="btn btn-primary">Submit</button>
				</form>

		      </div>

		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      </div>

		    </div>
		  </div>
		</div>
