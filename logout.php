<?php
//This module represents the logout procedure of students.
session_start();
unset($_SESSION['sid']);
session_destroy();
header("location:index.php");
?>