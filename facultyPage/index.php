<?php
	include "../connect.php";
	session_start();

	$email=$_SESSION['email'];


	$sql = "SELECT eid,image,email,fullname,contact,acontact,texperience,iexperience,doj,department,designation,responsibility,aoi,other,cv FROM faculty F WHERE F.email ='$email'";

	$run = $conn->query($sql);

	if($run->num_rows > 0){

		$row = $run->fetch_assoc();

		$_SESSION['row'] = $row;
		
		$eid=$row['eid'];
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
	

	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Faculty | PICT-Top Engineering College</title>
	<meta name="google-signin-client_id" content="950584802726-k1bd4kegkj9js648s63ngrsokutgrstk.apps.googleusercontent.com">
	<script src="../js/platform.js" async defer></script>

    <link rel="icon" type="images/jpg" href="../images/logo.png">
    <meta name="viewport" content="width=device-width, maximum-scale=1">

	<!-- Latest compiled and minified CSS -->

	<!-- jQuery library -->
	<script src="../css/bootstrap/jquery.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../css/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="editDetails_files/editDetails_js.js"></script>

	<link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../css/aos.css" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="editDetails_files/editDetails_css.css" >

</head>

<style type="text/css">
	.nav-item .active {
		background-color: #0b3c5d;
	}

</style>
<body>

	<!-- <h1> Faculty Profile Page </h1> -->
	<!-- <a href="../index.php" onclick="signOut();">Sign out</a> -->


	    <!-- header -->
    <?php require('header_dept_Admin.php')?>

	<!-- main page content -->
	<div class="container-fluid pb-5 mb-5" style="width:85%; background-color: #e0ebff; border-radius:5px;">

	    <div class="row mt-5 pt-5 ml-5 mr-5">
	    	<!-- nav bar content -->
            <div class="col-md-4">
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
                    <?php require('editDetails_files/menu0.php'); ?>

                    <!-- menu 1 -->
										<?php require('editDetails_files/menu1.php'); ?>

										<!-- menu 2 -->
                    <?php require('editDetails_files/menu2.php'); ?>
                    
                    <!-- menu 3 -->
                    <?php require('editDetails_files/menu3.php'); ?>

                     <!-- menu 4 -->
                    <?php require('editDetails_files/menu4.php'); ?>

                    <!-- menu 5 -->
                    <?php require('editDetails_files/menu5.php'); ?>
                    
                    <!-- menu 6 -->
                    <?php require('editDetails_files/menu6.php'); ?>

                    <!-- menu 7 -->
                    <?php require('editDetails_files/menu7.php'); ?>

                    <!-- menu 8 -->
                    <?php require('editDetails_files/menu8.php'); ?>

                    <!-- menu 9 -->
                    <?php require('editDetails_files/menu9.php'); ?>

                    <!-- menu 10 -->
                    <?php require('editDetails_files/menu10.php'); ?>

                    <!-- menu 11 -->
                    <?php require('editDetails_files/menu11.php'); ?>

                </div>
            </div>

            <!-- meno 0 -->
            <?php require('editDetails_files/add_fund_model.php'); ?>
            <!-- meno 0 -->
            <?php require('editDetails_files/add_book_model.php'); ?>
            <!-- meno 0 -->
            <?php require('editDetails_files/add_conf_model.php'); ?>
            <!-- meno 0 -->
            <?php require('editDetails_files/add_consultancy_model.php'); ?>
            <!-- meno 0 -->
            <?php require('editDetails_files/add_Quali_model.php'); ?>
            <!-- meno 0 -->
            <?php require('editDetails_files/add_journals_model.php'); ?>
            <!-- meno 0 -->
            <?php require('editDetails_files/add_patent_model.php'); ?>

            <div class="clearfix visible-lg"></div>
        </div>

	</div>
	
	<div id='formDiv'></div>
	<script src="https://apis.google.com/js/platform.js?onload=appStart"></script>		
	<script type="text/javascript">
    	document.body.style.zoom="90%";
    </script>

	<script>

		function init(){
	      gapi.load('auth2', function() {
	        gapi.auth2.init();
	      });
	    }

	  function signOut() {
	    var auth2 = gapi.auth2.getAuthInstance();
	    auth2.signOut().then(function () {
	      console.log('User signed out.');
	    });
	  }
	</script>

</body>
</html>