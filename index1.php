<?php
	$conn=mysql_connect('localhost','root','itsrds');
	mysql_select_db('users',$conn);
	if(isset($_POST['submit']))
	{
		$fname=$_POST['First_Name'];
		$lname=$_POST['Last_Name'];
		$date=$_POST['year'];
		$ques=$_POST['question'];
		$gender=$_POST['sex'];
		$usern=$_POST['usern'];
		$pass=$_POST['pass'];
		$abc="insert into waliaxxx values('$fname','$lname','$date','$ques','$gender','$usern','$pass')";
		
		$abc1 = mysql_query($abc,$conn);
				if(!$abc1)
					{
						die('Could not enter data'.mysql_error());
					}
	}
?>
<!DOCTYPE html>
<head>
	<title>walia mansion</title>
	<link rel="stylesheet" type="text/css" href="/prashant/index.css">
</head>
<body id="body">
	<h4 id="heading">REGISTER HERE FOR PORN</h4>
	<br />
	<form id="form" action="index1.php" method="post">
		<fieldset>
		<table>
			<tr>
				<td>First Name:<br /><input name="First_Name" type="text" rows="10" col="1"></input></td>
			</tr>
			<tr>
				<td>Last Name:<br /><input name="Last_Name" type="text" rows="10" col="1"></input></td>
			</tr>
			<tr>
				<td>Porn is free for everyone but atleast tell your date of birth:<br /><input name="year" type="date" rows="6" col="1"></input></td>
			</tr>
			<tr>
				<td>Why are you interested in using this site ? <br /><textarea name="question" type="text" col="100" rows="5"></textarea></td>
			</tr>
			<tr>
				<td>Gender:<input type="radio" name="sex">Male</input><input type="radio" name="sex">Female</input><input type="radio" name="sex">Other</input></td>
			</tr>
			<tr>
				<td>username:<br /><input name="usern" type="text" rows="10" col="1"></input></td>
			</tr>
			<tr>
				<td>password:<br /><input name="pass" type="password" rows="10" col="1"></input></td>
			</tr>
			<tr>
				<td>&nbsp <input type="submit" text="submit" name="submit"></input></td>
				<td>&nbsp <input type="reset" text="reset" name="reset"></input></td>
			</tr>
			</fieldset>
	</form>
</body>