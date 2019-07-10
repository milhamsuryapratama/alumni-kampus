<?php  
/**
 * 
 */
class Kegiatan extends CI_Controller
{
	
	public function detail($slug)
	{		
		$data['kegiatan'] = $this->App_model->join_dua_table_limit('tb_kegiatan','tb_lembaga_alumni','tb_kegiatan.id_lembaga_alumni = tb_lembaga_alumni.id_lembaga_alumni','tb_kegiatan.id_kegiatan','10');
		// $data['dt'] = $this->App_model->join_lima_table_by_id_row('tb_kegiatan','tb_alumni','tb_kecamatan','tb_desa','tb_lembaga_alumni','tb_kegiatan.author = tb_alumni.id_alumni','tb_alumni.id_kecamatan = tb_kecamatan.id_kecamatan','tb_alumni.id_desa = tb_desa.id_desa','tb_kegiatan.id_lembaga_alumni = tb_lembaga_alumni.id_lembaga_alumni','tb_kegiatan.slug',$slug);				

		$data['dt'] = $this->App_model->join_dua_table_by_id_row('tb_kegiatan','tb_lembaga_alumni','tb_kegiatan.id_lembaga_alumni = tb_lembaga_alumni.id_lembaga_alumni','tb_kegiatan.slug',$slug);

		$data['title'] = $data['dt']['judul_kegiatan']." - P4NJ JEMBER";

		$this->load->view('pagesviews/Header', $data);
		$this->load->view('pagesviews/KegiatanDetail');
		$this->load->view('pagesviews/Footer');

		// $this->load->view('halamanutama/Header', $data);
		// $this->load->view('halamanutama/KegiatanDetail', $data);
		// $this->load->view('halamanutama/Footer');
	}

	public function lembaga($id,$offset=0)
	{
		$data['title'] = "Kegiatan - P4NJ JEMBER";
		// $data['kegiatan'] = $this->App_model->ambil_data_limit_recent('tb_kegiatan','id_kegiatan');
		$data['jml_kegiatan'] = $this->App_model->ambil_data_by_id_result('tb_kegiatan','id_lembaga_alumni',$id,'id_kegiatan');
		$jml = count($data['jml_kegiatan']);

		$data['offset']=$offset;
		$config['total_rows'] = $jml;
		$config['base_url'] = base_url()."kegiatan/lembaga/$id";
		$config['per_page'] = 4;
		$config['uri_segment'] = 4;
		$config['full_tag_open']="<ul>";
		$config['full_tag_close']="</ul>";

		$config['full_tag_open']="<div class='flex-wr-s-c m-rl--7 p-t-15'>";
		$config['full_tag_close']="</div>";
		$config['num_tag_open']="<a class='flex-c-c pagi-item hov-btn1 trans-03 m-all-7'>";
		$config['num_tag_close']="</a>";
		$config['next_tag_open']="<a class='flex-c-c pagi-item hov-btn1 trans-03 m-all-7'>";
		$config['next_tag_close']="</a>";
		$config['prev_tag_open']="<a class='flex-c-c pagi-item hov-btn1 trans-03 m-all-7'>";
		$config['prev_tag_close']="</a>";
		$config['first_tag_open']="<a class='flex-c-c pagi-item hov-btn1 trans-03 m-all-7'>";
		$config['first_tag_close']="</a>";
		$config['last_tag_open']="<a class='flex-c-c pagi-item hov-btn1 trans-03 m-all-7'>";
		$config['last_tag_close']="</a>";
		$config['cur_tag_open']="<a class='flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active'>";
		$config['cur_tag_close']="</a>";

		$this->pagination->initialize($config);
		$data['halaman'] = $this->pagination->create_links();

		$data['kegiatan_id'] = $this->App_model->ambil_data_by_id_with_pagination($config['per_page'],$offset,$id);
		$data['kegiatan'] = $this->App_model->ambil_data_limit_recent('tb_kegiatan','id_kegiatan');

		$this->load->view('pagesviews/Header', $data);
		$this->load->view('pagesviews/KegiatanById', $data);
		$this->load->view('pagesviews/Footer');

		// $this->load->view('halamanutama/Header', $data);
		// $this->load->view('halamanutama/KegiatanById', $data);
		// $this->load->view('halamanutama/Footer');
	}
}
?>