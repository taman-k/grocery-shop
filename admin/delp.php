<?php 
include("admin_inc/db.php");

$id=$_GET['id'];

$s="SELECT * FROM products WHERE pid='$id'";
$rs=$con->query($s);
$row=$rs->fetch_assoc();
unlink("product_img/".$row['pimg']);


$d="DELETE FROM products WHERE pid='$id'";
if($con->query($d)){
    header("location:listproduct.php");
}
?>