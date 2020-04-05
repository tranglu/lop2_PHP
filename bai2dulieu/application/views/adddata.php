<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm mới số sim điện thoại</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/1.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
     <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.css">
</head>
<body>
	<?php require('header_sim.php') ?>;
	<div class="container">
		<h2 class="text-xs-center">Thêm số điện thoại trong form</h2>
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<div class="card">
					<form action="adddata/insertData_controller" method="post" enctype="mutidata/form-data">
					  <div class="form-row">
					    <div class="col">
					     Số sim<input type="text" class="form-control" name="so" placeholder="Số">
					    </div>
					    <div class="col">
					      Giá sim<input type="text" class="form-control" name="gia" placeholder="Giá">
					    </div>
					  </div>
					  <input type="submit" class="btn btn-success btn-block my-2" value="Add Data">
					</form>	
				</div>
				
			</div>
		</div>
	</div>
	
</body>
</html>