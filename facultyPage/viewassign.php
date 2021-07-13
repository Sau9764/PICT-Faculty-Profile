<?php
	include "../connect.php";
	session_start();


	

	$email=$_SESSION['email'];
	


	$query="select * from post where email='$email'"; 
    $result = $conn->query($query);

    if($result->num_rows<=0)
    {
    	echo "<script> alert('Sorry. Data Not Found.'); window.location.href='index.php';</script>";
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

</head>
<body>

	<!-- <h1> Faculty Profile Page </h1> -->
	<!-- <a href="../index.php" onclick="signOut();">Sign out</a> -->


	    <!-- header -->
    <?php require('header_dept_Admin.php')?>

	<!-- main page content -->
	<br><br><br>
	

		<nr><br>
		<table class="table table-bordered table-striped " style="width:80%; margin-left: 10%;"> 
	<tr> 
		<th colspan="5"><h2 align="center">Uploaded Content</h2></th> 
		</tr> 

				<th> Id </th>
			  <th> Title </th> 
			  <th> Content Type</th> 
			  <th> Problem Statement  </th> 
			  <th> View </th>
			  
			  
		
		
		<?php while($row = $result -> fetch_assoc()) 
		{ 
		?> 
		<?php $file = $row['title'];
			 $filepath = $row['pdf'];
			$id=$row['id'];
			  ?>

			  


		<tr> 
			<td>  <?php echo $row['id']; ?> </td>
			<td><?php echo $row['title']; ?></td> 
		<td><?php echo $row['contenttype']; ?></td> 
		<td><?php echo $row['problem']; ?></td> 
		<td><a href="/faculty/facultyPage/<?php echo($filepath) ?>" target="_blank">Click</a> to view </p>
			   </td>
		

		</tr> 
	<?php 
               } 
          ?> 

      </table>



	

	   
	
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