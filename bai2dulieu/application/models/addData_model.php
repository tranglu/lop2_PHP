<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insert($s,$g)
	{
		$dulieu = array('so' =>$s ,'gia' =>$g);
		$this->db->insert('so_sim', $dulieu);
		return $this->db->insert_id();
	}
}

/* End of file addData_model.php */
/* Location: ./application/models/addData_model.php */

/* End of file addData_model.php */
/* Location: ./application/models/addData_model.php */
/*class addData_model extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function insert($s,$g)
	{
		$dulieu = array('so' =>$s ,'gia' =>$g);
		$this->db->insert('so_sim', $dulieu);

	}

}*/

/* End of file addData_model.php */
/* Location: ./application/controllers/addData_model.php */