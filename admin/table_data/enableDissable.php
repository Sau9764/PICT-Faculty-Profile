<?php 

    include "../../connect.php";
    session_start();
	
	$hi = $_GET["eid"];

	$name = "";
	$enable= '';

	$sql = "SELECT fullname,enable FROM faculty where eid='$hi'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc())
	{
		$name = $row["fullname"];
		$enable = $row["enable"];
	}

	if($enable == '1'){
		$sql2 = "UPDATE faculty set enable ='0' where eid='$hi' ";
		$result = $conn->query($sql2);
		echo '<script>window.location.href = "../dept_admin.php" ;</script>';
	}else{
		$sql2 = "UPDATE faculty set enable ='1' where eid='$hi' ";
		$result = $conn->query($sql2);
		echo '<script>window.location.href = "../dept_admin.php" ;</script>';
	}
?>
