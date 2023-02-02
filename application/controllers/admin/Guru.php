<?php
class Guru extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_guru');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_guru->get_all_guru();
		$this->load->view('admin/v_guru',$x);
	}
	
	function simpan_guru(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 600;
	                        $config['height']= 600;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $photo=$gbr['file_name'];
							$nama_guru=strip_tags($this->input->post('xnama'));
							$keterangan=strip_tags(addslashes($this->input->post('xketerangan')));
							$tingkat=strip_tags($this->input->post('xtingkat'));
							// $kode=$this->session->userdata('idadmin');
							// $user=$this->m_pengguna->get_pengguna_login($kode);
							// $p=$user->row_array();
							// $user_id=$p['pengguna_id'];
							// $user_nama=$p['pengguna_nama'];
							$this->m_guru->simpan_guru($nama_guru,$keterangan,$photo,$tingkat);
					
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/guru');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/guru');
	                }
	                 
					}else{
							// $jabatan=strip_tags($this->input->post('xjabatan'));
							$nama_guru=strip_tags($this->input->post('xnama'));
							$keterangan=strip_tags(addslashes($this->input->post('xketerangan')));
							$tingkat=strip_tags($this->input->post('xtingkat'));
							$this->m_guru->simpan_guru_tanpa_img($nama_guru,$keterangan,$tingkat);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/guru');
					}
					
		}
	
	function update_guru(){
				
	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 600;
	                        $config['height']= 600;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

							$photo=$gbr['file_name'];
							$guru_id=$this->input->post('kode');
							$nama_guru=strip_tags($this->input->post('xnama'));
							$tingkat=strip_tags($this->input->post('xtingkat'));
							$keterangan=strip_tags(addslashes($this->input->post('xketerangan')));
							// $path='./assets/images/'.$gambar;
							// unlink($path);
							// $kode=$this->session->userdata('idadmin');
							// $user=$this->m_pengguna->get_pengguna_login($kode);
							// $p=$user->row_array();
							// $user_id=$p['pengguna_id'];
							// $user_nama=$p['pengguna_nama'];
							$this->m_guru->update_guru($guru_id,$nama_guru,$keterangan,$photo,$tingkat);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/guru');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/guru');
	                }
	                
					}else{
							$guru_id=$this->input->post('kode');
							$nama_guru=strip_tags($this->input->post('xnama'));
							$tingkat=strip_tags($this->input->post('xtingkat'));
							$keterangan=strip_tags(addslashes($this->input->post('xketerangan')));
							// $kode=$this->session->userdata('idadmin');
							// $user=$this->m_pengguna->get_pengguna_login($kode);
							// $p=$user->row_array();
							// $user_id=$p['pengguna_id'];
							// $user_nama=$p['pengguna_nama'];
							$this->m_guru->update_guru_tanpa_img($guru_id,$nama_guru,$keterangan,$tingkat);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/guru');
					} 

	}

	function hapus_guru(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_guru->hapus_guru($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/guru');
	}

}