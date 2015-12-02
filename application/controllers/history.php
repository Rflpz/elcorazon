<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class History extends CI_Controller {
	public function index(){
		$this->load->view('/history/index.php');
	}
	public function es(){
		$this->load->view('/history/index_es.php');
	}
	public function fr(){
		$this->load->view('/history/index_fr.php');
	}
}
