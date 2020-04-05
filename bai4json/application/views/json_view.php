<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view ket qua</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>	
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>	
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/all.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="card-deck-wrapper">
				<div class="card-deck">
					<?php foreach ($mangketqua as $key => $value): ?>			
					<div class="card text-center"> 
						<div class="card-block">
						<h4 class="card-title">Ten: <?= $value->ten ?></h4>
						<p class="card-text">So dien thoai: <?= $value->sdt ?></p>
						<a href="<?php echo base_url(); ?>index.php/json/xoa_json/<?= $value->sdt ?>" class="btn btn-danger"><i class="fa_4x far fa-trash-alt"></i></a>
						<a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
						</div>
					 </div> 
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
	<form method="post" action="<?php echo base_url(); ?>index.php/json/adddata">
		  <div class="form-row">
		    	<label>Tên</label>
		      <input name="ten" type="text" class="form-control" placeholder="Ten">
		    	<label>Số điện thoại:</label>
		      <input name="sdt" type="text" class="form-control" placeholder="So dien thoai">
		      <input type="submit" class="form-control btn btn-danger my-3" value="Tao moi">
		      <a href="<?php echo base_url(); ?>index.php/json_edit/" class="form-control btn btn-success my-3">sửa dữ liệu</a>
		  </div>
		</form>	
	</div>
</body>
</html>