<?php
	$conn=mysql_connect('localhost','root','itsrds');
	mysql_select_db('users',$conn);
	if(isset($_POST['submit']))
	{
		$username = $_POST['usern'];
		$pass = $_POST['password'];
		$login = "select * from waliaxxx where username = '".$username."' && password = '".$pass."'";
		$row = mysql_query($login);
		$count = mysql_num_rows($row);
		if($count>0)
		{
			header('location:http://waliaxxx.comlu.com/');
		}
	}
	
?>
<!DOCTYPE html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="/prashant/login.css">
</head>
<body id="body">
	<form action="login.php" method="post">
	<fieldset>
		<table>
			<tr>
				<td>username:<input name="usern" type="text" rows="10" col="1">
			</tr>
			<tr>
				<td>password:<input name="password" type="text" rows="10" col="1">
			</tr>
			<tr>
				<td>&nbsp <input name="submit" type="submit" rows="10" col="1">
			</tr>
		</table>
	</fieldset>
	</form>
</body>