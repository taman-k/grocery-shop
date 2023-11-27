<?php 
include("admin_inc/db.php");

if(isset($_POST['save'])){

    $pcat=$_POST['cat'];
    $pn=$_POST['pname'];
    $pp=$_POST['pprice'];
    $pd=$_POST['pdetails'];
    $buf=$_FILES['pimg']['tmp_name'];
    $fn=time().$_FILES['pimg']['name'];
   
    move_uploaded_file($buf,"product_img/".$fn);


    $ins="INSERT INTO products SET pcat='$pcat',pname='$pn',pprice='$pp',pimg='$fn',pd='$pd'";
    if($con->query($ins)){
        header("location:listproduct.php");
    }




}else{
    echo "403 Access denied";
}


?>