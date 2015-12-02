<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index(){
		$this->load->view('index.php');
	}
	public function es(){
		$this->load->view('index_es.php');
	}
	public function fr(){
		$this->load->view('index_fr.php');
	}
}
