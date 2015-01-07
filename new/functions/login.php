<?php include 'config.php';?>
<?php
header('Access-Control-Allow-Origin: *');
	$qry=mysql_query("select * from users where users='".$_GET['username']."'and password='".$_GET['password']."' ");
	
		if(mysql_num_rows($qry)>0){
			echo 1;
		}
?>