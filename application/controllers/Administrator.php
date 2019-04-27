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
			redirect(base_url().'auth/Login');
		}
	}

	public function index()
	{
		$this->load->view('administrator/Login');
	}

	public function dashboard() 
	{
		$data['kecamatan'] = $this->db->query("SELECT * FROM tb_kecamatan")->result();	
		$data['jml'] = $this->db->query("SELECT COUNT(id_kecamatan) as count FROM tb_alumni GROUP BY id_kecamatan")->result();
		$data['title'] = "Dashboard";

		$this->load->view('administrator/Header', $data);
		$this->load->view('administrator/TopHeader');
		$this->load->view('administrator/SideBar');
		$this->load->view('administrator/Content', $data);
		$this->load->view('administrator/Footer');
	}

	public function jml_alumni_per_kecamatan()
	{
		$jml = $this->db->query("SELECT COUNT(id_kecamatan) as count FROM tb_alumni GROUP BY id_kecamatan")->result();
		$this->output->set_content_type('application/json')->set_output(json_encode($jml));
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
		if ($this->session->userdata('id_lembaga') != 2) {
			redirect(base_url().'administrator/error');
		} else {
			$data['alumni'] = $this->App_model->join_tiga_table('tb_alumni','tb_kecamatan','tb_desa','tb_alumni.id_kecamatan = tb_kecamatan.id_kecamatan', 'tb_alumni.id_desa = tb_desa.id_desa');
			$data['bred'] = "Data Alumni";

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

			$config['upload_path'] = 'assets/foto/alumni';
	        $config['allowed_types'] = '*';
	        $config['encrypt_name'] = TRUE;

	        $this->load->library('upload', $config);
	        $this->upload->do_upload('foto_alumni');
	        $file_name = $this->upload->data();

	        $config['upload_path'] = 'assets/foto/foto_usaha';
	        $config['allowed_types'] = '*';
	        $config['encrypt_name'] = TRUE;

	        $this->load->library('upload', $config);
	        $this->upload->do_upload('foto_usaha');
	        $ush = $this->upload->data();

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
				'password' => md5($this->input->post('password')),
				'foto' => $file_name['file_name'],
				'foto_usaha' => $ush['file_name']
			);

			$query = $this->App_model->tambah_data('tb_alumni', $data_alumni);

			if ($query) {
				$this->session->set_flashdata('tambahDataSukses', 'Sukses Menambahkan Data');
				redirect(base_url().'administrator/alumni?lembaga='.$this->session->userdata('nama_lembaga'));
			}
		} else {
			if ($this->session->userdata('id_lembaga') != 2) {
				redirect(base_url().'administrator/error');
			} else {
				$this->load->view('administrator/Header');
				$this->load->view('administrator/TopHeader');
				$this->load->view('administrator/SideBar');
				$this->load->view('administrator/mod_alumni/Tambah', $data);
				$this->load->view('administrator/Footer');
			}			
		}
	}

	public function edit_alumni($id)
	{
		$data['a'] = $this->App_model->ambil_data_by_id('tb_alumni', 'id_alumni', $id);
		$data['k'] = $this->App_model->ambil_data('tb_kecamatan', 'id_kecamatan');	
		$data['d'] = $this->App_model->ambil_data('tb_desa', 'id_desa');	

		if (isset($_POST['update'])) {

			$n = $this->input->post('id_alumni');

			$foto_diri = $_FILES['foto_alumni']['name'];
			$foto_usaha = $_FILES['foto_usaha']['name'];

			$config['upload_path'] = 'assets/foto/alumni';
	        $config['allowed_types'] = '*';
	        $config['encrypt_name'] = TRUE;

	        $this->load->library('upload', $config);

	        $this->upload->do_upload('foto_alumni');
	        $file_name = $this->upload->data();

	        $this->upload->do_upload('foto_usaha');
	        $ush = $this->upload->data();

			if (empty($foto_diri) AND empty($foto_usaha)) {
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
					// 'username' => $this->input->post('username'),
					// 'password' => md5($this->input->post('password'))
				);
			} elseif (empty($foto_diri) AND !empty($foto_usaha)) {
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
					// 'username' => $this->input->post('username'),
					// 'password' => md5($this->input->post('password')),
						'foto_usaha' => $ush['file_name']
					);
					$unlink = $this->App_model->ambil_id_foto_alumni($n);
					$path = 'assets/foto/alumni/';
					@unlink($path.$unlink->foto_usaha);
			} elseif (empty($foto_usaha) AND !empty($foto_diri)) {
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
					// 'username' => $this->input->post('username'),
					// 'password' => md5($this->input->post('password')),
						'foto' => $file_name['file_name']
					);
					$unlink = $this->App_model->ambil_id_foto_alumni($n);
					$path = 'assets/foto/alumni/';
					@unlink($path.$unlink->foto);
			} else {
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
					// 'username' => $this->input->post('username'),
					// 'password' => md5($this->input->post('password')),
						'foto' => $file_name['file_name'],
						'foto_usaha' => $ush['file_name']
					);
					$unlink = $this->App_model->ambil_id_foto_alumni($n);
					$path = 'assets/foto/alumni/';
					@unlink($path.$unlink->foto);
					@unlink($path.$unlink->foto_usaha);
			}       
			
			$query = $this->App_model->edit_data('tb_alumni','id_alumni',$n,$data_alumni);

			if ($query) {
				$this->session->set_flashdata('updateDataSukses', 'Sukses Memperbarui Data');
				redirect(base_url().'administrator/alumni?lembaga='.$this->session->userdata('nama_lembaga'));
			}
		} else {
			if ($this->session->userdata('id_lembaga') != 2) {
				redirect(base_url().'administrator/error');
			} else {
				$this->load->view('administrator/Header');
				$this->load->view('administrator/TopHeader');
				$this->load->view('administrator/SideBar');
				$this->load->view('administrator/mod_alumni/Edit', $data);
				$this->load->view('administrator/Footer');
			}			
		}
	}

	public function hapus_alumni($id)
	{
		if ($this->session->userdata('id_lembaga') != 2) {
			redirect(base_url().'administrator/error');
		} else {
			$query = $this->App_model->hapus_data('tb_alumni','id_alumni',$id);
			if ($query) {
				$this->session->set_flashdata('hapusDataSukses', 'Sukses Menghapus Data');
				redirect(base_url().'administrator/alumni?lembaga='.$this->session->userdata('nama_lembaga'));
			}
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
		if ($this->session->userdata('id_lembaga') != 2) {
			redirect(base_url().'administrator/error');
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
				redirect(base_url().'administrator/kecamatan?lembaga='.$this->session->userdata('nama_lembaga'));
			}
		} else {
			if ($this->session->userdata('id_lembaga') != 2) {
				redirect(base_url().'administrator/error');
			} else {
				$this->load->view('administrator/Header');
				$this->load->view('administrator/TopHeader');
				$this->load->view('administrator/SideBar');
				$this->load->view('administrator/mod_kecamatan/Tambah');
				$this->load->view('administrator/Footer');
			}
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
				redirect(base_url().'administrator/kecamatan?lembaga='.$this->session->userdata('nama_lembaga'));
			}
		} else {
			if ($this->session->userdata('id_lembaga') != 2) {
				redirect(base_url().'administrator/error');
			} else {
				$this->load->view('administrator/Header');
				$this->load->view('administrator/TopHeader');
				$this->load->view('administrator/SideBar');
				$this->load->view('administrator/mod_kecamatan/Edit', $data);
				$this->load->view('administrator/Footer');
			}					
		}
	}

	public function hapus_kecamatan($id)
	{
		if ($this->session->userdata('id_lembaga') != 2) {
			redirect(base_url().'administrator/error');
		} else {
			$query = $this->App_model->hapus_data('tb_kecamatan','id_kecamatan',$id);
			if ($query) {
				$this->session->set_flashdata('hapusDataSukses', 'Sukses Menghapus Data');
				redirect(base_url().'administrator/kecamatan?lembaga='.$this->session->userdata('nama_lembaga'));
			}
		}			
	}

	public function desa()
	{
		$data['prodi'] = $this->App_model->join_dua_table('tb_kecamatan','tb_desa', 'tb_kecamatan.id_kecamatan = tb_desa.id_kecamatan', 'tb_desa.id_desa');

		if ($this->session->userdata('id_lembaga') != 2) {
			redirect(base_url().'administrator/error');
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_desa/Data', $data);
			$this->load->view('administrator/Footer');
		}
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
				redirect(base_url().'administrator/desa?lembaga='.$this->session->userdata('nama_lembaga'));
			}
		} else {
			if ($this->session->userdata('id_lembaga') != 2) {
				redirect(base_url().'administrator/error');
			} else {
				$this->load->view('administrator/Header');
				$this->load->view('administrator/TopHeader');
				$this->load->view('administrator/SideBar');
				$this->load->view('administrator/mod_desa/Tambah', $data);
				$this->load->view('administrator/Footer');
			}				
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
				redirect(base_url().'administrator/desa?lembaga='.$this->session->userdata('nama_lembaga'));
			}
		} else {
			if ($this->session->userdata('id_lembaga') != 2) {
				redirect(base_url().'administrator/error');
			} else {
				$this->load->view('administrator/Header');
				$this->load->view('administrator/TopHeader');
				$this->load->view('administrator/SideBar');
				$this->load->view('administrator/mod_desa/Edit', $data);
				$this->load->view('administrator/Footer');
			}
		}
	}

	public function hapus_desa($id)
	{
		if ($this->session->userdata('id_lembaga') != 2) {
			redirect(base_url().'administrator/error');
		} else {
			$query = $this->App_model->hapus_data('tb_desa','id_desa',$id);
			if ($query) {
				$this->session->set_flashdata('hapusDataSukses', 'Sukses Menghapus Data');
				redirect(base_url().'administrator/desa?lembaga='.$this->session->userdata('nama_lembaga'));
			}
		}
	}

	public function lembaga()
	{
		$data['lembaga'] = $this->App_model->ambil_data('tb_lembaga_alumni', 'id_lembaga_alumni');

		if ($this->session->userdata('id_lembaga') != 2) {
			redirect(base_url().'administrator/error');
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_lembaga/Data', $data);
			$this->load->view('administrator/Footer');
		}
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
				redirect(base_url().'administrator/lembaga?lembaga='.$this->session->userdata('nama_lembaga'));
			}
		} else {
			if ($this->session->userdata('id_lembaga') != 2) {
				redirect(base_url().'administrator/error');
			} else {
				$this->load->view('administrator/Header');
				$this->load->view('administrator/TopHeader');
				$this->load->view('administrator/SideBar');
				$this->load->view('administrator/mod_lembaga/Tambah');
				$this->load->view('administrator/Footer');
			}
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
				redirect(base_url().'administrator/lembaga?lembaga='.$this->session->userdata('nama_lembaga'));
			}
		} else {
			if ($this->session->userdata('id_lembaga') != 2) {
				redirect(base_url().'administrator/error');
			} else {
				$this->load->view('administrator/Header');
				$this->load->view('administrator/TopHeader');
				$this->load->view('administrator/SideBar');
				$this->load->view('administrator/mod_lembaga/Edit', $data);
				$this->load->view('administrator/Footer');
			}				
		}
	}

	public function hapus_lembaga($id)
	{
		if ($this->session->userdata('id_lembaga') != 2) {
			redirect(base_url().'administrator/error');
		} else {
			$query = $this->App_model->hapus_data('tb_lembaga_alumni','id_lembaga_alumni',$id);
			if ($query) {
				$this->session->set_flashdata('hapusDataSukses', 'Sukses Menghapus Data');
				redirect(base_url().'administrator/lembaga?lembaga='.$this->session->userdata('nama_lembaga'));
			}
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
				redirect(base_url().'administrator/jabatan?lembaga='.$this->session->userdata('nama_lembaga'));
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
				redirect(base_url().'administrator/jabatan?lembaga='.$this->session->userdata('nama_lembaga'));
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
			redirect(base_url().'administrator/jabatan?lembaga='.$this->session->userdata('nama_lembaga'));
		}
	}

	public function nonaktif_jabatan($id)
	{
		$query = $this->db->query("UPDATE tb_jabatan SET status_jabatan = 'N' WHERE id_jabatan = '".$id."' ");
		if ($query) {
			redirect(base_url().'administrator/jabatan?lembaga='.$this->session->userdata('nama_lembaga'));
		}
	}

	public function aktifkan_jabatan($id)
	{
		$query = $this->db->query("UPDATE tb_jabatan SET status_jabatan = 'Y' WHERE id_jabatan = '".$id."'");
		if ($query) {
			redirect(base_url().'administrator/jabatan?lembaga='.$this->session->userdata('nama_lembaga'));
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
				redirect(base_url().'administrator/devisi?lembaga='.$this->session->userdata('nama_lembaga'));
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
				redirect(base_url().'administrator/devisi?lembaga='.$this->session->userdata('nama_lembaga'));
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
			redirect(base_url().'administrator/devisi?lembaga='.$this->session->userdata('nama_lembaga'));
		}
	}

	public function nonaktif_devisi($id)
	{
		$query = $this->db->query("UPDATE tb_devisi SET status_devisi = 'N' WHERE id_devisi = '".$id."' ");
		if ($query) {
			redirect(base_url().'administrator/devisi?lembaga='.$this->session->userdata('nama_lembaga'));
		}
	}

	public function aktifkan_devisi($id)
	{
		$query = $this->db->query("UPDATE tb_devisi SET status_devisi = 'Y' WHERE id_devisi = '".$id."'");
		if ($query) {
			redirect(base_url().'administrator/devisi?lembaga='.$this->session->userdata('nama_lembaga'));
		}
	}

	public function visi_misi()
	{
		// $data['vm'] = $this->App_model->ambil_data_by_id_result('tb_visi_misi', 'id_lembaga_alumni',$this->session->userdata('id_petugas'));
		$data['vm'] = $this->App_model->join_dua_table_by_id('tb_visi_misi','tb_lembaga_alumni','tb_visi_misi.id_lembaga_alumni = tb_lembaga_alumni.id_lembaga_alumni','tb_visi_misi.id_visi_misi','tb_visi_misi.id_lembaga_alumni',$this->session->userdata('id_lembaga'));

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
				'id_lembaga_alumni' => $this->session->userdata('id_lembaga')
			);

			$query = $this->App_model->tambah_data('tb_visi_misi', $data_vm);

			if ($query) {
				$this->session->set_flashdata('tambahDataSukses', 'Sukses Menambahkan Data');
				redirect(base_url()."administrator/visi_misi?lembaga=".$this->session->userdata('nama_lembaga'));
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
				'id_lembaga_alumni' => $this->session->userdata('id_lembaga')
			);

			$query = $this->App_model->edit_data('tb_visi_misi','id_visi_misi',$id_vm,$data_vm);

			if ($query) {
				$this->session->set_flashdata('updateDataSukses', 'Sukses Memperbarui Data');
				redirect(base_url()."administrator/visi_misi?lembaga=".$this->session->userdata('nama_lembaga'));
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
			$this->session->set_flashdata('hapusDataSukses', 'Sukses Menghapus Data');
			redirect(base_url()."administrator/visi_misi?lembaga=".$this->session->userdata('nama_lembaga'));
		}
	}

	public function kegiatan()
	{
		//$data['kegiatan'] = $this->App_model->ambil_data_by_id_result('tb_kegiatan', 'id_lembaga_alumni',$this->session->userdata('id_petugas'));
		// $data['kegiatan'] = $this->App_model->join_dua_table_by_id('tb_kegiatan','tb_alumni','tb_kegiatan.author = tb_alumni.id_alumni','tb_kegiatan.id_kegiatan','tb_kegiatan.id_lembaga_alumni',$this->session->userdata('id_lembaga'));
		$data['kegiatan'] = $this->App_model->ambil_data_by_id_result('tb_kegiatan', 'id_lembaga_alumni', $this->session->userdata('id_lembaga'));

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
	        
	        if ($this->upload->do_upload('foto_kegiatan')) {
	        	$file_name = $this->upload->data();

	        	//compress images
	        	$config['image_library'] = 'gd2';
	        	$config['source_image'] = 'assets/foto/kegiatan/'.$file_name['file_name'];
	        	$config['create_thumb'] = FALSE;
	        	$config['maintain_ratio'] = FALSE;
	        	$config['quality'] = '50%';
	        	$config['width'] = 1600;
	        	$config['height'] = 681;
	        	$config['new_image'] = 'assets/foto/kegiatan/'.$file_name['file_name'];
	        	$this->load->library('image_lib', $config);
	        	$this->image_lib->resize();

	        	$data_kegiatan = array(
	        		'judul_kegiatan' => $this->input->post('judul_kegiatan'),
	        		'slug' => url_title($this->input->post('judul_kegiatan'), 'dash', TRUE),
	        		'deskripsi' => $this->input->post('deskripsi'),
	        		'jenis_kegiatan' => $this->input->post('jenis_kegiatan'),
	        		'foto_kegiatan' => $file_name['file_name'],
	        		'status' => 'Aktif',
	        		'id_lembaga_alumni' => $this->session->userdata('id_lembaga'),
	        		'author' => $this->session->userdata('user'),
	        		'tanggal_posting' => date('Y-m-d')
	        	);

	        	$query = $this->App_model->tambah_data('tb_kegiatan', $data_kegiatan);

	        	if ($query) {

	        		// $data_token = array(
	        		// 	"to" => "fB-WzAimxQU:APA91bE3fyXHUvAgbUi7y91DkmPaBvnzyCDYvGhDY44Dlr3TpQpSuYXJC2F3cF0f_8VwBXZDG9UqhtiSCkoiKOyf5kfR9WauAYyhJpYCKt3euLiKmyQcHGxtBuWlRIUbpojTglG7ZMB7",
	        		// 	"notification" => array(
	        		// 		"title" => $this->input->post('judul_kegiatan'),	
	        		// 		"body" => $this->input->post('deskripsi')
	        		// 	)
	        		// );

	        		// $encode = json_encode($data_token);

	        		// $curlone = curl_init();	
	        		// curl_setopt_array($curlone, array(
	        		// 	CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
	        		// 	CURLOPT_RETURNTRANSFER => true,
	        		// 	CURLOPT_POST => true,
	        		// 	CURLOPT_POSTFIELDS => $encode,	
	        		// 	CURLOPT_SSL_VERIFYPEER => false,
	        		// 	CURLOPT_HTTPHEADER => array(
	        		// 		"Authorization: key=AAAA_Ppx93U:APA91bHmZ9ODhTfy2lhArwDRWL6oSu7DqMIhGSnfhwu9rfqpPmw9WppdB4XSue4Dkz0JK--Y8a8xODe3Bq9rYl1vZPKP7-yKW1ur7LJg0eFjRCCFew3bZFM5hG9BsTzM097KGnIwOoBV",
	        		// 		"Content-Type: application/json"
	        		// 	),
	        		// ));

	        		// $response1 = curl_exec($curlone);
	        		// $err1 = curl_error($curlone);

	        		// echo $response1;

	        		// curl_close($curlone);

        			// $ch = curl_init();
 
			        // // Set the url, number of POST vars, POST data
			        // curl_setopt($ch, CURLOPT_URL, $url);
			 
			        // curl_setopt($ch, CURLOPT_POST, true);
			        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			 
			        // // Disabling SSL Certificate support temporarly
			        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			 
			        // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
			 
			        // // Execute post
			        // $result = curl_exec($ch);
			        // if ($result === FALSE) {
			        //     echo 'Curl failed: ' . curl_error($ch);
			        // }
			 
			        // // Close connection
			        // curl_close($ch);

        			// $this->load->library("curl");
        			// $this->curl->create("https://fcm.googleapis.com/fcm/send");
        			// $this->curl->option("HEADER", $headers);
        			// $this->curl->option("returntransfer", true);
        			// $this->curl->option("postfields", json_encode($field));
        			// $this->curl->execute();

	        		redirect(base_url().'administrator/kegiatan?lembaga='.$this->session->userdata('nama_lembaga'));
	        	}
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
		        	'slug' => url_title($this->input->post('judul_kegiatan'), 'dash', TRUE),
		        	'deskripsi' => $this->input->post('deskripsi'),
		        	'jenis_kegiatan' => $this->input->post('jenis_kegiatan'),
		        	'status' => 'Aktif',
		        	'id_lembaga_alumni' => $this->session->userdata('id_lembaga'),
		        	'tanggal_posting' => date('Y-m-d')
	        	);	        	
	        } else {
	        	$data_kegiatan = array(
		        	'judul_kegiatan' => $this->input->post('judul_kegiatan'),
		        	'deskripsi' => $this->input->post('deskripsi'),
		        	'jenis_kegiatan' => $this->input->post('jenis_kegiatan'),
		        	'foto_kegiatan' => $file_name['file_name'],
		        	'status' => 'Aktif',
		        	'id_lembaga_alumni' => $this->session->userdata('id_lembaga'),
		        	'tanggal_posting' => date('Y-m-d')
	        	);
	        	$unlink = $this->App_model->ambil_id_foto($id_k);
	        	$path = 'assets/foto/kegiatan/';
    			@unlink($path.$unlink->foto_kegiatan); 	
	        }

	        $query = $this->App_model->edit_data('tb_kegiatan','id_kegiatan',$id_k,$data_kegiatan);
	        if ($query) {	        	
	        	redirect(base_url().'administrator/kegiatan?lembaga='.$this->session->userdata('nama_lembaga'));
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
			redirect(base_url()."administrator/kegiatan?lembaga=".$this->session->userdata('nama_lembaga'));
		}
	}

	public function get_autocomplete()
	{
        if (isset($_GET['term'])) {
            $result = $this->App_model->auto_complete($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->no_ktp;
                echo json_encode($arr_result);
            }
        }
    }

    public function get_fks_anggota()
    {
    	if (isset($_GET['term'])) {
            $result = $this->App_model->auto_fks($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->no_ktp;
                echo json_encode($arr_result);
            }
        }
    }

    public function get_anggota_fks_by_id()
    {
    	$nis = $this->input->post('nis');
    	$fks = $this->App_model->ambil_data_by_id('anggota_fks','nis',$nis);
    	$this->output->set_content_type('application/json')->set_output(json_encode($fks));
    }

    public function get_alumni()
    {
    	$no_ktp = $this->input->post('no_ktp');
    	$fks = $this->App_model->ambil_data_by_id('tb_alumni','no_ktp',$no_ktp);
    	$this->output->set_content_type('application/json')->set_output(json_encode($fks));
    }

    public function get_struktur()
    {
    	$id = $this->input->post('id_alumni');
    	$query = $this->db->query("SELECT id_alumni FROM tb_struktur WHERE id_alumni = '".$id."' ")->num_rows();
    	if ($query > 0) {
    		echo "Fail";
    	} else {
    		echo "Sukses";
    	}
    }

    public function get_struktur_fks()
    {
    	$nis = $this->input->post('nis');
    	$query = $this->db->query("SELECT nis FROM tb_struktur WHERE nis = '".$nis."' ")->num_rows();
    	if ($query > 0) {
    		echo "Fail";
    	} else {
    		echo "Sukses";
    	}
    }

	public function struktur()
	{
		if ($_GET['lembaga'] == '1') {
			$data['struktur'] = $this->App_model->join_empat_table_by_id('tb_struktur','tb_jabatan','tb_devisi','anggota_fks','tb_struktur.id_jabatan = tb_jabatan.id_jabatan','tb_struktur.id_devisi = tb_devisi.id_devisi','tb_struktur.nis = anggota_fks.nis','tb_struktur.id_lembaga_alumni',$_GET['lembaga']);
 
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_struktur/Data', $data);
			$this->load->view('administrator/Footer');
		} else {
			$data['struktur'] = $this->App_model->join_empat_table_by_id('tb_struktur','tb_jabatan','tb_devisi','tb_alumni','tb_struktur.id_jabatan = tb_jabatan.id_jabatan','tb_struktur.id_devisi = tb_devisi.id_devisi','tb_struktur.id_alumni = tb_alumni.id_alumni','tb_struktur.id_lembaga_alumni',$_GET['lembaga']);
 
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_struktur/Data', $data);
			$this->load->view('administrator/Footer');
		}		

		// if ($_GET['lembaga'] == '2') {
		// 	$data['struktur'] = $this->App_model->join_empat_table_by_id('tb_struktur','tb_jabatan','tb_devisi','tb_alumni','tb_struktur.id_jabatan = tb_jabatan.id_jabatan','tb_struktur.id_devisi = tb_devisi.id_devisi','tb_struktur.id_alumni = tb_alumni.id_alumni','tb_struktur.id_lembaga_alumni',$_GET['lembaga']);
 
		// 	$this->load->view('administrator/Header');
		// 	$this->load->view('administrator/TopHeader');
		// 	$this->load->view('administrator/SideBar');
		// 	$this->load->view('administrator/mod_struktur/Data', $data);
		// 	$this->load->view('administrator/Footer');
		// 	// echo "P4nj";
		// } elseif ($_GET['lembaga'] == '3') {
		// 	$data['struktur'] = $this->App_model->join_empat_table_by_id('tb_struktur','tb_jabatan','tb_devisi','tb_alumni','tb_struktur.id_jabatan = tb_jabatan.id_jabatan','tb_struktur.id_devisi = tb_devisi.id_devisi','tb_struktur.id_alumni = tb_alumni.id_alumni','tb_struktur.id_lembaga_alumni',$_GET['lembaga']);
 
		// 	$this->load->view('administrator/Header');
		// 	$this->load->view('administrator/TopHeader');
		// 	$this->load->view('administrator/SideBar');
		// 	$this->load->view('administrator/mod_struktur/Data', $data);
		// 	$this->load->view('administrator/Footer');
		// } elseif ($_GET['lembaga'] == '1') {
		// 	$data['struktur'] = $this->App_model->join_empat_table_by_id('tb_struktur','tb_jabatan','tb_devisi','tb_alumni','tb_struktur.id_jabatan = tb_jabatan.id_jabatan','tb_struktur.id_devisi = tb_devisi.id_devisi','tb_struktur.id_alumni = tb_alumni.id_alumni','tb_struktur.id_lembaga_alumni',$_GET['lembaga']);
 
		// 	$this->load->view('administrator/Header');
		// 	$this->load->view('administrator/TopHeader');
		// 	$this->load->view('administrator/SideBar');
		// 	$this->load->view('administrator/mod_struktur/Data', $data);
		// 	$this->load->view('administrator/Footer');
		// } else {
		// 	echo "GAGAL";
		// }
	}

	public function tambah_struktur()
	{
		$data['jabatan'] = $this->App_model->ambil_data('tb_jabatan', 'id_jabatan');
		$data['devisi'] = $this->App_model->ambil_data('tb_devisi', 'id_devisi');
		$id_l = $_GET['lembaga'];

		if (isset($_POST['submit'])) {

			$id_lembaga_alumni = $this->input->post('id_lembaga_alumni');

			if ($id_lembaga_alumni == '1') {
				$data_struktur = array(
					'nis' => $this->input->post('nis'),
					'id_jabatan' => $this->input->post('jabatan'),
					'id_devisi' => $this->input->post('devisi'),
					'id_lembaga_alumni' => $this->input->post('id_lembaga_alumni'),
					'masa_bakti' => $this->input->post('masa_bakti'),
					'status_struktur' => 'Y'
				);

				$query = $this->App_model->tambah_data('tb_struktur', $data_struktur);

				if ($query) {
					redirect(base_url().'administrator/struktur?lembaga='.$id_l);
				}
			} else {
				$data_struktur = array(
					'id_alumni' => $this->input->post('id_alumni'),
					'id_jabatan' => $this->input->post('jabatan'),
					'id_devisi' => $this->input->post('devisi'),
					'id_lembaga_alumni' => $this->input->post('id_lembaga_alumni'),
					'masa_bakti' => $this->input->post('masa_bakti'),
					'status_struktur' => 'Y'
				);

				$query = $this->App_model->tambah_data('tb_struktur', $data_struktur);

				if ($query) {
					redirect(base_url().'administrator/struktur?lembaga='.$id_l);
				}
			}			
		} else {
			if ($_GET['lembaga'] == '1') {
				$this->load->view('administrator/Header');
				$this->load->view('administrator/TopHeader');
				$this->load->view('administrator/SideBar');
				$this->load->view('administrator/mod_struktur/TambahFks', $data);
				$this->load->view('administrator/Footer');
			} else {
				$this->load->view('administrator/Header');
				$this->load->view('administrator/TopHeader');
				$this->load->view('administrator/SideBar');
				$this->load->view('administrator/mod_struktur/Tambah', $data);
				$this->load->view('administrator/Footer');
			}
		}
	}

	public function edit_struktur($id)
	{
		$id_l = $_GET['lembaga'];

		$data['jabatan'] = $this->App_model->ambil_data('tb_jabatan', 'id_jabatan');
		$data['devisi'] = $this->App_model->ambil_data('tb_devisi', 'id_devisi');
		$data['s'] = $this->App_model->ambil_data_by_id('tb_struktur', 'id_struktur', $id);		

		if (isset($_POST['update'])) {
			$id_s = $this->input->post('id_struktur');
			$id_a = $this->input->post('id_alumni');

			$data_struktur = array(
				'id_alumni' => $id_a,
				'id_jabatan' => $this->input->post('jabatan'),
				'id_devisi' => $this->input->post('devisi'),
				'id_lembaga_alumni' => $id_l,
				'masa_bakti' => $this->input->post('masa_bakti'),
				'status_struktur' => 'Y'
			);

			$query = $this->App_model->edit_data('tb_struktur','id_struktur',$id_s,$data_struktur);

			if ($query) {
				redirect(base_url().'administrator/struktur?lembaga='.$id_l);
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
		$id_l = $_GET['lembaga'];
		$query = $this->App_model->hapus_data('tb_struktur','id_struktur',$id);
		if ($query) {
			redirect(base_url().'administrator/struktur?lembaga='.$id_l);
		}
	}

	public function nonaktif_struktur($id)
	{
		$id_l = $_GET['lembaga'];
		$query = $this->db->query("UPDATE tb_struktur SET status = 'N' WHERE id_struktur = '".$id."' ");
		if ($query) {
			redirect(base_url().'administrator/struktur?lembaga='.$id_l);
		}
	}

	public function aktifkan_struktur($id)
	{
		$id_l = $_GET['lembaga'];
		$query = $this->db->query("UPDATE tb_struktur SET status = 'Y' WHERE id_struktur = '".$id."'");
		if ($query) {
			redirect(base_url().'administrator/struktur?lembaga='.$id_l);
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
				redirect(base_url().'administrator/lembaga_nj?lembaga='.$this->session->userdata('nama_lembaga'));
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
				redirect(base_url().'administrator/lembaga_nj?lembaga='.$this->session->userdata('nama_lembaga'));
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
			redirect(base_url().'administrator/lembaga_nj?lembaga='.$this->session->userdata('nama_lembaga'));
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
				'status' => 'Y'
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
		$data['k'] = $this->App_model->ambil_data_by_id('tb_korcam','id_korcam',$id);
		
		if (isset($_POST['update'])) {
			$id_k = $this->input->post('id_korcam');

			$data_korcam = array(
				'id_kecamatan' => $this->input->post('kecamatan'),
				'id_alumni' => $this->input->post('id_alumni'),
				'tahun' => $this->input->post('tahun')
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

	public function nonaktif_korcam($id)
	{
		$query = $this->db->query("UPDATE tb_korcam SET status = 'N' WHERE id_korcam = '".$id."' ");
		if ($query) {
			redirect(base_url().'administrator/korcam');
		}
	}

	public function aktifkan_korcam($id)
	{
		$query = $this->db->query("UPDATE tb_korcam SET status = 'Y' WHERE id_korcam = '".$id."'");
		if ($query) {
			redirect(base_url().'administrator/korcam');
		}
	}

	public function get_korcam()
	{
		$id = $this->input->post('id_alumni');
    	$query = $this->db->query("SELECT id_alumni FROM tb_korcam WHERE id_alumni = '".$id."' ")->num_rows();
    	if ($query > 0) {
    		echo "Fail";
    	} else {
    		echo "Sukses";
    	}
	}

	public function pengurus()
	{
		$data['pengurus'] = $this->App_model->join_tiga_table('tb_pengurus','tb_alumni','tb_lembaga_alumni','tb_pengurus.id_alumni = tb_alumni.id_alumni','tb_pengurus.id_lembaga_alumni = tb_lembaga_alumni.id_lembaga_alumni');

		$this->load->view('administrator/Header');
		$this->load->view('administrator/TopHeader');
		$this->load->view('administrator/SideBar');
		$this->load->view('administrator/mod_pengurus/Data',$data);
		$this->load->view('administrator/Footer');
	}

	public function tambah_pengurus()
	{
		$data['lembaga'] = $this->App_model->ambil_data('tb_lembaga_alumni','id_lembaga_alumni');

		if (isset($_POST['submit'])) {
			$data_pengurus = array(
				'id_alumni' => $this->input->post('id_alumni'),
				'id_lembaga_alumni' => $this->input->post('lembaga'),
				'status' => "aktif"
				// 'username_pengurus' => $this->input->post('username'),
				// 'password_pengurus' => md5($this->input->post('password')),
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
		$data['lembaga'] = $this->App_model->ambil_data('tb_lembaga_alumni','id_lembaga_alumni');
		$data['p'] = $this->App_model->ambil_data_by_id('tb_pengurus','id_pengurus',$id);

		if (isset($_POST['update'])) {

			$id_p = $this->input->post('id_pengurus');

			$data_pengurus = array(
				'id_alumni' => $this->input->post('id_alumni'),
				'id_lembaga_alumni' => $this->input->post('lembaga'),
				// 'username_pengurus' => $this->input->post('username'),
				// 'password_pengurus' => md5($this->input->post('password')),
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

	public function get_kecamatan()
	{
		$kecamatan = $this->db->query("SELECT nama_kecamatan FROM tb_kecamatan")->result();
		$this->output->set_content_type('application/json')->set_output(json_encode($kecamatan));
	}

	public function data_anggota_fks()
	{
		//$data['fks'] = $this->App_model->ambil_data('anggota_fks','nis');
		$data['fks'] = $this->App_model->join_dua_table('anggota_fks','tb_lembaga_nj','anggota_fks.pendidikan = tb_lembaga_nj.id_lembaga','anggota_fks.nis');

		$this->load->view('administrator/Header');
		$this->load->view('administrator/TopHeader');
		$this->load->view('administrator/SideBar');
		$this->load->view('administrator/mod_fks/Data', $data);
		$this->load->view('administrator/Footer');
	}

	public function tambah_anggota_fks()
	{
		$data['lembaga_nj'] = $this->App_model->ambil_data('tb_lembaga_nj','id_lembaga');		

		if (isset($_POST['submit'])) {
			$data_fks = array(
				'nis' => $this->input->post('nis'),
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'desa' => $this->input->post('desa'),
				'kecamatan' => $this->input->post('kecamatan'),
				'gang_wilayah' => $this->input->post('gang_wilayah'),
				'pendidikan' => $this->input->post('pendidikan'),
				'telepon' => $this->input->post('telepon'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
			);

			$query = $this->App_model->tambah_data('anggota_fks',$data_fks);

			if ($query) {
				$this->session->set_flashdata('tambahDataSukses', 'Sukses Menambahkan Data');
				redirect(base_url().'administrator/data_anggota_fks?lembaga='.$this->session->userdata('nama_lembaga'));
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_fks/Tambah', $data);
			$this->load->view('administrator/Footer');
		}		
	}

	public function edit_anggota_fks($nis)
	{
		$data['lembaga_nj'] = $this->App_model->ambil_data('tb_lembaga_nj','id_lembaga');
		$data['fks'] = $this->App_model->ambil_data_by_id('anggota_fks', 'nis', $nis);

		if (isset($_POST['submit'])) {

			$nis = $this->input->post('nis');

			$data_fks = array(
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'desa' => $this->input->post('desa'),
				'kecamatan' => $this->input->post('kecamatan'),
				'gang_wilayah' => $this->input->post('gang_wilayah'),
				'pendidikan' => $this->input->post('pendidikan'),
				'telepon' => $this->input->post('telepon'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
			);

			$query = $this->App_model->edit_data('anggota_fks','nis',$nis,$data_fks);

			if ($query) {
				$this->session->set_flashdata('updateDataSukses', 'Sukses Memperbarui Data');
				redirect(base_url().'administrator/data_anggota_fks?lembaga='.$this->session->userdata('nama_lembaga'));
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_fks/Edit', $data);
			$this->load->view('administrator/Footer');
		}
	}

	public function hapus_anggota_fks($nis)
	{
		$query = $this->App_model->hapus_data('anggota_fks','nis',$nis);
		if ($query) {
			$this->session->set_flashdata('hapusDataSukses', 'Sukses Menghapus Data');
			redirect(base_url().'administrator/data_anggota_fks?lembaga='.$this->session->userdata('nama_lembaga'));
		}
	}

	public function promosi()
	{
		$data['promosi'] = $this->App_model->join_dua_table('tb_promosi','tb_alumni','tb_promosi.id_alumni = tb_alumni.id_alumni','tb_promosi.id_promosi');		

		$this->load->view('administrator/Header');
		$this->load->view('administrator/TopHeader');
		$this->load->view('administrator/SideBar');
		$this->load->view('administrator/mod_promosi/Data', $data);
		$this->load->view('administrator/Footer');
	}

	public function tambah_promosi()
	{
		if (isset($_POST['submit'])) {
			$data_promosi = array(
				'id_alumni' => $this->input->post('id_alumni'),
				'tgl_mulai' => $this->input->post('tgl_mulai'),
				'tgl_akhir' => $this->input->post('tgl_akhir'),
				'status_promosi' => 'Y'
			);

			$query = $this->App_model->tambah_data('tb_promosi', $data_promosi);

			if ($query) {
				$this->session->set_flashdata('tambahDataSukses', 'Sukses Menambahkan Data');
				redirect(base_url().'administrator/promosi?lembaga='.$this->session->userdata('nama_lembaga'));
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_promosi/Tambah');
			$this->load->view('administrator/Footer');
		}
	}

	public function edit_promosi($id)
	{
		$data['p'] = $this->App_model->join_dua_table_by_id_row('tb_promosi','tb_alumni','tb_promosi.id_alumni = tb_alumni.id_alumni','tb_promosi.id_promosi',$id);	

		if (isset($_POST['update'])) {
			$id_promosi = $this->input->post('id_promosi');

			$data_promosi = array(
				'id_alumni' => $this->input->post('id_alumni'),
				'tgl_mulai' => $this->input->post('tgl_mulai'),
				'tgl_akhir' => $this->input->post('tgl_akhir'),
				'status_promosi' => 'Y'
			);

			$query = $this->App_model->edit_data('tb_promosi','id_promosi',$id_promosi,$data_promosi);

			if ($query) {
				$this->session->set_flashdata('updateDataSukses', 'Sukses Mengupdate Data');
				redirect(base_url().'administrator/promosi?lembaga='.$this->session->userdata('nama_lembaga'));
			}
		} else {
			$this->load->view('administrator/Header');
			$this->load->view('administrator/TopHeader');
			$this->load->view('administrator/SideBar');
			$this->load->view('administrator/mod_promosi/Edit', $data);
			$this->load->view('administrator/Footer');
		}
	}

	public function hapus_promosi($id)
	{
		$query = $this->App_model->hapus_data('tb_promosi','id_promosi',$id);
		if ($query) {
			$this->session->set_flashdata('hapusDataSukses', 'Sukses Memperbarui Data');
			redirect(base_url().'administrator/promosi?lembaga='.$this->session->userdata('nama_lembaga'));
		}
	}

	public function nonaktif_promosi($id)
	{
		$query = $this->db->query("UPDATE tb_promosi SET status_promosi = 'N' WHERE id_promosi = '".$id."' ");
		if ($query) {
			redirect(base_url().'administrator/promosi?lembaga='.$this->session->userdata('nama_lembaga'));
		}
	}

	public function aktifkan_promosi($id)
	{
		$query = $this->db->query("UPDATE tb_promosi SET status_promosi = 'Y' WHERE id_promosi = '".$id."'");
		if ($query) {
			redirect(base_url().'administrator/promosi?lembaga='.$this->session->userdata('nama_lembaga'));
		}
	}

	public function reset_password()
	{
		$id_alumni = $this->input->post('id_alumni');
		$pwd = md5($this->input->post('password'));
		$query = $this->db->query("UPDATE tb_alumni SET password = '$pwd' WHERE id_alumni = '".$id_alumni."'");
		if ($query) {
			$this->session->set_flashdata('resetPassword', 'Sukses Mereset Password');
			redirect(base_url().'administrator/alumni?lembaga='.$this->session->userdata('nama_lembaga'));
		}
	}

	public function error()
	{
		$data['heading'] = "404 ERROR";
		$data['message'] = "Anda Tidak Memiliki Akses Pada Halaman Ini";
		$this->load->view('errors/html/error_404', $data);
	}

}
?>