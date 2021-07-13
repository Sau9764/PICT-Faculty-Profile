


<!-- Modal -->
      <div class="modal fade"  id="view_request_data"  role="dialog" >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" style="float: right;" class="close" data-dismiss="modal">&times;</button>
              <h3 class="modal-title">Newly Added Contents</h3>
            </div>

            <div class="modal-body">
              <form action="uploadContent.php" method="post">

                <div class="form-group">

              
                  <label for="inputsm">Employee ID</label>
                  <input class="form-control input-lg" id="req_id" type="text" name="eid">
                  <br>

                  <label for="inputsm">Employee Name</label>
                  <input class="form-control input-lg" id="req_name" type="text" name="name">
                  <br>

                   <label for="inputsm">Employee Contact</label>
                  <input class="form-control input-lg" id="req_cont" type="text" name="conatct">
                  <br>

                   <label for="inputsm">Employee Email</label>
                  <input class="form-control input-lg" id="req_email" type="text" name="email">
                  <br>

                   <label for="inputsm">Employee Responsibility</label>
                  <input class="form-control input-lg" id="req_res" type="text" name="resp">
                  <br>

                  <center>
                    <br>
                    <button type="submit" class="btn btn-success" name="approve">Approve</button>
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