<?php 
	include "../../connect.php";

	$hi = $_GET["eid"];
	$dept = $_GET["dept"];

	$name = "";

	$sql = "SELECT fullname,enable FROM faculty where eid='$hi' and department = '$dept'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc())
	{
		$name = $row["fullname"];
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body>

<script type="text/javascript">
	
	var txt= "<?php echo $name; ?>";
	var yes= "<?php echo $hi; ?>";

	if(txt == ""){
		alert("Not a memeber");
		window.location.href = "../dept_admin.php";
	}else{
		var r = confirm("Are you sure you want to Delete <?php echo $name ?>");
		if (r == true) {
			window.location.href = "delete_Contact.php?eid=" + yes; 
		}else {
			window.location.href = "../dept_admin.php";
		}
	}

	
</script>
</body>
</html>