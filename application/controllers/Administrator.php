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
		if ($this->session->userdata('username') === 'fks') {
			echo "<script>alert('Maaf, anda tidak memiliki akses pada menu ini')</script>";
			redirect(base_url().'administrator/dashboard');
		} else {
			$data['alumni'] = $this->App_model->join_tiga_table('tb_alumni','tb_kecamatan','tb_desa','tb_alumni.id_kecamatan = tb_kecamatan.id_kecamatan', 'tb_alumni.id_desa = tb_desa.id_desa');

			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_alumni/Data', $data);
			$this->load->view('administrator/Footer');
		}
	}

	public function tambah_alumni()
	{
		$data['kecamatan'] = $this->App_model->ambil_data('tb_kecamatan', 'id_kecamatan');
		// $data['desa'] = $this->App_model->ambil_data('tb_desa', 'id_desa');

		if (isset($_POST['submit'])) {
			$data_alumni = array(
				'no_ktp' => $this->input->post('no_ktp'),
				'nama' => $this->input->post('nama_lengkap'),
				'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat'),
				'id_kecamatan' => $this->input->post('kecamatan'),
				'id_desa' => $this->input->post('desa'),
				'thn_mondok' => $this->input->post('tahun_masuk'),
				'thn_keluar' => $this->input->post('tahun_lulus'),
				'telepon' => $this->input->post('telepon'),
				'pekerjaan' => $this->input->post('pekerjaan'),
				'bidang_usaha' => $this->input->post('bidang_usaha'),
				'akun_fb' => $this->input->post('akun_fb'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password'))
			);

			$query = $this->App_model->tambah_data('tb_alumni', $data_alumni);

			if ($query) {
				$this->session->set_flashdata('tambahDataSukses', 'Sukses Menambahkan Data');
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

	public function edit_alumni($id)
	{
		$data['a'] = $this->App_model->ambil_data_by_id('tb_alumni', 'id_alumni', $id);
		$data['k'] = $this->App_model->ambil_data('tb_kecamatan', 'id_kecamatan');	
		$data['d'] = $this->App_model->ambil_data('tb_desa', 'id_desa');	

		if (isset($_POST['update'])) {

			$n = $this->input->post('id_alumni');

			$data_alumni = array(
				'no_ktp' => $this->input->post('no_ktp'),
				'nama' => $this->input->post('nama_lengkap'),
				'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat'),
				'id_kecamatan' => $this->input->post('kecamatan'),
				'id_desa' => $this->input->post('desa'),
				'thn_mondok' => $this->input->post('tahun_masuk'),
				'thn_keluar' => $this->input->post('tahun_lulus'),
				'telepon' => $this->input->post('telepon'),
				'pekerjaan' => $this->input->post('pekerjaan'),
				'bidang_usaha' => $this->input->post('bidang_usaha'),
				'akun_fb' => $this->input->post('akun_fb'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password'))
			);
			
			$query = $this->App_model->edit_data('tb_alumni','id_alumni',$n,$data_alumni);

			if ($query) {
				$this->session->set_flashdata('updateDataSukses', 'Sukses Memperbarui Data');
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

	public function hapus_alumni($id)
	{
		$query = $this->App_model->hapus_data('tb_alumni','id_alumni',$id);
		if ($query) {
			$this->session->set_flashdata('hapusDataSukses', 'Sukses Menghapus Data');
			redirect(base_url().'administrator/alumni');
		}
	}

	public function get_desa()
	{
		$id = $this->input->post('id');
		$desa = $this->App_model->ambil_data_by_id_result('tb_desa', 'id_kecamatan', $id);
		$this->output->set_content_type('application/json')->set_output(json_encode($desa));
	}

	public function kecamatan()
	{
		if ($this->session->userdata('username') === 'fks') {
			echo "<script>alert('Maaf, anda tidak memiliki akses pada menu ini')</script>";
			redirect(base_url().'administrator/dashboard');
		} else {
			$data['kecamatan'] = $this->App_model->ambil_data('tb_kecamatan','id_kecamatan');

			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_kecamatan/Data', $data);
			$this->load->view('administrator/Footer');
		}
	}

	public function tambah_kecamatan()
	{
		if (isset($_POST['submit'])) {
			$data_kecamatan = array(
				'nama_kecamatan' => $this->input->post('nama_kecamatan')
			);

			$query = $this->App_model->tambah_data('tb_kecamatan', $data_kecamatan);

			if ($query) {
				$this->session->set_flashdata('tambahDataSukses', 'Sukses Menambahkan Data');
				redirect(base_url().'administrator/kecamatan');
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_kecamatan/Tambah');
			$this->load->view('administrator/Footer');
		}
	}

	public function edit_kecamatan($id)
	{
		$data['f'] = $this->App_model->ambil_data_by_id('tb_kecamatan','id_kecamatan',$id);

		if (isset($_POST['update'])) {
			$id_u = $this->input->post('id_kecamatan');

			$data_kecamatan = array(
				'nama_kecamatan' => $this->input->post('nama_kecamatan')
			);
			$query = $this->App_model->edit_data('tb_kecamatan','id_kecamatan',$id_u,$data_kecamatan);

			if ($query) {
				$this->session->set_flashdata('updateDataSukses', 'Sukses Memperbarui Data');
				redirect(base_url().'administrator/kecamatan');
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_kecamatan/Edit', $data);
			$this->load->view('administrator/Footer');
		}
	}

	public function hapus_kecamatan($id)
	{
		$query = $this->App_model->hapus_data('tb_kecamatan','id_kecamatan',$id);
		if ($query) {
			$this->session->set_flashdata('hapusDataSukses', 'Sukses Menghapus Data');
			redirect(base_url().'administrator/kecamatan');
		}
	}

	public function desa()
	{
		$data['prodi'] = $this->App_model->join_dua_table('tb_kecamatan','tb_desa', 'tb_kecamatan.id_kecamatan = tb_desa.id_kecamatan', 'tb_desa.id_desa');

		$this->load->view('administrator/Header');
		$this->load->view('administrator/TopHeader');
		$this->load->view('administrator/SideBar');
		$this->load->view('administrator/mod_desa/Data', $data);
		$this->load->view('administrator/Footer');
	}

	public function tambah_desa()
	{
		$data['kecamatan'] = $this->App_model->ambil_data('tb_kecamatan','id_kecamatan');

		if (isset($_POST['submit'])) {
			$data_desa = array(
				'id_kecamatan' => $this->input->post('kecamatan'),
				'nama_desa' => $this->input->post('nama_desa')
			);

			$query = $this->App_model->tambah_data('tb_desa', $data_desa);

			if ($query) {
				$this->session->set_flashdata('tambahDataSukses', 'Sukses Menambahkan Data');
				redirect(base_url().'administrator/desa');
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_desa/Tambah', $data);
			$this->load->view('administrator/Footer');
		}
	}

	public function edit_desa($id)
	{
		$data['kecamatan'] = $this->App_model->ambil_data('tb_kecamatan','id_kecamatan');
		$data['p'] = $this->App_model->ambil_data_by_id('tb_desa','id_desa', $id);

		if (isset($_POST['update'])) {
			$id_p = $this->input->post('id_desa');

			$data_desa = array(
				'id_kecamatan' => $this->input->post('kecamatan'),
				'nama_desa' => $this->input->post('nama_desa')
			);

			$query = $this->App_model->edit_data('tb_desa','id_desa',$id_p,$data_desa);

			if ($query) {
				$this->session->set_flashdata('updateDataSukses', 'Sukses Memperbarui Data');
				redirect(base_url().'administrator/desa');
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_desa/Edit', $data);
			$this->load->view('administrator/Footer');
		}
	}

	public function hapus_desa($id)
	{
		$query = $this->App_model->hapus_data('tb_desa','id_desa',$id);
		if ($query) {
			$this->session->set_flashdata('hapusDataSukses', 'Sukses Menghapus Data');
			redirect(base_url().'administrator/desa');
		}
	}

	public function lembaga()
	{
		$data['lembaga'] = $this->App_model->ambil_data('tb_lembaga_alumni', 'id_lembaga_alumni');

		$this->load->view('administrator/Header');
		$this->load->view('administrator/TopHeader');
		$this->load->view('administrator/SideBar');
		$this->load->view('administrator/mod_lembaga/Data', $data);
		$this->load->view('administrator/Footer');
	}

	public function tambah_lembaga()
	{
		if (isset($_POST['submit'])) {
			$data_lembaga = array(
				'nama_lembaga' => $this->input->post('nama_lembaga')
			);

			$query = $this->App_model->tambah_data('tb_lembaga_alumni', $data_lembaga);
			if ($query) {
				$this->session->set_flashdata('tambahDataSukses', 'Sukses Menambahkan Data');
				redirect(base_url().'administrator/lembaga');
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_lembaga/Tambah');
			$this->load->view('administrator/Footer');
		}
	}

	public function edit_lembaga($id)
	{
		$data['l'] = $this->App_model->ambil_data_by_id('tb_lembaga_alumni', 'id_lembaga_alumni', $id);

		if (isset($_POST['update'])) {
			$id_l = $this->input->post('id_lembaga');

			$data_lembaga = array(
				'nama_lembaga' => $this->input->post('nama_lembaga')
			);

			$query = $this->App_model->edit_data('tb_lembaga_alumni','id_lembaga_alumni',$id_l,$data_lembaga);

			if ($query) {
				$this->session->set_flashdata('updateDataSukses', 'Sukses Memperbarui Data');
				redirect(base_url().'administrator/lembaga');
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_lembaga/Edit', $data);
			$this->load->view('administrator/Footer');
		}
	}

	public function hapus_lembaga($id)
	{
		$query = $this->App_model->hapus_data('tb_lembaga_alumni','id_lembaga_alumni',$id);
		if ($query) {
			$this->session->set_flashdata('hapusDataSukses', 'Sukses Menghapus Data');
			redirect(base_url().'administrator/lembaga');
		}
	}

	public function jabatan()
	{
		$data['jabatan'] = $this->App_model->ambil_data('tb_jabatan', 'id_jabatan');

		$this->load->view('administrator/Header');
		$this->load->view('administrator/TopHeader');
		$this->load->view('administrator/SideBar');
		$this->load->view('administrator/mod_jabatan/Data', $data);
		$this->load->view('administrator/Footer');
	}

	public function tambah_jabatan()
	{
		if (isset($_POST['submit'])) {
			$data_jabatan = array(
				'nama_jabatan' => $this->input->post('nama_jabatan')
			);

			$query = $this->App_model->tambah_data('tb_jabatan', $data_jabatan);

			if ($query) {
				$this->session->set_flashdata('tambahDataSukses', 'Sukses Menambahkan Data');
				redirect(base_url().'administrator/jabatan');
			}

		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_jabatan/Tambah');
			$this->load->view('administrator/Footer');
		}
	}

	public function edit_jabatan($id)
	{
		$data['j'] = $this->App_model->ambil_data_by_id('tb_jabatan', 'id_jabatan', $id);

		if (isset($_POST['update'])) {
			$id_j = $this->input->post('id_jabatan');

			$data_jabatan = array(
				'nama_jabatan' => $this->input->post('nama_jabatan')
			);

			$query = $this->App_model->edit_data('tb_jabatan','id_jabatan',$id_j,$data_jabatan);

			if ($query) {
				$this->session->set_flashdata('updateDataSukses', 'Sukses Memperbarui Data');
				redirect(base_url().'administrator/jabatan');
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_jabatan/Edit', $data);
			$this->load->view('administrator/Footer');
		}
	}

	public function hapus_jabatan($id)
	{
		$query = $this->App_model->hapus_data('tb_jabatan','id_jabatan',$id);
		if ($query) {
			$this->session->set_flashdata('hapusDataSukses', 'Sukses Menghapus Data');
			redirect(base_url().'administrator/jabatan');
		}
	}

	public function devisi()
	{
		$data['devisi'] = $this->App_model->ambil_data('tb_devisi','id_devisi');

		$this->load->view('administrator/Header');
		$this->load->view('administrator/TopHeader');
		$this->load->view('administrator/SideBar');
		$this->load->view('administrator/mod_devisi/Data', $data);
		$this->load->view('administrator/Footer');
	}

	public function tambah_devisi()
	{
		if (isset($_POST['submit'])) {
			$data_devisi = array(
				'nama_devisi' => $this->input->post('nama_devisi')
			);

			$query = $this->App_model->tambah_data('tb_devisi',$data_devisi);

			if ($query) {
				$this->session->set_flashdata('tambahDataSukses', 'Sukses Menambahkan Data');
				redirect(base_url().'administrator/devisi');
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_devisi/Tambah');
			$this->load->view('administrator/Footer');
		}
	}

	public function edit_devisi($id)
	{
		$data['d'] = $this->App_model->ambil_data_by_id('tb_devisi','id_devisi', $id);

		if (isset($_POST['update'])) {
			$id_d = $this->input->post('id_devisi');

			$data_devisi = array(
				'nama_devisi' => $this->input->post('nama_devisi')
			);

			$query = $this->App_model->edit_data('tb_devisi','id_devisi',$id_d,$data_devisi);

			if ($query) {
				$this->session->set_flashdata('updateDataSukses', 'Sukses Memperbarui Data');
				redirect(base_url().'administrator/devisi');
			}

		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_devisi/Edit', $data);
			$this->load->view('administrator/Footer');
		}
	}

	public function hapus_devisi($id)
	{
		$query = $this->App_model->hapus_data('tb_devisi','id_devisi',$id);
		if ($query) {
			$this->session->set_flashdata('hapusDataSukses', 'Sukses Menghapus Data');
			redirect(base_url().'administrator/devisi');
		}
	}

	public function visi_misi()
	{
		$data['vm'] = $this->App_model->ambil_data_by_id_result('tb_visi_misi', 'id_lembaga',$this->session->userdata('id_petugas'));

		$this->load->view('administrator/Header');
		$this->load->view('administrator/TopHeader');
		$this->load->view('administrator/SideBar');
		$this->load->view('administrator/mod_visi_misi/Data', $data);
		$this->load->view('administrator/Footer');
	}

	public function tambah_visi_misi()
	{
		if (isset($_POST['submit'])) {
			$data_vm = array(
				'visi' => $this->input->post('visi'),
				'misi' => $this->input->post('misi'),
				'id_lembaga' => $this->session->userdata('id_petugas')
			);

			$query = $this->App_model->tambah_data('tb_visi_misi', $data_vm);

			if ($query) {
				redirect(base_url()."administrator/visi_misi?lembaga=".$this->session->userdata('username'));
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_visi_misi/Tambah');
			$this->load->view('administrator/Footer');
		}
	}

	public function edit_visi_misi($id)
	{
		$data['vm'] = $this->App_model->ambil_data_by_id('tb_visi_misi', 'id_visi_misi', $id);

		if (isset($_POST['update'])) {
			$id_vm = $this->input->post('id_visi_misi');

			$data_vm = array(
				'visi' => $this->input->post('visi'),
				'misi' => $this->input->post('misi'),
				'id_lembaga' => $this->session->userdata('id_petugas')
			);

			$query = $this->App_model->edit_data('tb_visi_misi','id_visi_misi',$id_vm,$data_vm);

			if ($query) {
				redirect(base_url()."administrator/visi_misi?lembaga=".$this->session->userdata('username'));
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_visi_misi/Edit', $data);
			$this->load->view('administrator/Footer');
		}
	}

	public function hapus_visi_misi($id)
	{
		$query = $this->App_model->hapus_data('tb_visi_misi','id_visi_misi',$id);
		if ($query) {
			redirect(base_url()."administrator/visi_misi?lembaga=".$this->session->userdata('username'));
		}
	}

	public function kegiatan()
	{
		$data['kegiatan'] = $this->App_model->ambil_data_by_id_result('tb_kegiatan', 'id_lembaga',$this->session->userdata('id_petugas'));

		$this->load->view('administrator/Header');
		$this->load->view('administrator/TopHeader');
		$this->load->view('administrator/SideBar');
		$this->load->view('administrator/mod_kegiatan/Data', $data);
		$this->load->view('administrator/Footer');
	}

	public function tambah_kegiatan()
	{
		if (isset($_POST['submit'])) {

			$config['upload_path'] = 'assets/foto/kegiatan';
	        $config['allowed_types'] = '*';
	        $config['encrypt_name'] = TRUE;

	        $this->load->library('upload', $config);
	        $this->upload->do_upload('foto_kegiatan');
	        $file_name = $this->upload->data();

	        $data_kegiatan = array(
	        	'judul_kegiatan' => $this->input->post('judul_kegiatan'),
	        	'deskripsi' => $this->input->post('deskripsi'),
	        	'jenis_kegiatan' => $this->input->post('jenis_kegiatan'),
	        	'foto_kegiatan' => $file_name['file_name'],
	        	'status' => 'Aktif',
	        	'id_lembaga' => $this->session->userdata('id_petugas')

	        );

	        $query = $this->App_model->tambah_data('tb_kegiatan', $data_kegiatan);

	        if ($query) {
	        	redirect(base_url().'administrator/kegiatan?lembaga='.$this->session->userdata('username'));
	        }

		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_kegiatan/Tambah');
			$this->load->view('administrator/Footer');
		}
	}

	public function edit_kegiatan($id)
	{
		$data['k'] = $this->App_model->ambil_data_by_id('tb_kegiatan', 'id_kegiatan', $id);

		if (isset($_POST['update'])) {
			$id_k = $this->input->post('id_kegiatan');

			$config['upload_path'] = 'assets/foto/kegiatan';
	        $config['allowed_types'] = '*';
	        $config['encrypt_name'] = TRUE;

	        $this->load->library('upload', $config);
	        $this->upload->do_upload('foto_kegiatan');
	        $file_name = $this->upload->data();

	        if (empty($file_name['file_name'])) {
	        	$data_kegiatan = array(
		        	'judul_kegiatan' => $this->input->post('judul_kegiatan'),
		        	'deskripsi' => $this->input->post('deskripsi'),
		        	'jenis_kegiatan' => $this->input->post('jenis_kegiatan'),
		        	'status' => 'Aktif',
		        	'id_lembaga' => $this->session->userdata('id_petugas')
	        	);	        	
	        } else {
	        	$data_kegiatan = array(
		        	'judul_kegiatan' => $this->input->post('judul_kegiatan'),
		        	'deskripsi' => $this->input->post('deskripsi'),
		        	'jenis_kegiatan' => $this->input->post('jenis_kegiatan'),
		        	'foto_kegiatan' => $file_name['file_name'],
		        	'status' => 'Aktif',
		        	'id_lembaga' => $this->session->userdata('id_petugas')
	        	);
	        	$unlink = $this->App_model->ambil_id_foto($id_k);
	        	$path = 'assets/foto/kegiatan/';
    			@unlink($path.$unlink->foto_kegiatan); 	
	        }

	        $query = $this->App_model->edit_data('tb_kegiatan','id_kegiatan',$id_k,$data_kegiatan);
	        if ($query) {	        	
	        	redirect(base_url().'administrator/kegiatan?lembaga='.$this->session->userdata('username'));
	        }
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_kegiatan/Edit', $data);
			$this->load->view('administrator/Footer');
		}
	}

	public function hapus_kegiatan($id)
	{
		$unlink = $this->App_model->ambil_id_foto($id);
		$path = 'assets/foto/kegiatan/';
		@unlink($path.$unlink->foto_kegiatan); 
		$query = $this->App_model->hapus_data('tb_kegiatan','id_kegiatan',$id);
		if ($query) {
			redirect(base_url()."administrator/kegiatan?lembaga=".$this->session->userdata('username'));
		}
	}

	public function get_autocomplete()
	{
        if (isset($_GET['term'])) {
            $result = $this->App_model->auto_complete($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->id_alumni;
                echo json_encode($arr_result);
            }
        }
    }

    public function get_alumni()
    {
    	$id_alumni = $this->input->post('id_alumni');
    	$alumni = $this->App_model->ambil_data_by_id('tb_alumni','id_alumni',$id_alumni);
    	$this->output->set_content_type('application/json')->set_output(json_encode($alumni));
    }

	public function struktur()
	{
		// $this->db->join($table2,$params1)->join($table3,$params2)->join($table4,$params3)->get($table1)->result_array();

		// ($table1,$table2,$table3,$table4,$params1,$params2,$params3)

		//$data['struktur'] = $this->App_model->join_empat_table('tb_struktur','tb_jabatan','tb_devisi','tb_alumni','tb_struktur.id_jabatan = tb_jabatan.id_jabatan','tb_struktur.id_devisi = tb_devisi.id_devisi','tb_struktur.id_alumni = tb_alumni.id_alumni');
		$data['struktur'] = $this->App_model->join_empat_table_by_id('tb_struktur','tb_jabatan','tb_devisi','tb_alumni','tb_struktur.id_jabatan = tb_jabatan.id_jabatan','tb_struktur.id_devisi = tb_devisi.id_devisi','tb_struktur.id_alumni = tb_alumni.id_alumni','tb_struktur.id_lembaga_alumni',$this->session->userdata('id_petugas'));
 
		$this->load->view('administrator/Header');
		$this->load->view('administrator/TopHeader');
		$this->load->view('administrator/SideBar');
		$this->load->view('administrator/mod_struktur/Data', $data);
		$this->load->view('administrator/Footer');
	}

	public function tambah_struktur()
	{
		$data['jabatan'] = $this->App_model->ambil_data('tb_jabatan', 'id_jabatan');
		$data['devisi'] = $this->App_model->ambil_data('tb_devisi', 'id_devisi');

		if (isset($_POST['submit'])) {
			$data_struktur = array(
				'id_alumni' => $this->input->post('id_alumni'),
				'id_jabatan' => $this->input->post('jabatan'),
				'id_devisi' => $this->input->post('devisi'),
				'id_lembaga_alumni' => $this->session->userdata('id_petugas'),
				'masa_bakti' => $this->input->post('masa_bakti'),
				'status' => 'aktif'
			);

			$query = $this->App_model->tambah_data('tb_struktur', $data_struktur);

			if ($query) {
				redirect(base_url().'administrator/struktur?lembaga='.$this->session->userdata('username'));
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_struktur/Tambah', $data);
			$this->load->view('administrator/Footer');
		}
	}

	public function edit_struktur($id)
	{
		$data['jabatan'] = $this->App_model->ambil_data('tb_jabatan', 'id_jabatan');
		$data['devisi'] = $this->App_model->ambil_data('tb_devisi', 'id_devisi');
		$data['s'] = $this->App_model->ambil_data_by_id('tb_struktur', 'id_struktur', $id);

		if (isset($_POST['update'])) {
			$id_s = $this->input->post('id_struktur');

			$data_struktur = array(
				'id_alumni' => '2',
				'id_jabatan' => $this->input->post('jabatan'),
				'id_devisi' => $this->input->post('devisi'),
				'id_lembaga_alumni' => $this->session->userdata('id_petugas'),
				'masa_bakti' => $this->input->post('masa_bakti'),
				'status' => 'aktif'
			);

			$query = $this->App_model->edit_data('tb_struktur','id_struktur',$id_s,$data_struktur);

			if ($query) {
				redirect(base_url().'administrator/struktur?lembaga='.$this->session->userdata('username'));
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_struktur/Edit', $data);
			$this->load->view('administrator/Footer');
		}
	}

	public function hapus_struktur($id)
	{
		$query = $this->App_model->hapus_data('tb_struktur','id_struktur',$id);
		if ($query) {
			redirect(base_url().'administrator/struktur?lembaga='.$this->session->userdata('username'));
		}
	}

	public function lembaga_nj()
	{
		$data['nj'] = $this->App_model->ambil_data('tb_lembaga_nj','id_lembaga');

		$this->load->view('administrator/Header');
		$this->load->view('administrator/TopHeader');
		$this->load->view('administrator/SideBar');
		$this->load->view('administrator/mod_lembaga_nj/Data', $data);
		$this->load->view('administrator/Footer');
	}

	public function tambah_lembaga_nj()
	{
		if (isset($_POST['submit'])) {
			$data_lembaga_nj = array(
				'nama_lembaga' => $this->input->post('nama_lembaga_nj'),
				'situs' => $this->input->post('situs')
			);

			$query = $this->App_model->tambah_data('tb_lembaga_nj', $data_lembaga_nj);

			if ($query) {
				$this->session->set_flashdata('tambahDataSukses', 'Sukses Menambahkan Data');
				redirect(base_url().'administrator/lembaga_nj');
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_lembaga_nj/Tambah');
			$this->load->view('administrator/Footer');
		}
	}

	public function edit_lembaga_nj($id)
	{
		$data['nj'] = $this->App_model->ambil_data_by_id('tb_lembaga_nj', 'id_lembaga',$id);

		if (isset($_POST['update'])) {
			$id_n = $this->input->post('id_lembaga_nj');

			$data_lembaga_nj = array(
				'nama_lembaga' => $this->input->post('nama_lembaga_nj'),
				'situs' => $this->input->post('situs')
			);

			$query = $this->App_model->edit_data('tb_lembaga_nj','id_lembaga',$id_n,$data_lembaga_nj);

			if ($query) {
				$this->session->set_flashdata('updateDataSukses', 'Sukses Memperbarui Data');
				redirect(base_url().'administrator/lembaga_nj');
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_lembaga_nj/Edit', $data);
			$this->load->view('administrator/Footer');
		}
	}

	public function hapus_lembaga_nj($id)
	{
		$query = $this->App_model->hapus_data('tb_lembaga_nj','id_lembaga',$id);
		if ($query) {
			$this->session->set_flashdata('hapusDataSukses', 'Sukses Menghapus Data');
			redirect(base_url().'administrator/lembaga_nj');
		}
	}

	public function korcam()
	{
		$data['korcam'] = $this->App_model->join_tiga_table('tb_korcam','tb_kecamatan','tb_alumni','tb_korcam.id_kecamatan = tb_kecamatan.id_kecamatan','tb_korcam.id_alumni = tb_alumni.id_alumni');

		$this->load->view('administrator/Header');
		$this->load->view('administrator/TopHeader');
		$this->load->view('administrator/SideBar');
		$this->load->view('administrator/mod_korcam/Data', $data);
		$this->load->view('administrator/Footer');
	}

	public function tambah_korcam()
	{
		$data['kecamatan'] = $this->App_model->ambil_data('tb_kecamatan','id_kecamatan');

		if (isset($_POST['submit'])) {
			$data_korcam = array(
				'id_kecamatan' => $this->input->post('kecamatan'),
				'id_alumni' => $this->input->post('id_alumni'),
				'tahun' => $this->input->post('tahun'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'status_korcam' => 'aktif'
			);

			$query = $this->App_model->tambah_data('tb_korcam',$data_korcam);

			if ($query) {
				$this->session->set_flashdata('tambahDataSukses', 'Sukses Menambahkan Data');
				redirect(base_url().'administrator/korcam');
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_korcam/Tambah',$data);
			$this->load->view('administrator/Footer');
		}
	}

	public function edit_korcam($id)
	{
		$data['kecamatan'] = $this->App_model->ambil_data('tb_kecamatan','id_kecamatan');
		$data['k'] = $this->App_model->ambil_data_by_id('tb_korcam', 'id_korcam', $id);

		if (isset($_POST['update'])) {
			$id_k = $this->input->post('id_korcam');

			$data_korcam = array(
				'id_kecamatan' => $this->input->post('kecamatan'),
				'id_alumni' => $this->input->post('id_alumni'),
				'tahun' => $this->input->post('tahun'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password'))
			);

			$query = $this->App_model->edit_data('tb_korcam','id_korcam',$id_k,$data_korcam);

			if ($query) {
				$this->session->set_flashdata('updateDataSukses', 'Sukses Memperbarui Data');
				redirect(base_url().'administrator/korcam');
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_korcam/Edit',$data);
			$this->load->view('administrator/Footer');
		}
	}

	public function hapus_korcam($id)
	{
		$query = $this->App_model->hapus_data('tb_korcam','id_korcam',$id);
		if ($query) {
			$this->session->set_flashdata('hapusDataSukses', 'Sukses Menghapus Data');
			redirect(base_url().'administrator/korcam');
		}
	}

	public function pengurus()
	{
		$data['pengurus'] = $this->App_model->join_tiga_table('tb_pengurus','tb_alumni','tb_lembaga','tb_pengurus.id_alumni = tb_alumni.id_alumni','tb_pengurus.id_lembaga = tb_lembaga.id_lembaga');

		$this->load->view('administrator/Header');
		$this->load->view('administrator/TopHeader');
		$this->load->view('administrator/SideBar');
		$this->load->view('administrator/mod_pengurus/Data',$data);
		$this->load->view('administrator/Footer');
	}

	public function tambah_pengurus()
	{
		$data['lembaga'] = $this->App_model->ambil_data('tb_lembaga','id_lembaga');

		if (isset($_POST['submit'])) {
			$data_pengurus = array(
				'id_alumni' => $this->input->post('id_alumni'),
				'id_lembaga' => $this->input->post('lembaga'),
				'username_pengurus' => $this->input->post('username'),
				'password_pengurus' => md5($this->input->post('password')),
			);

			$query = $this->App_model->tambah_data('tb_pengurus',$data_pengurus);

			if ($query) {
				$this->session->set_flashdata('tambahDataSukses', 'Sukses Menambahkan Data');
				redirect(base_url().'administrator/pengurus');
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_pengurus/Tambah',$data);
			$this->load->view('administrator/Footer');
		}
	}

	public function edit_pengurus($id)
	{
		$data['lembaga'] = $this->App_model->ambil_data('tb_lembaga','id_lembaga');
		$data['p'] = $this->App_model->ambil_data_by_id('tb_pengurus','id_pengurus',$id);

		if (isset($_POST['update'])) {

			$id_p = $this->input->post('id_pengurus');

			$data_pengurus = array(
				'id_alumni' => $this->input->post('id_alumni'),
				'id_lembaga' => $this->input->post('lembaga'),
				'username_pengurus' => $this->input->post('username'),
				'password_pengurus' => md5($this->input->post('password')),
			);

			$query = $this->App_model->edit_data('tb_pengurus','id_pengurus',$id_p,$data_pengurus);

			if ($query) {
				$this->session->set_flashdata('updateDataSukses', 'Sukses Memperbarui Data');
				redirect(base_url().'administrator/pengurus');
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_pengurus/Edit',$data);
			$this->load->view('administrator/Footer');
		}
	}

	public function hapus_pengurus($id)
	{
		$query = $this->App_model->hapus_data('tb_pengurus','id_pengurus',$id);
		if ($query) {
			$this->session->set_flashdata('hapusDataSukses', 'Sukses Menghapus Data');
			redirect(base_url().'administrator/pengurus');
		}
	}

}
?>