<?php 

	class E_ktp extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model(array('M_penduduk')); 
		}
		public function index()
		{
			//$data['Mahasiswa']=$this->M_mahasiswa->tampil_data()->result();

			$this->load->view('Tamplates/Header');
			$this->load->view('Tamplates/Sidebar');
			$this->load->view('penduduk/ktp');
			$this->load->view('Tamplates/Footer');


		}
	
		public function tambah_ktp()
		{
	
			$nama		= $this->input->post('nama');
			$no			= $this->input->post('no');
		
			$fckk		= $_FILES['fckk']['name'];
			$foto		= $_FILES['foto']['name'];
	
	
			if($gambar =''){}else{
				$config ['upload_path'] = './spd/';
				$config ['allowed_types'] = 'pdf|doc|docx|jpg|png|jepeg';
	
				$this->load->library('upload', $config);
	
				if(!$this->upload->do_upload('fckk')){
					echo "Gambar Gagal diUpload";
				}else{
					$gambar=$this->upload->data('file_name');
				}
			};
			if($gambar =''){}else{
				$config ['upload_path'] = './spd/';
				$config ['allowed_types'] = 'pdf|doc|docx|jpg|png|jepeg';
	
				$this->load->library('upload', $config);
	
				if(!$this->upload->do_upload('foto')){
					echo "Gambar Gagal diUpload";
				}else{
					$gambar=$this->upload->data('file_name');
				}
			}
			$data = array(
				'nama' 		=>$nama,
				'no'		=> $no,
	
				'fckk'		=> $fckk,
				'foto'		=> $foto
			);
	
			$this->M_penduduk->tambah_ktp($data, 'tbl_ktp');
			$this->session->set_flashdata('sukses','Data KK berhasil di tambahkan<br>Terimakasih');
			redirect('e_ktp');
		}


    
	}
 ?>
