<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slide extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('slide_model');
	}

	public function index()
	{
		$this->load->view('addData_view');
	}
	public function addSlide(){
		// load file
		$target_dir = "images/";
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
		}
		// lay du lieu tu view ve
		$title=$this->input->post('title');
		$description=$this->input->post('description');
		$button_nut=$this->input->post('button_nut');
		$button_text=$this->input->post('button_text');
		$slide_image=base_url()."images/".basename($_FILES["slide_image"]["name"]);
		$con = array('title'=>$title,
				'description'=>$description,
				'button_nut'=>$button_nut,
				'button_text'=>$button_text,
				'slide_image'=>$slide_image);
		//dua phan tu con vao mang cha
		array_push($dulieu, $con);
		$dulieu=json_encode($dulieu);
		//update du lieu
		if($this->slide_model->insertDuLieuSlide($dulieu))
			{
				$this->load->view('result.html');
			}
			else{
				echo"Upload khong thanh cong";
			};
		// them moi noi dung vao json
		}

}

/* End of file Slide.php */
/* Location: ./application/controllers/Slide.php */