<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sua du lieu</title>
	 <script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
    <script src="https://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url(); ?>jQueryupload/js/vendor/jquery.ui.widget.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>jQueryupload/js/jquery.fileupload.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>	
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>	
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/all.css">
</head>
<body> 
	<div class="container">
		<div class="row">
			<div class="col-sm-6 offset-3">
				<h3 class="text-center">SUA DU LIEU</h3>
				<form method="post" action="<?php echo base_url(); ?>index.php/slideedit/edit" enctype="multipart/form-data">
					<?php $stt =0; ?>
				<?php foreach ($mangdl as $key): ?>	
					<?php $stt ++; ?>
				<h2>Contact số: <?=$stt ?></h2>
					<div class="form-row">
						<label>TIEU DE SLIDE</label>
						<input name="title[]" id="title" value="<?= $key['title']?>" type="text" class="form-control" >
					</div>
					<div class="form-row">
						<label>MO TA SLIDE</label>
						<input name="description[]" value="<?= $key['description']?>" id="description" type="text" class="form-control">
					</div>
					<div class="form-row">
						<label>LINK CUA NUT</label>
						<input name="button_nut[]" value="<?= $key['button_nut']?>"id="button_link" type="text" class="form-control">
					</div>
					<div class="form-row">
						<label>LINK CUA text</label>
						<input name="button_text[]" value="<?= $key['button_text']?>"id="button_text" type="text" class="form-control">
					</div>
					<div class="form-row">
						<label>upload anh</label>
					     <img src="<?=$key['slide_image'] ?>" alt="" class="img-fluid">
					     <!-- <input type="hidden"  class="form-control" name="slide_image2" value = "<?=$key['slide_image'] ?>"> -->
					   	<input type="hidden"  class="form-control" name="slide_image_old[]" value = "<?=$key['slide_image'] ?>">
   						 <input type="file" name="slide_image[]" value="<?= $key['slide_image']?>"id="slide_image" class="form-control" placeholder="Upload ANH SLIDE">
					</div>
					<?php endforeach ?>
					<input type="submit" class="form-control btn btn-outline-success" id="submit" >
				</form>
			</div>
		</div>
	</div>
	<script>
	duongdan='<?php echo base_url(); ?>index.php/adddata/';
		$('#slide_image').fileupload({
			dataType:'json',
			url: duongdan+'/uploadfile',
			done:function(e,data){
				$.each(data.result.files,function(index,file){
					tenfile=file.url;
				});
			}
		})
	</script>
</body>
</html>