<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>them du lieu</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>	
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>	
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/all.css">
</head>
<body> 
	<div class="container">
		<div class="row">
			<div class="col-sm-6 offset-3">
				<h3 class="text-center">THEM MOI DU LIEU</h3>
				<form method="post" action="<?php echo base_url(); ?>index.php/slide/addslide" enctype="multipart/form-data">
					<div class="form-row">
						<label>TIEU DE SLIDE</label>
						<input name="title" id="title" type="text" class="form-control" >
					</div>
					<div class="form-row">
						<label>MO TA SLIDE</label>
						<input name="description" id="description" type="text" class="form-control" placeholder="Mo ta slide">
					</div>
					<div class="form-row">
						<label>LINK CUA NUT</label>
						<input name="button_nut" id="button_nut" type="text" class="form-control" placeholder="Link cua nut">
					</div>
					<div class="form-row">
						<label>LINK CUA text</label>
						<input name="button_text" id="button_text" type="text" class="form-control" placeholder="Link cua text">
					</div>
					<div class="form-row">
						<label>upload anh</label>
						<input name="slide_image" id="slide_image" type="file" class="form-control" >
					</div>

						<input type="submit" class="form-control btn btn-outline-success" id="submit" >
	</form>
			</div>
		</div>
	</div>
	
</body>
</html>