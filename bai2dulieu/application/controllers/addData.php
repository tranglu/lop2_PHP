<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addData extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('adddata.php');
	}
	public function insertData_controller()
	{
		//lấy dữ liệu về
		$sodienthoai= $this->input->post('so');
		$giatien= $this->input->post('gia');
		//truyền du lieu đến model
		$this->load->model('addData_model');
		
		if($this->addData_model->insert($sodienthoai,$giatien)){
			//echo "insert thành công, vào data để xem nhé";
			$this->load->view('result.html');
		}
		else{
			echo "thất bại";
			
		}
		//return $this->db->insert_id();// trả về giá trị là id của phần tử đó
	}
}

/* End of file addData.php */
/* Location: ./application/controllers/addData.php */