<?php 

	class Anak extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model(array('M_penduduk')); 
		}
		public function index()
		{
			//$data['Mahasiswa']=$this->M_mahasiswa->tampil_data()->result();

			$this->load->view('Tamplates/Header');
			$this->load->view('Tamplates/Sidebar');
			$this->load->view('penduduk/kia');
			$this->load->view('Tamplates/Footer');


		}


  public function tambah_kia()
	{
	//	$nik			= $this->input->post('nik');
		$nama			= $this->input->post('nama');
		$no				= $this->input->post('no');
		$dusun			= $this->input->post('dusun');
		$id_rt			= $this->input->post('rt');
		$id_rw			= $this->input->post('rw');
		$akta			= $_FILES['akta']['name'];
		$ktpa		= $_FILES['ktpa']['name'];
		$ktpi		= $_FILES['ktpa']['name'];
		$gambar		= $_FILES['gambar']['name'];
	
		if($gambar =''){}else{
			$config ['upload_path'] = './kia/';
			$config ['allowed_types'] = 'pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('akta')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		};
		if($gambar =''){}else{
			$config ['upload_path'] = './kia/';
			$config ['allowed_types'] = 'pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('ktpa')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		if($gambar =''){}else{
			$config ['upload_path'] = './kia/';
			$config ['allowed_types'] = 'pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('ktpi')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		};
		if($gambar =''){}else{
			$config ['upload_path'] = './kia/';
			$config ['allowed_types'] = 'jpg|png|jepeg|pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('gambar')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		$data = array(
			'nama' 		=>$nama,
			//'nik'		=> $nik,
			'no' 		=>$no,
			'dusun'=> $dusun,
			'id_rw'	=> $id_rw,
			'id_rt'	=> $id_rt,
			'akta'		=> $akta,
			'ktpa'	=> $ktpa,
			'ktpi'	=> $ktpi,
			'gambar'	=> $gambar
			
		);

		$this->M_penduduk->tambah_kk($data, 'kia');
		$this->session->set_flashdata('sukses','Data KK berhasil di tambahkan<br>Terimakasih');
		redirect('kia');
	}

	}
