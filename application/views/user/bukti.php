
<table  border="0" cellpadding="10" cellspacing="0" width="100%">

	<?php 
	$c=$data->row_array();
	 $id_peserta=$c['id_peserta'];
	 $no_peserta=$c['no_peserta'];
	 $nisn=$c['nisn'];
	 $nama_peserta=$c['nama_peserta'];
	 $tanggal_daftar=$c['tanggal_daftar'];
	 $tempat_lahir=$c['tempat_lahir']; 
	 $tanggal_lahir=$c['tanggal_lahir']; 
	 $jenis_kelamin=$c['jenis_kelamin']; 
	 $warga_negara=$c['warga_negara']; 
	 $alamat_rumah=$c['alamat_rumah']; 
	 $rt=$c['rt']; 
	 $rw=$c['rw']; 
	 $kode_pos=$c['kode_pos']; 
	 $kelurahan=$c['kelurahan']; 
	 $kecamatan=$c['kecamatan']; 
	 $kabupaten=$c['kabupaten']; 
	 $provinsi=$c['provinsi']; 
	 $berat_badan=$c['berat_badan']; 
	 $tinggi_badan=$c['tinggi_badan']; 
	 $asal_sekolah=$c['asal_sekolah']; 
	 $sekolah_tujuan=$c['sekolah_tujuan'];
  ?>
	<tr>
		<td colspan="2">
			<h1><center>Bukti Pendaftaran</center></h1>
			<p><center><b>Yayasan Tamrinuttulab</b></center></p>
			<center><p style="font-size: 11px;">Kp, Jl. Golempang, RT.06/RW.06, Sukamenak, Kec. Purbaratu, Kab. Tasikmalaya, Jawa Barat 46196</p></center>
		</td>
	</tr>
	<tr>
		<td colspan="2"><hr/></td>
	</tr>
  	<tr>
		<td style="font-weight:bold;" width="20%">No Peserta</td>
		<td style="font-weight:bold;" width="80%">: <?= $no_peserta;?></td>
	</tr>
  	<tr>
		<td>NISN</td>
		<td>: <?= $nisn;?></td>
	</tr>
  	<tr>
		<td>Nama</td>
		<td>: <?= $nama_peserta;?></td>
	</tr>
  	<tr>
		<td>Tempat Lahir</td>
		<td>: <?= $tempat_lahir;?></td>
	</tr>
  	<tr>
		<td>Tanggal Lahir</td>
		<td>: <?= $tanggal_lahir;?></td>
	</tr>
  	<tr>
		<td>Jenis Kelamin</td>
		<td>: <?= $jenis_kelamin;?></td>
	</tr>
  	<tr>
		<td>Warga Negara</td>
		<td>: <?= $warga_negara;?></td>
	</tr>
  	<tr>
		<td>Alamat Rumah</td>
		<td>: <?= $alamat_rumah;?></td>
	</tr>
  	<tr>
		<td>RT</td>
		<td>: <?= $rt;?></td>
	</tr>
  	<tr>
		<td>RW</td>
		<td>: <?= $rw;?></td>
	</tr>
  	<tr>
		<td>Kode Pos</td>
		<td>: <?= $kode_pos;?></td>
	</tr>
  	<tr>
		<td>Kelurahan</td>
		<td>: <?= $kelurahan;?></td>
	</tr>
  	<tr>
		<td>Kecamatan</td>
		<td>: <?= $kecamatan;?></td>
	</tr>
  	<tr>
		<td>Kota</td>
		<td>: <?= $kabupaten;?></td>
	</tr>
  	<tr>
		<td>Provinsi</td>
		<td>: <?= $provinsi;?></td>
	</tr>
  	<tr>
		<td>Berat Badan</td>
		<td>: <?= $berat_badan;?></td>
	</tr>
  	<tr>
		<td>tinggi Badan</td>
		<td>: <?= $tinggi_badan;?></td>
	</tr>
  	<tr>
		<td>Tingkat Sekolah</td>
		<td>: <?= $sekolah_tujuan;?></td>
	</tr>
  	<tr>
		<td>Nama Sekolah</td>
		<td>: <?= $asal_sekolah;?></td>
	</tr>
	<tr>
		<td colspan="2"></td>
	</tr>
	<tr>
		<td colspan="2"></td>
	</tr>
	<tr>
		<td colspan="2"></td>
	</tr>
	<tr>
		<td colspan="2"></td>
	</tr>

</table>