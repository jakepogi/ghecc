
<?php
	session_start();
	include 'functions/config.php';


?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">



</head>





<body onLoad= "load()">





<form name = "updates" method = "post" action = "postimg.php" enctype="multipart/form-data">
<label for="file">Filename:</label> <br/>
<input type="file" name="file" id="file"><br>


<input type="text" name="postadvisory" placeholder="Caption here..." />


<br />
<input  type="submit" name="submit"  data-ajax="false" value="Submit"></input>
<br />
<a href="home.html" >BACK</a>
</form>
	</body>
</html>

