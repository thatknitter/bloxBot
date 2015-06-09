<html>
<head>
  <title>New User Entry Form</title>
</head>
<body>
<h1>New User Entry Form</h1>
<?php
  include'includes/connect.php';	
  $username=$_POST['username'];
  $userpassword=$_POST['password'];
  
  $queryDB = "SELECT * FROM userdb";
  
  $query = mysql_query("INSERT INTO users(`id`,`name`,`password`)
   VALUES(NULL, '$username','$userpassword')") or die(mysql_error());
  //$result = $db->query($query);

	if($_POST['$username'] && $_POST['$userpassword'])
	{
		
		echo "Your info has been entered.";
		exit;
	
	}
  
  else if (!$username && !$userpassword) 
  {
     echo "You have not entered all the required details.<br />"
          ."Please go back and try again.";
     exit;
  }

  $db->close();
?>
</body>
</html>
