<!-- Modal -->
      <div class="modal fade" id="addFaculty" role="dialog" >
        <div class="modal-dialog  modal-dialog-centered" role="document">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" style="float: right;" class="close" data-dismiss="modal">&times;</button>
              <h3 class="modal-title">Add faculty</h3>
              <br>
              <p style="color: red;">(* indicates the field is mandatory)</p>
            </div>

            <div class="modal-body">
              <form action="uploadContent.php" method="post">

                <div class="form-group">

                  <select name="in" required="" class="form-control input-sm">
                    <option value="Mr.">Mr.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Dr.">Dr.</option>
                  </select>
                  <br>

                  <label for="inputsm">First Name<span style="color: red;"> *</span></label>
                  <input class="form-control input-sm" id="inputsm" type="text" name="name" required="">
                  <br>

                  <label for="inputsm">Middle name</label>
                  <input class="form-control input-sm" id="inputsm" type="text" name="mname">
                  <br>

                  <label for="inputsm">Last Name<span style="color: red;"> *</span></label>
                  <input class="form-control input-sm" id="inputsm" type="text" name="sname" required="">
                  <br>

                  <label for="inputsm">Employee id<span style="color: red;"> *</span></label>
                  <input class="form-control input-sm" id="inputsm" type="text" name="eno" required="">
                  <br>

                  <label>Department<span style="color: red;"> *</span></label>
                  <select name="dep" style="cursor: no-drop;" class="form-control input-sm" id="selectDept">
                    <option value="<?php echo $dept; ?>"><?php echo $dept; ?></option>
                  </select>
                  <br>

                  <label>Designation<span style="color: red;"> *</span></label>
                  <select name="des" id="desig" onchange="ftype()" class="form-control input-sm">
                    <option value="HOD">HOD</option>
                    <option value="Professor">Professor</option>
                    <option value="Associate Professor">Associate Professor</option>
                    <option value="Assistant Professor">Assistant Professor</option>
                    <option value="Adjunct Professor">Adjunct Professor</option>
                  </select>
                  <br>

                  <label for="inputsm">Date of Joining:<span style="color: red;"> *</span></label>
                  <input class="form-control input-sm" id="inputsm" type="Date" name="date">
                  <br>

                  <label for="inputsm" style="display: none;" id="edate1">End Date:<span style="color: red;"> *</span></label>
                  <input style="display: none;" id="edate2" class="form-control input-sm" id="inputsm" type="Date" name="edate">
                  <br>

                  <label for="inputsm">Email-ID<span style="color: red;"> *</span></label>
                  <input class="form-control input-sm" id="inputsm" type="email" name="mail">
                  <br>

                  <label for="inputsm">Mobile number<span style="color: red;"> *</span></label>
                  <input class="form-control input-sm" id="inputsm" type="text" name="no" pattern="[0-9]+" title="Enter Contact Number Properly.">
                  <br>

                  <label for="inputsm">Extension no. <span style="color: red;"> *</span></label>
                  <input class="form-control input-sm" id="inputsm" type="text" name="ext" required="">
                  <br>

                  <center>
                    <br>
                    <button type="submit" class="btn btn-success" name="add">Add</button>
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