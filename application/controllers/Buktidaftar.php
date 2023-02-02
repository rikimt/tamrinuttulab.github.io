<?php
class Buktidaftar extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_pendaftar');
	}
    function index(){ 
		$x['daftar']=$this->M_pendaftar->get_all_pendaftaran();
		$this->load->view('user/v_bukti',$x);

	}
    function cetak(){
        $kode=strip_tags($this->input->post('xnoPeserta'));
        $data['data'] = $this->M_pendaftar->get_pendaftar_by_no($kode);
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "bukti-pendaftaran.pdf";
		$this->pdf->load_view('user/bukti', $data);
    }
}