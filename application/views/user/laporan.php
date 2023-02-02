
<table  border="0" cellpadding="10" cellspacing="0" width="100%">

	<?php 
	$no = 1;
	$no=0;
	foreach ($data->result_array() as $i) :
	   $no++;
	 $id_peserta=$i['id_peserta'];
	 $no_peserta=$i['no_peserta'];
	 $nisn=$i['nisn'];
	 $nama_peserta=$i['nama_peserta'];
	 $tanggal_daftar=$i['tanggal_daftar'];
	 $tempat_lahir=$i['tempat_lahir']; 
	 $tanggal_lahir=$i['tanggal_lahir']; 
	 $jenis_kelamin=$i['jenis_kelamin']; 
	 $warga_negara=$i['warga_negara']; 
	 $alamat_rumah=$i['alamat_rumah']; 
	 $rt=$i['rt']; 
	 $rw=$i['rw']; 
	 $kode_pos=$i['kode_pos']; 
	 $kelurahan=$i['kelurahan']; 
	 $kecamatan=$i['kecamatan']; 
	 $kabupaten=$i['kabupaten']; 
	 $provinsi=$i['provinsi']; 
	 $berat_badan=$i['berat_badan']; 
	 $tinggi_badan=$i['tinggi_badan']; 
	 $asal_sekolah=$i['asal_sekolah']; 
	 $sekolah_tujuan=$i['sekolah_tujuan'];
  ?>
	<tr>
		<td colspan="2">
			<h1><center>Data Pendaftaran</center></h1>
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
		<?php
	endforeach;
	?>
</table>