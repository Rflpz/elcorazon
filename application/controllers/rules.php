<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rules extends CI_Controller {
	public function index(){
		$this->load->view('/rules/index.php');
	}
	public function es(){
		$this->load->view('/rules/index_es.php');
	}
	public function fr(){
		$this->load->view('/rules/index_fr.php');
	}
}
