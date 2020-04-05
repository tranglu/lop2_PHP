<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getdatabase(){
		$this->db->select ('*');// laays heets duwx lieu
		$this->db->order_by('id', 'asc');// sawp xep theo ID tu tren xuong
		$ketqua=$this->db->get('bang_nhan_vien');//lay tu bang ten la so sim va luu vao mang ket qua
		// dua ket qua thanh 1 cai mang du lieu
		$ketqua=$ketqua->result_array();//bien doi $ketqua thanh mot mang
		return $ketqua;
		
	}
	public function insert($ten,$diachi,$tuoi,$avatar,$sdt,$sodonhang,$facebook)
	{
		$dulieu = array('ten'=>$ten,'diachi'=>$diachi,'tuoi'=>$tuoi,'avatar'=>$avatar,'sdt'=>$sdt,'sodonhang'=>$sodonhang,'facebook'=>$facebook);
		$this->db->insert('bang_nhan_vien', $dulieu);
		return $this->db->insert_id();
	}
	public function deleteDataByid($id){
		$this->db->where ('id',$id);
		return $this->db->delete('bang_nhan_vien');
		
	}
	public function editByid($id){
		$this->db->select ('*');
		$this->db->where ('id',$id);// id lấy về so sánh với id trong bảng
		$dulieu=$this->db->get('bang_nhan_vien');
		$dulieu=$dulieu->result_array();//bien doi $ketqua thanh mot mang
		return $dulieu;
		
	}
	public function updateDataById($id,$ten,$diachi,$tuoi,$avatar,$sdt,$sodonhang,$facebook){
		// dong goi cai bien thanh 1 cai mang
			$dulieucanupdate=array(
				'id'=>$id,
				'ten'=>$ten,
				'diachi'=>$diachi,
				'tuoi'=>$tuoi,
				'avatar'=>$avatar,
				'sdt'=>$sdt,
				'sodonhang'=>$sodonhang,
				'facebook'=>$facebook
			);
			$this ->db->where('id',$id);
			return $this ->db ->update ('bang_nhan_vien',$dulieucanupdate);
		}

}

/* End of file showData_model.php */
/* Location: ./application/models/showData_model.php */