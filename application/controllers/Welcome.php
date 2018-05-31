<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function login()
	{
		$this->load->view('login');
	}
	function ceklogin(){
		if(isset($_POST['login'])){
			$user = $this->input->post('user',true);
			$pass = $this->input->post('pass',true);
			$cek = $this->m_login->proseslogin($user, $pass);
			$hasil = count($cek);
			if($hasil > 0){
				$yglogin = $this->db->get_where('users',array('username'=>$user, 'password' => $pass))->row();
				$data = array('udhmasuk' => true,
						'nama' => $yglogin->nama, 'email' => $yglogin->email, 'username' => $yglogin->username);
				$this->session->set_userdata($data);
				if($yglogin->level == 'admin'){
					redirect('beranda');
				}elseif($yglogin->level =='pasien'){
				redirect('pasien');
				}
			}else{
				redirect('index');
			}
		}
	}
	function beranda(){
		$data["title"] = "Dashboard";
		$this->load->view('template/layout', $data);
	}
	function pasien(){
		$data["title"] = "Halaman pasien";
		$this->load->view('pasien', $data);
	}
	function keluar(){
		$this->session->sess_destroy();
		redirect('login');
	}
	function home(){
		$this->load->view('home');
	}
}
