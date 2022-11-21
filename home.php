<?php
//This module represents the home page of students.here they can see various operations they can perform
include("setting.php");
session_start();
if(!isset($_SESSION['sid']))
{
	header("location:index.php");
}
$sid=$_SESSION['sid'];
$a=mysqli_query($set,"SELECT * FROM students WHERE sid='$sid'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library Management System</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div id="banner">
<center><span class="head">Library Management System</span></center><br />

</div>
<br />

<div align="center">
<div id="wrapper">
<br />
<br />

<span class="SubHead">Welcome <?php echo $name;?></span>
<br />
<br />
<div align="right">
<a class="bbb"href="changePassword.php" class="Command">Change Password &nbsp&nbsp&nbsp&nbsp</a><a class="bbb" href="logout.php" class="Command">Logout</a><
</div>
<table border="0" class="table" cellpadding="10" cellspacing="10">
<tr><td><a href="issueBook.php" class="Command">Borrow Book</a></td></tr><tr><td><a href="request.php" class="Command">Request New Books</a></td></tr>
<tr><td><a href="searchBook.php" class="Command">Search Book</a></td></tr>
<tr><td><a href="fine.php" class="Command">View fine</a></td></tr><br><br>
<tr><td><a href="displayBook.php" class="Command">Display ALL Books</a></td></tr><br><br>
<tr><td><a href="updateinfo.php" class="Command">Update Student Information</a></td></tr><br><br>
</table><br><br>



<br />
<br />

<br />
<br />

</div>
</div>
</body>
</html>