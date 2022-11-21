
<?php
include("setting.php");
session_start();
if(!isset($_SESSION['sid']))
{
	header("location:index.php");
}
$sid=$_SESSION['sid'];
$a=mysqli_query($set,"SELECT * FROM students WHERE sid='$sid'");
$b=mysqli_fetch_array($a);
$t=$_GET['term'];
if (isset($t)) {
     
   $query = "SELECT * FROM books WHERE name LIKE '{$_GET['term']}%' LIMIT 25";
    $result = mysqli_query($conn, $query);
 
    if (mysqli_num_rows($result) > 0) {
     while ($user = mysqli_fetch_array($result)) {
      $res[] = $user['name'];
     }
    } else {
      $res = array();
    }
  
    echo json_encode($res);
}

$bn=$_POST['name'];
if($bn!=NULL )
{
	$sql=mysqli_query($set,"SELECT * FROM books WHERE name='$bn' ");
	if(mysqli_num_rows($sql)==1)
	{
		$msg="Book is present in the library";
	}
	else
	{
		$msg="Book is not present in the library ";
	}
}


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

<span class="SubHead">Search Books </span>
<br />
<br />
<form method="post" action="">
<table border="0" class="table" cellpadding="10" cellspacing="10">
<tr><td class="msg" align="center" colspan="2"><?php echo $msg;?></td></tr> 
<tr><td class="labels">Book name : </td><td><input type="text" name="name" id="term" placeholder="Enter Book Name" size="25" class="fields" required="required"  /></td></tr>

<tr><td colspan="2" align="center"><input type="submit" value="SEARCH" class="fields" /></td></tr>
</table>
</form>

<script type="text/javascript">
  $(function() {
     $( "#term" ).autocomplete({
       source: 'searchBook.php',
     });
  });
</script>





<br />
<br />
<a href="home.php" class="link">Go Back</a>
<br />
<br />

</div>
</div>
</body>
</html>