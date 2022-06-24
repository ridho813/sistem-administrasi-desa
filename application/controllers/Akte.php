<?php 

	class Akte extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model(array('M_penduduk')); 
		}
		public function index()
		{
			if($this->session->userdata('nik') == ''){
				redirect('login');
			}else{
			//$data['Mahasiswa']=$this->M_mahasiswa->tampil_data()->result();

			$this->load->view('Tamplates/Header');
			$this->load->view('Tamplates/menu');
			$this->load->view('penduduk/akte');
			$this->load->view('Tamplates/Footer');
			}

		}
	
  public function tambah_akte()
	{

		$nama			= $this->input->post('nama');
		$nik			= $this->session-> userdata ('nik') ;
		$dusun			= $this->input->post('dusun');
		$id_rt			= $this->input->post('rt');
		$id_rw			= $this->input->post('rw');
		$no				= $this->input->post('no');
		$sket			= $_FILES['sket']['name'];
		$kk				= $_FILES['kk']['name'];
		$ktp			= $_FILES['ktp']['name'];
		$aktanikah		= $_FILES['aktanikah']['name'];
		$spdkel			= $_FILES['spdkel']['name'];

		if($gambar =''){}else{
			$config ['upload_path'] = './kelahiran/';
			$config ['allowed_types'] = 'pdf|doc|docx';
			$config ['encrypt_name'] = true;
			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('sket')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		};
		if($foto =''){}else{
			$config ['upload_path'] = './kelahiran/';
			$config ['allowed_types'] = 'pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('kk')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		};
		if($akta =''){}else{
			$config ['upload_path'] = './kelahiran/';
			$config ['allowed_types'] = 'pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('ktp')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		};
		if($akta =''){}else{
			$config ['upload_path'] = './kelahiran/';
			$config ['allowed_types'] = 'pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('aktanikah')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		};
		if($akta =''){}else{
			$config ['upload_path'] = './kelahiran/';
			$config ['allowed_types'] = 'pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('spdkel')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		$data = array(
			'nama' 		=>$nama,
			'nik'		=> $nik,
			'dusun'		=> $dusun,
			'id_rw'		=> $id_rw,
			'id_rt'		=> $id_rt,
			'no' 		=>$no,
			'sket'		=> $sket,
			'kk'		=> $kk,
			'ktp'		=> $ktp,
			'aktanikah'	=> $aktanikah,
			'spdkel'	=> $spdkel
		);

		$this->M_penduduk->tambah_akte($data, 'tbl_aktekelahiran');
		redirect('akte');
	}

	}

 ?>
