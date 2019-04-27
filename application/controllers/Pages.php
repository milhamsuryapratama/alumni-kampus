<?php 
/**
 * 
 */
class Pages extends CI_Controller
{
	
	// public function index()
	// {
	// 	$data['kgtn'] = $this->db->query("SELECT * FROM tb_kegiatan LIMIT 1")->result_array();
	// 	$data['kegiatan'] = $this->App_model->ambil_data('tb_kegiatan','id_kegiatan');
	// 	//$data['vm'] = $this->App_model->ambil_data('tb_visi_misi','id_visi_misi');
	// 	$data['vm'] = $this->App_model->join_dua_table('tb_visi_misi','tb_lembaga_alumni','tb_visi_misi.id_lembaga_alumni = tb_lembaga_alumni.id_lembaga_alumni','tb_visi_misi.id_visi_misi');
	// 	$data['title'] = "P4NJ NURUL JADID";

	// 	$this->load->view('pages2/Header', $data);
	// 	$this->load->view('pages2/Home', $data);
	// 	$this->load->view('pages2/Footer');
	// }

	public function index()
	{
		$data['title'] = "P4NJ NURUL JADID - PAITON PROBOLINGGO";
		// $data['kegiatan'] = $this->App_model->ambil_data_limit('tb_kegiatan','id_kegiatan');
		// $data['kegiatan'] = $this->Home_model->home_data_kegiatan('tb_kegiatan','tb_lembaga_alumni','tb_alumni','tb_kegiatan.id_lembaga_alumni = tb_lembaga_alumni.id_lembaga_alumni','tb_kegiatan.author = tb_alumni.id_alumni');
		$data['kegiatan'] = $this->App_model->join_dua_table_limit('tb_kegiatan','tb_lembaga_alumni','tb_kegiatan.id_lembaga_alumni = tb_lembaga_alumni.id_lembaga_alumni','tb_kegiatan.id_kegiatan','6');

		$data['promosi'] = $this->App_model->join_empat_table_limit_where('tb_promosi','tb_alumni','tb_kecamatan','tb_desa','tb_promosi.id_alumni = tb_alumni.id_alumni','tb_alumni.id_kecamatan = tb_kecamatan.id_kecamatan','tb_alumni.id_desa = tb_desa.id_desa','tb_promosi.id_promosi');


		$this->load->view('halamanutama/Header', $data);
		$this->load->view('halamanutama/Home', $data);
		$this->load->view('halamanutama/Footer');
	}

	public function edut()
	{
		$this->load->view('halamanutama/eduindex');
	}

	public function visi_misi()
	{
		$data['title'] = "Visi Misi - P4NJ JEMBER";
		$data['vm'] = $this->App_model->join_dua_table('tb_visi_misi','tb_lembaga_alumni','tb_visi_misi.id_lembaga_alumni = tb_lembaga_alumni.id_lembaga_alumni','tb_visi_misi.id_visi_misi');

		$this->load->view('halamanutama/Header', $data);
		$this->load->view('halamanutama/VisiMisi', $data);
		$this->load->view('halamanutama/Footer');
	}

	public function kegiatan($offset=0)
	{
		$data['title'] = "Kegiatan - P4NJ JEMBER";
		$keyword= $this->input->get('s');
		// $data['kegiatan'] = $this->App_model->ambil_data_limit_recent('tb_kegiatan','id_kegiatan');
		// $data['jml_kegiatan'] = $this->App_model->ambil_data_like('tb_kegiatan','judul_kegiatan',$keyword);
		// $jml = count($data['jml_kegiatan']);

		$data['offset']=$offset;
		$config['total_rows'] = $this->App_model->hitung_kegiatan($keyword)->num_rows();;
		$config['base_url'] = base_url().'pages/kegiatan';
		$config['per_page'] = 3;
		$config['full_tag_open']="<ul>";
		$config['full_tag_close']="</ul>";
		$config['num_tag_open']="<li class='text-center trans_200' style='background-color: #42f46e'>";
		$config['num_tag_close']="</li>";
		$config['next_tag_open']="<li class='text-center trans_200' style='background-color: #42f46e'>";
		$config['next_tag_close']="</li>";
		$config['prev_tag_open']="<li class='text-center trans_200' style='background-color: #42f46e'>";
		$config['prev_tag_close']="</li>";
		$config['first_tag_open']="<li class='text-center trans_200' style='background-color: #42f46e'>";
		$config['first_tag_close']="</li>";
		$config['last_tag_open']="<li class='text-center trans_200' style='background-color: #42f46e'>";
		$config['last_tag_close']="</li>";
		$config['cur_tag_open']="<li class='active text-center trans_200' style='background-color: #7af442'><a href='#'>";
		$config['cur_tag_close']="</a></li>";

		$this->pagination->initialize($config);
		$data['halaman'] = $this->pagination->create_links();

		$data['kegiatan_cari'] = $this->App_model->ambil_data_with_pagination($config['per_page'],$offset,$keyword);
		$data['kegiatan'] = $this->App_model->ambil_data_limit_recent('tb_kegiatan','id_kegiatan');

		$this->load->view('halamanutama/Header', $data);
		$this->load->view('halamanutama/Kegiatan', $data);
		$this->load->view('halamanutama/Footer');
	}

	// public function kegiatan_detail()
	// {
	// 	$data['kegiatan'] = $this->App_model->ambil_data_limit_recent('tb_kegiatan','id_kegiatan');

	// 	$this->load->view('halamanutama/Header');
	// 	$this->load->view('halamanutama/KegiatanDetail', $data);
	// 	$this->load->view('halamanutama/Footer');
	// }

	public function promosi($offset = 0)
	{
		$data['title'] = "Promosi - P4NJ JEMBER";
		// $data['promosi'] = $this->App_model->join_empat_table('tb_promosi','tb_alumni','tb_kecamatan','tb_desa','tb_promosi.id_alumni = tb_alumni.id_alumni','tb_alumni.id_kecamatan = tb_kecamatan.id_kecamatan','tb_alumni.id_desa = tb_desa.id_desa','tb_promosi.id_promosi');

		$data['offset']=$offset;
		$config['total_rows'] = $this->App_model->hitung_promosi()->num_rows();;
		$config['base_url'] = base_url().'pages/promosi';
		$config['per_page'] = 5;
		$config['full_tag_open']="<ul>";
		$config['full_tag_close']="</ul>";
		$config['num_tag_open']="<li class='text-center trans_200' style='background-color: #42f46e'>";
		$config['num_tag_close']="</li>";
		$config['next_tag_open']="<li class='text-center trans_200' style='background-color: #42f46e'>";
		$config['next_tag_close']="</li>";
		$config['prev_tag_open']="<li class='text-center trans_200' style='background-color: #42f46e'>";
		$config['prev_tag_close']="</li>";
		$config['first_tag_open']="<li class='text-center trans_200' style='background-color: #42f46e'>";
		$config['first_tag_close']="</li>";
		$config['last_tag_open']="<li class='text-center trans_200' style='background-color: #42f46e'>";
		$config['last_tag_close']="</li>";
		$config['cur_tag_open']="<li class='active text-center trans_200' style='background-color: #7af442'><a href='#'>";
		$config['cur_tag_close']="</a></li>";

		$this->pagination->initialize($config);
		$data['halaman'] = $this->pagination->create_links();

		$data['promosi'] = $this->App_model->promosi_with_pagination($config['per_page'],$offset);

		$this->load->view('halamanutama/Header', $data);
		$this->load->view('halamanutama/Promosi', $data);
		$this->load->view('halamanutama/Footer');
	}
}
 ?>