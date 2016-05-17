<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public 	function __construct() {
		parent::__construct();
		//$this->load->library(array('session'));
		//$this->load->model(array('CI_auth', 'CI_menu'));
	}
	public function index(){
		//$data = array('menu_top' => $this->CI_menu->menu_top());
		$this->load->view('welcome_message');
		
	}
	public function home(){
		$this->load->view('welcome_message');
	}
	public function about(){
		$this->load->view('about_page');
	}
	public function signup(){
		$this->load->view('signupview');
	}
	

}
?>