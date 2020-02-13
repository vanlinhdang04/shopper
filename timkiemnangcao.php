<?php
include('class/phantrang.class.php');

if(isset($_POST['category'])){
	if($dk==null || $dk==""){
		$dk="WHERE ";
	}
	$category=explode(' ',$_POST['category']);
 	foreach($category as $value){
		$dk.="CatalogID = $value";
	}
	if($dk=="WHERE "){
		$dk="";
	}
	
}


?>