<?php
include('class/shop-single.class.php');

if(isset($_GET['productid'])){
	
	$id=$_GET['productid'];
	$data=new ShopSingle($id);
	$details=$data->productdetails();
	echo $details;
}
else{
	echo("k tim dc");
}
?>