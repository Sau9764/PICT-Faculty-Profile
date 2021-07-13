
<!-- Modal -->
      <div class="modal fade"  id="patent_request_data"  role="dialog" >
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
                  <input class="form-control input-lg" id="peid" type="text" name="peid">
                  <br>

                  <label for="inputsm">Title</label>
                  <input class="form-control input-lg" id="pptitle" type="text" name="pptitle">
                  <br>

                   <label for="inputsm">Year</label>
                  <input class="form-control input-lg" id="pyear" type="text" name="pyear">
                  <br>

                   <label for="inputsm">Country</label>
                  <input class="form-control input-lg" id="pcountry" type="text" name="pcountry">
                  <br>

                   <label for="inputsm">Assignee</label>
                  <input class="form-control input-lg" id="passignee" type="text" name="passignee">
                  <br>

                   <label for="inputsm">Patent Number</label>
                  <input class="form-control input-lg" id="ptpatentno" type="text" name="ptpatentno">
                  <br>

                   <label for="inputsm">Patent Page Number</label>
                  <input class="form-control input-lg" id="ppagenos" type="text" name="ppagenos">
                  <br>

                   <label for="inputsm">Patent Web Address</label>
                  <input class="form-control input-lg" id="pwebadd" type="text" name="pwebadd">
                  <br>

                  <center>
                    <br>
                    <button type="submit" class="btn btn-success" name="approve_patent">Approve</button>
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