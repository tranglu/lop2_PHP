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
	</div>
	<div class="container">
		<div class="row">
			<?php foreach ($mangketqua as $key => $value): ?>
				
			<div class="row">
			<div class="col-sm-8 offset-2">
				<h2 class="text-center alert alert-info">CẬP NHẬT THÔNG TIN NHÂN VIÊN</h2>
				<div class="card">
					<form action="../updateDulieu" method="post" enctype="multipart/form-data">
					  <div class="form-row">
					  	
					      <input type="hidden"  class="form-control" name="id" value = "<?=$value['id'] ?>">
					  
					    <div class="col-6">
					     Họ Tên: <input type="text" class="form-control" name="ten" placeholder="ten" value = "<?=$value['ten'] ?>">
					    </div>
					    <div class="col-6">
					      Địa chỉ: <input type="text" class="form-control" name="diachi" placeholder="diachi" value = "<?=$value['diachi'] ?>">
					      
					    </div>
					    <div class="col-4">
					     Tuổi: <input type="text" class="form-control" name="tuoi" placeholder="tuoi" value = "<?=$value['tuoi'] ?>">
					    </div>
					    <div class="col-4">
					     Số điện thoại: <input type="text" class="form-control" name="sdt" placeholder="sdt" value = "<?=$value['sdt'] ?>">
					    </div>
					    <div class="col-4">
					     Số đơn hàng: <input type="text" class="form-control" name="sodonhang" placeholder="sodonhang" value = "<?=$value['sodonhang'] ?>">
					     
					    </div>
					    <div class="col">
					     Ảnh đại diện:
					     <img src="<?=$value['avatar'] ?>" alt="" class="img-fluid">
					     <input type="hidden"  class="form-control" name="avatar2" value = "<?=$value['avatar'] ?>">
   						 <input type="file" name="avatar" id="avatar" class="form-control" placeholder="Upload anh">
					    </div>
					  </div>
					  <input type="submit" class="btn btn-success btn-block my-2" value="cap nhat du lieu">
					  <input type="reset" class="btn btn-success btn-block my-2" value="nhập lại">
					</form>	
				</div>
				
			</div>
		</div>
			
			<?php endforeach ?>									
		</div>
			
	</div>
</body>
</html>