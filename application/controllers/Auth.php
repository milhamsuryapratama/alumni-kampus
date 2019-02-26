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
		$this->load->view('administrator/login');
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

			$where = array(
	            'username' => $username,
	            'password' => $password
        	);

        	$cek = $this->App_model->login_proses("admin", $where)->num_rows();

        	if ($cek > 0) {
        		$sessionAdmin = array(
        			'username' => $username,
        			'status' => 'loginSukses'
        		);
        		$this->session->set_userdata($sessionAdmin);
        		redirect(base_url()."administrator/dashboard");
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