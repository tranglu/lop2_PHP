
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm mới nhân viên</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- jquery upload -->
	 <script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
    <script src="https://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url(); ?>jQueryupload/js/vendor/jquery.ui.widget.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>jQueryupload/js/jquery.fileupload.js"></script>
		
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>	
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/all.css">
    
</head>
<body>
	<?php require('header_sim.php') ?>;
	<div class="container">
			<h3 class="text-center">DANH SÁCH NHÂN VIÊN</h3>
			<hr>
	</div>
	<div class="container">
		<div class="row">
			<div class="card-deck-wrapper">
				<div class="card-deck">
					
				
			 <?php foreach ($dulieutucontroller as $key => $value): ?>													
				<div class="col-sm-4">
					<div class="card">
					<div class="card-body">
						 <img class="card-img-top" src="<?=$value['avatar'] ?>" alt="Card image cap"> 
						<h4 class="card-title"><?=$value['ten'] ?></h4>
						<p class="card-text">Địa chỉ: <?=$value['diachi'] ?></p>
						<p class="card-text">Tuổi: <?=$value['tuoi'] ?></p>
						<p class="card-text">Số điện thoại: <?=$value['sdt'] ?></p>
						<p class="card-text">Số đơn hàng hoàn thành: <?=$value['sodonhang'] ?></p>
						<p class="card-text"><a href=" <?=$value['facebook'] ?>" class="btn btn-info">Facebook</a></p>	
	
						<a href="<?php echo base_url(); ?>index.php/adddata/deleteData/<?=$value['id'] ?>" class="btn btn-danger"><i class="fa_4x far fa-trash-alt"></i></a>
						<a href="<?php echo base_url(); ?>index.php/adddata/editData/<?=$value['id'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
					</div>
					</div>			
				</div>
				<?php endforeach ?>	
				</div>
			</div>							
		</div>
			
	</div>
	<div class="container">
		
		<div class="row">
			<div class="col-sm-8 offset-2">
				<h2 class="text-center alert alert-info">Thêm nhân viên</h2>
				<div class="card">
					
					  <div class="form-row">
					    <div class="col-6">
					     Tên Nhân Viên: <input id="ten" type="text" class="form-control" name="ten" placeholder="Tên">
					    </div>
					   	<div class="col-6">
					      Địa chỉ:<input id="diachi" type="text" class="form-control" name="diachi" placeholder="Địa chỉ">
					      </div>
					   	<div class="col-6">
					  
					      Tuổi<input id="tuoi" type="number" class="form-control" name="tuoi" placeholder="Tuổi">
					    </div>
					    <div class="col-6">
					      Số điện thoại: <input id="sdt" type="text" class="form-control" name="sdt" placeholder="Số điện thoại">
					    </div>
					    <div class="col-6">
					      Facebook: <input id="facebook" type="text" class="form-control" name="facebook" placeholder="link facebook">
					    </div>
					    <div class="col-6">
					      Số đơn hàng hoàn thành: <input id="sodonhang"  type="number" class="form-control" name="sodonhang" placeholder="Số đơn hàng hoàn thành">
					      </div>
					   	<div class="col">
					    	Ảnh đại diện:
   						 <input type="file" name="files[]" id="avatar" class="form-control" placeholder="Upload anh">
					    </div>
					  </div>
					  <button type="button" class="btn btn-success btn-block my-2 nutxulyajax">Thêm mới (bảng ajax)</button>
						<button type="reset" class="btn btn-success btn-block my-2">Nhap lai</button>
					  <!-- <a href="<?php //echo base_url(); ?>index.php/adddata/" class="btn btn-secondary btn-block my-2" >Nhập Lại</a> -->
				<!-- 	</form>	 -->
				</div>
				
			</div>
		</div>
	</div>
	<script>
		duongdan='<?php echo base_url(); ?>index.php/adddata/';
		$('#avatar').fileupload({
			dataType:'json',
			url: duongdan+'/uploadfile',
			done:function(e,data){
				$.each(data.result.files,function(index,file){
					tenfile=file.url;
				});
			}
		})

		$('.nutxulyajax').click(function(event) {
			$.ajax({
			url: 'adddata/ajax_add',
			type: 'POST',
			dataType: 'json',
			data: {
				ten: $('#ten').val(),
				tuoi: $('#tuoi').val(),
				sdt: $('#sdt').val(),
				diachi: $('#diachi').val(),
				facebook: $('#facebook').val(),
				sodonhang: $('#sodonhang').val(),
				avatar:tenfile

			},
		})
		.done(function() {
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
			//dùng append để vừa thêm xuất hiện liền, k phải tải lại
			noidung='<div class="col-sm-4">';
			noidung+='<div class="card">';
			noidung+='<div class="card-body">';	
			noidung+='<img class="card-img-top" src="'+tenfile+'" alt="Card image cap"> ';
			noidung+='<h4 class="card-title">'+$('#ten').val()+'</h4>';
			noidung+='<p class="card-text">Địa chỉ: '+$('#diachi').val()+'</p>';	
			noidung+='<p class="card-text">Tuổi:'+$('#tuoi').val()+'</p>';
			noidung+='<p class="card-text">Số điện thoại:'+$('#sdt').val()+'</p>';
			noidung+='<p class="card-text">Số đơn hàng hoàn thành: '+$('#sodonhang').val()+'</p>';
			noidung+='<p class="card-text"><a href=" '+$('#facebook').val()+'" class="btn btn-info">Facebook</a></p>';
			noidung+='<a href="<?php echo base_url(); ?>index.php/adddata/deleteData/<?=$value['id'] ?>" class="btn btn-danger"><i class="fa_4x far fa-trash-alt"></i></a>';
			noidung+='<a href="<?php echo base_url(); ?>index.php/adddata/editData/<?=$value['id'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>';
			noidung+='</div>';
			noidung+='</div>';
			noidung+='</div>';		 				
			$('.card-deck').append(noidung);
			// sau khi thêm nội dung thì viết cái này để nó k hiện giá trị vừa thêm trong form
			$('#ten').val('');
			$('#tuoi').val('');
			$('#sdt').val('');
			 $('#diachi').val('');
			 $('#facebook').val('');
			$('#sodonhang').val('');
						
		
		});
		});
		
	</script>
</body>
</html>
