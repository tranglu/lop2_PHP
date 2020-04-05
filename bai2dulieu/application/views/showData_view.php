<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>xem du lieu </title>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/fontawesome.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
     <link rel="stylesheet" href="<?php echo base_url(); ?>css/fontawesome.css">

</head>
<body>
	<?php require('header_sim.php') ?>;
	<div class="container">
			<h3 class="text-center">CAC SIM HIEN CO</h3>
	</div>
	<div class="container">
		<div class="row">
			<?php foreach ($dulieutucontroller as $key => $value): ?>
				
			
			<div class="col-sm-4">
				<div class="card text-center">
							<div class="card-body">
								<h4 class="card-title">So sim:<?=$value['so'] ?></h4>
								<p class="card-text">Gia tien: <?=$value['gia'] ?></p>				
								<a href="<?php echo base_url(); ?>index.php/showdata/deleteData/<?=$value['id'] ?>" class="btn btn-danger"><i class="fa_4x far fa-trash-alt"></i></a>
								<a href="<?php echo base_url(); ?>index.php/showdata/editData/<?=$value['id'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
							</div>
				</div>			
			</div>
			<?php endforeach ?>									
		</div>
			
	</div>
</body>
</html>