

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

	<!-- Latest compiled and minified CSS -->

	<!-- jQuery library -->
	<script src="../css/bootstrap/jquery.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../css/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="editDetails_files/editDetails_js.js"></script>

	<link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/aos.css" >
    <link rel="stylesheet" href="editDetails_files/editDetails_css.css" >

    <style type="text/css">
    	
    	.left1 {
  
  padding-left: 10px;
		}

		input[type=text] {
  width: 100%;
  padding: 10px 15px;
  margin: 5px 0;
  /*box-sizing: border-box;*/
  border: none;
  border-bottom: 2px solid black;
}

	input[type=text1] {
  width: 100%;
  padding: 30px 20px;
  margin: 5px 0;
  /*box-sizing: border-box;*/
  border: none;
  border-bottom: 2px solid black;
}

input[type=radio] {
    border: 0px;
    width: 10%;
    height: 1.5em;
}

    </style>

</head>
<body>

	<!-- <h1> Faculty Profile Page </h1> -->
	<!-- <a href="../index.php" onclick="signOut();">Sign out</a> -->


	    <!-- header -->
    <?php require('header_dept_Admin.php')?>


<br>
<br>
    <br>

    <div class="container-fluid pb-5 mb-5" style="width:85%; background-color: #e0ebff; border-radius:5px;">

<br>

    	<div id="content" class="card">

    		

        <form action="uploadContentf.php" method="post" enctype="multipart/form-data">
            
            <div class="card-header" align="center"><h2>Upload Content</h2></div>

            <div class="card-body" >
                <h4 class="left1" >Title:*</h4>

      
  				<input type="text" id="title" name="title" required>

  				<br><br>

  				 <h4 class="left1" >Content Type:*</h4>
<br>


  				 <input type="radio" id="content1" name="content" value="Notes" required>
				  <label for="Notes"> <h4>Notes </h4></label>
				  <input type="radio" id="content2" name="content" value="Assignments">
				  <label for="Assignments"> <h4>Assignments</h4></label> 
				  <input type="radio" id="content3" name="content" value="References">
				  <label for="References"> <h4>References</h4></label>



  		<br><br>

  				<h4 class="left1" >Problem Statement:*</h4>

      
  				<input type="text" id="ps" name="ps" required>

  				<br><br>

  				<h4 class="left1" >Description:*</h4>


      
  				<input type="text1" id="description" name="description" required>
  				<br><br><br>

  				<input class="btn btn-info" type="file" accept="application" name="fileToUpload" id="fileToUpload" required>
                
            </div>



            <div class="m-3" align="center">
                <input type="submit" name="contentsubmit" value="ADD" class="btn btn-success">
            </div>	




   </div>
</form>
	
	


	
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