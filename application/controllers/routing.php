<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Routing extends CI_Controller {
	public function index(){
		$this->load->view('index.php');
	}
}
