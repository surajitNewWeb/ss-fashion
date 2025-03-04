<?php 
include("admin_inc/db.php");
if(isset($_POST['save'])){
    $c=$con->real_escape_string ($_POST['cat_name']);
    $p=$_POST['parent_id'];
    
    $ins="INSERT INTO category SET cat_name='$c',pid='$p'";
$con->query($ins);
header("location:listCategory.php");
}else{
    echo "403 access denied";
}

?>