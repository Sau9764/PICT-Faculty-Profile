<?php

  require "connect.php";
  session_start();
  session_unset();
  session_destroy();

  $sql = "SELECT COUNT(eid) as jcount FROM journals";
  $run = $conn->query($sql);
  $row = $run->fetch_assoc();
  $jcount = $row['jcount'];

  $sql = "SELECT COUNT(eid) as fndcount FROM fundedrp";
  $run = $conn->query($sql);
  $row = $run->fetch_assoc();
  $fndcount = $row['fndcount'];

  $sql = "SELECT COUNT(eid) as ccount FROM conferences";
  $run = $conn->query($sql);
  $row = $run->fetch_assoc();
  $ccount = $row['ccount'];

  $sql = "SELECT COUNT(eid) as pcount FROM patent";
  $run = $conn->query($sql);
  $row = $run->fetch_assoc();
  $pcount = $row['pcount'];

  $sql = "SELECT COUNT(eid) as bcount FROM books";
  $run = $conn->query($sql);
  $row = $run->fetch_assoc();
  $bcount = $row['bcount'];

  $sql = "SELECT COUNT(eid) as ffy FROM faculty WHERE department = 'First Year Engineering'";
  $run = $conn->query($sql);
  $row = $run->fetch_assoc();
  $ffy = $row['ffy'];

  $sql = "SELECT COUNT(eid) as fco FROM faculty WHERE department = 'Computer Engineering'";
  $run = $conn->query($sql);
  $row = $run->fetch_assoc();
  $fco = $row['fco'];

   $sql = "SELECT COUNT(eid) as fit FROM faculty WHERE department = 'Information Technology'";
  $run = $conn->query($sql);
  $row = $run->fetch_assoc();
  $fit = $row['fit'];

   $sql = "SELECT COUNT(eid) as fentc FROM faculty WHERE department = 'Electronics and Telecommunication'";
  $run = $conn->query($sql);
  $row = $run->fetch_assoc();
  $fentc = $row['fentc'];

  // HOD data

  // $sql = "SELECT fullname, contact, acontact, email FROM faculty WHERE department = 'First Year Engineering' AND designation = 'HOD'";
  // $run = $conn->query($sql);
  // if($row = $run->fetch_assoc()){
  //   $fy_fullname = $row['fullname'];
  //   $fy_contact = $row['contact'];
  //   $fy_acontact = $row['acontact'];
  //   $fy_email = $row['email'];
  // }

  // $sql = "SELECT fullname, contact, acontact, email FROM faculty WHERE department = 'Computer Engineering' AND designation = 'HOD'";
  // $run = $conn->query($sql);
  // if($row = $run->fetch_assoc()){
  //   $co_fullname = $row['fullname'];
  //   $co_contact = $row['contact'];
  //   $co_acontact = $row['acontact'];
  //   $co_email = $row['email'];
  // }

  // $sql = "SELECT fullname, contact, acontact, email FROM faculty WHERE department = 'Electronics and Telecommunication' AND designation = 'HOD'";
  // $run = $conn->query($sql);
  // if($row = $run->fetch_assoc()){
  //   $entc_fullname = $row['fullname'];
  //   $entc_contact = $row['contact'];
  //   $entc_acontact = $row['acontact'];
  //   $entc_email = $row['email'];
  // }

  // $sql = "SELECT fullname, contact, acontact, email FROM faculty WHERE department = 'Information Technology' AND designation = 'HOD'";
  // $run = $conn->query($sql);
  // if($row = $run->fetch_assoc()){
  //   $it_fullname = $row['fullname'];
  //   $it_contact = $row['contact'];
  //   $it_acontact = $row['acontact'];
  //   $it_email = $row['email'];
  // }


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

        <!-- JS -->
        <script src="css/bootstrap/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="css/bootstrap/bootstrap.min.js"></script>
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
        
  </head>
    
    <body>

        <!-- xml file adding -->
        <?php require('xml_writter.php')?>

        <!-- background Image -->
        <div class="bg-image"></div>

        <!-- Navbar Section -->
        <?php require('navbar.php'); ?>

        
        <!-- title Section -->
        <div class="container-fluid d-flex justify-content-center  align-items-center flex-column pt-5 mt-5" style="background-color:transparent;width:100%;color:white;">
            <div class="row d-flex align-items-center justify-content-center mt-4" style="width:100%;;transition:3s;" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-offset="0">
              <div class="col-md-3 col-lg-1">
                  <center><img class="image-responsive mb-4" style="" src="images/logo.png"/></center>
              </div>
              <div class="col-md-6 col-lg-6 col-xs-12" align="center">
                  <div style="text-align: center;color:white;">
                      <b>
                          <h4>Society for Computer Technology and Research's</h4>
                          <h1 class="media-heading">Pune Institute of Computer Technology</h1>
                          <p>Affiliated to SPPU | AICTE Approved | ISO 9001:2015</p>
                      </b>        
                  </div>
              </div>
          </div>
          <hr style="width:70%;transition:5s;" >
        </div>

       <!-- middle Section -->
        <div class="dept_sec">

          <div id="sec1" class="container-fluid  d-flex justify-content-center  align-items-center flex-column pt-5 mt-5" style="background-color:transparent; ">
              <div class="container-fluid lower pl-3" style="width:98%;border-radius:5px;" >
                  <div class="row mt-1 pl-3" style="width:100%;border-radius:10px;">
                      
                      <!-- Principal's message -->
                      <div class="col-sm-8" style="transition:1s;">
                          <div class="card childCard mt-5 mb-5" style="" data-aos="fade-up">
                              <div class="card-header header" style="margin-top:0px;">Principal's Message:</div>
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-md-4 mr-3" >
                                          <div class="row pt-3 pl-5">
                                              <img src="images/principal.jpg" class="" height="150" width="150" style="border-radius:50%">
                                          </div>
                                          <div class="row pl-5 ml-1 mt-2">
                                              <p>
                                                  <b>
                                                      Dr. R. Sreemathy<br>
                                                      Principal, PICT, Pune<br>
                                                  </b>
                                              </p>	
                                          </div>
                                      </div>
                                      <div class="col-md-7 ml-1 pb-5" align="left" style="margin-top:10px;color:black;font-size:1.2rem">
                                              <div class="" style="margin-top: 15px;color:black;font-size:1.12rem;">
                                              <strong>	Pune Institute of Computer Technology</strong> was established in 1983 by a group of enterprising professionals and has come a long way and marched ahead with quality education imbibed with professional and ethical values. Our mission is to be the most sought after institute in Engineering education and research, that provides relevant knowledge, creates challenging opportunities and inculcate values and social responsibilities. Pune Institute of Computer Technology has cut a niche for itself to be one of India's leading institutions in higher Technical Education and Research of International repute. We celebrate the illustrious accomplishments of the past and take pride in our position as one of the top Institutions of our country.<br>

                                              <a href="https://pict.edu/principal-message/" target="_blank">
                                                <strong>View Full Message Here</strong>
                                                <i class="fa fa-external-link" aria-hidden="true"></i></a>
                                              </div>										
                                      </div>
                                  </div>
                              </div>
                          </div>
                      
                      </div>
                      
                      <div class="col-sm-4 mt-5 mb-5">
                          <div class="row" style="width:100%;">
                                <div class="card childCard" style="transition:1s;overflow-y:auto;width:100%;" data-aos="fade-up">
                                  <div class="card-header header">Site Counter: </div>
                                  <div class="card-body">
                                    <table class="table table-hover" style="cursor:pointer;">
                                        <?php
                                            if($ffy > 999){
                                              $ffy = $ffy / 1000;
                                              $ffy = "$ffy" . "k";
                                            }

                                            if($fco > 999){
                                              $fco = $fco / 1000;
                                              $fco = "$fco" . "k";
                                            }

                                            if($fit > 999){
                                              $fit = $fit / 1000;
                                              $fit = "$fit" . "k";
                                            }

                                            if($fentc > 999){
                                              $fentc = $fentc / 1000;
                                              $fentc = "$fentc" . "k";
                                            }

                                            if($jcount > 999){
                                              $jcount = $jcount / 1000;
                                              $jcount = "$jcount" . "k";
                                            }

                                            if($ccount > 999){
                                              $ccount = $ccount / 1000;
                                              $ccount = "$ccount" . "k";
                                            }

                                            if($pcount > 999){
                                              $pcount = $pcount / 1000;
                                              $pcount = "$pcount" . "k";
                                            }

                                            if($bcount > 999){
                                              $bcount = $bcount / 1000;
                                              $bcount = "$bcount" . "k";
                                            }

                                        ?>
                                        <tr  class="">
                                            <th class="">First Year Faculties: </th>
                                            <td ><?php echo $ffy; ?></td>
                                        </tr>
                                        <tr class="">
                                            <th class="">Comp Faculties: </th>
                                            <td ><?php echo $fco; ?></td>
                                        </tr>
                                        <tr class="">
                                            <th class="">IT Faculties:</th>
                                            <td ><?php echo $fit; ?></td>
                                        </tr>
                                        <tr  class="">
                                            <th class="">ENTC Faculties:</th>
                                            <td ><?php echo $fentc; ?></td>
                                        </tr>
                                        <tr  class="">
                                            <th class="">Journals:</th>
                                            <td ><?php echo $jcount; ?></td>
                                        </tr>
                                        <tr class="">
                                            <th class="">Conferences:</th>
                                            <td ><?php echo $ccount; ?></td>
                                        </tr>
                                        <tr class="">
                                            <th class="">Patents:</th>
                                            <td ><?php echo $pcount; ?></td>
                                        </tr>
                                        <tr class="">
                                            <th class="">Funded Projects:</th>
                                            <td ><?php echo $fndcount; ?></td>
                                        </tr>
                                        <tr class="">
                                            <th class="">Books:</th>
                                            <td ><?php echo $bcount; ?></td>
                                        </tr>
                                    </table>
                                  </div>
                              </div>       
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Department Section -->
          <div id="sec2" class="container-fluid d-flex justify-content-center align-items-center flex-column mb-5" style="background-color:rgba(0,0,0,0);">
              <!-- Title -->
              <div class="row mt-5 mb-3 pb-3" style="width:100%;">
                  <div class="col-12">
                      <center><h1 class="mt-5" style="color:white;"><b>Departments</b></h1><hr style="width:70%;"></center>
                  </div>
              </div>
              
              <!-- All Dept -->
              <div class="row mb-5 pb-5 dept_hod">
                <!-- first year dept -->
                <?php require('first_year_dept.php')?>

                <!-- computer dept -->
                <?php require('comp_dept.php')?>                

                <!-- entc dept -->
                <?php require('entc_dept.php')?>

                <!-- IT dept -->
                <?php require('it_dept.php')?>

              </div>
          </div>
        </div>

        <!-- faculty profile redirect form here -->
        <div id='formDiv'></div>

        <div class="footer">
          <div class="footer-text"> 
            © 2019-2020 pict.edu, All rights reserved. 
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