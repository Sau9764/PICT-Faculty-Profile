
<!-- Modal -->
      <div class="modal fade"  id="book_request_data"  role="dialog" >
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
                  <input class="form-control input-lg" id="beid" type="text" name="beid">
                  <br>

                  <label for="inputsm">Book Name</label>
                  <input class="form-control input-lg" id="bname" type="text" name="bname">
                  <br>

                   <label for="inputsm">Publication</label>
                  <input class="form-control input-lg" id="bpub" type="text" name="bpub">
                  <br>

                   <label for="inputsm">Year</label>
                  <input class="form-control input-lg" id="byear" type="text" name="byear">
                  <br>

                   <label for="inputsm">Description</label>
                  <input class="form-control input-lg" id="bdesc" type="text" name="bdesc">
                  <br>

                  <center>
                    <br>
                    <button type="submit" class="btn btn-success" name="approve_book">Approve</button>
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