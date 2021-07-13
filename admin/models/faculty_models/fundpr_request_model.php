
<!-- Modal -->
      <div class="modal fade"  id="fundpr_request_data"  role="dialog" >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" style="float: right;" class="close" data-dismiss="modal">&times;</button>
              <h3 class="modal-title">Funded Projects</h3>
            </div>

            <div class="modal-body">
              <form action="uploadContent.php" method="post">

                <div class="form-group">

                  <label for="inputsm">Employee ID</label>
                  <input class="form-control input-lg" id="feid" type="text" name="feid">
                  <br>

                  <label for="inputsm">Organization/ Institute/ University</label>
                  <input class="form-control input-lg" id="fptitle" type="text" name="fptitle">
                  <br>

                   <label for="inputsm">Start Date</label>
                  <input class="form-control input-lg" id="fpicoi" type="text" name="fpicoi">
                  <br>

                   <label for="inputsm">End Date</label>
                  <input class="form-control input-lg" id="fduration" type="text" name="fduration">
                  <br>

                   <label for="inputsm">Duration</label>
                  <input class="form-control input-lg" id="ffamount" type="text" name="ffamount">
                  <br>

                  <label for="inputsm">Amount</label>
                  <input class="form-control input-lg" id="ffegency" type="text" name="ffegency">
                  <br>

                   <label for="inputsm">Status</label>
                  <input class="form-control input-lg" id="fremark" type="text" name="fremark">
                  <br>

                  <center>
                    <br>
                    <button type="submit" class="btn btn-success" name="approve_fundpr">Approve</button>
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