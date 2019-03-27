<?php 
/**
 * 
 */
class Artikel extends CI_Controller
{
	
	public function kegiatan($slug)
	{
		$data['k'] = $this->App_model->ambil_data_by_id('tb_kegiatan', 'slug', $slug);
		$data['title'] = "P4NJ NURUL JADID";

		$this->load->view('pages/Header', $data);
		$this->load->view('pages/Arikel', $data);
		$this->load->view('pages/Footer');
	}
}
 ?>