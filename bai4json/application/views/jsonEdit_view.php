<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sửa nội dung json</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>	
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>	
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/all.css">
</head>
<body>
	<form method="post" action="<?php echo base_url(); ?>index.php/json_edit/edit">
	<div class="container">
		<?php $stt =0; ?>
		<?php foreach ($mangdl as $key): ?>	
			<?php $stt ++; ?>
			<h2>Contact số: <?=$stt ?></h2>
		  <div class="form-row">
		    	<label>Tên</label>
		      <input name="ten[]" value="<?= $key['ten']?>" type="text" class="form-control">
		    	<label>Số điện thoại:</label>
		      <input name="sdt[]" value="<?= $key['sdt']?>"type="text" class="form-control">
		      </div>	
		<?php endforeach ?>
		<input type="submit" class="form-control btn btn-danger my-3" value="Lưu">
	</div>
	</form>	
</body>
</html>