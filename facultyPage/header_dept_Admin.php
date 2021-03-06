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

<script src="../js/bootstrap.min.js"></script>

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
        <a href="index.php"><li>Home</li></a>
        <a  href="content.php"><li>upload Content</li></a>
        <a href="viewassign.php"><li> View Content </li></a>
        <li><a data-toggle="modal" href="#removeContent_model">Remove Content</a></li>
        <!-- <a href="removeContent_model.php"> <li> Remove Content </li> </a> -->
       <!--  <a href="request_data_change.php"><li>Requests</li></a> -->
        <a href="../index.php" onclick="signOut();"><li>Sign out</li></a>
      </ul>
      </b>     
    </div>
    <?php require('removeContent_model.php'); ?>
    <div class="col-md-2 col-lg-2"></div>
  </div>
</div>