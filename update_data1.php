	<?php
	require_once("connect.php");
	
	$name = $_POST['name'];
	$usr_id = $_POST['patient_id'];

	$sql = "UPDATE cli_drug SET name='$name' WHERE usr_id='$usr_id'";
	
	$result = mysql_query($sql,$link);
	if($result){
		echo "OK";
	}else{
		echo "FAIL";
	}
	?>