<?php
class M_guru extends CI_Model{

function get_all_guru(){
		$hsl=$this->db->query("SELECT tbl_guru.*,DATE_FORMAT(guru_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_guru  ORDER BY id_guru ASC");
		return $hsl;
	}
	
	function simpan_guru($nama_guru,$keterangan,$photo,$tingkat){
		$hsl=$this->db->query("INSERT INTO tbl_guru (nama_guru,keterangan,photo,guru_tingkat) VALUES ('$nama_guru','$keterangan','$photo','$tingkat')");
		return $hsl;
	}
	function simpan_guru_tanpa_img($nama_guru,$keterangan,$tingkat){
		$hsl=$this->db->query("INSERT INTO tbl_guru (nama_guru,keterangan,guru_tingkat) VALUES ('$nama_guru','$keterangan','$tingkat')");
		return $hsl;
	}
	
	function update_guru($guru_id,$nama_guru,$keterangan,$photo,$tingkat){
		$hsl=$this->db->query("update tbl_guru set nama_guru='$nama_guru',keterangan='$keterangan',guru_tingkat='$tingkat',photo='$photo' where id_guru='$guru_id'");
		return $hsl;
	}
	function update_guru_tanpa_img($guru_id,$nama_guru,$keterangan,$tingkat,$user_id,$user_nama){
		$hsl=$this->db->query("update tbl_guru set nama_guru='$nama_guru',keterangan='$keterangan',guru_tingkat='$tingkat' where id_guru='$guru_id'");
		return $hsl;
	}
	function hapus_guru($kode,$tingkat){
		$hsl=$this->db->query("DELETE FROM tbl_guru where id_guru='$kode'");
		return $hsl;
	}

	//Front-End
	
	function guru(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru");
		return $hsl;
	}
	function guru_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_guru limit $offset,$limit");
		return $hsl;
	}
	function limit_guru(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru ORDER BY id_guru DESC limit 10");
		return $hsl;
	}

}