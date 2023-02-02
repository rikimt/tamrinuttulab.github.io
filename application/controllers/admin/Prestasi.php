<?php
class Prestasi extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_prestasi');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_prestasi->get_all_prestasi();
		$this->load->view('admin/v_prestasi',$x);
	}
	
	function simpan_prestasi(){
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
	                        // $config['width']= 300;
	                        // $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
							$prestasi_nama=strip_tags($this->input->post('xnama'));
							$keterangan=strip_tags($this->input->post('xketerangan'));
							// $kode=$this->session->userdata('idadmin');
							// $user=$this->m_pengguna->get_pengguna_login($kode);
							// $p=$user->row_array();
							// $user_id=$p['pengguna_id'];
							// $user_nama=$p['pengguna_nama'];
							$this->m_prestasi->simpan_prestasi($prestasi_nama,$keterangan,$gambar);
					
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/prestasi');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/prestasi');
	                }
	                 
					}else{
							$prestasi_nama=strip_tags($this->input->post('xnama'));
							$keterangan=strip_tags($this->input->post('xketerangan'));
							$this->m_prestasi->simpan_prestasi_tanpa_img($prestasi_nama,$keterangan);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/prestasi');
					}
					
		}
	
	function update_prestasi(){
				
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
	                        // $config['width']= 300;
	                        // $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

							$gambar=$gbr['file_name'];
							$prestasi_id=$this->input->post('kode');
							$prestasi_nama=strip_tags($this->input->post('xnama'));
							$keterangan=strip_tags($this->input->post('xketerangan'));
							// $path='./assets/images/'.$gambar;
							// unlink($path);
							// $kode=$this->session->userdata('idadmin');
							// $user=$this->m_pengguna->get_pengguna_login($kode);
							// $p=$user->row_array();
							// $user_id=$p['pengguna_id'];
							// $user_nama=$p['pengguna_nama'];
							$this->m_prestasi->update_prestasi($prestasi_id,$prestasi_nama,$keterangan,$gambar);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/prestasi');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/prestasi');
	                }
	                
					}else{
							$prestasi_id=$this->input->post('kode');
							$prestasi_nama=strip_tags($this->input->post('xnama'));
							$keterangan=strip_tags($this->input->post('xketerangan'));
							// $kode=$this->session->userdata('idadmin');
							// $user=$this->m_pengguna->get_pengguna_login($kode);
							// $p=$user->row_array();
							// $user_id=$p['pengguna_id'];
							// $user_nama=$p['pengguna_nama'];
							$this->m_prestasi->update_prestasi_tanpa_img($prestasi_id,$prestasi_nama,$keterangan);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/prestasi');
					} 

	}

	function hapus_prestasi(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_prestasi->hapus_prestasi($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/prestasi');
	}

}