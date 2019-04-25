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

	}
	public function kecamatan(){
		$id_kecamatan =$this->input->post('id_kecamatan');
		$kecamatan= $this->db->query("SELECT * FROM tb_kecamatan ")->result_array();
		echo json_encode($kecamatan);

	}

	public function masa_bakti(){
		$id_lembaga_alumni = $this->input->post('id_lembaga_alumni');
		$data['Hasil'] = $this->db->query("SELECT * FROM tb_struktur  where id_lembaga_alumni = '$id_lembaga_alumni' Group By masa_bakti" )->result_array();
		$data['success'] = 1;
		echo json_encode($data);


	}


	// public function akun(){
	// 	$user = $this->input->post('id_alumni');
	// 	// where username = '$user'

	// 	$data['Hasil'] []= $this->db->query("SELECT * FROM tb_alumni  where id_alumni = '$user'  ")->row_array();

	// 	$data['success'] = 1;

	// 	echo json_encode($data);
	// }

	public function tampil_akun(){
		$user = $this->input->post('id_alumni');
		$data['Hasil'] []= $this->db->query("SELECT * FROM tb_alumni where id_alumni = '$user'   ")->row_array();
		$data['success'] = 1;
		echo json_encode($data);
	}



	public function visi_misi(){
		$id_lembaga_alumni = $this->input->post('id_lembaga_alumni');
		$data['Hasil'][]= $this->db->query("SELECT * FROM tb_visi_misi join tb_lembaga_alumni on tb_lembaga_alumni.id_lembaga_alumni = tb_visi_misi.id_lembaga_alumni where tb_visi_misi.id_lembaga_alumni = '$id_lembaga_alumni' ")->row_array();
		$data['success'] = 1;
		echo json_encode($data);
	}

	public function kepengurusan(){
		$id_lembaga_alumni = $this->input->post('id_lembaga_alumni');
		$data['Hasil'] = $this->db->query("SELECT * FROM tb_struktur JOIN tb_jabatan on tb_jabatan.id_jabatan = tb_struktur.id_jabatan JOIN tb_devisi on tb_devisi.id_devisi = tb_struktur.id_devisi JOIN tb_alumni on tb_alumni.id_alumni = tb_struktur.id_alumni  where id_lembaga_alumni = '$id_lembaga_alumni' ")->result_array();

		$data['success'] = 1;

		echo json_encode($data);
	}

	public function masa_kepengurusan(){
		$id_lembaga_alumni = $this->input->post('id_lembaga_alumni');
		$masa_bakti = $this->input->post('masa_bakti');
		$data['Hasil'] = $this->db->query("SELECT * FROM tb_struktur JOIN tb_jabatan on tb_jabatan.id_jabatan = tb_struktur.id_jabatan JOIN tb_devisi on tb_devisi.id_devisi = tb_struktur.id_devisi JOIN tb_alumni on tb_alumni.id_alumni = tb_struktur.id_alumni  where id_lembaga_alumni = '$id_lembaga_alumni' AND  masa_bakti = '$masa_bakti' ")->result_array();

		$data['success'] = 1;

		echo json_encode($data);
	}

	public function detail_pengurus(){
		$id_alumni = $this->input->post('id_alumni');
		$data['Hasil'] = $this->db->query("SELECT * FROM tb_struktur JOIN tb_jabatan on tb_jabatan.id_jabatan = tb_struktur.id_jabatan JOIN tb_devisi on tb_devisi.id_devisi = tb_struktur.id_devisi JOIN tb_alumni on tb_alumni.id_alumni = tb_struktur.id_alumni  where tb_alumni.id_alumni = '$id_alumni' ")->result_array();
		$data['success'] = 1;
		echo json_encode($data);
	}


	public function lembaga_nj(){
		$data['Hasil']= $this->db->query("SELECT * FROM tb_lembaga_nj ORDER BY nama_lembaga ASC ")->result_array();
		$data['success'] = 1;
		echo json_encode($data);
	}

	public function item_berita(){
	 	$id_lembaga_alumni =  $this->input->post('id_lembaga_alumni');
		$jenis_kegiatan = $this->input->post('jenis_kegiatan');
		$data['Hasil']= $this->db->query("SELECT id_kegiatan, judul_kegiatan, id_lembaga_alumni, foto_kegiatan, jenis_kegiatan FROM tb_kegiatan WHERE id_lembaga_alumni= '$id_lembaga_alumni' AND jenis_kegiatan ='$jenis_kegiatan' AND status='Y' ")->result_array();
		$data['success'] = 1;
		echo json_encode($data);
	}

	public function isi_berita(){
		$id_kegiatan =  $this->input->post('id_kegiatan');
	 	$id_lembaga_alumni = $this->input->post('id_lembaga_alumni');
		
		$data['Hasil']= $this->db->query("SELECT tb_alumni.nama, tb_kegiatan.id_kegiatan, tb_kegiatan.judul_kegiatan, tb_kegiatan.deskripsi, tb_kegiatan.id_lembaga_alumni, tb_kegiatan.foto_kegiatan, tb_kegiatan.jenis_kegiatan, tb_struktur.id_alumni FROM tb_kegiatan INNER JOIN tb_struktur ON tb_kegiatan.author=tb_struktur.id_struktur JOIN tb_alumni on tb_alumni.id_alumni=tb_struktur.id_alumni WHERE id_kegiatan ='$id_kegiatan' AND tb_kegiatan.id_lembaga_alumni= '$id_lembaga_alumni' ")->result_array();

		// $data['Hasil']= $this->db->query("SELECT * FROM tb_kegiatan WHERE id_kegiatan ='$id_kegiatan' AND id_lembaga_alumni= '$id_lembaga_alumni' ")->result_array();
		// $data['success'] = 1;
		echo json_encode($data);
	}




}
 ?>