


<!-- Modal -->
      <div class="modal fade"  id="content_request_data"  role="dialog" >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" style="float: right;" class="close" data-dismiss="modal">&times;</button>
              <h3 class="modal-title">Newly Added Content</h3>
            </div>

            <div class="modal-body">
              <form action="uploadContent.php" method="post">

                <div class="form-group">
              
                  <label for="inputsm"> ID</label>
                  <input class="form-control input-lg" id="coeid" type="text" name="coeid">
                  <br>

                  <label for="inputsm">Title</label>
                  <input class="form-control input-lg" id="cotitle" type="text" name="cotitle">
                  <br>

                   <label for="inputsm">Content Type</label>
                  <input class="form-control input-lg" id="cocontenttype" type="text" name="cocontenttype">
                  <br>

                   <label for="inputsm">Problem Statement</label>
                  <input class="form-control input-lg" id="coproblem" type="text" name="coproblem">
                  <br>

                   <label for="inputsm">Description</label>
                  <input class="form-control input-lg" id="codescription" type="text" name="codescription">
                  <br>

                   <label for="inputsm">Employee ID</label>
                  <input class="form-control input-lg" id="coemail" type="text" name="coemail">
                  <br>

                  <label for="inputsm">PDF Link</label>
                  <input class="form-control input-lg" id="copdf" type="text" name="copdf">
                  <br>

                  <center>
                    <br>
                    <button type="submit" class="btn btn-success" name="approve_content">Approve</button>
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