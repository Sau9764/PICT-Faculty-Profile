<?php

  require "connect.php";
  session_start();
  session_unset();
  session_destroy();

  if(empty($_GET['eid'])){
    echo " window.location.href = 'index.php';</script>";
  }else{
    $eid = $_GET['eid'];
  }

  $sql = "SELECT eid,image,email,fullname,contact,acontact,texperience,iexperience,doj,department,designation,responsibility,aoi,other,cv FROM faculty F WHERE F.eid = '$eid'";

  $run = $conn->query($sql);

  if($run->num_rows > 0){

    $row = $run->fetch_assoc();

    $_SESSION['row'] = $row;
    $_SESSION['eidName'] = $eid;  

    $id = $row['eid'];
    $img = $row['image'];
    $fullname = $row['fullname'];
    $contact = $row['contact'];
    $department = $row['department'];
    $designation = $row['designation'];
    $responsibility = $row['responsibility'];
    $aoi = $row['aoi'];
    $doj = $row['doj'];
    $texperience = $row['texperience'];
    $iexperience = $row['iexperience'];
    $other = $row['other'];
    $cv = $row['cv'];
    $email = $row['email'];
  }

  $query="select * from post where email='$email'"; 
  $result = $conn->query($query);

?>

<!DOCTYPE html>
<html>
	<head>
        <!-- heading -->
        <title>Dashboard | PICT-Top Engineering College</title>
        <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />

        <!-- meta data -->
        <meta name="viewport" content="width=device-width, maximum-scale=1">
        <meta name="google-signin-client_id" content="950584802726-k1bd4kegkj9js648s63ngrsokutgrstk.apps.googleusercontent.com">
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 

        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        <link href="css/aos.css" rel="stylesheet">
        <link href="css/indexCss.css" rel="stylesheet">
      
        <!-- JS -->
        <script src="css/bootstrap/jquery.min.js"></script>
        <script src="css/bootstrap/bootstrap.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/platform.js" async defer></script>

        

        <!-- <link rel="stylesheet" href="admin/editDetails_files/editDetails_css.css" > -->
        <script type="text/javascript" src="admin/editDetails_files/editDetails_js.js"></script>

        <script>
            var done = false;
            var clicked = false;

            // When window is loaded
            window.onload = function(){
              clicked = false;
              done = false;
            };

            // init() google api function
            function init(){
              gapi.load('auth2', function() {
                gapi.auth2.init();
                done = true;
              });
            }

            function onSignIn(googleUser) {
              var auth2 = gapi.auth2.getAuthInstance();
              if (auth2.isSignedIn.get()) {
                var profile = auth2.currentUser.get().getBasicProfile();
                Redirect(profile);
              }else {
                console.warn('Not Signed In');
              }
            }

            function Redirect (profile) {
              if(clicked == true){
                var redirectForm = '<form method="POST" id="theForm" action="loginRedirect.php"><input type="hidden" name="email" value='+profile.getEmail()+' /></form>';
                document.getElementById("formDiv").innerHTML = redirectForm;
                document.getElementById("theForm").submit();
              }
              else {
                console.log('Error in redirecting');
              }
            }

            function toggleClick(){
              clicked = true;
            }

        </script>

        <style type="text/css">
          .livesearch {
            max-height: 30vh;
          }
          .nav .active {
            background-color: #0b3c5d;
          }
          
        </style>
        
  </head>


    
    <body>

        <!-- background Image -->
        <div class="bg-image"></div>

        <!-- Navbar Section -->
        <?php require('navbar.php'); ?>
       
       <!-- Principal Name -->
        <div class="row mt-5" style="width:100%;">
            <div class="col-12">
                <center>
                  <h1 class="mt-5" style="color:white;"><b><?php echo $eid; ?></b></h1>
                  <hr style="width:70%;">
                </center>
            </div>
        </div>

       <!-- middle Section -->
        <div class="container-fluid pb-5 mb-5" style="width:85%; background-color: #e0ebff; border-radius:5px;">

          <div class="row mt-5 pt-5 ml-5 mr-5">
            <!-- nav bar content -->
            <div class="col-md-4 ">
              <ul class="nav nav-pills flex-column" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="pill" href="#menu0">Photo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#menu1">Personal Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#menu2">Qualifications</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#menu3">Experience</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#menu4">Journals</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#menu5">Books</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#menu6">Patents</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#menu7">Conference</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#menu8">Funded Research Projects</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#menu9">Consultancy Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#menu10">Upload CV</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#menu11">Other Details</a>
                </li>
              </ul>
            </div>

            <!-- form content -->
            <div class="col-md-8">

              <div class="tab-content">

                <!-- meno 0 -->
                <?php require('faculty-display/menus/menu0.php'); ?>

                <!-- menu 1 -->
                <?php require('faculty-display/menus/menu1.php'); ?>

                <!-- menu 2 -->
                <?php require('faculty-display/menus/menu2.php'); ?>

                <!-- menu 3 -->
                <?php require('faculty-display/menus/menu3.php'); ?>

                <!-- menu 4 -->
                <?php require('faculty-display/menus/menu4.php'); ?>

                <!-- menu 5 -->
                <?php require('faculty-display/menus/menu5.php'); ?>

                <!-- menu 6 -->
                <?php require('faculty-display/menus/menu6.php'); ?>

                <!-- menu 7 -->
                <?php require('faculty-display/menus/menu7.php'); ?>

                <!-- menu 8 -->
                <?php require('faculty-display/menus/menu8.php'); ?>

                <!-- menu 9 -->
                <?php require('faculty-display/menus/menu9.php'); ?>

                <!-- menu 10 -->
                <?php require('faculty-display/menus/menu10.php'); ?>

                <!-- menu 11 -->
                <?php require('faculty-display/menus/menu11.php'); ?>

              </div>
            </div>

          </div>

        </div>


        <div class="row mt-5" style="width:100%;">
            <div class="col-12">
                <center>
                  <h1 class="mt-5" style="color:white;">
                    <b>Study Material</b>
                  </h1>
                  <hr style="width:70%;">
                </center>
            </div>
        </div>

        <div class="container-fluid pb-5 mb-5" style="width:85%; background-color: #e0ebff; border-radius:5px;">

          <div class="row mt-5 pt-5 ml-5 mr-5">

            <table class="table table-bordered table-striped "> 
              <tr> 
                <th colspan="5"><h2 align="center">Uploaded Content</h2></th> 
              </tr> 

              <?php

              if($result->num_rows > 0){

                ?>

                <th> Title </th> 
                <th> Content Type</th> 
                <th> Problem Statement  </th> 
                <th> View </th>

                <?php 

                while($row = $result -> fetch_assoc()) { 

                  $file = $row['title'];
                  $filepath = $row['pdf'];
                  $id=$row['id'];

                  ?>

                  <tr> 
                    <td><?php echo $row['title']; ?></td> 
                    <td><?php echo $row['contenttype']; ?></td> 
                    <td><?php echo $row['problem']; ?></td> 
                    <td><a href="/faculty/facultyPage/<?php echo($filepath) ?>" target="_blank">Click</a> to view </p>
                    </td>
                  </tr> 

                <?php

              }

            }

              ?> 

          </table>

          </div>

        </div>



       
        <div class="footer">
          <div class="footer-text"> 
            © 2019-2020 pict.edu, All rights reserved. <i class="fa fa-code" aria-hidden="true"></i> <a href="developer_model.php" class="dev_page">Developers.</a>
          </div>
        </div>

        <!-- Modal -->
       


	</body>

  <script>
    AOS.init();
  </script>

  <script>
    $(document).ready(function(){
      // Add scrollspy to <body>
      $('body').scrollspy({target: ".navbar", offset: 50});   
      // Add smooth scrolling on all links inside the navbar
      $("#myNavbar a").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();
          // Store hash
          var hash = this.hash;
          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        }  // End if
      });
    });
  </script>
</html>