<?php
class Kontak extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_kontak');
	}
    function index(){ 
		$this->load->view('user/kontak');
	}

	function kirim_pesan(){
		$nama=htmlspecialchars($this->input->post('xnama',TRUE),ENT_QUOTES);
		$email=htmlspecialchars($this->input->post('xemail',TRUE),ENT_QUOTES);
		$subject=htmlspecialchars($this->input->post('xsubject',TRUE),ENT_QUOTES);
		$pesan=htmlspecialchars($this->input->post('xmessage',TRUE),ENT_QUOTES);
		$this->m_kontak->kirim_pesan($nama,$email,$subject,$pesan);
		echo $this->session->set_flashdata('msg','success');
		
		redirect('kontak');
	}
}