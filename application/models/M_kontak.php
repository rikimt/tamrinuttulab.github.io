<?php
class M_kontak extends CI_Model{

	function kirim_pesan($nama,$email,$subject,$pesan){
		$hsl=$this->db->query("INSERT INTO tbl_inbox(inbox_nama,inbox_email,inbox_subject,inbox_pesan) VALUES ('$nama','$email','$subject','$pesan')");
		return $hsl;
	}

	function get_all_inbox(){
		$hsl=$this->db->query("SELECT tbl_inbox.*,DATE_FORMAT(inbox_tanggal,'%d %M %Y') AS tanggal FROM tbl_inbox ORDER BY inbox_id DESC");
		return $hsl;
	}

	function hapus_kontak($kode){
		$hsl=$this->db->query("DELETE FROM tbl_inbox WHERE inbox_id='$kode'");
		return $hsl;
	}
}