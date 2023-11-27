<?php 
include("admin_inc/db.php");

if(isset($_POST['save'])){

    $pcat=$_POST['cat'];
    $pn=$_POST['pname'];
    $pp=$_POST['pprice'];
    $pd=$_POST['pdetails'];

    $id=$_POST['id'];

    if(isset($_FILES['pimg']['name']) && $_FILES['pimg']['name']!=""){
    $buf=$_FILES['pimg']['tmp_name'];
    $fn=time().$_FILES['pimg']['name'];
   
    move_uploaded_file($buf,"product_img/".$fn);

    $up="UPDATE products SET pcat='$pcat',pname='$pn',pprice='$pp',pimg='$fn',pd='$pd' WHERE pid='$id'";
}
else{
    $up="UPDATE products SET pcat='$pcat',pname='$pn',pprice='$pp',pd='$pd' WHERE pid='$id'";

}

$con->query($up);
    
header("location:listproduct.php");
//echo "Data Submitted Successfully ";


}else{
    echo "403 Access denied";
}


?>