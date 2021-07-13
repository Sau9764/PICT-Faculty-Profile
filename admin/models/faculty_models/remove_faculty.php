
      <div class="modal fade" id="removeFaculty" role="dialog" >
        <div class="modal-dialog  modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h3 class="modal-title">Remove faculty</h3>
              <p style="color: red;">(* indicates the field is mandatory)</p>
            </div>

            <div class="modal-body">
              <form action="table_data/delete.php" method="GET">

                <div class="form-group">

                  <label for="inputsm">Enter Employee ID <span style="color: red;"> *</span></label>
                  <input class="form-control input-sm" id="inputsm" type="text" name="eid" required="">
                  <br>

                  <input class="form-control input-sm" id="inputsm" type="hidden" name="dept" required="" value="<?php echo $dept; ?>">

                  <center>
                    <br>
                    <button type="submit" class="btn btn-success" name="add">Remove</button>
                  </center>
                </div>
              </form>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            
          </div>
        </div>
      </div>
      
