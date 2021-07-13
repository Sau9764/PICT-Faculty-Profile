
<!-- Modal -->
      <div class="modal fade"  id="consl_request_data"  role="dialog" >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" style="float: right;" class="close" data-dismiss="modal">&times;</button>
              <h3 class="modal-title">Newly Added Conferences</h3>
            </div>

            <div class="modal-body">
              <form action="uploadContent.php" method="post">

                <div class="form-group">

                  <label for="inputsm">Employee ID</label>
                  <input class="form-control input-lg" id="ceid" type="text" name="ceid">
                  <br>

                  <label for="inputsm">Organization/ Institute/ University</label>
                  <input class="form-control input-lg" id="cioiu" type="text" name="cioiu">
                  <br>

                   <label for="inputsm">Start Date</label>
                  <input class="form-control input-lg" id="csdate" type="text" name="csdate">
                  <br>

                   <label for="inputsm">End Date</label>
                  <input class="form-control input-lg" id="cedate" type="text" name="cedate">
                  <br>

                   <label for="inputsm">Duration</label>
                  <input class="form-control input-lg" id="cduration" type="text" name="cduration">
                  <br>

                  <label for="inputsm">Amount</label>
                  <input class="form-control input-lg" id="camount" type="text" name="camount">
                  <br>

                   <label for="inputsm">Status</label>
                  <input class="form-control input-lg" id="cstatus" type="text" name="cstatus">
                  <br>

                   <label for="inputsm">Details</label>
                  <input class="form-control input-lg" id="cdetails" type="text" name="cdetails">
                  <br>

                  <center>
                    <br>
                    <button type="submit" class="btn btn-success" name="approve_consl">Approve</button>
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