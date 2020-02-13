<?php
session_start();
$_SESSION['error']=0;
if(isset($_FILES['ap_image'])){
	if($_FILES['ap_image']['error']>0){
		echo "file bi loi";
		$image="";
	}
	else if($_FILES['ap_image']['type']=="image/jpeg" || $_FILES['ap_image']['type']=="image/png" || $_FILES['ap_image']['type']=="image/gif"){
		move_uploaded_file($_FILES['ap_image']['tmp_name'],'../images/'.$_FILES['ap_image']['name']);
		$image='images/'.$_FILES['ap_image']['name'];
	}else
	$_SESSION['error']=1;
}
else{
	$_SESSION['error']=1;
}
if(isset($_POST['ap_productid']) && isset($_POST['ap_productname'])){
	$productid=$_POST['ap_productid'];
	$productname=$_POST['ap_productname'];
	$catalogid=$_POST['ap_catalogid'];
	$color=$_POST['ap_color'];
	$price=$_POST['ap_price'];
	$amount=$_POST['ap_amount'];
	$status=$_POST['ap_status'];
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$date=date('Y-m-d');

	$sql="INSERT INTO `products`(`ID`, `ProductID`, `ProductName`, `CatalogID`, `Color`, `Price`, `Amount`, `AmountBuy`, `Image`, `ImageList`, `Status`, `Created`) VALUES ('','$productid','$productname','$catalogid','$color','$price','$amount','0','$image','','$status','$date')";

	include_once('../ketnoi.php');
	$rs=mysqli_query($connect,"SELECT * FROM products WHERE ProductID='$productid'");
	if(mysqli_num_rows($rs)>0){
		$_SESSION['error']=1;
		header('Location:product-table.php');
		return(false);
	}
	$result=mysqli_query($connect,$sql) ;
	header('Location:product-table.php');
}
?>
