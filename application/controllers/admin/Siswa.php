<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function index()
	{
		$this->load->model('m_pendaftar');
		$data['data'] = $this->m_pendaftar->get_all_pendaftaran();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-data-pendaftaran.pdf";
		$this->pdf->load_view('user/laporan', $data);
	}
}