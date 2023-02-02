<?php
class Guru extends CI_Controller{
	function __construct(){
		parent::__construct();
        $this->load->model('M_guru');
	}
    function index(){ 
        $x['data']=$this->M_guru->get_all_guru();
		$this->load->view('user/Guru',$x);
	}
}