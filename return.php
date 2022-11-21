<?php
//represents returning of books.
include("setting.php");
session_start();
if(!isset($_SESSION['aid']))
{
	header("location:index.php");
}
$aid=$_SESSION['aid'];

$r=$_GET['r'];
mysqli_query($set,"DELETE FROM borrowed WHERE id='$r'");
mysqli_query($set,"DELETE FROM fine WHERE id='$r'");
header("location:issue.php");
?>