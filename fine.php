<?php
//This module helps the students to view their fine if any.
include("setting.php");
session_start();
if(!isset($_SESSION['sid']))
{
	header("location:index.php");
}
$sid=$_SESSION['sid'];
$a=mysqli_query($set,"SELECT * FROM students WHERE sid='$sid'");
$b=mysqli_fetch_array($a);
$c=mysqli_query($set,"SELECT * FROM fine WHERE sid='$sid'");
while($d=mysqli_fetch_array($c))
{
$interval=0;

$date1=date('d-m-Y');

//$date1=  date("20-12-2022");
$date2=$d['dueDate'];
if(($date1)>($date2))
{
    $interval=$date1-$date2;
	$e=mysqli_query($set,"UPDATE fine SET amount='$interval' WHERE sid='$sid'");
}
else
$e=mysqli_query($set,"UPDATE fine SET amount='$interval' WHERE sid='$sid'");
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


<span class="SubHead">View Fine</span>
<br />
<br />

<table border="0" class="table" cellpadding="10" cellspacing="10">
<tr class="labels" style="text-decoration:underline;"><th>Book Name</th><th>Author</th><th>DueDate</th><th>amount</th></tr>
<?php
$x=mysqli_query($set,"SELECT * FROM fine WHERE sid='$sid'");
while($y=mysqli_fetch_array($x))
{
	?>
<tr class="labels" style="font-size:14px;"><td><?php echo $y['bookName'];?></td><td><?php echo $y['author'];?></td>
<td><?php echo $y['dueDate'];?></td><td><?php echo $y['amount'];?></td>
</tr>
<?php
}
?>
</table><br />
<a href="home.php" class="link">Go Back</a>

</div>
</div>
</body>
</html>

