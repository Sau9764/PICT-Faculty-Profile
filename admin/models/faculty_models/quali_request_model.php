
<!-- Modal -->
      <div class="modal fade"  id="quali_request_data"  role="dialog" >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" style="float: right;" class="close" data-dismiss="modal">&times;</button>
              <h3 class="modal-title">Patent Details</h3>
            </div>

            <div class="modal-body">
              <form action="uploadContent.php" method="post">

                <div class="form-group">

                  <label for="inputsm">Employee ID</label>
                  <input class="form-control input-lg" id="qeid" type="text" name="qeid">
                  <br>

                  <label for="inputsm">Title</label>
                  <input class="form-control input-lg" id="qlevel" type="text" name="qlevel">
                  <br>

                   <label for="inputsm">Year</label>
                  <input class="form-control input-lg" id="qdegree" type="text" name="qdegree">
                  <br>

                   <label for="inputsm">Country</label>
                  <input class="form-control input-lg" id="qspecialization" type="text" name="qspecialization">
                  <br>

                   <label for="inputsm">Assignee</label>
                  <input class="form-control input-lg" id="quname" type="text" name="quname">
                  <br>

                   <label for="inputsm">Patent Number</label>
                  <input class="form-control input-lg" id="qcollege" type="text" name="qcollege">
                  <br>

                   <label for="inputsm">Patent Page Number</label>
                  <input class="form-control input-lg" id="qyear" type="text" name="qyear">
                  <br>

                  <center>
                    <br>
                    <button type="submit" class="btn btn-success" name="approve_quali">Approve</button>
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