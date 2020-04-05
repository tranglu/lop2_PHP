<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		h3{
			font-size: 30px;
			text-align: center;
			font-weight: bold;
			color: green;
		}
	</style>
</head>
<body>
	<h3>Ứng dụng php đầu tiên</h3>
	<ul>
		<?php foreach ($danhsachsodienthoai as $key): 
			//truyền tên mảng ?>

			<li><?php echo $key; ?></li>
		<?php endforeach ?>
	</ul>
</body>
</html>