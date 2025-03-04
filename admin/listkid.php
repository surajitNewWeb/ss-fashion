<?php
session_start();
if(!isset($_SESSION['an'])){
    header("location:index.php");
}
?>
<?php
include("admin_inc/db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include("admin_inc/sidebar.php"); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include("admin_inc/top.php"); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">List-Product</h1>

                    <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="container">          
  <table class="table">
    <p><a class="btn btn-success" href="insertkid.php">Add new</a></p>
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Product Image</th>
        <th>Product Details</th>
        <th>Delete</th>
        <th>Update</th>
      </tr>
    </thead>
    <tbody>
      <?php
     $sel="SELECT child.*,parent.product_name as pname FROM `kids` as child LEFT JOIN kids as parent
           ON child.pid=parent.cid;";
     $rs=$con->query($sel);
     while($row=$rs->fetch_assoc()){
      ?>
<tr>
<td><?php echo $row['product_name']; ?></td>
<td><?php echo $row['product_price']; ?></td>
<td><img class="myimg" src="img/<?php echo $row['product_img']; ?>" ></td>
<td><?php echo $row['product_details']; ?></td>
<td> <a onclick="return confirm('are you sure to delete ?')" href="delete.php?did=<?php echo $row['cid']?>" class="btn btn-danger">delete</a></td>
<td> <a href="update.php?uid=<?php echo $row['cid']?>" class="btn btn-success">Update</a></td>
</tr>
<?php }?>
    </tbody>
  </table>
</div>

</body>
</html>

            </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include("admin_inc/footer.php"); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
   
    <?php include("admin_inc/logout.php"); ?>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>