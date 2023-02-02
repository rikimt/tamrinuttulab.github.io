<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_prestasi');
	}
    function index(){ 
		$x['data']=$this->m_prestasi->get_all_prestasi();
		$this->load->view('user/home',$x);
	}
}