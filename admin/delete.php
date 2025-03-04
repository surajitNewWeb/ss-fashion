<?php 
include("admin_inc/db.php");
$id=$_GET['did'];
$d="DELETE  FROM  surajit WHERE cid='$id'";
$con->query($d);
header("location:listproduct.php");
?>