<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<div>
		<?php
		include('class/phantrang.class.php');
		$test = new PhanTrang();
		$test->select_products();
		?>
	</div>
</body>
</html>