<!-- Modal -->
<div class="modal fade" id="delete_journal_model" role="dialog" >
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h3 class="modal-title">Remove Journals</h3>
          <p style="color: red;">(* indicates the field is mandatory)</p>
        </center>
        
      </div>

      <div class="modal-body">

        <form action="uploadContent.php" method="post">
          <div class="form-group">

            <label for="inputsm">Enter ID of Journal<span style="color: red;"> *</span></label>
            <input class="form-control input-sm" id="inputsm" type="text" name="j_id" required="">
            <br>
            <center>
              <br>
              <button type="submit" class="btn btn-success" name="removejournal">Remove</button>
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