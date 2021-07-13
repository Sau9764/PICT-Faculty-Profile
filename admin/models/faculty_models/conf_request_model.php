


<!-- Modal -->
      <div class="modal fade"  id="conf_request_data"  role="dialog" >
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
                  <input class="form-control input-lg" id="eid" type="text" name="eid">
                  <br>

                  <label for="inputsm">Employee Name</label>
                  <input class="form-control input-lg" id="name" type="text" name="name">
                  <br>

                   <label for="inputsm">Conference Title</label>
                  <input class="form-control input-lg" id="title" type="text" name="title">
                  <br>

                   <label for="inputsm">Conference Type</label>
                  <input class="form-control input-lg" id="type" type="text" name="type">
                  <br>

                   <label for="inputsm">Conference Year</label>
                  <input class="form-control input-lg" id="year" type="text" name="year">
                  <br>

                   <label for="inputsm">Conference Details</label>
                  <input class="form-control input-lg" id="detail" type="text" name="detail">
                  <br>

                  <center>
                    <br>
                    <button type="submit" class="btn btn-success" name="approve_conf">Approve</button>
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