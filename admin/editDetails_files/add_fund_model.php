	<!-- The Modal Add new fundedrp -->
		<div class="modal fade" id="add_fund_model">
		  <div class="modal-dialog modal-dialog-centered modal-lg">
		    <div class="modal-content">

		      <!-- Modal Header -->
		      <div class="modal-header">
		        <h4 class="modal-title">Add Research Project</h4>
		        
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		         
		      </div>
		      
		      <!-- Modal body -->
		      <div class="modal-body p-2 pl-4 pr-4">
                  <p class="mandatory" style="color:red">(* All Fields Are Required!)</p>

		        <form action="uploadContent.php" method="POST">
				  <div class="form-group">
				   	<label for="level">Project Title:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="title" required="true">
				  </div>

				  <div class="form-group">
				    <label for="level">PI & CO-PI:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="picoi" required="true">
				  </div>

				   <div class="form-group">
				    <label for="level">Duration:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="duration" required="true">
				  </div>

				  
				  <div class="form-group">
				    <label for="level">Funding Amount:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="famount" required="true">
				  </div>

				  <div class="form-group">
				    <label for="level">Funding Agency:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="fagency" required="true">
				  </div>

				  <div class="form-group">
				    <label for="level">Remark:</label><br>	
				    <input class="form-control" name="remark" rows="5">
				  </div>

				 
				  <button type="submit" name="submitFundedrp" class="btn btn-primary">Submit</button>
				</form>

		      </div>

		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      </div>

		    </div>
		  </div>
		</div>