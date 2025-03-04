<?php 
include("admin_inc/db.php");
$id=$_GET['did'];
$d="DELETE  FROM  category WHERE cid='$id'";
$con->query($d);
header("location:listCategory.php");
?>