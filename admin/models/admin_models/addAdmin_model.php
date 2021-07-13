<!-- Modal -->
<div class="modal fade" id="addAdmin_model" role="dialog" >
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Add Admin</h3>
        <p style="color: red;">(* indicates the field is mandatory)</p>
      </div>

      <div class="modal-body">
<!-- 
emp_id
fullname
dept
email -->
        <form action="uploadContent.php" method="post">
          <div class="form-group">

            <label for="inputsm">EMP ID<span style="color: red;"> *</span></label>
            <input class="form-control input-sm" id="inputsm" type="text" name="emp_id" required="">
            <br>

            <label for="inputsm">Full Name<span style="color: red;"> *</span></label>
            <input class="form-control input-sm" id="inputsm" type="text" name="fullname" required="">
            <br>

            <label>Department<span style="color: red;"> *</span></label>
            <select name="dept" class="form-control input-sm" id="selectDept" required="">
              <option value="First Year Engineering">First Year Engineering</option>
              <option value="Computer Engineering">Computer Engineering</option>
              <option value="Information Technology">Information Technology</option>
              <option value="Electronics and Telecommunication">Electronics and Telecommunication </option>
            </select>
            <br>

            <label for="inputsm">Email-ID<span style="color: red;"> *</span></label>
            <input class="form-control input-sm" id="inputsm" type="email" name="email" required="">
            <br>

            <center>
              <br>
              <button type="submit" class="btn btn-success" name="addAdmin">Add Admin</button>
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