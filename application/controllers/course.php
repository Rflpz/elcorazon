<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Controller {
	public function index(){
		$this->load->view('/course_information/index.php');
	}
	public function es(){
		$this->load->view('/course_information/index_es.php');
	}
	public function fr(){
		$this->load->view('/course_information/index_fr.php');
	}
}
