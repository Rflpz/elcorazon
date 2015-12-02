<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
	public function index(){
		$this->load->view('/register/index.php');
	}
	public function es(){
		$this->load->view('/register/index_es.php');
	}
	public function fr(){
		$this->load->view('/register/index_fr.php');
	}
}
