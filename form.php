<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1>Contact Us</h1>
<form name ="contact" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<p>
 <label for="name">Name:</label>
 <input type="text" name="name" id="name">		
</p>
<p>
 <label for="email">Email:</label>
 <input type="text" name="email" id="email">
</p>
<p>
 <label for="comments">Comments:</label>
 <textarea type="comments" id="comments" ></textarea>
</p>
<p>
<input type="submit" name ="send" id="send" value="send comments"></input>
</p>
</form>
<?php
/*When your web browser sends data from the web server, this is referred to as a _post _ _ _ request.
When your web browser retrieves data from the web server, this is referred to as a _get _ _ request. 
*/
if($_GET){
	echo 'contents of the $_GET array:<br>';
	print_r($_GET);
	}elseif($_POST) {
		echo 'contents of the $_POST array:<br>';
	print_r($_POST);
		}
?>
</body>
</html>