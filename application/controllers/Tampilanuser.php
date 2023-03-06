<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampilanuser extends CI_Controller {

	public function index()
	{
		$this->load->view('tampilanuser.php');
	}
}
