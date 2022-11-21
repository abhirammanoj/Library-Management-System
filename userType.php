<?php
//shows the two types of users.
include("setting.php");
session_start();
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library Management System</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
<style>
a:link, a:visited {
  background-color: transparent;
  color: white;
  padding: 14px 25px;
  text-align: center;
  border:1px solid #FFF;
  text-decoration: none;
  display: inline-block;
  border-radius:10px;
}

a:hover, a:active {
  background-color: blue;
}
</style>
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

<center><h1 style="color:white;" >HOME PAGE</h1></center><br><br>

<a href="index.php">STUDENT</a><br><br>
<a href="admin.php">ADMIN</a><br><br><br><br>



</div>
</div>
</body>
</html>




















