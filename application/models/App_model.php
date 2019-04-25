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

    public function ambil_data_like($table, $params, $judul)
    {
        return $this->db->query("SELECT * FROM '$table' WHERE '$params' LIKE '%$judul%' ORDER BY id_kegiatan DESC")->result_array();
    }

    public function hitung_kegiatan($keyword)
    {
        $query = $this->db->select('*')
                          ->from('tb_kegiatan')
                          ->join('tb_alumni','tb_kegiatan.author = tb_alumni.id_alumni')
                          ->join('tb_lembaga_alumni','tb_kegiatan.id_lembaga_alumni = tb_lembaga_alumni.id_lembaga_alumni')
                          ->like('tb_kegiatan.judul_kegiatan', $keyword)
                          ->order_by('tb_kegiatan.id_kegiatan', 'DESC')
                          ->get('');
        return $query;
    }

    public function ambil_data_with_pagination($perpage,$offset,$keyword)
    {
        $query = $this->db->select('*')
                          ->from('tb_kegiatan')
                          ->join('tb_alumni','tb_kegiatan.author = tb_alumni.id_alumni')
                          ->join('tb_lembaga_alumni','tb_kegiatan.id_lembaga_alumni = tb_lembaga_alumni.id_lembaga_alumni')
                          ->like('tb_kegiatan.judul_kegiatan', $keyword)
                          ->order_by('tb_kegiatan.id_kegiatan', 'DESC')
                          ->get('',$perpage,$offset)->result_array();
        return $query;
    }

    public function ambil_data_by_id_with_pagination($perpage,$offset,$id)
    {
        $query = $this->db->select('*')
                          ->from('tb_kegiatan')
                          ->join('tb_alumni','tb_kegiatan.author = tb_alumni.id_alumni')
                          ->join('tb_lembaga_alumni','tb_kegiatan.id_lembaga_alumni = tb_lembaga_alumni.id_lembaga_alumni')
                          ->where('tb_kegiatan.id_lembaga_alumni', $id)
                          ->order_by('id_kegiatan', 'DESC')
                          ->get('',$perpage,$offset)->result_array();
        return $query;
    }

    public function ambil_data_limit($table, $params)
    {
        return $this->db->order_by($params, 'DESC')->limit(8)->get($table)->result_array();
    }

    public function ambil_data_limit_recent($table, $params)
    {
        return $this->db->order_by($params, 'DESC')->limit(4)->get($table)->result_array();
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

    public function join_dua_table_by_id($table1,$table2,$params1,$field,$paramsWhere,$id_lembaga)
    {
        return $this->db->order_by($field, 'DESC')->join($table2,$params1)->get_where($table1, array($paramsWhere => $id_lembaga))->result_array();
    }

    public function join_dua_table_by_id_row($table1,$table2,$params1,$paramsWhere,$id)
    {
        return $this->db->join($table2,$params1)->get_where($table1, array($paramsWhere => $id))->row_array();
    }

    public function join_tiga_table($table1,$table2,$table3,$params1,$params2)
    {
    	return $this->db->order_by('tb_alumni.id_alumni', 'DESC')->join($table2,$params1)->join($table3,$params2)->get($table1)->result_array();
    }

    public function join_tiga_table_by_id_result($table1,$table2,$table3,$params1,$params2,$paramsWhere,$id_lembaga)
    {
        return $this->db->join($table2,$params1)->join($table3,$params2)->get_where($table1, array($paramsWhere => $id_lembaga))->result_array();
    }

    public function join_tiga_table_by_id_row($table1,$table2,$table3,$params1,$params2,$paramsWhere,$id_lembaga)
    {
        return $this->db->join($table2,$params1)->join($table3,$params2)->get_where($table1, array($paramsWhere => $id_lembaga))->row_array();
    }

    public function join_empat_table($table1,$table2,$table3,$table4,$params1,$params2,$params3,$order)
    {
        return $this->db->order_by($order, 'DESC')->join($table2,$params1)->join($table3,$params2)->join($table4,$params3)->get($table1)->result_array();
    }

    public function join_empat_table_by_id($table1,$table2,$table3,$table4,$params1,$params2,$params3,$paramsWhere,$id_petugas)
    {
        return $this->db->join($table2,$params1)->join($table3,$params2)->join($table4,$params3)->get_where($table1, array($paramsWhere => $id_petugas))->result_array();
    }

    public function join_empat_table_by_id_row($table1,$table2,$table3,$table4,$params1,$params2,$params3,$paramsWhere,$id_petugas)
    {
        return $this->db->join($table2,$params1)->join($table3,$params2)->join($table4,$params3)->get_where($table1, array($paramsWhere => $id_petugas))->row_array();
    }

    public function join_lima_table_by_id_row($table1,$table2,$table3,$table4,$table5,$params1,$params2,$params3,$params4,$paramsWhere,$id_petugas)
    {
        return $this->db->join($table2,$params1)->join($table3,$params2)->join($table4,$params3)->join($table5,$params4)->get_where($table1, array($paramsWhere => $id_petugas))->row_array();
    }

    public function hitung_data($table)
    {
        return $this->db->get($table)->num_rows();
    }

    public function hitung_data_by_id($table,$field,$id)
    {
        return $this->db->get_where($table, array($field => $id))->num_rows();
    }

    public function ambil_id_foto_alumni($id)
    {
        $this->db->from('tb_alumni');
        $this->db->where('id_alumni', $id);
        $result = $this->db->get('');
        if ($result->num_rows() > 0) {
            return $result->row();
        }
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

    public function auto_fks($title)
    {
        $this->db->like('nis', $title , 'both');
        $this->db->order_by('nis', 'DESC');
        return $this->db->get('anggota_fks')->result();
    }
}
 ?>