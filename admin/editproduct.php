<?php
if(isset($_FILES['pi_image'])){
	if($_FILES['pi_image']['error']>0){
		echo "file bi loi";
		$image="";
	}
	else{
		move_uploaded_file($_FILES['pi_image']['tmp_name'],'../images/'.$_FILES['pi_image']['name']);
		$image='images/'.$_FILES['pi_image']['name'];
	}
}
//echo $image;
if(isset($_POST['pi_productid']) && isset($_POST['pi_productname'])){
	include("../ketnoi.php");
	$id=$_POST['pi_productid'];
	$name=$_POST['pi_productname'];
	$catalog=$_POST['pi_catalogid'];
	$color=$_POST['pi_color'];
	$price=$_POST['pi_price'];
	$amount=$_POST['pi_amount'];
	$status=$_POST['pi_status'];
	$sql="UPDATE `products` SET `ProductName`='$name',`CatalogID`='$catalog',`Color`='$color',`Price`='$price',`Amount`='$amount',`Status`='$status' WHERE ProductID='$id'";
	if($image!=""){
		$sql="UPDATE `products` SET `ProductName`='$name',`CatalogID`='$catalog',`Color`='$color',`Price`='$price',`Amount`='$amount',`Status`='$status',   `Image`='$image' WHERE ProductID='$id'";
	}
	echo $sql;
	mysqli_query($connect,$sql);
	mysqli_close($connect);
	header("Location:product-table.php");
	
}

?>
