<?php  
/**
 * 
 */
class Home_model extends CI_Model
{
	
	public function home_data_kegiatan($table1,$table2,$table3,$params1,$params2)
	{
		return $this->db->limit(6)->order_by('tb_kegiatan.id_kegiatan', 'DESC')->join($table2,$params1)->join($table3,$params2)->get($table1)->result_array();
	}
}
?>