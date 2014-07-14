	<?php
	require_once("connect.php");
	
	$ciga1 = $_POST['ciga1'];
	$ciga2 = $_POST['ciga2'];
	$ciga3 = $_POST['ciga3'];
	$time_smoke = $_POST['time_smoke'];
	$amount = $_POST['amount'];
	$smoke_wakeup = $_POST['smoke_wakeup'];
	$usr_id = $_POST['patient_id'];

	$sql = "UPDATE tb_name SET ciga_1='$ciga1', ciga_2='$ciga2',ciga3='$ciga3',time_smoke='$time_smoke',amount='$amount' , smoke_wakeup='$smoke_wakeup' WHERE usr_id='$usr_id'";
	
	$result = mysql_query($sql,$link);
	if($result){
		echo "OK";
	}else{
		echo "FAIL";
	}
	?>