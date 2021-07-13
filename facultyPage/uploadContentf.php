<?php
	session_start();
	include "../connect.php";




	$eid=$_SESSION['email'];



	$sql = "SELECT * FROM faculty WHERE email = '$eid'";
    $result = $conn->query($sql);

    if($result->num_rows<=0)
    {
    	echo "<script> alert('Sorry. You are not a faculty.'); window.location.href='index.php';</script>";
    }
    else
    {
    	 while ($row = $result->fetch_assoc()) {
            
            $_SESSION['fullname']=$row['fullname']."";
            $_SESSION['eid']=$row['eid']."";

            }
       
        $fullname=$_SESSION['fullname'];
        $eid_eid=$_SESSION['eid'];
    }






	// Menu 0
	if(isset($_POST['picsubmit'])){

		// $eid = $row["eid"];

		define('ROOT_PATH', dirname(__DIR__) . "/facultyPage/req_ImgCv/");
		$target_dir = ROOT_PATH.'facultyImages/';
		$name = pathinfo($_FILES['imageToUpload']['name']);
		$ext = $name['extension'];
		$dbpath = $eid.'.'.$ext;
		if($ext == 'png'){
			$target_file = $target_dir.$eid.'.png';
		}else if($ext == 'jpg'){
			$target_file = $target_dir.$eid.'.jpg';
		}else{
			$target_file = $target_dir.$eid.'.jpeg';
		}
		if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file)) {

			$sequery="select * from tfaculty where email='$eid'";

			$result = $conn->query($sequery);

			if ($result->num_rows > 0) 
			{
				
				$query = "UPDATE tfaculty SET image = 'req_ImgCv/facultyImages/$dbpath' WHERE eid = '$eid'";

			}
			else
			{
				$query="INSERT INTO tfaculty (eid,image) VALUES ('$eid','req_ImgCv/facultyImages/$dbpath')";
				
			}

			
			
			if($conn->query($query)){
		        echo "<script>
					alert('Data updated successfully!!');				
					window.location.href = 'index.php?eid=".$eid."';
				</script>";
	        }
	    } else {
	        echo "<script>alert('Error uploading file!')";
	    }
	}

	// menu 1
	if(isset($_POST['pdsubmit'])){

		$row = $_SESSION['row'];
		//$eid = $row["eid"];

		$fullname = $row['fullname'];
		$contact = $row['contact'];
		$department = $row['department'];
		$designation = $row['designation'];
		$responsibility = $row['responsibility'];
		
		$pddoj = $_POST['pddoj'];
		$pdname = $_POST['pdname'];
		$pdphone = $_POST['pdphone'];
		$pddept = $_POST['pddept'];
		$pddesg = $_POST['pddesg'];
		$pdresp = $_POST['pdresp'];
		$change = 0;

		// $namefull = $pdname;
		// if($pdname!=""){
		// 	$sql = "UPDATE tfaculty SET fullname = '$namefull' WHERE eid='$eid'";
		// 	$query = $conn->query($sql);
		// 	if($query){
		// 		$change = 1;
		// 	}
		// 	else{
		// 		$change = 0;
		// 	}
		// }

		if($pdphone!=""){
			//$sql="insert into tfaculty (contact) VALUES ('$pdphone')";
			$sql = "UPDATE tfaculty SET contact = '$pdphone' WHERE eid='$eid'";
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}
		}
		if($pddept!=""){
			$sql = "UPDATE tfaculty SET department = '$pddept' WHERE eid='$eid'";		
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}
		}
		// if($pddesg!=""){
		// 	$sql = "UPDATE tfaculty SET designation = '$pddesg' WHERE eid='$eid'";
		// 	$query = $conn->query($sql);
		// 	if($query){
		// 		$change = 1;
		// 	}
		// 	else{
		// 		$change = 0;
		// 	}
		// }	
		if($pdresp!=""){
			$sql = "UPDATE tfaculty SET responsibility = '$pdresp' WHERE eid='$eid'";
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}
		}
		// if($pddoj!=""){
		// 	$sql = "UPDATE tfaculty SET doj = '$pddoj' WHERE eid='$eid'";
		// 	$query = $conn->query($sql);
		// 	if($query){
		// 		$change = 1;
		// 	}
		// 	else{
		// 		$change = 0;
		// 	}
		// }
		if($change == 1){
			echo 
			"<script>
				alert('Data updated successfully!!');		
				window.location.href = 'index.php?eid=".$eid."';
			</script>";
		}
		else{
			echo 
			"<script>
				alert('Error in data updation!!');				
				window.location.href = 'index.php?eid=".$eid."';
			</script>";
		}	
	}
		
	// menu 2
	if(isset($_POST['submitQualifications'])){
		$level = $_POST["level"];
		//$eid = $_POST["eid"];
		$degree = $_POST["degree"];
		$specialization = $_POST['specialization'];
		$nou = $_POST["nou"];
		$college = $_POST['college'];
		$year = $_POST["year"];

		$query = "INSERT INTO `tqualifications`(`eid`, `level`, `degree`, `specialization`, `uname`, `college`, `year`,`email`,`fullname`) VALUES ('$eid_eid','$level','$degree','$specialization','$nou','$college','$year','$eid','$fullname')";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript">alert("Data Added Successfully!"); window.location.href="index.php?eid='.$eid.'";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Adding details."); window.location.href="index.php?eid='.$eid.'";</script>';
		}
	}

	// menu 3
	if(isset($_POST['exsubmit'])){

	 	$row = $_SESSION['row'];

	 	$aoi = $row['aoi'];
		$texperience = $row['texperience'];
		$iexperience = $row['iexperience'];
		$other = $row['other'];

		//$eid = $row['eid'];
		$exaoi = $_POST['exaoi'];
		$extexperience = $_POST['extexperience'];
		$exiexperience = $_POST['exiexperience'];

		$change = 0;


		$sql = "SELECT * FROM faculty WHERE email = '$eid'";
    	$result = $conn->query($sql);

    	if($result->num_rows<=0)
    	{
    		$sql="INSERT INTO tfaculty(texperience,iexperience,aoi,other) VALUES ('$texperience','$iexperience','$aoi','other') ";

    		if($conn->query($query)){
		        echo "<script>alert('Experience uploaded!!');
	        		window.location.href = 'index.php?eid=".$eid."';</script>";
	        }
   		}
   		else
   		{

   			if($exaoi!=""){
			$sql = "UPDATE tfaculty SET aoi = '$exaoi' WHERE eid='$eid'";		
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		//add
		}
		if($extexperience!=""){
			$sql = "UPDATE tfaculty SET texperience = '$extexperience' WHERE eid='$eid'";		
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
			//add
		}
		if($exiexperience!=""){
			$sql = "UPDATE tfaculty SET iexperience = '$exiexperience' WHERE eid='$eid'";
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
			//add
		}
		if($change == 1){
			echo 
			"<script>
				alert('Data updated successfully!!');		
				window.location.href = 'index.php?eid=".$eid."';
			</script>";
		}
		else{
			echo 
			"<script>
				alert('Error in data updation!!');				
				window.location.href = 'index.php?eid=".$eid."';
			</script>";
		}
   	}





			
	 }

	// Menu 4
	if(isset($_POST['submitJournal'])){

		$journaltitle = $_POST['journaltitle'];
		$journaltype = $_POST['journaltype'];
		$year = $_POST['year'];
		$details = $_POST['details'];

		$query = "INSERT INTO `tjournals`(`eid`,`title`,`type`,`year`,`description`,`email`,`fullname`) VALUES ('$eid','$journaltitle','$journaltype','$year','$details','$eid','$fullname')";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript"> alert("Data Submitted Successfully!"); window.location.href="index.php?eid='.$eid.'";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Adding details."); window.location.href="index.php?eid='.$eid.'";</script>';
		}
	}

	// menu 5
	if(isset($_POST['submitBook'])){
		$bookname = $_POST['bookname'];
		$publication = $_POST['publication'];
		$year = $_POST['year'];
		$details = $_POST['details'];

		$query = "INSERT INTO `tbooks` (`eid`,`bname`,`publication`,`year`,`description`,`email`,`fullname`) VALUES('$eid_eid','$bookname','$publication','$year','$details','$eid','$fullname')";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript">alert("Data Submitted Successfully!");window.location.href="index.php?eid='.$eid.'";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Adding details.");window.location.href="index.php?eid='.$eid.'";</script>';
		}
	}

	// menu 6
	if(isset($_POST['submitPatent'])){
		$patentnumber = $_POST['patentnumber'];
		$patenttitle = $_POST['patenttitle'];
		$pagenos = $_POST['pagenos'];
		$assignee  =$_POST['assignee'];
		$country = $_POST['country'];
		$year = $_POST['year'];
		$webaddress = $_POST['webaddress'];	

		$query = "INSERT INTO `tpatent`(`eid`,`ptitle`,`year`,`country`,`assignee`,`patentno`,`pagenos`,`webadd`,`email`,`fullname`) VALUES('$eid_eid','$patenttitle','$year','$country','$assignee','$patentnumber','$pagenos','$webaddress','$eid','$fullname')";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript">alert("Data Submitted Successfully!");window.location.href="index.php?eid='.$eid.'";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Adding details.");window.location.href="index.php?eid='.$eid.'";</script>';
		}
	}

	// menu 7 

	if(isset($_POST['submitConference'])){

		$conferencetitle = $_POST['conferencetitle'];
		$conferencetype = $_POST['conferencetype'];
		$year = $_POST['year'];
		$details = $_POST['details'];

		$query = "INSERT INTO `tconferences`(`eid`,`ctitle`,`ctype`,`year`,`cdetails`,`email`,`fullname`) VALUES('$eid_eid','$conferencetitle','$conferencetype','$year','$details','$eid','$fullname')";
		//$sql = "INSERT INTO Temp VALUES('$eid','','-','Conferences','$query')";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript">alert("Data Submitted Successfully!");window.location.href="index.php?eid='.$eid.'";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Adding details.");window.location.href="index.php?eid='.$eid.'";</script>';
		}
	}

	// menu 8
	if(isset($_POST['submitFundedrp'])){
		$title = $_POST['title'];
		$picoi = $_POST['picoi'];
		$duration  =$_POST['duration'];
		$famount = $_POST['famount'];
		$fagency = $_POST['fagency'];
		$remark = $_POST['remark'];

		$query = "INSERT INTO `tfundedrp`(`eid`,`ptitle`,`picoi`,`duration`,`famount`,`fegency`,`remark`,`email`,`fullname`) VALUES('$eid_eid','$title','$picoi','$duration','$famount','$fagency','$remark','$eid','$fullname')";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript">alert("Data Submitted Successfully!");window.location.href="index.php?eid='.$eid.'";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Adding details.");window.location.href="index.php?eid='.$eid.'";</script>';
		}
	}

	// menu 9
	if(isset($_POST['submitConsultancy'])){
		$ioiu = $_POST['ioiu'];
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$duration  =$_POST['duration'];
		$areceived = $_POST['areceived'];
		$status = $_POST['status'];
		$details = $_POST['details'];

		$query = "INSERT INTO `tconsultancy`(`eid`,`ioiu`,`sdate`,`edate`,`duration`,`amount`,`status`,`details`) VALUES('$eid','$ioiu','$sdate','$edate','$duration','$areceived','$status','$details')";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript">alert("Data Submitted Successfully!");window.location.href="index.php?eid='.$eid.'";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Adding details.");window.location.href="index.php?eid='.$eid.'";</script>';
		}
	}

	// menu 10
	if(isset($_POST['ccvsubmit'])){

		define('ROOT_PATH', dirname(__DIR__) . "/facultyPage/");
		$target_dir = ROOT_PATH.'facultyCV/';
		$name = pathinfo($_FILES['fileToUpload']['name']);
		$ext = $name['extension'];
		$dbpath = $eid.'.'.$ext;
		$target_file = $target_dir.$eid.'.'.$ext;
			
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

			$query = "UPDATE tfaculty SET cv = 'req_ImgCv/facultyCV/$dbpath' WHERE eid = '$eid'";
			if($conn->query($query)){
		        echo "<script>alert('File successfully uploaded!! [".$target_file."]');
	        		window.location.href = 'index.php?eid='".$eid."';</script>";
	    	}
	    } else {
	        echo "<script>alert('Error uploading file');
	               window.location.href = 'index.php?eid='".$eid."';</script> ";
	    }
	}

	if(isset($_POST['removeContent'])){

		$content_id =  $_POST['content_id'];

		$sql = "DELETE FROM post WHERE id= '$content_id'";

		if ($conn->query($sql) === TRUE) {
		  echo '<script type="text/javascript">alert("Data Deleted Successfully!");window.location.href="index.php";</script>';
		} else {
		  echo '<script type="text/javascript">alert("Error while Deleting data.");window.location.href="index.php";</script>';
		}
	}

	// menu 11
	if(isset($_POST['odsubmit'])){

		$oddetails = $_POST['odother'];

		if($oddetails!=""){
			$sql = "UPDATE tfaculty SET other = '$oddetails' WHERE eid='$eid'";
			$query = $conn->query($sql);
			if($query){
				echo 
				"<script>
					alert('Data updated successfully!!');		
					window.location.href = 'index.php?eid=".$eid."';
				</script>";
			}else{
				echo 
				"<script>
					alert('Error in data updation!!');				
					window.location.href = 'index.php?eid=".$eid."';
				</script>";
			}		
		}
	}


	if(isset($_POST['contentsubmit'])){

		$title=$_POST['title'];
		$contenttype=$_POST["content"];
		$ps=$_POST['ps'];
		$description=$_POST['description'];


		define('ROOT_PATH', dirname(__DIR__) . "/facultyPage/");
		$target_dir = ROOT_PATH.'Notes/';
		$name = pathinfo($_FILES['fileToUpload']['name']);
		$ext = $name['extension'];
		$dbpath = $title.'.'.$ext;
		$target_file = $target_dir.$title.'.'.$ext;
			
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {


			$query = "INSERT INTO `post`(`title`,`contenttype`,`problem`,`description`,`eid`,`email`,`pdf`) VALUES('$title','$contenttype','$ps','$description','$eid_eid','$eid','Notes/$dbpath')";
			
			if($conn->query($query)){
				echo 
				"<script>
					alert('Data Upload Successfully!!');				
					window.location.href = 'content.php?eid=".$eid."';
				</script>";
	    	}
	    } else {
	        echo "<script>
					alert('Error in data Updation.');				
					window.location.href = 'content.php?eid=".$eid."';
				</script>";
	    }


	    //removeconetent
	    
				





	}
	// // add Admin
	// if(isset($_POST['addAdmin'])){

	// 	$emp_id =  $_POST['emp_id'];
	// 	$fullname =  $_POST['fullname'];
	// 	$dept = $_POST['dept'];
	// 	$email = $_POST['email'];

	// 	$query = "INSERT INTO `admin`(`emp_id`,`fullname`,`dept`,`email`) VALUES('$emp_id','$fullname','$dept','$email')";
	// 	$result = $conn->query($query);
	// 	if ($result) {
	// 		echo '<script type="text/javascript">alert("Data Submitted Successfully!");window.location.href="master_admin.php";</script>';
	// 	}else{
	// 		echo '<script type="text/javascript">alert("Error while Adding details.");window.location.href="master_admin.php";</script>';
	// 	}
	// }

	// // remove admin

	// if(isset($_POST['removeAdmin'])){

	// 	$emp_id =  $_POST['emp_id'];

	// 	$query = "DELETE FROM admin WHERE emp_id = '$emp_id'";
	// 	$result = $conn->query($query);
	// 	if ($result) {
	// 		echo '<script type="text/javascript">alert("Data Deleted Successfully!");window.location.href="master_admin.php";</script>';
	// 	}else{
	// 		echo '<script type="text/javascript">alert("Error while Deleting details.");window.location.href="master_admin.php";</script>';
	// 	}
	// }


?>