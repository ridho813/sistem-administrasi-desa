<?php 

	class Kk extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model(array('M_penduduk')); 
		}
		public function index()
		{
			//$data['Mahasiswa']=$this->M_mahasiswa->tampil_data()->result();
			if($this->session->userdata('nik') == ''){
				redirect('login');
			}else{
			$this->load->view('Tamplates/Header');
			$this->load->view('Tamplates/menu');
			$this->load->view('penduduk/kk');
			$this->load->view('Tamplates/Footer');
		//	$this->output->set_header($this->config->item('json_header'));
			}
		}
	
  public function tambah()
	{
		$nik			= $this->session-> userdata ('nik') ;
		$nama			= $this->input->post('nama');
		$no				= $this->input->post('no');
		$dusun			= $this->input->post('dusun');
		$id_rt			= $this->input->post('rt');
		$id_rw			= $this->input->post('rw');
		$akta			= $_FILES['akta']['name'];
		$formulir		= $_FILES['formulir']['name'];
	
		if($gambar =''){}else{
			$config ['upload_path'] = './formulir/';
			$config ['allowed_types'] = 'jpg|png|jepeg|pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('formulir')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		};
		if($gambar =''){}else{
			$config ['upload_path'] = './formulir/';
			$config ['allowed_types'] = 'jpg|png|jepeg|pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('akta')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		$data = array(
			'nama' 		=>$nama,
			'nik'		=> $nik,
			'no' 		=>$no,
			'dusun'=> $dusun,
			'id_rw'	=> $id_rw,
			'id_rt'	=> $id_rt,
			'akta'		=> $akta,
			'formulir'	=> $formulir
			
		);

		$this->M_penduduk->tambah_kk($data, 'tbl_kk');
		$this->session->set_flashdata('sukses','Data KK berhasil di tambahkan<br>Terimakasih');
		redirect('kk');
	}

	}

 ?>
