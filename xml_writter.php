<?php
    require "connect.php";
	session_start();
	session_unset();
	session_destroy();

	$myfile = fopen("links.xml", "w") or die("Unable to open file!");

	 $sql = "SELECT eid, fullname FROM faculty WHERE enable = 1";
	 $run = $conn->query($sql);

	 // write XML Header
	 $header = "<pages>\n";
	 fwrite($myfile, $header);
	 
	 while($row = $run->fetch_assoc()){
	 	$names = $row['fullname'];
	 	$eid = $row['eid'];

	 	fwrite($myfile, "<link>");
	 	$title = "<title>".$names."</title>\n";
	 	$url = "<url>http://localhost/faculty/view_faculty_profile.php?eid=".$eid."</url>\n";
	 	

	 	fwrite($myfile, $title);
	 	fwrite($myfile, $url);
	 	fwrite($myfile, "</link>");
	 }

	 $header = "</pages>";
	 fwrite($myfile, $header);
	
	fclose($myfile);
?>