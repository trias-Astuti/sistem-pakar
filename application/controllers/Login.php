<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Model_Login');
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

}