<?php
class M_pendaftar extends CI_Model{

	function get_no_peserta(){
        $q = $this->db->query("SELECT MAX(RIGHT(no_peserta,4)) AS kd_max FROM tbl_pendaftaran WHERE DATE(tanggal_daftar)=CURDATE()");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('dmy').$kd;
    }

	function create_no_peserta()
    {
        $this->db->select('RIGHT(tbl_pendaftaran.no_peserta,5) as kode', FALSE);
        $this->db->order_by('no_peserta', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tbl_pendaftaran');   
        if ($query->num_rows() <> 0) {

            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 5, "0", STR_PAD_LEFT);
        $kodejadi = "PS23" . $kodemax;
        return $kodejadi;
    }

	function simpan($no_peserta,$nisn,$nama_peserta,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$warga_negara,$alamat_rumah,$rt,$rw,$kode_pos,$kelurahan,$kecamatan,$kabupaten,$provinsi,$berat_badan,$tinggi_badan,$asal_sekolah,$sekolah_tujuan){
		$hsl=$this->db->query("INSERT INTO tbl_pendaftaran(no_peserta,nisn,nama_peserta,tempat_lahir,tanggal_lahir,jenis_kelamin,warga_negara,alamat_rumah,rt,rw,kode_pos,kelurahan,kecamatan,kabupaten,provinsi,berat_badan,tinggi_badan,asal_sekolah,sekolah_tujuan) VALUES ('$no_peserta','$nisn','$nama_peserta','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$warga_negara','$alamat_rumah','$rt','$rw','$kode_pos','$kelurahan','$kecamatan','$kabupaten','$provinsi','$berat_badan','$tinggi_badan','$asal_sekolah','$sekolah_tujuan')");
		return $hsl;
	}

	function get_all_pendaftaran(){
		$hsl=$this->db->query("SELECT tbl_pendaftaran.*,DATE_FORMAT(tanggal_daftar,'%d %M %Y') AS tanggal FROM tbl_pendaftaran ORDER BY id_peserta DESC");
		return $hsl;
	}

	function get_pendaftar_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_pendaftaran.*,DATE_FORMAT(tanggal_daftar,'%d/%m/%Y') AS tanggal FROM tbl_pendaftaran where id_peserta='$kode'");
		return $hsl;
	}

    function get_pendaftar_by_no($kode){
        $hsl=$this->db->query("SELECT * FROM tbl_pendaftaran where no_peserta='$kode'");
		return $hsl;
    }

	function getData()
	{
		$data_siswa = $this->db->get('tbl_pendaftaran');
		return $data_siswa->result();
	}

	function hapus_data($id_peserta){
		$hsl=$this->db->query("DELETE FROM tbl_pendaftaran WHERE id_peserta='$id_peserta'");
		return $hsl;
	}

	function update_data($id_peserta,$nisn,$nama_peserta,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$warga_negara,$alamat_rumah,$rt,$rw,$kode_pos,$kelurahan,$kecamatan,$kabupaten,$provinsi,$berat_badan,$tinggi_badan,$asal_sekolah,$sekolah_tujuan){
		$hsl=$this->db->query("UPDATE tbl_pendaftaran SET nisn='$nisn',nama_peserta='$nama_peserta',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',warga_negara='$warga_negara',alamat_rumah='$alamat_rumah',rt='$rt',rw='$rw',kode_pos='$kode_pos',kelurahan='$kelurahan',kecamatan='$kecamatan',kabupaten='$kabupaten',provinsi='$provinsi',berat_badan='$berat_badan',tinggi_badan='$tinggi_badan',asal_sekolah='$asal_sekolah',sekolah_tujuan='$sekolah_tujuan' WHERE id_peserta='$id_peserta'");
		return $hsl;
	}

}