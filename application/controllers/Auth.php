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
		$username =$this->input->post('username');
		$password =md5($this->input->post('password'));
	
    	$cek = $this->db->query("SELECT * FROM tb_alumni WHERE username = '$username' AND password = '$password' ")->row_array();
		$data["Hasil"] = array();		

		if ($cek != null) {
			
			$cek1 = $this->db->query("SELECT id_alumni, status FROM tb_korcam WHERE id_alumni = '".$cek['id_alumni']."' ")->row_array();
			if ($cek1 != null) {
			    $cek["status"] = "korcam";
				array_push($data["Hasil"], $cek1);
				$data["success"] = 1;
		     	$data["status"] = "korcam";
				echo json_encode($data);
			
			} else {
				$cek1 = $this->db->query("SELECT id_alumni,  status FROM tb_struktur WHERE id_alumni = '".$cek['id_alumni']."' ")->row_array();
				
				if ($cek1 != null) {
				    $cek["status"] = "pengurus";
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
			$cekfks = $this->db->query("SELECT * FROM anggota_fks WHERE username = '$username' AND password = '$password' ")->row_array();
			
			if ($cekfks != null) {
			    
			    $cekfks_struktur = $this->db->query("SELECT * FROM tb_struktur WHERE nis = '".$cekfks['nis']."' ")->row_array();
			    
			    if ($cekfks_struktur != null) {
			        $cek["status"] = "pengurus";
    				array_push($data["Hasil"], $cek1);
    				$data["success"] = 1;
    		     	$data["status"] = "pengurus";
    				echo json_encode($data);
			    } else {
			        $data["error"] = 0;
    		        $data["status"] = "gagal";
    		        $dat["status"] = "gagal";
    		        array_push($data["Hasil"], $dat);
    			    echo json_encode($data);
			    }
			    
			} else {
			    $data["error"] = 0;
		        $data["status"] = "gagal";
		        $dat["status"] = "gagal";
		        array_push($data["Hasil"], $dat);
			    echo json_encode($data);
			}
		}	
	}

	public function register() 
	{
		$this->load->view('administrator/register');
	}

	public function login() 
	{
		$data['lembaga'] = $this->App_model->ambil_data('tb_lembaga_alumni', 'id_lembaga_alumni');
		$this->load->view('administrator/Login', $data);
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

        	$cekAsAdmin = $this->db->query("SELECT * FROM administrator WHERE username = '$username' AND password = '$password' ")->row_array();

        	if (count($cekAsAdmin) > 0) {
        		$sessionAdmin = array(
        			'loggedAs' => 'admin',
        			'id_lembaga' => '2',
	        		'nama_lembaga' => 'P4NJ',
        			'username' => $cekAsAdmin['username'],
        			'status' => 'loginSukses',
        			'user' => 'admin',
        			'nama' => 'admin'
        		);
        		$this->session->set_userdata($sessionAdmin);
        		redirect(base_url()."administrator/dashboard");
        	}

        	if ($lembaga === '1') {
        		$cekfks = $this->db->query("SELECT * FROM anggota_fks WHERE username = '$username' AND password = '$password' ")->row_array();

        		if (count($cekfks) > 0) {
        			$cekfks_struktur = $this->db->query("SELECT * FROM tb_struktur WHERE nis = '".$cekfks['nis']."' AND id_lembaga_alumni = '".$lembaga."' ")->row_array();
        			if (count($cekfks_struktur) > 0) {
        				$cek_nama_lembaga = $this->db->query("SELECT nama_lembaga FROM tb_lembaga_alumni WHERE id_lembaga_alumni = '".$cekfks_struktur['id_lembaga_alumni']."' ")->row_array();
        				$sessionAdmin = array(
        					'id_lembaga' => $lembaga,
        					'nama_lembaga' => $cek_nama_lembaga['nama_lembaga'],
        					'nis' => $cekfks['nis'],
        					'nama' => $cekfks['nama'],
        					'status' => 'loginSukses',
        					'user' => $cekfks['nis']
        				);
        				$this->session->set_userdata($sessionAdmin);
        				redirect(base_url()."administrator/dashboard");
        			}
        		} else {
        			$this->session->set_flashdata('loginError', 'Anda Bukan Pengurus');
        			redirect(base_url().'auth/login');
        		}
        	} else {
        		$cek = $this->db->query("SELECT * FROM tb_alumni WHERE username = '$username' AND password = '$password' ")->row_array();

        		if (count($cek) > 0) {
        			$cek2 = $this->db->query("SELECT * FROM tb_struktur WHERE id_alumni = '".$cek['id_alumni']."' AND id_lembaga_alumni = '".$lembaga."' ")->row_array();
        			if (count($cek2) > 0) {
        				$cek3 = $this->db->query("SELECT nama_lembaga FROM tb_lembaga_alumni WHERE id_lembaga_alumni = '".$cek2['id_lembaga_alumni']."' ")->row_array();
        				$sessionAdmin = array(
        					'id_lembaga' => $lembaga,
        					'nama_lembaga' => $cek3['nama_lembaga'],
        					'id_alumni' => $cek['id_alumni'],
        					'nama' => $cek['nama'],
        					'status' => 'loginSukses',
        					'user' => $cek['id_alumni']
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
		$data['k'] = $this->App_model->join_tiga_table('tb_korcam','tb_kecamatan','tb_alumni','tb_korcam.id_kecamatan = tb_kecamatan.id_kecamatan','tb_korcam.id_alumni = tb_alumni.id_alumni','tb_korcam.id_korcam','5');

		print_r($data);
	}
}
 ?>