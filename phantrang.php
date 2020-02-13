<?php
include('class/phantrang.class.php');
if(isset($_GET['page']) && isset($_GET['category'])){
	$page=$_GET['page'];
	$dk="";
	if($_GET['category']!="" && $_GET['category']!=" "){
		$category=explode(" ",$_GET['category']);
		$dk.="AND (";
		for($i=0;$i<count($category);$i++){
			if($i==0){
				$dk.="CatalogID= '$category[$i]'";
			}
			else{
				$dk.="OR CatalogID= '$category[$i]'";
			}
		}
		$dk.=")";
		
	}
	if($_GET['color']!="" && $_GET['color']!=" "){
		$color=explode(" ",$_GET['color']);
		$dk.="AND (";
		for($i=0;$i<count($color);$i++){
			if($i==0){
				$dk.="Color= '$color[$i]'";
			}
			else{
				$dk.="OR Color='$color[$i]'";
			}
		}
		$dk.=")";
	}
	if($_GET['price']!="" && $_GET['price']!=" "){
		$price=explode(" - $",$_GET['price']);
		$dk.="AND (";
		$dk.="Price BETWEEN $price[0] AND $price[1]";
		$dk.=")";
	}
	if($_GET['key']!="" && $_GET['key']!=" "){
		$key=$_GET['key'];
		$key=trim($key);
		$dk.="AND (";
		$dk.="upper(ProductName) like '%$key%' OR Color like '%$key%' OR upper(CatalogID) like '%$key%' OR Price like '%$key%'";
		$dk.=")";
	}
	if($_GET['sort']!=" "){
		$sort=(string)$_GET['sort'];
		if($sort!="" && $sort!="Relevance"){
			if($sort=="Name, A to Z"){$sort="ProductName ASC";}
			if($sort=="Name, Z to A") $sort="ProductName DESC";
			if($sort=="Price, low to high") $sort="Price ASC";
			if($sort=="Price, high to low") $sort="Price DESC";
			$dk.=" ORDER BY $sort ";
		}
		else
			$dk.=" ORDER BY ID DESC ";
	}
	//$dk="AND (CatalogID='SM' OR CatalogID='AT')";
	//echo $dk;
	$phantrang=new PhanTrang($page,$dk);	//khoi tao doi tuong phan trang
	$dulieu=$phantrang->select_products();
	$link_pagination=$phantrang->nut_phantrang();
	//if(!$dulieu) die('k co sp');
	echo $dulieu.$link_pagination;
	$phantrang->close();
}
?>