<?php 
include("admin_inc/db.php");
if(isset($_POST['save'])){
    $c=$con->real_escape_string ($_POST['product_name']);
    $p=$_POST['parent_id'];
    $pp=$_POST['product_price'];
    $pd=$_POST['product_details'];
    
    $buf=$_FILES['pimg']['tmp_name'];
$fn=time().$_FILES['pimg']['name'];

move_uploaded_file($buf,"img/".$fn);

    $ins="INSERT INTO kids SET product_name='$c',product_price='$pp', product_img='$fn', product_details='$pd',pid='$p'";
$con->query($ins);
header("location:listkid.php");
}else{
    echo "403 access denied";
}

?>