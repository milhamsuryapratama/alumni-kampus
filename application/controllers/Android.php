<?php 
/**
 * 
 */
class Android extends CI_Controller
{
	
	public function data_visi_misi()
	{
		$id_lembaga_alumni = '1';

		$data = $this->App_model->ambil_data_by_id('tb_visi_misi', 'id_lembaga_alumni', $id_lembaga_alumni);

		
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function kegiatan()
	{
		$id_lembaga_alumni = '3';

		$data = $this->App_model->ambil_data_by_id('tb_kegiatan', 'id_lembaga_alumni', $id_lembaga_alumni);

		$this->output->set_content_type('application/json')->set_output(json_encode($data));	
	}

	public function struktur()
	{
		$id_lembaga_alumni = '1';

		$data = $this->App_model->join_empat_table_by_id('tb_struktur','tb_jabatan','tb_devisi','tb_alumni','tb_struktur.id_jabatan = tb_jabatan.id_jabatan','tb_struktur.id_devisi = tb_devisi.id_devisi','tb_struktur.id_alumni = tb_alumni.id_alumni','tb_struktur.id_lembaga_alumni',$id_lembaga_alumni);

		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function lembaga_alumni()
	{
		$data = $this->App_model->ambil_data('tb_lembaga_alumni','id_lembaga_alumni');

		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function lembaga_nj()
	{
		$data = $this->App_model->ambil_data('tb_lembaga_nj','id_lembaga');

		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function soal()
	{
		$data = $this->App_model->ambil_data('tb_soal','id_soal');

		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function jawaban()
	{
		$data = $this->App_model->ambil_data('tb_jawaban','id_jawaban');

		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function pengurus()
	{
		$id_lembaga_alumni = '2';

		$data = $this->App_model->join_tiga_table_by_id_result('tb_pengurus','tb_alumni','tb_lembaga_alumni','tb_pengurus.id_alumni = tb_alumni.id_alumni','tb_pengurus.id_lembaga_alumni = tb_lembaga_alumni.id_lembaga_alumni','tb_pengurus.id_lembaga_alumni',$id_lembaga_alumni);

		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
}
 ?>