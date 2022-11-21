<?php
//This module helps the students to see all the books in the library.
include("setting.php");
session_start();
if(!isset($_SESSION['sid']))
{
	header("location:index.php");
}
$sid=$_SESSION['sid'];
$a=mysqli_query($set,"SELECT * FROM students WHERE sid='$sid'");
$b=mysqli_fetch_array($a);


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
<span class="SubHead">ALL BOOKS IN LIBRARY</span>
<br><br>
<table border="0" class="table" cellpadding="10" cellspacing="10">
<tr class="labels" style="text-decoration:underline;"><th>bookName</th><th>author</th><th>publisher</th></tr>   
<?php
$x=mysqli_query($set,"SELECT * FROM books");
while($y=mysqli_fetch_array($x))
{
	?>
<tr class="labels" style="font-size:14px;"><td><?php echo $y['name'];?></td><td><?php echo $y['author'];?></td><td><?php echo $y['publisher'];?></td>    
</tr>
    <?php
}
?> 
</table><br />
<a href="home.php" class="link">Go Back</a>
<br />   
</div>
</div>
</body>
</html>
