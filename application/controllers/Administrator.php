<?php 
/**
 * 
 */
class Administrator extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != 'loginSukses') {
			redirect(base_url().'auth/login');
		}
	}

	public function index()
	{
		$this->load->view('administrator/Login');
	}

	public function dashboard() 
	{
		$this->load->view('administrator/Header');
		$this->load->view('administrator/TopHeader');
		$this->load->view('administrator/SideBar');
		$this->load->view('administrator/Content');
		$this->load->view('administrator/Footer');
	}

	public function form()
	{
		$this->load->view('administrator/Header');
		$this->load->view('administrator/TopHeader');
		$this->load->view('administrator/SideBar');
		$this->load->view('administrator/Form');
		$this->load->view('administrator/Footer');
	}

	public function alumni()
	{
		// $data['alumni'] = $this->App_model->ambil_data('alumni', 'nim');
		$data['alumni'] = $this->App_model->join_tiga_table('alumni','fakultas','prodi','alumni.fakultas = fakultas.id', 'alumni.prodi = prodi.id');

		$this->load->view('administrator/Header');
		$this->load->view('administrator/TopHeader');
		$this->load->view('administrator/SideBar');
		$this->load->view('administrator/mod_alumni/Data', $data);
		$this->load->view('administrator/Footer');
	}

	public function tambah_alumni()
	{
		$data['fakultas'] = $this->App_model->ambil_data('fakultas', 'id');		

		if (isset($_POST['submit'])) {
			$data_alumni = array(
				'nim' => $this->input->post('nim'),
				'nama' => $this->input->post('nama_lengkap'),
				'email' => $this->input->post('email'),
				'jk' => $this->input->post('jk'),
				'alamat' => $this->input->post('alamat'),
				'fakultas' => $this->input->post('fakultas'),
				'prodi' => $this->input->post('prodi'),
				'tahun_masuk' => $this->input->post('tahun_masuk'),
				'tahun_lulus' => $this->input->post('tahun_lulus'),
				'no_hp' => $this->input->post('no_hp')
			);

			$query = $this->App_model->tambah_data('alumni', $data_alumni);

			if ($query) {
				redirect(base_url().'administrator/alumni');
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_alumni/Tambah', $data);
			$this->load->view('administrator/Footer');
		}
	}

	public function edit_alumni($nim)
	{
		$data['a'] = $this->App_model->ambil_data_by_id('alumni', 'nim', $nim);
		$data['f'] = $this->App_model->ambil_data('fakultas', 'id');	
		$data['p'] = $this->App_model->ambil_data('prodi', 'id');	

		if (isset($_POST['update'])) {

			$n = $this->input->post('nim');

			$data_alumni = array(
				'nama' => $this->input->post('nama_lengkap'),
				'email' => $this->input->post('email'),
				'jk' => $this->input->post('jk'),
				'alamat' => $this->input->post('alamat'),
				'fakultas' => $this->input->post('fakultas'),
				'prodi' => $this->input->post('prodi'),
				'tahun_masuk' => $this->input->post('tahun_masuk'),
				'tahun_lulus' => $this->input->post('tahun_lulus'),
				'no_hp' => $this->input->post('no_hp')
			);
			
			$query = $this->App_model->edit_data('alumni','nim',$n,$data_alumni);

			if ($query) {
				redirect(base_url().'administrator/alumni');
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_alumni/Edit', $data);
			$this->load->view('administrator/Footer');
		}
	}

	public function hapus_alumni($nim)
	{
		$query = $this->App_model->hapus_data('alumni','nim',$nim);
		if ($query) {
			redirect(base_url().'administrator/alumni');
		}
	}

	public function get_prodi()
	{
		$id = $this->input->post('id');
		$prodi = $this->App_model->ambil_data_by_id_result('prodi', 'id_fakultas', $id);
		$this->output->set_content_type('application/json')->set_output(json_encode($prodi));
	}

	public function fakultas()
	{
		$data['fakultas'] = $this->App_model->ambil_data('fakultas','id');

		$this->load->view('administrator/Header');
		$this->load->view('administrator/TopHeader');
		$this->load->view('administrator/SideBar');
		$this->load->view('administrator/mod_fakultas/Data', $data);
		$this->load->view('administrator/Footer');
	}

	public function tambah_fakultas()
	{
		if (isset($_POST['submit'])) {
			$data_fakultas = array(
				'nama_fakultas' => $this->input->post('nama_fakultas')
			);

			$query = $this->App_model->tambah_data('fakultas', $data_fakultas);

			if ($query) {
				redirect(base_url().'administrator/fakultas');
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_fakultas/Tambah');
			$this->load->view('administrator/Footer');
		}
	}

	public function edit_fakultas($id)
	{
		$data['f'] = $this->App_model->ambil_data_by_id('fakultas','id',$id);

		if (isset($_POST['update'])) {
			$id_u = $this->input->post('id');

			$data_fakultas = array(
				'nama_fakultas' => $this->input->post('nama_fakultas')
			);
			$query = $this->App_model->edit_data('fakultas','id',$id_u,$data_fakultas);

			if ($query) {
				redirect(base_url().'administrator/fakultas');
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_fakultas/Edit', $data);
			$this->load->view('administrator/Footer');
		}
	}

	public function hapus_fakultas($id)
	{
		$query = $this->App_model->hapus_data('fakultas','id',$id);
		if ($query) {
			redirect(base_url().'administrator/fakultas');
		}
	}

	public function prodi()
	{
		$data['prodi'] = $this->App_model->ambil_data('prodi','id');

		$this->load->view('administrator/Header');
		$this->load->view('administrator/TopHeader');
		$this->load->view('administrator/SideBar');
		$this->load->view('administrator/mod_prodi/Data', $data);
		$this->load->view('administrator/Footer');
	}

	public function tambah_prodi()
	{
		$data['fakultas'] = $this->App_model->ambil_data('fakultas','id');

		if (isset($_POST['submit'])) {
			$data_prodi = array(
				'id_fakultas' => $this->input->post('fakultas'),
				'nama_prodi' => $this->input->post('nama_prodi')
			);

			$query = $this->App_model->tambah_data('prodi', $data_prodi);

			if ($query) {
				redirect(base_url().'administrator/prodi');
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_prodi/Tambah', $data);
			$this->load->view('administrator/Footer');
		}
	}

	public function edit_prodi($id)
	{
		$data['fakultas'] = $this->App_model->ambil_data('fakultas','id');
		$data['p'] = $this->App_model->ambil_data_by_id('prodi','id', $id);

		if (isset($_POST['update'])) {
			$id_p = $this->input->post('id');

			$data_prodi = array(
				'id_fakultas' => $this->input->post('fakultas'),
				'nama_prodi' => $this->input->post('nama_prodi')
			);

			$query = $this->App_model->edit_data('prodi','id',$id_p,$data_prodi);

			if ($query) {
				redirect(base_url().'administrator/prodi');
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_prodi/Edit', $data);
			$this->load->view('administrator/Footer');
		}
	}

	public function hapus_prodi($id)
	{
		$query = $this->App_model->hapus_data('prodi','id',$id);
		if ($query) {
			redirect(base_url().'administrator/prodi');
		}
	}
}
 ?>