<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include('UploadHandler.php');
class addData extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$this->load ->model('showData_model');
		//goi ham getdatabase trong model
		$dulieu=$this->showData_model->getdatabase();//lay ve dc 1 cai mang
		$dulieu= array('dulieutucontroller'=>$dulieu);// bien du lieu thanh mang voi key = dulieucontroller
		//echo "<pre>";
		//var_dump($dulieu);
		$this->load->view('showData_view', $dulieu, FALSE);
	}
	public function insertData_controller()
	{
		
		//upload file
		$target_dir = "images/";
		$target_file = $target_dir . basename($_FILES['avatar']["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["avatar"]["tmp_name"]);
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
		if ($_FILES["avatar"]["size"] > 500000) {
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
		    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		//lấy dữ liệu về		
		$tennv= $this->input->post('ten');
		$diachinv= $this->input->post('diachi');
		$tuoinv= $this->input->post('tuoi');
		$sdtnv= $this->input->post('sdt');
		$sodonhangnv= $this->input->post('sodonhang');
		$facebooknv= $this->input->post('facebook');
		$avatarnv= base_url()."images/".basename($_FILES["avatar"]["name"]);
		//truyền du lieu đến model
		$this->load->model('showData_model');
		
		if($this->showData_model->insert($tennv,$diachinv,$tuoinv,$avatarnv,$sdtnv,$sodonhangnv,$facebooknv)){
			//echo "insert thành công, vào data để xem nhé";
			$this->load->view('result.html');
		}
		else{
			echo "thất bại";
			
		}
		//return $this->db->insert_id();// trả về giá trị là id của phần tử đó
	}
	public function deleteData($idnhanduoc){
			//echo $idnhanduoc;
			$this->load ->model('showData_model');
			if($this->showData_model->deleteDataById($idnhanduoc))
			{
				$this->load->view('thongbaoxoathanhcong');
			}
			else{
				echo " chua xoa duoc";
			}

		}
		public function editData($idlayve){
			//echo $idnhanduoc;
			$this->load ->model('showData_model');
			$ketqua=$this->showData_model->editById($idlayve);
			$ketqua=array('mangketqua'=>$ketqua);
			//truyen ket qua nay vaof view edit de sua du lieu
			$this->load->view('editData_view', $ketqua, FALSE);

		}
		
		public function updateDulieu(){
			$id=$this->input->post('id');
			$ten=$this->input->post('ten');
			$diachi=$this->input->post('diachi');
			$tuoi=$this->input->post('tuoi');					
			$sdt=$this->input->post('sdt');
			$facebook=$this->input->post('facebook');
			$sodonhang=$this->input->post('sodonhang');
			// xu ly avatar
			//upload file
		$target_dir = "images/";
		$target_file = $target_dir . basename($_FILES['avatar']["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["avatar"]["tmp_name"]);
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
		if ($_FILES["avatar"]["size"] > 500000) {
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
		    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}		
		
		//$avatar= base_url()."images/".basename($_FILES["avatar"]["name"]);
		$avatar= basename($_FILES["avatar"]["name"]);
			//kiểm tra điều kiện, nếu có upload ảnh thì lấy ảnh đó
			if($avatar)// nếu có upload
			{
				//in ra avatar
				$avatar= base_url()."images/".basename($_FILES["avatar"]["name"]);
			}
			else{
				$avatar=$this->input->post('avatar2');
			}
		
		$this->load->model('showData_model');
			//su dung ham trong model giao tiep voi du lieu nhan duoc tu view
			if($this->showData_model->updateDataById($id,$ten,$diachi,$tuoi,$avatar,$sdt,$sodonhang,$facebook))
			{
				$this->load->view('result.html');
				
			}
			else{
			echo " khong thanh cong";
		}
}
public function ajax_add(){
	    $ten= $this->input->post('ten');
		$diachi= $this->input->post('diachi');
		$tuoi= $this->input->post('tuoi');
		$sdt= $this->input->post('sdt');
		$sodonhang= $this->input->post('sodonhang');
		$facebook= $this->input->post('facebook');
		//$avatar= 'https://kenh14cdn.com/zoom/220_289/2020/3/25/portrait-avatar-copy-11-1585104894830863219813-crop-1585104919164594990753.jpg';
		$avatar=$this->input->post('avatar');
		//truyền du lieu đến model
		$this->load->model('showData_model');
		
		if($this->showData_model->insert($ten,$diachi,$tuoi,$avatar,$sdt,$sodonhang,$facebook))
		{
			echo "insert thành công, vào data để xem nhé";
			
		}
		else{
			echo "thất bại";
			
		}
}
public function uploadfile(){
	$uploadfile=new UploadHandler();
}
}

/* End of file addData.php */
/* Location: ./application/controllers/addData.php */