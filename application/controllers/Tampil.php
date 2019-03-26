<?php 
/**
 * 
 */
class Tampil extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	
	public function desa(){
		$id_kecamatan = $this->input->post('id_kecamatan');

		$data['Hasil'] = $this->db->query("SELECT * FROM tb_desa WHERE id_kecamatan = '$id_kecamatan' ")->result_array();

		$data['success'] = 1;

		echo json_encode($data);



		// $id_kecamatan = "2";//$this->input->post('id_kecamatan');

		// $desa = $this->db->query("SELECT * FROM tb_desa WHERE id_kecamatan = '$id_kecamatan' ")->result_array();

		//  $data['success'] = 1;
		

		// echo json_encode($desa);

	}
	public function kecamatan(){
		$id_kecamatan =$this->input->post('id_kecamatan');

		$kecamatan= $this->db->query("SELECT * FROM tb_kecamatan ")->result_array();

		// $data['success'] = 1;
		#

		echo json_encode($kecamatan);

	}

	public function masa_bakti(){
		
		$id_lembaga_alumni =  $this->input->post('id_lembaga_alumni');

		$data['Hasil'] = $this->db->query("SELECT * FROM tb_struktur  where id_lembaga_alumni = '$id_lembaga_alumni' GROUP BY masa_bakti  ")->result_array();

		$data['success'] = 1;

		echo json_encode($data);


	}


	public function akun(){
		$user = $this->input->post('id_alumni');
		// where username = '$user'

		$data['Hasil'] []= $this->db->query("SELECT * FROM tb_alumni  where username = '$user'  ")->row_array();

		$data['success'] = 1;

		echo json_encode($data);
	}

	public function tampil_akun(){
		$user = $this->input->post('id_alumni');

		$data['Hasil'] []= $this->db->query("SELECT * FROM tb_alumni where username = '$user'   ")->row_array();

		$data['success'] = 1;

		// $user = $this->input->post('username');

		// $data['Hasil'] []= $this->db->query("SELECT * FROM tb_alumni  JOIN tb_desa on tb_desa.id_desa = tb_alumni.id_desa JOIN tb_kecamatan on tb_kecamatan.id_kecamatan = tb_alumni.id_kecamatan where username = '$user' ")->row_array();

		$data['success'] = 1;

		echo json_encode($data);
	}



	public function visi_misi(){
		$id_lembaga_alumni = $this->input->post('id_lembaga_alumni');

		$data['Hasil'][]= $this->db->query("SELECT * FROM tb_visi_misi where id_lembaga_alumni = '$id_lembaga_alumni' ")->row_array();

		$data['success'] = 1;

		echo json_encode($data);
	}

	public function kepengurusan(){
		$id_lembaga_alumni = $this->input->post('id_lembaga_alumni');
		$data['Hasil'] = $this->db->query("SELECT * FROM tb_struktur JOIN tb_jabatan on tb_jabatan.id_jabatan = tb_struktur.id_jabatan JOIN tb_devisi on tb_devisi.id_devisi = tb_struktur.id_devisi JOIN tb_alumni on tb_alumni.id_alumni = tb_struktur.id_alumni  where id_lembaga_alumni = '$id_lembaga_alumni' ")->result_array();

		$data['success'] = 1;

		echo json_encode($data);
	}

	public function masa_bakti_k(){
		// $id_lembaga_alumni = "1"; //$this->input->post('id_lembaga_alumni');
		$data['Hasil'] = $this->db->query("SELECT * FROM tb_struktur  GROUP BY masa_bakti ")->result_array();

		$data['success'] = 1;

		echo json_encode($data);
	}

	public function lembaga_nj(){

		$data['Hasil']= $this->db->query("SELECT * FROM tb_lembaga_nj ")->result_array();

		$data['success'] = 1;

		echo json_encode($data);
	}

	public function kegiatan(){
		$id_lembaga_alumni =  $this->input->post('id_lembaga_alumni');

		$data['Hasil']= $this->db->query("SELECT * FROM tb_kegiatan WHERE id_lembaga_alumni= '$id_lembaga_alumni' ")->result_array();

		$data['success'] = 1;

		echo json_encode($data);

		// $id_kecamatan = "2";//$this->input->post('id_kecamatan');
		// $desa = $this->db->query("SELECT * FROM tb_desa WHERE id_kecamatan = '$id_kecamatan' ")->result_array();
		//  $data['success'] = 1;
		// echo json_encode($desa);
	}




}
 ?>