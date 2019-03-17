<?php 
/**
 * 
 */
class App_model extends CI_Model
{
	
	public function tambah_data($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	public function edit_data($table,$field,$params,$data)
	{
		$this->db->where($field, $params);
		return $this->db->update($table, $data);
	}

	public function login_proses($table, $where)
    {
        return $this->db->get($table,$where);
    }

    public function ambil_data($table, $params)
    {
    	return $this->db->order_by($params, 'DESC')->get($table)->result_array();
    }

    public function ambil_data_by_id($table, $field, $id)
    {
    	return $this->db->get_where($table, array($field => $id))->row_array();
    }

    public function ambil_data_by_id_result($table, $field, $id)
    {
    	return $this->db->get_where($table, array($field => $id))->result_array();
    }

    public function hapus_data($table,$field,$params)
    {
    	return $this->db->delete($table, array($field => $params));
    }

    public function join_dua_table($table1,$table2,$params1,$field)
    {
        return $this->db->order_by($field, 'DESC')->join($table2,$params1)->get($table1)->result_array();
    }

    public function join_tiga_table($table1,$table2,$table3,$params1,$params2)
    {
    	return $this->db->join($table2,$params1)->join($table3,$params2)->get($table1)->result_array();
    }

    public function join_empat_table_by_id($table1,$table2,$table3,$table4,$params1,$params2,$params3,$paramsWhere,$id_petugas)
    {
        return $this->db->join($table2,$params1)->join($table3,$params2)->join($table4,$params3)->get_where($table1, array($paramsWhere => $id_petugas))->result_array();
    }

    public function hitung_data($table)
    {
        return $this->db->get($table)->num_rows();
    }

    public function hitung_data_by_id($table,$field,$id)
    {
        return $this->db->get_where($table, array($field => $id))->num_rows();
    }

    public function ambil_id_foto($id)
    {
        $this->db->from('tb_kegiatan');
        $this->db->where('id_kegiatan', $id);
        $result = $this->db->get('');
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function auto_complete($title)
    {
        $this->db->like('id_alumni', $title , 'both');
        $this->db->order_by('id_alumni', 'DESC');
        return $this->db->get('tb_alumni')->result();
    }
}
 ?>