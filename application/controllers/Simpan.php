<?php 
class Simpan extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	public function alumni(){
		
		 $no_ktp = $this->input->post('no_ktp');
   		 $nama = $this->input->post('nama');
   		 $id_kecamatan =$this->input->post('kecamatan');
   		 $id_desa = $this->input->post('desa');
   		 $alamat = $this->input->post('alamat');
   		 $telepon = $this->input->post('telepon');
   		 $thn_mondok =$this->input->post('thn_mondok');
   		 $thn_keluar = $this->input->post('thn_keluar');
   		 $pekerjaan = $this->input->post('pekerjaan');
   		 $bidang_usaha = $this->input->post('bidang_usaha');
   		 $akun_fb = $this->input->post('akun_fb');
   		 $email  = $this->input->post('email');
   		 $username =$this->input->post('username');
		 $password = $this->input->post('password');
		 $foto = $this->input->post('foto');
		 // $status = 'aktif';
		 

		$data['Hasil'] = $this->db->query("INSERT INTO tb_alumni (no_ktp,nama,id_kecamatan,id_desa,alamat,telepon,thn_mondok,thn_keluar,pekerjaan,bidang_usaha,akun_fb,email,username,password,foto) VALUES ('$no_ktp','$nama','$id_kecamatan','$id_desa','$alamat','$telepon','$thn_mondok','$thn_keluar','$pekerjaan','$bidang_usaha','$akun_fb','$email','$username','$password','$foto')");

		$data['success'] = 1;

		echo json_encode($data);
	
	}

	public function edit_alumni(){
		 $id_alumni =  $this->input->post('id_alumni');

		 $no_ktp = $this->input->post('no_ktp');
   		 $nama = $this->input->post('nama');
   		 $id_kecamatan =$this->input->post('kecamatan');
   		 $id_desa = $this->input->post('desa');
   		 $alamat = $this->input->post('alamat');
   		 $telepon = $this->input->post('telepon');
   		 $thn_mondok = $this->input->post('thn_mondok');
   		 $thn_keluar = $this->input->post('thn_keluar');
   		 $pekerjaan = $this->input->post('pekerjaan');
   		 $bidang_usaha =$this->input->post('bidang_usaha');
   		 $akun_fb = $this->input->post('akun_fb');
   		 $email  =$this->input->post('email');
   		 $username = $this->input->post('username');
		 $password =$this->input->post('password');
		 $foto = $this->input->post('foto');

		 	// $data['Hasil'] = $this->db->query("INSERT INTO tb_alumni (no_ktp,nama,id_kecamatan,id_desa,alamat,telepon,thn_mondok,thn_keluar,pekerjaan,bidang_usaha,akun_fb,email,username,password,foto) VALUES ('$no_ktp','$nama','$id_kecamatan','$id_desa','$alamat','$telepon','$thn_mondok','$thn_keluar','$pekerjaan','$bidang_usaha','$akun_fb','$email','$username','$password','$foto')");


		 	$data['Hasil'] = $this->db->query("UPDATE tb_alumni SET no_ktp = '$no_ktp',  nama = '$nama' ,  id_kecamatan='$id_kecamatan',id_desa='$id_desa', alamat='$alamat', telepon='$telepon', thn_mondok ='$thn_mondok', thn_keluar ='$thn_keluar', pekerjaan='$pekerjaan', bidang_usaha='$bidang_usaha',  akun_fb='$akun_fb', email='$email', username = '$username', password='$password', foto='$foto' WHERE id_alumni = '$id_alumni'");

		$data['success'] = 1;

		echo json_encode($data);
	
		
	}
}
	


 ?>