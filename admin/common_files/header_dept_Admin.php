<style type="text/css">
  .header ul {
    list-style-type: none;
    display: flex;
    width: auto;
  }
  .header li {
    padding: 10px 20px;
  }
  .header li:hover {
    color: #fff;
    background-color: #2d2a2a;
  }
 .header a:hover {
  color: #fff;
  text-decoration: none;
 }

</style>

<div class="container-fluid" style="padding-top: 30px; padding-bottom: 30px; color:#1a237e; background-image: url('../images/BodyBG.jpg'); background-attachment: fixed; background-size: 100% 100%; background-repeat: no-repeat; ">

  <div class="row" >
    <div class="col-md-2 col-lg-2"></div>
    <div class="col-md-1 col-lg-1">
      <img src="../images/logo.png" align="center"/>
    </div>
    <div class="col-md-6 col-lg-6 col-xs-12 header" align="center" >
      <div style="text-align: center;">
        <b>
          <p>Society for Computer Technology and Research's</p>
          <h2 class="media-heading">Pune Institute of Computer Technology</h2>
          <p>Affiliated to university of Pune, AICTE Approved, NACC Accredited, ISO 9001:2015</p>

      </div>
      <hr style="border-top: 1px solid #000; width: 70%">
      <ul>
        <a href="dept_admin.php"><li>Home</li></a>
        <a data-toggle="modal" href="#addFaculty"><li>Add Faculty</li></a>
        <a data-toggle="modal" href="#removeFaculty"><li>Remove Faculty</li></a>
        <a href="request_data_change.php"><li>Requests</li></a>
        <a href="../index.php" onclick="signOut();"><li>Sign out</li></a>
      </ul>
      </b>     
    </div>
    <div class="col-md-2 col-lg-2"></div>
  </div>
</div>