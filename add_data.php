<?php
	require_once("connect.php");
	
	$name= $_POST['name'];
	$drug_phase = $_POST['drug_phase'];
	$usr_id = $_POST['patient_id'];
	
	$sql = "INSERT INTO tb_name (name,drug_phase,usr_id)";
	$sql .= "VALUES ('$name','$drug_phase','$usr_id');";
	
	$result = mysql_query($sql,$link);
	if($result){
		echo "OK";
	}else{
		echo "FAIL";
	}
?>