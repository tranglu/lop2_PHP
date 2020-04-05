<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class json extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('json_model');// để luôn load lại, khỏi cần mỗi hàm mỗi load
	}

	public function index()
	{
		/*$motcontact = array(
			'ten' =>"trang" , 
			'sdt' =>"0123");
		 $contact=array();
		array_push($contact, $motcontact);
		$motcontact2 = array(
			'ten' =>"trang1" , 
			'sdt' =>"456");
		array_push($contact, $motcontact2);
		$noidungmahoa=json_encode($contact);
		$noidung=json_decode($noidungmahoa);
			echo "<pre>";
			var_dump($noidungmahoa);
			var_dump($noidung);
			echo "</pre>";
			// goi model insert du lieu
			$this->load->model('json_model');
			echo $this->json_model->insertData('contact',$noidungmahoa);*/
			
			$ketqua=$this->json_model->showData();
			//giai mai bang json decode
			$ketqua=json_decode($ketqua);
			$ketqua = array('mangketqua' => $ketqua);
			$this->load->view('json_view', $ketqua, FALSE);
					/*echo "<pre>";
					var_dump($ketqua);
					echo "</pre>";*/

	}
	public function xoa_json($sdt){
		// xóa dữ liệu
		// json_model đã load ở trên, k cần gọi lại
		$dulieu=$this->json_model->showData();
		//giai ma de no bien thanh cai mang
		$dulieu=json_decode($dulieu);	
		foreach ($dulieu as $key => $value) {
			if($value->sdt==$sdt){
			// xoa cai phan tu do
			unset($dulieu[$key]);
					
			}
		}
		// mã hóa dữ liệu thành dạng text
		$dulieu=json_encode($dulieu);
		//sau khi hết foreach thì màng json của mình đã xóa đi phần từ có sdt truyeèn vào rồi
		//cập nhật dữ liệu - > model
		return $this->json_model->updateData($dulieu);
		
	}
	public function addData()
	{
		// lay du lieu tu view
		$ten=$this->input->post('ten');
		$sdt=$this->input->post('sdt');
		//lay du lieu json bang ham showdata
		$dulieu=$this->json_model->showData();
		$dulieu=json_decode($dulieu);
		// tao 1 phan tu con
		$con = array('ten' => $ten,
		 			'sdt'=>$sdt);
		//dua phan tu con vao mang cha
		array_push($dulieu, $con);
		$dulieu=json_encode($dulieu);
		if($this->json_model->updateData($dulieu)) {
			$this->load->view('result.html');
		}
		
	}


}

/* End of file json.php */
/* Location: ./application/controllers/json.php */
