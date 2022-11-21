<?php
//student can update their information .
include("setting.php");
session_start();
if(!isset($_SESSION['sid']))
{
	header("location:index.php");
}
$sid=$_SESSION['sid'];
$a=mysqli_query($set,"SELECT * FROM students WHERE sid='$sid'");
$b=mysqli_fetch_array($a);

$name=$_POST['name'];
$email=$_POST['email'];
$sem=$_POST['sem'];
$branch=$_POST['branch'];
$no=$_POST['contact'];
if($name==NULL || $email==NULL || $sem==NULL || $branch==NULL || $no==NULL)
{
	//
}
else
{
	$sql=mysqli_query($set,"UPDATE students SET name='$name',email='$email',branch='$branch',sem='$sem',contactNO='$no' WHERE sid='$sid'");
	if(mysqli_num_rows($sql)==1)
	{
		$msg="Successfully UPDATED";
	}
	else
	{
		$msg="PLEASE TRY AGIN LATER";
	}
}


?>

<html>
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
<span class="SubHead">UPDATE INFORMATION</span>
<br><br>

<form method="post" action="">
<table border="0" cellpadding="4" cellspacing="4" class="table">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr><td class="labels">Name : </td><td><input type="text" name="name" class="fields" placeholder="Enter Full name" required="required" size="25" /></td></tr>
<tr><td class="labels">Email ID : </td><td><input type="email" name="email" class="fields" placeholder="Enter Email ID" required="required" size="25" /></td></tr>
<tr><td class="labels">Sem : </td>
<td>
<select name="sem" class="fields" required>
<option value="" disabled="disabled" selected="selected">- - Select Sem - -</option>
<option value="1" class="abc">First Sem</option>
<option value="2" class="abc">Second Sem</option>
<option value="3" class="abc">Third Sem</option>
<option value="4" class="abc">Fourth Sem</option>
<option value="5" class="abc">Fifth Sem</option>
<option value="6" class="abc">Sixth Sem</option>
<option value="7" class="abc">Seventh Sem</option>
<option value="8" class="abc">Eighth Sem</option>
</select>
</td></tr>

<tr><td class="labels">Branch : </td>
<td>
<select name="branch" class="fields" required>
<option value="" disabled="disabled" selected="selected">- - Select Branch - -</option>
<option value="Computer Engineering" class="abc">Computer Engineering</option>
<option value="Electronics Engineering" class="abc">Electronics Engineering</option>
<option value="Mechanical Engineering" class="abc">Mechanical Engineering</option>
<option value="Civil Engineering" class="abc">Civil Engineering</option>
<option value="Information Technology" class="abc">Information Technology</option>
</select>
</td></tr>
<tr><td class="labels">contact no : </td><td><input type="text" name="contact" class="fields" placeholder="Enter contact number" required="required" size="25" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="UPDATE" class="fields" /></td></tr>
</table>
</form><br />




<a href="home.php" class="link">Go Back</a>
<br />   
</div>
</div>
</body>
</html>