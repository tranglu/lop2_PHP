<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getdatabase(){
		$this->db->select ('*');// laays heets duwx lieu
		$ketqua=$this->db->get('so_sim');//lay tu bang ten la so sim va luu vao mang ket qua
		// dua ket qua thanh 1 cai mang du lieu
		$ketqua=$ketqua->result_array();//bien doi $ketqua thanh mot mang
		return $ketqua;
		/*echo "<pre>";
		var_dump($ketqua);*/// in ra ket qua
	}
	public function deleteDataByid($id){
		$this->db->where ('id',$id);
		return $this->db->delete('so_sim');
		/*{echo "xoa thanh cong";}
		else{
			echo "chua xoa duoc";
		}*/
	}
	public function editByid($id){
		$this->db->select ('*');
		$this->db->where ('id',$id);// id lấy về so sánh với id trong bảng
		$dulieu=$this->db->get('so_sim');
		$dulieu=$dulieu->result_array();//bien doi $ketqua thanh mot mang
		return $dulieu;
		/*echo "<pre>";
		var_dump($dulieu);//de check loi*/
	}
	public function updateDataById($id,$so,$gia){
			$dulieucanupdate=array(
				'id' =>$id,
				'so'=>$so,
				'gia' =>$gia
			);
			$this ->db->where('id',$id);
			return $this ->db ->update ('so_sim',$dulieucanupdate);
		}

}

/* End of file showData_model.php */
/* Location: ./application/models/showData_model.php */