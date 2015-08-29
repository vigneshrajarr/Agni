<?php
session_start();
$type=$_GET['type'];
$connection=mysql_connect("localhost","root","") or die("Can't connect to database.");
$db=mysql_select_db("agni",$connection) or die("Can't select database.");
if($type==2)
{
	$name=$_GET['name'];
	$email=$_GET['email'];
	$password=$_GET['password'];
	$phone=$_GET['phone'];
	$roll=$_GET['roll'];
	$department=$_GET['department'];
	$batch=$_GET['batch'];
	$query=mysql_query("SELECT * FROM `USERS` WHERE EMAIL='$email'");
	$rows=mysql_num_rows($query);
	if($rows>0)
	{
		$message="Email id already exists.";
	}
	else if(mysql_query("INSERT INTO `USERS`(`NAME`,`EMAIL`,`PASSWORD`,`PHONE`,`ROLLNUMBER`,`DEPARTMENT`,`BATCH`) VALUES ('$name','$email','$password','$phone','$roll','$department','$batch')"))
		$message="Registered Successfully";
	else
		$message="Some problem persists, Try after sometime.";
}
if($type==1)
{
	$email=$_GET['email'];
	$password=$_GET['password'];
	$email = stripslashes($email);
    $password = stripslashes($password);
    $email = mysql_real_escape_string($email);
    $password = mysql_real_escape_string($password);
	$query=mysql_query("SELECT * FROM `USERS` WHERE EMAIL='$email' and PASSWORD='$password'");
	$rows=mysql_num_rows($query);
	if($rows>0)
	{
		if($row=mysql_fetch_array($query))
		{
			$_SESSION['name']=$row['NAME'];
			$_SESSION['email']=$row['EMAIL'];
			$_SESSION['department']=$row['DEPARTMENT'];
			$_SESSION['batch']=$row['BATCH'];
			$message=$row['NAME'];
		}
	}
	else
	{
		$message="Invalid credentials.";
	}
}
echo $message;
?>