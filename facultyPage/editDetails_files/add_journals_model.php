<!-- The Modal Add new journal -->
		<div class="modal fade" id="add_journal_model">
		  <div class="modal-dialog modal-dialog-centered modal-lg">
		    <div class="modal-content">

		      <!-- Modal Header -->
		      <div class="modal-header">
		        <h4 class="modal-title">Add Journal</h4>
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>
		      
		      <!-- Modal body -->
		      <div class="modal-body pl-4 pr-4 pt-2 pb-2">
                  <p class="mandatory" style="color:red">(* All Fields Are Required!)</p>
		        <form action="uploadContentf.php" method="POST">
				  
				  <div class="form-group">
				   	<label for="level">Journal Title:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="journaltitle" required="true">
				  </div>

				  <div class="form-group">
				    <label for="level">Journal Type:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="journaltype" required="true">
				  </div>

				  <div class="form-group">
				    <label for="level">Year of Publication:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="year" required="true">
				  </div>

				  <div class="form-group">
				    <label for="level">Journal Details:<span class="mandatory">*</span></label><br>	
				    <input class="form-control" rows="10" name="details" required="true"> 
				  </div>
				 
				  <button type="submit" name="submitJournal" class="btn btn-primary">Submit</button>
				</form>

		      </div>

		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      </div>

		    </div>
		  </div>
		</div>