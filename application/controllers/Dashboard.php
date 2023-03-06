<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct()
	{
		parent:: __construct();
		if(!isset($_SESSION['masuk'])){
			$url=base_url('Login');
			redirect($url);
		}
	}
function index(){
	$this->load->view('admin/Dashboard');
}
}
