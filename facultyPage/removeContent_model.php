<!-- Modal -->
<div class="modal fade" id="removeContent_model" role="dialog" >
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h3 class="modal-title">Remove Content</h3>
      </div>

      <div class="modal-body">

        <form action="uploadContentf.php" method="post">
          <div class="form-group">

            <label for="inputsm">Content ID<span style="color: red;"> *</span></label>
            <input class="form-control input-sm" id="inputsm" type="text" name="content_id" required="">
            <br>

            <center>
              <br>
              <button type="submit" class="btn btn-success" name="removeContent">Remove Content</button>
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