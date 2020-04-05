<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class jsonEdit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('json_model');
	}

	public function index()
	{
		$this->load->model('json_model');
		$dl=$this->json_model->showData();
		$dl=json_decode($dl,true);
		$dl = array('mangdl' => $dl );
		$this->load->view('jsonEdit_view',$dl, FALSE);

	}
	public function edit(){
		$ten=$this->input->post('ten');//$ten là 1 cai mang luu tât cả tên, chứ k phải là 1 biến nữa
		$sdt=$this->input->post('sdt');
		// tạo json de dua vao du lieu
		$dl = array();
		//duyet tung phan tu trong mang ten, sdt de dua vao dl
		for ($i=0; $i <count($ten) ; $i++) { 
			$trunggian = array();
			$trunggian['ten']=$ten[$i];
			$trunggian['sdt']=$sdt[$i];
			array_push($dl, $trunggian);
		}
		// sau khi xong vong lap for $dl chứa đầy đủ dữ liệu
			$dl=json_encode($dl);
			// trước khi upload dô json phải đổi nó thành 1 cái chuỗi
			if($this->json_model->updateData($dl)) {
				$this->load->view('result.html');
			};
	}
}

/* End of file jsonEdit.php */
/* Location: ./application/controllers/jsonEdit.php */