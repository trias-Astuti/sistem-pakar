<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->Model('M_auth');
	}
	public function index()
	{
		$this->load->view('register.php');
	}
	public function registerUser()
	{
		$nama_lengkap = $this->input->post('nama_lengkap');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
			$data = array(
				'nama_lengkap'      => $nama_lengkap,
				'email'         => $email,
				'password'      => password_hash($password, PASSWORD_DEFAULT),
				'username'       => $username
			);
			$this->M_auth->created($data);
			$this->session->set_flashdata('success', 'Register berhasil, silahkan login !');
			redirect('user/login', 'refresh');
		}
	}
