<?php
	session_start();
	include 'functions/config.php';
	
	
	
	if($_POST['submit']){
			//get data
			
			$content = $_POST['postadvisory'];
			$datetime = date('Y-m-d H:i:s');

			


			
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 90000000)
&& in_array($extension, $allowedExts)) 
{
  if ($_FILES["file"]["error"] > 0) {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
  header("location:home.html");
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    if (file_exists("upload/" . $_FILES["file"]["name"])) {
      echo $_FILES["file"]["name"] . " already exists. ";
    } else {
	
		$image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
		 $image_name = addslashes($_FILES['file']['name']);
		 $image_size = getimagesize($_FILES['file']['tmp_name']);
		 move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
	  
	  
		 if($image_size==FALSE)
		 echo "Thats not an image";
		else
		{
		
			
		
		if(!$insert = mysql_query("insert into post(content,datetime,image,imagename) 
						values('".$content."','".$datetime."','".$image."','".$image_name."')",$con))
		echo "Problem Uploading";
		else
		{
		
		}
		}
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
    }
  }
} else {
  echo "Invalid file";
}
				
		}
		
?>