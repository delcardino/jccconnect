<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vprof_controller extends CI_Controller {

	/**
	 *@author Taufik Anggara :: Circlethink Indonesia
     *Module Dashboard
	**/

	public function __construct()
	{
		parent::__construct();
		//Redirect ke halaman login
		//if ($this->session->userdata('logged_in') == FALSE){redirect('login');}
	}
    
	public function index()
	{

		$data = array(
				'header'     => 'template/header',
				'navbar'     => 'template/navbar',
				'content'    => 'vprof/vprof',
				'footer'     => 'template/footer',
				'script_mod' => 'vprof/script_mod',
			);
		$this->load->view('template/template',$data);
	}
}