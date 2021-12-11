<?php
	
	$h = date('H');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		body{
			min-height: 100vh;
			background: url(img/<?php echo $h % 8; ?>.jpg) no-repeat fixed;
			background-color: cover;
		}
	</style>
</head>
<body>
	<h1><?php echo $h; ?></h1>
</body>
</html>