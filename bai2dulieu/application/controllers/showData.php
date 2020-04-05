<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class showData extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
		}
	
		public function index()
		{
			//$this->load->view('showData_view');
			//load cai model
			$this->load ->model('showData_model');
			//goi ham getdatabase trong model
			$dulieu=$this->showData_model->getdatabase();//lay ve dc 1 cai mang
			$dulieu= array('dulieutucontroller'=>$dulieu);// bien du lieu thanh mang voi key = dulieucontroller
			//echo "<pre>";
			//var_dump($dulieu);
			$this->load->view('showData_view', $dulieu, FALSE);
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
			$so=$this->input->post('so');
			$gia=$this->input->post('gia');
			//load model ra
			$this->load->model('showData_model');
			//su dung ham trong model giao tiep voi du lieu nhan duoc tu view
			if($this->showData_model->updateDataById($id,$so,$gia))
			{
				$this->load->view('result.html');
				
			}
			else{
			echo " khong thanh cong";
		}
		}

	
	}
	
	/* End of file showData.php */
	/* Location: ./application/controllers/showData.php */	