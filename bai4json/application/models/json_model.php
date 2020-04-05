<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class json_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertData($ten,$dulieu)
	{
		//tao ra mang du lieu
		$mangdl = array(
			'ten' =>$ten ,
			'dulieu'=>$dulieu 
		);
		$this->db->insert('warehouse', $mangdl);
		return $this->db->insert_id();
	}
	public function showData(){
		$this->db->select('*');
		$this->db->where('ten', 'test');
		$dulieu=$this->db->get('warehouse');
		$dulieu=$dulieu->result_array();
		// lay ra value cua no
		foreach ($dulieu as  $value) {
			$kq=$value['dulieu'];
		}
		return $kq;
		/*
		return $dulieu;*/
	}
	public function updateData($dulieu){
		$this->db->where('ten', 'test');
		// tao mang luu tru du lieu
		$dulieu = array(
			'ten' =>'test' , 
			'dulieu'=>$dulieu
		);
		return $this->db->update('warehouse',$dulieu);
	}

}

/* End of file json_model.php */
/* Location: ./application/models/json_model.php */

