<?php
	session_start();
	include "../connect.php";

	if(empty($_SESSION['row'])){
	     // ntg to do
	}else{
	    $row = $_SESSION['row'];
		$eid = $row['eid'];
	}

	// Add faculty model

	if(isset($_POST['add'])){
	    $inf = $_POST['in'];
	    $mname = $_POST['mname'];
	    $sname = $_POST['sname'];
	    $name = $_POST['name'];
	    $in = $inf." ".$name." ".$mname." ".$sname;
	    $eno = $_POST['eno'];
	    $mail = $_POST['mail'];
	    $no = $_POST['no'];
	    $department = $_POST['dep'];
	    $ext = $_POST['ext'];
	    $designation = $_POST['des'];
	    $date = $_POST["date"];
	    
	    $es = '1';
	    $sql = "Insert into faculty (fullname,eid,contact,email,designation,department,enable,doj,acontact) values ('$in','$eno','$no','$mail','$designation','$department','$es','$date','$ext')";
	    if(mysqli_query($conn,$sql)){
	      echo '<script>alert("Successfully added");window.location.href="dept_admin.php"</script>';
	    }else{
	      echo $conn->error_connect;
	    }
	  }

	

	// menu 1
	if(isset($_POST['pdsubmit'])){

		$change = 0;

		if($_POST['pdphone'] != ""){
			$pdphone = $_POST['pdphone'];
			$sql = "UPDATE faculty SET contact = '$pdphone' WHERE eid='$eid'";
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}
		}
		
		if($_POST['pdresp'] !=""){
			$pdresp = $_POST['pdresp'];
			$sql = "UPDATE faculty SET responsibility = '$pdresp' WHERE eid='$eid'";
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}
		}
		
		if($change == 1){
			echo 
			"<script>
				alert('Data updated successfully!!');		
				window.location.href = 'editDetailspage.php?eid=".$eid."';
			</script>";
		}
		else{
			echo 
			"<script>
				alert('Changes Not Made In Database !!');				
				window.location.href = 'editDetailspage.php?eid=".$eid."';
			</script>";
		}	
	}
		
	// menu 2
	if(isset($_POST['submitQualifications'])){
		$level = $_POST["level"];
		$eid = $_POST["eid"];
		$degree = $_POST["degree"];
		$specialization = $_POST['specialization'];
		$nou = $_POST["nou"];
		$college = $_POST['college'];
		$year = $_POST["year"];

		$query = "INSERT INTO `qualifications`(`eid`, `level`, `degree`, `specialization`, `uname`, `college`, `year`) VALUES ('$eid','$level','$degree','$specialization','$nou','$college','$year')";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript">alert("Data Added Successfully!"); window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Adding details."); window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}
	}

	// menu 3
	if(isset($_POST['exsubmit'])){

	 	$row = $_SESSION['row'];

	 	$aoi = $row['aoi'];
		$texperience = $row['texperience'];
		$iexperience = $row['iexperience'];
		$other = $row['other'];

		$eid = $row['eid'];
		$exaoi = $_POST['exaoi'];
		$extexperience = $_POST['extexperience'];
		$exiexperience = $_POST['exiexperience'];

		$change = 0;

		if($exaoi!=""){
			$sql = "UPDATE faculty SET aoi = '$exaoi' WHERE eid='$eid'";		
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		//add
		}
		if($extexperience!=""){
			$sql = "UPDATE faculty SET texperience = '$extexperience' WHERE eid='$eid'";		
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
			$sql = "UPDATE faculty SET iexperience = '$exiexperience' WHERE eid='$eid'";
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
				window.location.href = 'editDetailspage.php?eid=".$eid."';
			</script>";
		}
		else{
			echo 
			"<script>
				alert('Error in data updation!!');				
				window.location.href = 'editDetailspage.php?eid=".$eid."';
			</script>";
		}	
	 }

	// Menu 4
	if(isset($_POST['submitJournal'])){

		$journaltitle = $_POST['journaltitle'];
		$journaltype = $_POST['journaltype'];
		$year = $_POST['year'];
		$details = $_POST['details'];

		$query = "INSERT INTO `journals`(`eid`,`title`,`type`,`year`,`description`) VALUES ('$eid','$journaltitle','$journaltype','$year','$details')";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript"> alert("Data Submitted Successfully!"); window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Adding details."); window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}
	}

	// menu 5
	if(isset($_POST['submitBook'])){
		$bookname = $_POST['bookname'];
		$publication = $_POST['publication'];
		$year = $_POST['year'];
		$details = $_POST['details'];

		$query = "INSERT INTO `books` (`eid`,`bname`,`publication`,`year`,`description`) VALUES('$eid','$bookname','$publication','$year','$details')";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript">alert("Data Submitted Successfully!");window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Adding details.");window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
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

		$query = "INSERT INTO `patent`(`eid`,`ptitle`,`year`,`country`,`assignee`,`patentno`,`pagenos`,`webadd`) VALUES('$eid','$patenttitle','$year','$country','$assignee','$patentnumber','$pagenos','$webaddress')";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript">alert("Data Submitted Successfully!");window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Adding details.");window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}
	}

	// menu 7 

	if(isset($_POST['submitConference'])){

		$conferencetitle = $_POST['conferencetitle'];
		$conferencetype = $_POST['conferencetype'];
		$year = $_POST['year'];
		$details = $_POST['details'];

		$query = "INSERT INTO `conferences`(`eid`,`ctitle`,`ctype`,`year`,`cdetails`) VALUES('$eid','$conferencetitle','$conferencetype','$year','$details')";
		//$sql = "INSERT INTO Temp VALUES('$eid','','-','Conferences','$query')";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript">alert("Data Submitted Successfully!");window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Adding details.");window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
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

		$query = "INSERT INTO `fundedrp`(`eid`,`ptitle`,`picoi`,`duration`,`famount`,`fegency`,`remark`) VALUES('$eid','$title','$picoi','$duration','$famount','$fagency','$remark')";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript">alert("Data Submitted Successfully!");window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Adding details.");window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
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

		$query = "INSERT INTO `consultancy`(`eid`,`ioiu`,`sdate`,`edate`,`duration`,`amount`,`status`,`details`) VALUES('$eid','$ioiu','$sdate','$edate','$duration','$areceived','$status','$details')";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript">alert("Data Submitted Successfully!");window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Adding details.");window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}
	}

	// Menu 0
	if(isset($_POST['picsubmit'])){

		define('ROOT_PATH', dirname(__DIR__) . "/facultyPage/");
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
			$query = "UPDATE faculty SET image = 'facultyImages/$dbpath' WHERE eid = '$eid'";
			if($conn->query($query)){
		        echo "<script>alert('Image successfully uploaded!!');
	        		window.location.href = '/faculty/admin/editDetailspage.php?eid=".$eid."';</script>";
	        }
	    } else {
	          echo "<script>alert('Error uploading file');
	               window.location.href = '/faculty/admin/editDetailspage.php?eid='".$eid."';</script> ";
	    }
	}

	// menu 10
	if(isset($_POST['ccvsubmit'])){

		define('ROOT_PATH', dirname(__DIR__) . "/facultyPage/");
		$target_dir = ROOT_PATH.'facultyCV/';
		$name = pathinfo($_FILES['fileToUpload']['name']);
		$ext = $name['extension'];
		$dbpath = $eid.'.'.$ext;
		$target_file = $target_dir.$eid.'.pdf';
			
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

			$query = "UPDATE faculty SET cv = 'facultyCV/$dbpath' WHERE eid = '$eid'";
			if($conn->query($query)){
		        echo "<script>alert('CV successfully uploaded!!');
	        		window.location.href = '/faculty/admin/editDetailspage.php?eid=".$eid."';</script>";
	    	}
	    } else {
	        echo "<script>alert('Error uploading file');
	               window.location.href = '/faculty/admin/editDetailspage.php?eid='".$eid."';</script> ";
	    }
	}

	// menu 11
	if(isset($_POST['odsubmit'])){

		$oddetails = $_POST['odother'];

		if($oddetails!=""){
			$sql = "UPDATE faculty SET other = '$oddetails' WHERE eid='$eid'";
			$query = $conn->query($sql);
			if($query){
				echo 
				"<script>
					alert('Data updated successfully!!');		
					window.location.href = 'editDetailspage.php?eid=".$eid."';
				</script>";
			}else{
				echo 
				"<script>
					alert('Error in data updation!!');				
					window.location.href = 'editDetailspage.php?eid=".$eid."';
				</script>";
			}		
		}
	}

	// add Admin
	if(isset($_POST['addAdmin'])){

		$emp_id =  $_POST['emp_id'];
		$fullname =  $_POST['fullname'];
		$dept = $_POST['dept'];
		$email = $_POST['email'];

		$query = "INSERT INTO `admin`(`emp_id`,`fullname`,`dept`,`email`) VALUES('$emp_id','$fullname','$dept','$email')";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript">alert("Data Submitted Successfully!");window.location.href="master_admin.php";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Adding details.");window.location.href="master_admin.php";</script>';
		}
	}

	// remove admin

	if(isset($_POST['removeAdmin'])){

		$emp_id =  $_POST['emp_id'];

		$query = "DELETE FROM admin WHERE emp_id = '$emp_id' and dept = '$dept";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript">alert("Data Deleted Successfully!");window.location.href="master_admin.php";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Deleting details.");window.location.href="master_admin.php";</script>';
		}
	}

	if(isset($_POST['removeQuali'])){
		$quali_id =  $_POST['quali_id'];

		$query = "DELETE FROM qualifications WHERE qid = '$quali_id'";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript">alert("Data Deleted Successfully!"); window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Deleting details.");window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}
	}

	if(isset($_POST['removejournal'])){
		$j_id =  $_POST['j_id'];

		$query = "DELETE FROM journals WHERE jid = '$j_id'";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript">alert("Data Deleted Successfully!"); window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Deleting details.");window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}
	}

	if(isset($_POST['removeBook'])){
		$b_id =  $_POST['b_id'];

		$query = "DELETE FROM books WHERE bid = '$b_id'";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript">alert("Data Deleted Successfully!"); window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Deleting details.");window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}
	}

	if(isset($_POST['removePatent'])){
		$p_id =  $_POST['p_id'];

		$query = "DELETE FROM patent WHERE pid = '$p_id'";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript">alert("Data Deleted Successfully!"); window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Deleting details.");window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}
	}

	if(isset($_POST['removeConf'])){
		$c_id =  $_POST['c_id'];

		$query = "DELETE FROM conferences WHERE cid = '$c_id'";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript">alert("Data Deleted Successfully!"); window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Deleting details.");window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}
	}

	if(isset($_POST['removefund'])){
		$f_id =  $_POST['f_id'];

		$query = "DELETE FROM fundedrp WHERE fid = '$f_id'";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript">alert("Data Deleted Successfully!"); window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Deleting details.");window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}
	}

	if(isset($_POST['removecons'])){
		$cs_id =  $_POST['cs_id'];

		$query = "DELETE FROM consultancy WHERE csid = '$cs_id'";
		$result = $conn->query($query);
		if ($result) {
			echo '<script type="text/javascript">alert("Data Deleted Successfully!"); window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}else{
			echo '<script type="text/javascript">alert("Error while Deleting details.");window.location.href="editDetailspage.php?eid='.$eid.'";</script>';
		}
	}

	if(isset($_POST['approve'])){
		
		$e_id =  $_POST['eid'];

		$sql = "SELECT image,texperience,iexperience,responsibility,contact,aoi,other,cv FROM tfaculty WHERE eid = '$e_id'";

	    $personal_data = array();
	    $result = $conn->query($sql);

	    if($row = $result->fetch_assoc()){

	        $personal_data[0] = $row['image'];	        
	        $personal_data[1] = $row['texperience'];
	        $personal_data[2] = $row['iexperience'];
	        $personal_data[3] = $row['responsibility'];
	        $personal_data[4] = $row['contact'];
	        $personal_data[5] = $row['aoi'];
	        $personal_data[6] = $row['other'];
	        $personal_data[7] = $row['cv'];
	       
	    }

	    // for($i = 0; $i < 7; $i++){
	    // 	echo $personal_data[$i];
	    // }

	    if($personal_data[0] != ""){

	    	// move image
	    	// change db path

	    	$image_name = array();

	    	$image_name = explode("/", $personal_data[0]);
	    	$size = sizeof($image_name);

	    	$source =  dirname(__DIR__) . "\\facultyPage\\req_ImgCv\\facultyImages\\".$image_name[$size-1];
	    	$desti = dirname(__DIR__) . "\\facultyPage\\facultyImages\\".$image_name[$size-1];


	    	if(file_exists($desti)){
				unlink($desti);
				 echo '<script type="text/javascript">alert("File deleted!"); </script>'; 
		  	}

		   	if(!copy($source, $desti) ) { 
			    echo '<script type="text/javascript">alert("Cannot copy the file!"); window.location.href="request_data_change.php";</script>'; 
			 } 
			 else { 
		      if(file_exists($source)){
			 	unlink($source);
			   }
			 } 

	    }

	     if($personal_data[1] != ""){

	     	// Update 
	    	$sql = "UPDATE faculty SET texperience = '$personal_data[1]' WHERE eid='$e_id'";
		 	$query = $conn->query($sql);

	    }
	    if($personal_data[2] != ""){

	     	// Update 
	     	$sql = "UPDATE faculty SET iexperience = '$personal_data[2]' WHERE eid='$e_id'";
		 	$query = $conn->query($sql);
	    	
	     }
	     if($personal_data[3] != ""){

	     	// Update 
	     	$sql = "UPDATE faculty SET responsibility = '$personal_data[3]' WHERE eid='$e_id'";
		 	$query = $conn->query($sql);
	    	
	     }
	     if($personal_data[4] != ""){

	     	// Update 
	     	$sql = "UPDATE faculty SET contact = '$personal_data[4]' WHERE eid='$e_id'";
		 	$query = $conn->query($sql);
	    	
	     }
	     if($personal_data[5] != ""){

	     	// Update 
	     	$sql = "UPDATE faculty SET aoi = '$personal_data[5]' WHERE eid='$e_id'";
		 	$query = $conn->query($sql);
	    	
	     }
	     if($personal_data[6] != ""){

	     	// Update 
	     	$sql = "UPDATE faculty SET other = '$personal_data[6]' WHERE eid='$e_id'";
		 	$query = $conn->query($sql);
	    	
	     }
	     if($personal_data[7] != ""){

	     	// Move cv 
	     	// Change db path

	     	$cv_name = array();

	    	$cv_name = explode("/", $personal_data[7]);
	    	$size = sizeof($cv_name);

	    	$source =  dirname(__DIR__) . "\\facultyPage\\req_ImgCv\\facultyCv\\".$cv_name[$size-1];
	    	$desti = dirname(__DIR__) . "\\facultyPage\\facultyCV\\".$cv_name[$size-1];

	    	if(file_exists($desti)){
				unlink($desti);
				 echo '<script type="text/javascript">alert("File deleted!"); </script>'; 
		  	}

		   	if(!copy($source, $desti) ) { 
			    echo '<script type="text/javascript">alert("Cannot copy the file!"); window.location.href="request_data_change.php";</script>'; 
			 } 
			 else { 
		      if(file_exists($source)){
			 	unlink($source);
			   }
			 } 
	    	
	     }

		 // Final delete all temp
		 $query1 = "DELETE FROM tfaculty WHERE eid = '$e_id'";
		 $result1 = $conn->query($query1);
		 if ($result1) {
		 	echo '<script type="text/javascript">alert("Data Updated Successfully!"); window.location.href="request_data_change.php";</script>';
		 }else{
		 	echo '<script type="text/javascript">alert("Error while Deleting details.");window.location.href="request_data_change.php";</script>';
		 }

	}

	// if(isset($_POST['approve_conf'])){
		
	// 	$e_id =  $_POST['eid'];
	// 	$name =  $_POST['name'];
	// 	$title =  $_POST['title'];
	// 	$type =  $_POST['type'];
	// 	$year =  $_POST['year'];
	// 	$details =  $_POST['detail'];

	// 	$query1 = "DELETE FROM tconferences WHERE eid = '$e_id'";
	// 	$result1 = $conn->query($query1);
	// 	if ($result1) {
	// 		$query2 = "INSERT INTO `conferences` (`eid`, `ctitle`, `ctype`, `year`, `cdetails`) VALUES ('$e_id', '$title', '$type', '$year', '$details')";
	// 		$result2 = $conn->query($query2);
	// 		if($result2){
	// 			echo '<script type="text/javascript">alert("Data Updated Successfully!"); window.location.href="request_data_change.php";</script>';
	// 		}else{
	// 			echo '<script type="text/javascript">alert("Data Not Updated!"); window.location.href="request_data_change.php";</script>';
	// 		}
			
	// 	}else{
	// 		echo '<script type="text/javascript">alert("Error while Deleting details.");window.location.href="request_data_change.php";</script>';
	// 	}
	// }

	// if(isset($_POST['approve_book'])){
		
	// 	$beid =  $_POST['beid'];
	// 	$bname =  $_POST['bname'];
	// 	$bpub =  $_POST['bpub'];
	// 	$byear =  $_POST['byear'];
	// 	$bdesc =  $_POST['bdesc'];

	// 	$query1 = "DELETE FROM tbooks WHERE eid = '$beid'";
	// 	$result1 = $conn->query($query1);
	// 	if ($result1) {
	// 		$query2 = "INSERT INTO `books` (`eid`, `bname`, `publication`, `year`, `description`) VALUES ('$beid', '$bname', '$bpub', '$byear', '$bdesc')";
	// 		$result2 = $conn->query($query2);
	// 		if($result2){
	// 			echo '<script type="text/javascript">alert("Data Updated Successfully!"); window.location.href="request_data_change.php";</script>';
	// 		}else{
	// 			echo '<script type="text/javascript">alert("Data Not Updated!"); window.location.href="request_data_change.php";</script>';
	// 		}
			
	// 	}else{
	// 		echo '<script type="text/javascript">alert("Error while Deleting details.");window.location.href="request_data_change.php";</script>';
	// 	}
	// }

	// if(isset($_POST['approve_consl'])){
		
	// 	$ceid =  $_POST['ceid'];
	// 	$cioiu =  $_POST['cioiu'];
	// 	$csdate =  $_POST['csdate'];
	// 	$cedate =  $_POST['cedate'];
	// 	$cduration =  $_POST['cduration'];
	// 	$camount =  $_POST['camount'];
	// 	$cstatus =  $_POST['cstatus'];
	// 	$cdetails =  $_POST['cdetails'];

	// 	$query1 = "DELETE FROM tconsultancy WHERE eid = '$ceid'";
	// 	$result1 = $conn->query($query1);
	// 	if ($result1) {
	// 		$query2 = "INSERT INTO `consultancy` (`eid`, `ioiu`, `sdate`, `edate`, `duration`, `amount`, `status`, `details`) VALUES ('$ceid', '$cioiu', '$csdate', '$cedate', '$cduration','$camount','$cstatus','$cdetails')";
	// 		$result2 = $conn->query($query2);
	// 		if($result2){
	// 			echo '<script type="text/javascript">alert("Data Updated Successfully!"); window.location.href="request_data_change.php";</script>';
	// 		}else{
	// 			echo '<script type="text/javascript">alert("Data Not Updated!"); window.location.href="request_data_change.php";</script>';
	// 		}
			
	// 	}else{
	// 		echo '<script type="text/javascript">alert("Error while Deleting details.");window.location.href="request_data_change.php";</script>';
	// 	}
	// }

	// if(isset($_POST['approve_fundpr'])){
		
	// 	$feid =  $_POST['feid'];
	// 	$fptitle =  $_POST['fptitle'];
	// 	$fpicoi =  $_POST['fpicoi'];
	// 	$fduration =  $_POST['fduration'];
	// 	$ffamount =  $_POST['ffamount'];
	// 	$ffegency =  $_POST['ffegency'];
	// 	$fremark =  $_POST['fremark'];

	// 	$query1 = "DELETE FROM tfundedrp WHERE eid = '$feid'";
	// 	$result1 = $conn->query($query1);
	// 	if ($result1) {
	// 		$query2 = "INSERT INTO `fundedrp` (`eid`, `ptitle`, `picoi`, `duration`, `famount`, `fegency`, `remark`) VALUES ('$feid', '$fptitle', '$fpicoi', '$fduration', '$ffamount','$ffegency','$fremark')";
	// 		$result2 = $conn->query($query2);
	// 		if($result2){
	// 			echo '<script type="text/javascript">alert("Data Updated Successfully!"); window.location.href="request_data_change.php";</script>';
	// 		}else{
	// 			echo '<script type="text/javascript">alert("Data Not Updated!"); window.location.href="request_data_change.php";</script>';
	// 		}
			
	// 	}else{
	// 		echo '<script type="text/javascript">alert("Error while Deleting details.");window.location.href="request_data_change.php";</script>';
	// 	}
	// }

	// if(isset($_POST['approve_jrnal'])){
		
	// 	$jeid =  $_POST['jeid'];
	// 	$jtitle =  $_POST['jtitle'];
	// 	$jtype =  $_POST['jtype'];
	// 	$jyear =  $_POST['jyear'];
	// 	$jdescription =  $_POST['jdescription'];

	// 	$query1 = "DELETE FROM tjournals WHERE eid = '$jeid'";
	// 	$result1 = $conn->query($query1);
	// 	if ($result1) {
	// 		$query2 = "INSERT INTO `journals` (`eid`, `title`, `type`, `year`, `description`) VALUES ('$jeid', '$jtitle', '$jtype', '$jyear', '$jdescription')";
	// 		$result2 = $conn->query($query2);
	// 		if($result2){
	// 			echo '<script type="text/javascript">alert("Data Updated Successfully!"); window.location.href="request_data_change.php";</script>';
	// 		}else{
	// 			echo '<script type="text/javascript">alert("Data Not Updated!"); window.location.href="request_data_change.php";</script>';
	// 		}
			
	// 	}else{
	// 		echo '<script type="text/javascript">alert("Error while Deleting details.");window.location.href="request_data_change.php";</script>';
	// 	}
	// }

	// if(isset($_POST['approve_patent'])){
		
	// 	$peid =  $_POST['peid'];
	// 	$pptitle =  $_POST['pptitle'];
	// 	$pyear =  $_POST['pyear'];
	// 	$pcountry =  $_POST['pcountry'];
	// 	$passignee =  $_POST['passignee'];
	// 	$ptpatentno =  $_POST['ptpatentno'];
	// 	$ppagenos =  $_POST['ppagenos'];
	// 	$pwebadd =  $_POST['pwebadd'];

	// 	$query1 = "DELETE FROM tpatent WHERE eid = '$peid'";
	// 	$result1 = $conn->query($query1);
	// 	if ($result1) {
	// 		$query2 = "INSERT INTO `patent` (`eid`, `ptitle`, `year`, `country`, `assignee`, `patentno`, `pagenos`, `webadd`) VALUES ('$peid', '$pptitle', '$pyear', '$pcountry', '$passignee','$ptpatentno','$ppagenos','$pwebadd')";
	// 		$result2 = $conn->query($query2);
	// 		if($result2){
	// 			echo '<script type="text/javascript">alert("Data Updated Successfully!"); window.location.href="request_data_change.php";</script>';
	// 		}else{
	// 			echo '<script type="text/javascript">alert("Data Not Updated!"); window.location.href="request_data_change.php";</script>';
	// 		}
			
	// 	}else{
	// 		echo '<script type="text/javascript">alert("Error while Deleting details.");window.location.href="request_data_change.php";</script>';
	// 	}
	// }

	// if(isset($_POST['approve_quali'])){
		
	// 	$qeid =  $_POST['qeid'];
	// 	$qlevel =  $_POST['qlevel'];
	// 	$qdegree =  $_POST['qdegree'];
	// 	$qspecialization =  $_POST['qspecialization'];
	// 	$quname =  $_POST['quname'];
	// 	$qcollege =  $_POST['qcollege'];
	// 	$qyear =  $_POST['qyear'];

	// 	$query1 = "DELETE FROM tqualifications WHERE eid = '$qeid'";
	// 	$result1 = $conn->query($query1);
	// 	if ($result1) {
	// 		$query2 = "INSERT INTO `qualifications` (`eid`, `level`, `degree`, `specialization`, `uname`, `college`, `year`) VALUES ('$qeid', '$qlevel', '$qdegree', '$qspecialization', '$quname','$qcollege','$qyear')";
	// 		$result2 = $conn->query($query2);
	// 		if($result2){
	// 			echo '<script type="text/javascript">alert("Data Updated Successfully!"); window.location.href="request_data_change.php";</script>';
	// 		}else{
	// 			echo '<script type="text/javascript">alert("Data Not Updated!"); window.location.href="request_data_change.php";</script>';
	// 		}
			
	// 	}else{
	// 		echo '<script type="text/javascript">alert("Error while Deleting details.");window.location.href="request_data_change.php";</script>';
	// 	}
	// }

	// if(isset($_POST['approve_content'])){
		
	// 	$coeid =  $_POST['coeid'];
	// 	$cotitle =  $_POST['cotitle'];
	// 	$cocontenttype =  $_POST['cocontenttype'];
	// 	$coproblem =  $_POST['coproblem'];
	// 	$codescription =  $_POST['codescription'];
	// 	$coemail =  $_POST['coemail'];
	// 	$copdf =  $_POST['copdf'];

	// 	$query1 = "DELETE FROM tpost WHERE id = '$coeid'";
	// 	$result1 = $conn->query($query1);
	// 	if ($result1) {
	// 		$query2 = "INSERT INTO `post` (`title`, `contenttype`, `problem`, `description`, `email`, `pdf`) VALUES ('$cotitle', '$cocontenttype', '$coproblem', '$codescription','$coemail','$copdf')";
	// 		$result2 = $conn->query($query2);
	// 		if($result2){
	// 			echo '<script type="text/javascript">alert("Data Updated Successfully!"); window.location.href="request_data_change.php";</script>';
	// 		}else{
	// 			echo '<script type="text/javascript">alert("Data Not Updated!"); window.location.href="request_data_change.php";</script>';
	// 		}
			
	// 	}else{
	// 		echo '<script type="text/javascript">alert("Error while Deleting details.");window.location.href="request_data_change.php";</script>';
	// 	}
	// }




?>