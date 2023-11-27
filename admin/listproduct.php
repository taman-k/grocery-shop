<?php session_start(); 
if(!isset($_SESSION['admin_name'])){
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

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include("admin_inc/menu.php"); ?>
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
                    <h1 class="h3 mb-4 text-gray-800">List Product</h1>
                    <table class="table table-bordered">
    <thead>
      <tr>
        <th>Product Category</th>
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
$s="SELECT * FROM products";
$rs=$con->query($s);
while($row=$rs->fetch_assoc()){
?>
      <tr>
        <td><?php echo $row['pcat']; ?></td>
        <td><?php echo $row['pname']; ?></td>
        <td><?php echo $row['pprice']; ?></td>
        <td><img style="width:100px;" src="product_img/<?php echo $row['pimg']; ?>" ></td>
        <td><?php echo $row['pd']; ?></td>


        <td><a onclick="return confirm('Are you sure?');" href="delp.php?id=<?php echo $row['pid']; ?>" class="btn btn-danger">Delete</a></td>
        <th><a href="edit-product.php?eid=<?php echo $row['pid'];?>" class="btn btn-primary">Edit</a></th>
      </tr>
      <?php } ?>


    </tbody>
  </table>
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
 

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>