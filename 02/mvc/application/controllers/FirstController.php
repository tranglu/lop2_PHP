<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class firstcontroller extends CI_Controller {//đặt tên sai quy tắc, FirstController

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$sdt['danhsachsodienthoai'] = array('09122455','123','789','8963' );
		$this->load->view('first_view',$sdt);
		//view chỉ nhận truyền vào mảng
	}
	

}

/* End of file First_controller.php */
/* Location: ./application/controllers/First_controller.php */