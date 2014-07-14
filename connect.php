<?php
	$link = mysql_connect("localhost","username","password");
	mysql_select_db("database_name",$link);
	mysql_query("SET NAMES UTF8");
?>