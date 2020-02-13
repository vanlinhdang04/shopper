<?php
$id=$_POST['id'];
include_once("../ketnoi.php");
$result=mysqli_query($connect,"SELECT * FROM products WHERE ProductID='$id'");
$row=mysqli_fetch_assoc($result);
$rs=mysqli_query($connect,"SELECT * FROM catalog ");
$str="";
$str.='<form id="pi" class="form-horizontal" action="editproduct.php" onsubmit="return Check()" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label class="control-label col-md-5">Image</label>	
										<div class="col-md-7">
											<img id="pi_imageshow" src="../'.$row["Image"].'" alt="Image Error" height="100px">
											<input id="pi_image" name="pi_image" type="file" class="form-control" value="'.$row["Image"].'"/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-5">Product ID</label>	
										<div class="col-md-7">
											<input id="pi_productid" name="pi_productid" type="text" class="form-control" value="'.$row['ProductID'].'" readonly/>	
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-5">Product Name</label>	
										<div class="col-md-7">
											<input id="pi_productname" name="pi_productname" type="text" class="form-control" value="'.$row['ProductName'].'" />	
										</div>
									</div>';
							$str.='<div class="form-group">
										<label class="control-label col-md-5">Catalog</label>	
									<div class="col-md-7">';
$str.='<select class="form-control" id="pi_catalogid" name="pi_catalogid">';
while($catalog=mysqli_fetch_assoc($rs)){
	if($row['CatalogID']==$catalog['CatalogID']){
		$str.='<option value="'.$catalog['CatalogID'].'" selected>'.$catalog["CatalogName"].'</option>';
	}
	else{
		$str.='<option value="'.$catalog['CatalogID'].'">'.$catalog["CatalogName"].'</option>';
	}
}
$str.='</select>';
$str.='</div></div>';

//									<div class="form-group">
//										<label class="control-label col-md-5">Catalog ID</label>	
//										<div class="col-md-7">
//											<input id="pi_catalogid" type="text" class="form-control" value="'.$row['CatalogID'].'" />	
//										</div>
//									</div>
						     $str.='<div class="form-group">
										<label class="control-label col-md-5">Color</label>	
										<div class="col-md-7">
											<input id="pi_color" name="pi_color" type="text" class="form-control" value="'.$row['Color'].'" />	
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-5">Price ($)</label>	
										<div class="col-md-7">
											<input id="pi_price" name="pi_price" type="text" class="form-control" value="'.$row['Price'].'" />	
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-5">Amount</label>	
										<div class="col-md-7">
											<input id="pi_amount" name="pi_amount" type="number" class="form-control" value="'.$row['Amount'].'" />	
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-5">AmountBuy</label>	
										<div class="col-md-7">
											<input id="pi_amountbuy" name="pi_amountbuy" type="number" class="form-control" value="'.$row['AmountBuy'].'" readonly/>	
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-5">Status</label>	
										<div class="col-md-7">';
if($row['Status']==1){
	$str.='<input id="pi_status" name="pi_status" type="hidden" value="1">
											<button id="bt_status" type="button" class="btn btn-success waves-effect" value="Available">Available</button>
										</div>
									</div>';
}
else{
	$str.='<input id="pi_status" name="pi_status" type="hidden" value="0">
											<button id="bt_status" type="button" class="btn btn-danger waves-effect" value="Block">Block</button>
										</div>
									</div>';
}
											
					$str.=	'<div class="form-group">
										<label class="control-label col-md-5">Created(yyyy/mm/dd)</label>	
										<div class="col-md-7">
											<input id="pi_created" name="pi_created" type="text" class="form-control" value="'.$row['Created'].'" readonly/>	
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-offset-4 col-md-2">
        									<button type="submit" class="btn btn-info">Upload</button>
      									</div>
										<div class="col-md-offset-3 col-md-2">
        									<button id="pi_delete" name="'.$row['ProductID'].'" class="btn btn-danger">Delete</button>
      									</div>
										
									</div>
										
									</form>';
echo $str;
mysqli_close($connect);

?>