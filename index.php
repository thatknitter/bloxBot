<?php
include 'includes/connect.php';

$query = "SELECT * FROM userdb";

 $result = mysql_query($query) or die(mysql_error());
 
 while($person = mysql_fetch_array($result))
 {
 
 
 
 }

?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Index</title>
	</head>
	<body>
 	 <form action="insert_user.php" method="post">
  	   <table border="0">
         <tr>
           <td>User Name</td>
           <td><input type="text" name="username"></td>
         </tr>
         <tr>
          <td>Password</td>
          <td> <input type="text" name="password"></td>
        </tr>
        <tr>
        <td colspan="2"><input type="submit" value="Submit"></td>
      </tr>
	</form>
	</body>
</html>


<!-- 2 Textboxes and submit -->
