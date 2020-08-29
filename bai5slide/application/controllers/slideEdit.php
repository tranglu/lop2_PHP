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
		
		//lay ve noi dung ( day là 1 mang)
		$title=$this->input->post('title');
		$description=$this->input->post('description');
		$button_nut=$this->input->post('button_nut');
		$button_text=$this->input->post('button_text');
		$cacanh=$_FILES["slide_image"]["name"];//luu tru ten file
		$filevatly=$_FILES["slide_image"]["tmp_name"];//file that

		//duyet mang de lay ten tung file
		$slide_image = array( );
		$slide_image_old=$this->input->post('slide_image_old');
		for ($i=0; $i <count($cacanh) ; $i++){
					
					if(empty($cacanh[$i]))
					{
						$slide_image[$i]=$slide_image_old[$i];
					}
					else{
						$duongdan='images/'.$cacanh[$i];
						move_uploaded_file($filevatly[$i], $duongdan);
						$slide_image[$i]=base_url()."images/".$cacanh[$i];
					}
					
		}
		// tạo mảng tất cả slide
		$tatcaslide = array();
		// insert từng phần tử vào mảng tất cả slide
		for($i=0;$i<count($title);$i++){
			$tam=array();
			$tam['title']=$title[$i];
			$tam['description']=$description[$i];
			$tam['button_nut']=$button_nut[$i];
			$tam['button_text']=$button_text[$i];
			$tam['slide_image']=$slide_image[$i];
			array_push($tatcaslide, $tam);

		}			
				
		//đưa thành json
		$tatcaslide=json_encode($tatcaslide);
		//gọi model update dữ liệu
		$this->load->model('slide_model');
		if($this->slide_model->updateData($tatcaslide)){
			$this->load->model('slide_model');
		$dl=$this->slide_model->layDuLieuSlide();
		$dl=json_decode($dl,true);
		$dl = array('mangdl' => $dl );
		$this->load->view('trangchu',$dl);
		}
		else{
			echo "không thành công";
		}
	}
	public function uploadfile(){
	$uploadfile=new UploadHandler();
}
}

/* End of file jsonEdit.php */
/* Location: ./application/controllers/jsonEdit.php */