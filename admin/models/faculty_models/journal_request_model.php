
<!-- Modal -->
      <div class="modal fade"  id="journal_request_data"  role="dialog" >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" style="float: right;" class="close" data-dismiss="modal">&times;</button>
              <h3 class="modal-title">Journals Details</h3>
            </div>

            <div class="modal-body">
              <form action="uploadContent.php" method="post">

                <div class="form-group">

                  <label for="inputsm">Employee ID</label>
                  <input class="form-control input-lg" id="jeid" type="text" name="jeid">
                  <br>

                  <label for="inputsm">Organization/ Institute/ University</label>
                  <input class="form-control input-lg" id="jtitle" type="text" name="jtitle">
                  <br>

                   <label for="inputsm">Start Date</label>
                  <input class="form-control input-lg" id="jtype" type="text" name="jtype">
                  <br>

                   <label for="inputsm">End Date</label>
                  <input class="form-control input-lg" id="jyear" type="text" name="jyear">
                  <br>

                   <label for="inputsm">Duration</label>
                  <input class="form-control input-lg" id="jdescription" type="text" name="jdescription">
                  <br>

                  <center>
                    <br>
                    <button type="submit" class="btn btn-success" name="approve_jrnal">Approve</button>
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

      <script type="text/javascript">

        var dept = "<?php echo $dept; ?>";
        document.getElementById("selectDept").value = dept;

      </script>