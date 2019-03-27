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

	public function login_mobile(){
// post : android
// get : web
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		

		$cek = $this->db->query("SELECT * FROM tb_alumni WHERE username = '$username' AND password = '$password' ")->row_array();
		$data["Hasil"] = array();		

		if (count($cek) > 0) {
			
			$cek1 = $this->db->query("SELECT id_alumni, status FROM tb_korcam WHERE id_alumni = '".$cek['id_alumni']."' ")->row_array();
			if (count($cek1) > 0) {
				array_push($data["Hasil"], $cek1);
				$data["success"] = 1;
				$data["status"] = "korcam";
				echo json_encode($data);
			} else {
				$cek1 = $this->db->query("SELECT id_alumni, status FROM tb_pengurus WHERE id_alumni = '".$cek['id_alumni']."' ")->row_array();
				if (count($cek1) > 0) {
					array_push($data["Hasil"], $cek1);
					$data["success"] = 1;
					$data["status"] = "pengurus";
					echo json_encode($data);
				} else {
					$cek["status"] = "alumni";
					array_push($data["Hasil"], $cek);
					$dat["status"] = "alumni";					
					$data["success"] = 1;
					$data["status"] = "alumni";
					echo json_encode($data);
				}
			}
		} else {
			$data["error"] = 0;
			$data["status"] = "gagal";
			$dat["status"] = "gagal";
			array_push($data["Hasil"], $dat);
			echo json_encode($data);
		}

		// $username = 'alumni';//$this->input->get('username');
		// $password = '12345';//$this->input->get('password');

		// $data['Hasil'] = $this->db->query("SELECT * FROM tb_korcam join tb_alumni on tb_alumni.id_alumni = tb_korcam.id_alumni WHERE username = '$username' AND password='$password' and tb_korcam.status = 'aktif'")->row_array();

		// if ($data["Hasil"] == null) {
		// 	$data['Hasil'] = $this->db->query("SELECT * FROM tb_pengurus join tb_alumni on tb_alumni.id_alumni = tb_pengurus.id_alumni WHERE username = '$username' AND password='$password' and tb_pengurus.status = 'aktif' ")->row_array();
		// 	if($data["Hasil"] == null){
		// 		$data['Hasil'] = $this->db->query("SELECT * FROM tb_alumni WHERE username = '$username' AND password='$password' ")->result_array();
		// 		if($data["Hasil"] == null){
		// 			$data["success"] = 0;
		//     		$data["status"] = "gagal";
		//     		echo json_encode($data);		
		// 		}else{
		// 			$data["success"] = 1;
		//     		$data["status"] = "alumni";
		//     		echo json_encode($data);	
		// 		}
		// 	}else{
		// 		$data["success"] = 1;
	 //    		$data["status"] = "pengurus";
	 //    		echo json_encode($data);	
		// 	}    		
  //   	} else {
  //   		$data["success"] = 1;
  //   		$data["status"] = "korcam";
  //   		echo json_encode($data);
  //   	}		
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
				redirect(base_url()."auth/Login");
			}
		}
	}

	public function adminLogin()
	{
		if (isset($_POST['login_button'])) {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$lembaga = $this->input->post('lembaga');

			$where = array(
	            'user' => $username,
	            'password' => $password
        	);

        	$cek = $this->db->query("SELECT * FROM tb_alumni WHERE username = '$username' AND password = '$password' ")->row_array();

        	if (count($cek) > 0) {
        		$cek2 = $this->db->query("SELECT * FROM tb_struktur WHERE id_alumni = '".$cek['id_alumni']."' AND id_lembaga_alumni = '".$lembaga."' ")->row_array();
        		if (count($cek2) > 0) {
        			$cek3 = $this->db->query("SELECT nama_lembaga FROM tb_lembaga_alumni WHERE id_lembaga_alumni = '".$cek2['id_lembaga_alumni']."' ")->row_array();
        			$sessionAdmin = array(
	        			'id_petugas' => $lembaga,
	        			'username' => $cek3['nama_lembaga'],
	        			'user' => $cek['id_alumni'],
	        			'status' => 'loginSukses'
	        		);
	        		$this->session->set_userdata($sessionAdmin);
	        		redirect(base_url()."administrator/dashboard");
        		} else {
        			$this->session->set_flashdata('loginError', 'Anda Bukan Pengurus');
        			redirect(base_url().'auth/login');
        		}
        	} else {
        		$this->session->set_flashdata('loginError', 'Periksa Kembali Login Anda');
        		redirect(base_url().'auth/login');
        	}

        	// $cek = $this->db->query("SELECT * FROM tb_petugas WHERE user = '$username' AND password = '$password' AND id_lembaga_alumni = '$lembaga' ")->row_array();

        	// if (count($cek) > 0) {
        	// 	$sessionAdmin = array(
        	// 		'id_petugas' => $cek['id_lembaga_alumni'],
        	// 		'username' => $username,
        	// 		'status' => 'loginSukses'
        	// 	);
        	// 	$this->session->set_userdata($sessionAdmin);
        	// 	redirect(base_url()."administrator/dashboard");
        	// } else {
        	// 	$this->session->set_flashdata('loginError', 'Periksa Kembali Login Anda');
        	// 	redirect(base_url().'auth/login');
        	// }
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
        redirect(base_url().'auth/login');
	}

	public function hash()
	{
		echo md5('yoyo');
	}
}
 ?>