<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index(){
		$this->load->view('/contact/index.php');
	}
	public function es(){
		$this->load->view('/contact/index_es.php');
	}
	public function fr(){
		$this->load->view('/contact/index_fr.php');
	}
}
