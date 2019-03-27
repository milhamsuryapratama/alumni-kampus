<?php 
/**
 * 
 */
class Pages extends CI_Controller
{
	
	public function index()
	{
		$data['kgtn'] = $this->db->query("SELECT * FROM tb_kegiatan LIMIT 1")->result_array();
		$data['kegiatan'] = $this->App_model->ambil_data('tb_kegiatan','id_kegiatan');
		//$data['vm'] = $this->App_model->ambil_data('tb_visi_misi','id_visi_misi');
		$data['vm'] = $this->App_model->join_dua_table('tb_visi_misi','tb_lembaga_alumni','tb_visi_misi.id_lembaga_alumni = tb_lembaga_alumni.id_lembaga_alumni','tb_visi_misi.id_visi_misi');
		$data['title'] = "P4NJ NURUL JADID";

		$this->load->view('pages/Header', $data);
		$this->load->view('pages/Home', $data);
		$this->load->view('pages/Footer');
	}
}
 ?>