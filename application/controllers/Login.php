<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Model_Login');
		$this->load->Model('M_auth');
	}

	function index(){
		$this->load->view('login.php');
	}
	function auth(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');


		$cadmin=$this->Model_Login->cekadmin($username,$password);
		if($cadmin->num_rows()>0){
			$xadmin=$cadmin->array();
				$newdata = array(
					'id_user'=>$xcadmin ['id_user'],
					'username'=>$xcadmin ['username'],
					'email'=>$xcadmin ['email'],
					'masuk' => TRUE
		
				);
				$this->session->set_userdata($newdata);
				redirect('Dashboard');
			}else{
				redirect('Login/gagallogin');
			}
	}
	function gagallogin(){
	$url=base_url('Login');
	echo $this->session->set_flashdata('pesan','username atau password anda salah !!!');
	redirect($url);

	}
	
	function logout(){
		$this->session->sess_distroy();
		$url=base_url('Login');
		redirect($url);
	}

	// login
	public function loginUser()
	{
		$email = $this->input->post('email', TRUE);
		$password = $this->input->post('password', TRUE);

		$userLogin = $this->M_auth->login($email);

		if (!empty($userLogin['email'])) {
			if (password_verify($password, $userLogin['password'])) {
				$userLogin = array(
					'id_user'   => $userLogin['id_user'],
					'nama_lengkap'      => $userLogin['nama_lengkap'],
					'email'     => $userLogin['email'],
					'username'     => $userLogin['username'],
					'is_login'  => TRUE
				);
				$this->session->set_userdata($userLogin);
				$this->session->set_flashdata('success', 'Login berhasil !');
				redirect('dashboard', 'refresh');
			} else {
				$this->session->set_flashdata('danger', 'Oppss... Password anda salah !');
				redirect('user/login', 'refresh');
			}
		} else {
			$this->session->set_flashdata('error', 'Oppss... Email anda tidak terdaftar atau salah !  !');
			redirect('user/login', 'refresh');
		}
    }
}