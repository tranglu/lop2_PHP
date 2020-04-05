<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sua du lieu </title>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/fontawesome.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
     <link rel="stylesheet" href="<?php echo base_url(); ?>css/fontawesome.css">

</head>
<body>
	<?php require('header_sim.php') ?>;
	<div class="container">
			<h3 class="text-center">cap nhat thong tin sim</h3>
	</div>
	<div class="container">
		<div class="row">
			<?php foreach ($mangketqua as $key => $value): ?>
				
			<div class="row">
			<div class="col-sm-8 push-sm-2">
				<div class="card">
					<form action="../updateDulieu" method="post" enctype="mutidata/form-data">
					  <div class="form-row">
					  	<div class="col">
					     ID <input type="hiden"  class="form-control" name="id" value = "<?=$value['id'] ?>">
					    </div>
					    <div class="col">
					     Số sim<input type="text" class="form-control" name="so" placeholder="Số" value = "<?=$value['so'] ?>">
					    </div>
					    <div class="col">
					      Giá sim<input type="text" class="form-control" name="gia" placeholder="Giá" value = "<?=$value['gia'] ?>">
					    </div>
					  </div>
					  <input type="submit" class="btn btn-success btn-block my-2" value="cap nhat du lieu">
					</form>	
				</div>
				
			</div>
		</div>
			
			<?php endforeach ?>									
		</div>
			
	</div>
</body>
</html>