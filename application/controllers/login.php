<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){
		$this->load->view('/login/index.php');
	}
	public function es(){
		$this->load->view('/login/index_es.php');
	}
	public function fr(){
		$this->load->view('/login/index_fr.php');
	}
}
