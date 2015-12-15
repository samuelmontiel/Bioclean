<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('');
		$this->load->library('');
		$this->load->database();
		$this->load->helper(array('download', 'file', 'url', 'html', 'form'));
		$this->load->library('session');
		$this->load->library('email');
				//$this->load->library('html2pdf');
	}

	 public function index()
	 {		
	 	$this->load->view('templateinfo');
	 }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */