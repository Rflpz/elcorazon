<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Controller {
	public function index(){
		$this->load->view('/course_information/index.php');
	}
}
