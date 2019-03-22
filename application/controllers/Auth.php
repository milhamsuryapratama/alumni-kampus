<?php 
/**
 * 
 */
class Auth extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function register() 
	{
		$this->load->view('administrator/register');
	}

	public function login() 
	{
		$data['lembaga'] = $this->App_model->ambil_data('tb_lembaga_alumni', 'id_lembaga_alumni');
		$this->load->view('administrator/login', $data);
	}

	public function adminRegister()
	{
		if (isset($_POST['register_button'])) {
			$data = array(
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password'))
			);

			$query = $this->App_model->tambah_data("admin", $data);

			if ($query) {
				redirect(base_url()."auth/login");
			}
		}
	}

	public function adminLogin()
	{
		if (isset($_POST['login_button'])) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$lembaga = $this->input->post('lembaga');

			$where = array(
	            'user' => $username,
	            'password' => $password
        	);

        	$cek = $this->db->query("SELECT * FROM tb_petugas WHERE user = '$username' AND password = '$password' AND id_lembaga_alumni = '$lembaga' ")->row_array();

        	if (count($cek) > 0) {
        		$sessionAdmin = array(
        			'id_petugas' => $cek['id_lembaga_alumni'],
        			'username' => $username,
        			'status' => 'loginSukses'
        		);
        		$this->session->set_userdata($sessionAdmin);
        		redirect(base_url()."administrator/dashboard");
        	} else {
        		$this->session->set_flashdata('loginError', 'Periksa Kembali Login Anda');
        		redirect(base_url().'auth/login');
        	}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
        redirect(base_url().'auth/login');
	}
}
 ?>