<!-- The Modal Add new consultancy -->
		<div class="modal fade" id="add_cons_model">
		  <div class="modal-dialog modal-dialog-centered modal-lg">
		    <div class="modal-content">

		      <!-- Modal Header -->
		      <div class="modal-header">
		        <h4 class="modal-title">Add Consultancy Details</h4>
		        
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		         
		      </div>
		      
		      <!-- Modal body -->
		      <div class="modal-body p-2 pl-4 pr-4">
                  <p class="mandatory" style="color:red">(* All Fields Are Required!)</p>
		        <form action="uploadContentf.php" method="POST">

				  <div class="form-group">
				   	<label for="level">Industry/Organization/Institute/University:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="ioiu" required="true">
				  </div>

				  <div class="form-group">
				    <label for="level">Start Date:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="sdate" placeholder="DD/MM/YYYY" required="true">
				  </div>

				   <div class="form-group">
				    <label for="level">End Date:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="edate" placeholder="DD/MM/YYYY" required="true">
				  </div>

				  <div class="form-group">
				    <label for="level">Duration:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="duration" required="true">
				  </div>

				  <div class="form-group">
				    <label for="level">Amount Received:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="areceived" required="true">
				  </div>

				  <div class="form-group">
				    <label for="level">Status:</label><br>	
				    <input type="text" class="form-control" id="email" name="status" >
				  </div>

				  <div class="form-group">
				    <label for="level">Consultancy Details:<span class="mandatory">*</span></label><br>	
				    <input class="form-control" name="details" rows="10" required="true">
				  </div>
				  <button type="submit" name="submitConsultancy" class="btn btn-primary">Submit</button>
				</form>

		      </div>

		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      </div>

		    </div>
		  </div>
		</div>