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
	 	$this->load->view('header');
	 	$this->load->view('slider');
	 	$this->load->view('footer');
	 }

	 	 public function empresa()
	 {		
	 	$this->load->view('header');
	 	$this->load->view('empresa');
	 	$this->load->view('footer');
	 }
	 	 public function sucursales()
	 {		
	 	$this->load->view('header');
	 	$this->load->view('sucursales');
	 	$this->load->view('footer');
	 }
	 	 public function contacto()
	 {		
	 	$this->load->view('header');
	 	$this->load->view('contacto');
	 	$this->load->view('footer');
	 }
	 	 public function productosHogar()
	 {		
	 	$this->load->view('header');
	 	$this->load->view('productosHogar');
	 	$this->load->view('footer');
	 }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */