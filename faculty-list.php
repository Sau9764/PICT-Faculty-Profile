<?php

  require "connect.php";
  session_start();
  session_unset();
  session_destroy();

  if(empty($_GET['dept'])){
      echo "<script> window.location.href = 'index.php'; </script>";
  }else{
      $dept = trim($_GET['dept'], '"');
  }


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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        <link href="css/aos.css" rel="stylesheet">
        <link href="css/indexCss.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!-- JS -->
        <script src="css/bootstrap/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/platform.js" async defer></script>

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
          table, th, td {
            border: inset 1px #ddd;
          }

          .nav-item {
            background-color: #0b3c5d;
          }
          .nav-link {
             background-color: #0b3c5d; 
          }
          .nav-item:hover {
            background-color: #0b3c5d;
          }
          .nav-link:hover {
             background-color: #0b3c5d; 
          }
          .livesearch {
            max-height: 20vh;
          }
        </style>
        
  </head>


    
    <body >
        <!-- background Image -->
        <div class="bg-image"></div>

        <!-- Navbar Section -->
       <?php require('navbar.php'); ?>
       
       <!-- Principal Name -->
        <div class="row mt-5" style="width:100%;">
            <div class="col-12">
                <center>
                  <h1 class="mt-5" style="color:white;"><b><?php echo $dept; ?></b></h1>
                  <hr style="width:70%;">
                </center>
            </div>
        </div>

       <!-- middle Section -->
        <div class="dept_view" style="min-height: 60vh;">

          <?php 

            $sql1 = "SELECT eid FROM faculty WHERE designation = 'HOD' and department = '$dept'";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {

              ?>
                <div class="row">
                  <?php require('faculty-display/hod.php'); ?>
                </div> 

              <?php
            }

             $sql1 = "SELECT eid FROM faculty WHERE designation = 'Professor' and department = '$dept'";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {

              ?>
                <div class="row">
                  <?php require('faculty-display/professor.php'); ?>
                </div> 

              <?php
            }

             $sql1 = "SELECT eid FROM faculty WHERE designation = 'Associate Professor' and department = '$dept'";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {

              ?>
                <div class="row">
                  <?php require('faculty-display/asso_professor.php'); ?>
                </div> 

              <?php
            }

             $sql1 = "SELECT eid FROM faculty WHERE designation = 'Assistant Professor' and department = '$dept'";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {

              ?>
                <div class="row">
                  <?php require('faculty-display/assis_professor.php'); ?>
                </div> 

              <?php
            }

            $sql1 = "SELECT eid FROM faculty WHERE designation = 'Adjunct Professor' and department = '$dept'";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {

              ?>
                <div class="row">
                  <?php require('faculty-display/adj_professor.php'); ?>
                </div> 

              <?php
            }



          ?>

          

          <br>
          
        </div>


        <!-- faculty profile redirect form here -->
        <div id='formDiv'></div>

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