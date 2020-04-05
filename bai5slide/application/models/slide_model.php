<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class slide_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function layDuLieuSlide(){
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'slides_topbanner');
		$dl=$this->db->get('homepageattr');
		$dl = $dl ->result_array();	
		foreach ($dl as  $value) {
			$tg=$value['giatrithuoctinh'];
		}
		return $tg;
	}

	public function insertDuLieuSlide($dulieucanupdate){
		$dldangmang = array(
			'tenthuoctinh' => 'slides_topbanner',
			'giatrithuoctinh'=>$dulieucanupdate);
		$this->db->where('tenthuoctinh', 'slides_topbanner');
		return $this->db->update('homepageattr',$dldangmang);
	}
	public function updateData($dulieucanupdate){
		$this->db->where('tenthuoctinh', 'slides_topbanner');
		// dong goi cai bien thanh 1 cai mang
			$dulieu=array(
				'tenthuoctinh' => 'slides_topbanner',
			'giatrithuoctinh'=>$dulieucanupdate
				/*'id'=>$id
				'title'=>$title,
				'description'=>$description,
				'button_nut'=>$button_nut,
				'button_text'=>$button_text,
				'slide_image'=>$slide_image*/
			);
			return $this ->db ->update ('homepageattr',$dulieu);
		}
}

/* End of file slide_model.php */
/* Location: ./application/models/slide_model.php */