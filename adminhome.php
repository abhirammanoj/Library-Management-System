<?php
// This module represents admin home page.various functionalities of admin can be seen here.
include("setting.php");
session_start();
if(!isset($_SESSION['aid']))
{
	header("location:index.php");
}
$aid=$_SESSION['aid'];
$a=mysqli_query($set,"SELECT * FROM admin WHERE aid='$aid'");
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
<a class="bbb"href="changePassword.php" class="Command">Change Password &nbsp&nbsp&nbsp&nbsp</a><a class="bbb" href="logout.php" class="Command">Logout</a>
</div>
<table border="0" class="table" cellpadding="10" cellspacing="10">
<tr><td><a href="addBooks.php" class="Command">Add Books</a></td></tr>
<tr><td><a href="bookRequests.php" class="Command">Books Requests</a></td></tr>
<tr><td><a href="issue.php" class="Command">Book Issue</a></td></tr>
<tr><td><a href="updateBooks.php" class="Command">Update Book</a></td></tr>
<tr><td><a href="deleteBook.php" class="Command">Delete Book</a></td></tr>
</table>
<br />
<br />

<br />
<br />

</div>
</div>
</body>
</html>