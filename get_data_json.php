<?php 
	header("content-type:text/javascript;charset=utf-8");   
	
	include("connect.php");
	mysql_query("SET NAMES UTF8");
	
	$KEY_SELECT = $_POST['patient_id'];
	$KEY_PHASE = $_POST['phase'];
	
	$sql = "select name from tb_name where usr_id ='$KEY_SELECT' and drug_phase=$KEY_PHASE"; 
	$result = mysql_query($sql,$link);
	$json = array();

	if(mysql_num_rows($result)){
		while($row=mysql_fetch_assoc($result)){
			$json['data'][]=$row;
		}
	}
	echo json_encode($json); 
	mysql_close();
	
		
?>