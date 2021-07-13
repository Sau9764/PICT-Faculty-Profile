<?php 
	include "../../connect.php";
	$hi = $_GET["eid"];

	$name = "asd";

	$sql = "SELECT fullname,enable FROM faculty where eid='$hi'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc())
	{
		$name = $row["fullname"];
	}

	$sql1 = "delete from faculty where eid='$hi'";
	$result = $conn->query($sql1);
	echo '<script>window.location.href="../dept_admin.php";</script>'
?>
