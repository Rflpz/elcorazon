<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tee_time extends CI_Controller {
	public function index(){
		$this->load->view('/tee_time/index.php');
	}
}