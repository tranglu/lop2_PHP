<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include('UploadHandler.php');
class slideEdit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('slide_model');
	}

	public function index()
	{
	
		$dl=$this->slide_model->layDuLieuSlide();
		$dl=json_decode($dl,true);
		$dl = array('mangdl' => $dl );
				
		$this->load->view('editSlide_view',$dl, FALSE);

	}
	public function edit(){
		// load file
		/*$target_dir = "images/";
		$target_file = $target_dir . basename($_FILES['slide_image']["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["slide_image"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["slide_image"]["size"] > 500000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["slide_image"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["slide_image"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		// lay du lieu ra tu truong ten laf slides_topbanner
		$dulieu=$this->slide_model->layDuLieuSlide();
		// giai ma json
		$dulieu=json_decode($dulieu,true);
		if($dulieu==null){
			echo'du lieu dang trong';
			$dulieu=array();
		}*/
		//lay ve noi dung ( day là 1 mang)
		$title=$this->input->post('title');
		$description=$this->input->post('description');
		$button_nut=$this->input->post('button_nut');
		$button_text=$this->input->post('button_text');
		$cacanh=$_FILES["slide_image"]["name"];//luu tru ten file
		$filevatly=$_FILES["slide_image"]["tmp_name"];//file that

		//duyet mang de lay ten tung file
		$tenfile = array( );
		for ($i=0; $i <count($cacanh) ; $i++){
					
					if(empty($cacanh[$i]))
					{
						$tenfile[$i]="";
					}
					else{
						$duongdan='images/'.$cacanh[$i];
						move_uploaded_file($filevatly[$i], $duongdan);
					}
					echo "<pre>";
					var_dump($filevatly[$i]);
					var_dump($cacanh[$i]);
					echo "</pre>";
		}
		/*move_uploaded_file($_FILES["slide_image"]["tmp_name"], $target_file)
				echo "<pre>";
				var_dump($filevatly);
				echo "</pre>";*/
		/*$slide_image=basename($_FILES["slide_image"]["name"]);
			//kiểm tra điều kiện, nếu có upload ảnh thì lấy ảnh đó
			if($slide_image)// nếu có upload
			{
				//in ra avatar
				$slide_image= base_url()."images/".basename($_FILES["slide_image"]["name"]);
			}
			else{
				$slide_image=$this->input->post('slide_image2');
			}
		// tạo json de dua vao du lieu
		$dl = array();
		//duyet tung phan tu trong mang ten, sdt de dua vao dl
		for ($i=0; $i <count($title) ; $i++) { 
			$trunggian = array();
			$trunggian['title']=$title[$i];
			$trunggian['description']=$description[$i];
			$trunggian['button_nut']=$button_nut[$i];
			$trunggian['button_text']=$button_text[$i];
			$trunggian['slide_image']=$slide_image[$i];
			array_push($dl, $trunggian);
		}
		// sau khi xong vong lap for $dl chứa đầy đủ dữ liệu
			$dl=json_encode($dl);
			// trước khi upload dô json phải đổi nó thành 1 cái chuỗi
			if($this->slide_model->updateData($dl)) {
				$this->load->view('result.html');
			};*/
	}
	public function uploadfile(){
	$uploadfile=new UploadHandler();
}
}

/* End of file jsonEdit.php */
/* Location: ./application/controllers/jsonEdit.php */