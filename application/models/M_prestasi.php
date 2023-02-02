<?php
class M_prestasi extends CI_Model{

function get_all_prestasi(){
		$hsl=$this->db->query("SELECT tbl_prestasi.*,DATE_FORMAT(prestasi_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_prestasi  ORDER BY prestasi_id DESC");
		return $hsl;
	}
	
	function simpan_prestasi($prestasi_nama,$keterangan,$prestasi_gambar){
		$hsl=$this->db->query("INSERT INTO tbl_prestasi (prestasi_nama,keterangan,prestasi_gambar) VALUES ('$prestasi_nama','$keterangan','$prestasi_gambar')");
		return $hsl;
	}
	function simpan_prestasi_tanpa_img($prestasi_nama,$keterangan){
		$hsl=$this->db->query("INSERT INTO tbl_prestasi (prestasi_nama,keterangan) VALUES ('$prestasi_nama','$keterangan')");
		return $hsl;
	}
	
	function update_prestasi($prestasi_id,$prestasi_nama,$keterangan,$prestasi_gambar){
		$hsl=$this->db->query("update tbl_prestasi set prestasi_nama='$prestasi_nama',keterangan='$keterangan',prestasi_gambar='$prestasi_gambar' where prestasi_id='$prestasi_id'");
		return $hsl;
	}
	function update_prestasi_tanpa_img($prestasi_id,$prestasi_nama,$keterangan,$user_id,$user_nama){
		$hsl=$this->db->query("update tbl_prestasi set prestasi_nama='$prestasi_nama',keterangan='$keterangan' where prestasi_id='$prestasi_id'");
		return $hsl;
	}
	function hapus_prestasi($kode){
		$hsl=$this->db->query("DELETE FROM tbl_prestasi where prestasi_id='$kode'");
		return $hsl;
	}

	//Front-End
	
	function prestasi(){
		$hsl=$this->db->query("SELECT * FROM tbl_prestasi");
		return $hsl;
	}

}