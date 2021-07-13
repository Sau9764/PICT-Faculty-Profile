
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

        <!-- model Developers -->
        <!-- <link rel="stylesheet" type="text/css" href="css/default.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <script src="js/modernizr.custom.js"></script> -->

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


        <!-- background Image -->
        <div class="bg-image"></div>

        <!-- Navbar Section -->
        <?php require('navbar.php'); ?>
       
       <!-- Principal Name -->
        <div class="row mt-5" style="width:100%;">
            <div class="col-12">
                <center>
                  <h1 class="mt-5" style="color:white;"><b>Under The Guidance Of</b></h1>
                  <hr style="width:70%;">
                </center>
            </div>
        </div>

       <!-- middle Section -->
        <div class="dept_sec">

          <div id="sec1" class="container-fluid  d-flex justify-content-center  align-items-center flex-column" style="background-color:transparent; ">
              <div class="row" style="width:100%;border-radius:10px;">
                  
                  <!-- Principal -->
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4" style="transition:1s;" >
                      <div class="card childCard mt-5 mb-5" style="" data-aos="fade-up">
                          <div class="card-header header" style="margin-top:0px;">PICT Principal</div>
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-md-12" >
                                      <div class="row"  style="justify-content: center;">
                                          <img src="images/principal.jpg" class="" height="150" width="150" style="border-radius:50%">
                                      </div>
                                      <div class="row"  style="justify-content: center;">
                                          <p>
                                              <b>
                                                  Dr. R. Sreemathy<br>
                                                  Principal, PICT, Pune<br>
                                              </b>
                                          </p>	
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Guidance Name -->
        <div class="row" style="width:100%;">
            <div class="col-12">
                <center>
                  <h1 class="mt-5" style="color:white;"><b>Supportive Guides </b></h1>
                  <hr style="width:70%;">
                </center>
            </div>
        </div>

       <!-- middle Section -->
        <div class="dept_sec">

          <div id="sec1" class="container-fluid  d-flex justify-content-center  align-items-center flex-column" style="background-color:transparent; ">
              <div class="row" style="width:100%;border-radius:10px;">
                  
                  <!-- Principal -->
                  <div class="col-sm-1"></div>
                  <div class="col-sm-5">
                    <div class="card childCard mt-5 mb-5" style="" data-aos="fade-up">
                          <div class="card-header header" style="margin-top:0px;">Computer Department</div>
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-md-12" >
                                      <div class="row"  style="justify-content: center;">
                                          <img src="images/pjambhulkar.jpg" class="" height="150" width="150" style="border-radius:50%">
                                      </div>
                                      <div class="row"  style="justify-content: center;">
                                          <p>
                                              <b>
                                                  Prof. Jambhulkar Sir<br>
                                                  Principal, PICT, Pune<br>
                                              </b>
                                          </p>  
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-5" style="transition:1s;" >
                      <div class="card childCard mt-5 mb-5" style="" data-aos="fade-up">
                          <div class="card-header header" style="margin-top:0px;">PICT Principal</div>
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-md-12" >
                                      <div class="row"  style="justify-content: center;">
                                          <img src="images/user.png" class="" height="150" width="150" style="border-radius:50%">
                                      </div>
                                      <div class="row"  style="justify-content: center;">
                                          <p>
                                              <b>
                                                  Prof. M. Nimje<br>
                                                  Principal, PICT, Pune<br>
                                              </b>
                                          </p>  
                                      </div>
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
                      <center><h1 class="mt-5" style="color:white;"><b>Developed By</b></h1><hr style="width:70%;"></center>
                  </div>
              </div>
              
              <!-- All Dept -->
              <div class="row" style="width: 80%">
                <!-- first year dept -->
                <div class="col-md-4">
                  <center>
                    <div class="card mycard childCard depChild" id="dept" data-aos="fade-up">         
                      <div class="card-header header" style="margin-top:0px;">Computer Engineering</div>
                      <div class="card-body">
                        <img src="images/user.png" height="100px" width="100px" style="border-radius: 50%">
                        <hr>
                        <p><b>Sourabh Kekade</b><br></p>
                      </div>
                    </div>
                  </center> 
                </div>

                <!-- computer dept -->
                 <div class="col-md-4">
                  <center>
                    <div class="card mycard childCard depChild " id="dept" data-aos="fade-up">         
                      <div class="card-header header" style="margin-top:0px;">Computer Engineering</div>
                      <div class="card-body">
                        <img src="images/user.png" height="100px" width="100px" style="border-radius: 50%">
                        <hr>
                        <p><b>Shraddha Mandekar</b><br></p>
                      </div>
                    </div>
                  </center> 
                </div>              

                <!-- entc dept -->
                 <div class="col-md-4">
                  <center>
                    <div class="card mycard childCard depChild" id="dept" data-aos="fade-up">         
                      <div class="card-header header" style="margin-top:0px;">Information Technology</div>
                      <div class="card-body">
                        <img src="images/user.png" height="100px" width="100px" style="border-radius: 50%">
                        <hr>
                        <p><b>Atherve</b><br></p>
                      </div>
                    </div>
                  </center> 
                </div>

              </div>
          </div>
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