<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>quản lý tin</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/1.css">
    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/ckeditor/ckfinder/ckfinder.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url(); ?>/ckeditor_4/ckeditor/ckeditor.js"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>/ckeditor_4/ckfinder/ckfinder.js">
    	</script>  -->
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-6 themmoi">
			<div class="jumbotron text-center">
				<h1 class="display-3">Thêm mới tin</h1>
				<p class="lead">thêm mới tin.</p>
				<hr class="m-y-md"></hr>
			</div>
			<div class="formthemmoi">
				
				<form action="<?php echo base_url(); ?>Slide/themmoitin">
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Tiêu đề tin</label>
						<input name="tieude"type="text" class="form-control" id="formGroupExampleInput" placeholder="tiêu đề tin">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Danh mục tin</label>
						<select name="iddanhmuc" class="form-control">
							<option value="1">1</option>
							<option value="1">2</option>
							<option value="1">3</option>
							<option value="1">4</option>

						</select>
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Nội dung tin</label>
						<textarea name="noidungtin" id="noidungtin" class="noidungtin" cols="30" rows="10"></textarea>
					</fieldset>
					<fieldset class="form-group">
						<input type="submit" value="thêm tin">
					</fieldset>
				</form>
				
			</div>
		</div>
		<div class="col-sm-6 danhsach">
			<div class="jumbotron text-center">
				<h1 class="display-3">Danh sách tin</h1>
				<p class="lead">Danh sách tin.</p>
				<hr class="m-y-md"></hr>
			</div>
		</div>
	</div>
</div>
<script>
	//ckeditor
	CKEDITOR.replace( 'noidungtin' );
	//ckfinder
	/*CKEDITOR.replace( 'noidungtin', {
    filebrowserBrowseUrl: '<?php echo base_url(); ?>'+'/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl:'<?php echo base_url(); ?>'+'/ckfinder/ckfinder.html?Type=Images',
    
});*/
CKEDITOR.replace( 'noidungtin', {
    filebrowserBrowseUrl: '<?php echo base_url(); ?>'+'/ckfinder/ckfinder.html',
    filebrowserUploadUrl: '<?php echo base_url(); ?>'+'/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserWindowWidth: '1000',
    filebrowserWindowHeight: '700'
} );

</script>
</body>
</html>
