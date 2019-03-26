<?php 
/**
 * 
 */
class VerifikasiSoal extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	public function soal(){
		$id_soal = $this->input->POST('id');

		$data['Hasil'][] = $this->db->query("SELECT id_soal, pertanyaan, aktif FROM tb_soal where id_soal not in ($id_soal) ORDER BY RAND() LIMIT 1")->row_array();

		$data['success'] = 1;

		echo json_encode($data);

	}
	public function jawaban(){
		$id_soal = $this->input->post('id_soal');

		$data['Hasil']= $this->db->query("SELECT * from tb_jawaban where id_soal = '$id_soal' order by rand()")->result_array();

		$data['success'] = 1;

		echo json_encode($data);

	}


}
 ?>