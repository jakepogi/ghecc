<?php include 'config.php' ?>
<?php

	$a = $_GET['datetime'];
	$a1 = $_GET['content'];
	$b1 = "none.png";

	mysql_query("insert into post(content,datetime,imagename) 
						values('".$a1."','".$a."','".$b1."')");
	
?>