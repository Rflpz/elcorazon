<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {
	public function __construct(){
			parent::__construct();
			$this->load->library(array('session'));
			$this->load->helper(array('form', 'html', 'url'));
		}
	public function index(){
		$this->load->view('header.php');
		$this->load->view('/gallery/index.php');
	}
	public function es(){
		$this->load->view('header.php');
		$this->load->view('/gallery/index_es.php');
	}
	public function fr(){
		$this->load->view('/gallery/index_fr.php');
	}
}
