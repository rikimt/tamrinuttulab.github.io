<?php
class Data extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_pendaftar');
	}

	function index(){
		$x['data']=$this->m_pendaftar->get_all_pendaftaran();
		$this->load->view('admin/v_daftar',$x);
	}
    function update_daftar(){
        $id_peserta=$this->input->post('xkode');
        $nisn=strip_tags($this->input->post('xnisn'));
        $nama_peserta=strip_tags($this->input->post('xnamaPeserta'));
        $tempat_lahir=strip_tags($this->input->post('xtempatLahir'));
        $tanggal_lahir=strip_tags($this->input->post('xtanggalLahir'));
        $jenis_kelamin=strip_tags($this->input->post('xjenisKelamin'));
        $warga_negara=strip_tags($this->input->post('xwargaNegara'));
        $alamat_rumah=strip_tags($this->input->post('xalamatRumah'));
        $rt=strip_tags($this->input->post('xrt'));
        $rw=strip_tags($this->input->post('xrw'));
        $kode_pos=strip_tags($this->input->post('xkodePos'));
        $kelurahan=strip_tags($this->input->post('xkelurahan'));
        $kecamatan=strip_tags($this->input->post('xkecamatan'));
        $kabupaten=strip_tags($this->input->post('xkabupaten'));
        $provinsi=strip_tags($this->input->post('xprovinsi'));
        $berat_badan=strip_tags($this->input->post('xberatBadan'));
        $tinggi_badan=strip_tags($this->input->post('xtinggiBadan'));
        $asal_sekolah=strip_tags($this->input->post('xasalSekolah'));
		$sekolah_tujuan=strip_tags($this->input->post('xsekolahTujuan'));
		$this->m_pendaftar->update_data($id_peserta,$nisn,$nama_peserta,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$warga_negara,$alamat_rumah,$rt,$rw,$kode_pos,$kelurahan,$kecamatan,$kabupaten,$provinsi,$berat_badan,$tinggi_badan,$asal_sekolah,$sekolah_tujuan);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/data');      
    }


	function hapus_daftar(){
		$id_peserta=$this->input->post('xkode');
		$this->m_pendaftar->hapus_data($id_peserta);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/Data');
	}
}