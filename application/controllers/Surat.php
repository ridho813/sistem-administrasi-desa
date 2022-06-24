<?php 

	class Surat extends CI_Controller{
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
			$this->load->view('penduduk/pindahdat');
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
		$skpindah		= $_FILES['skpindah']['name'];
		$biodata		= $_FILES['biodata']['name'];
		$skjaminan		= $_FILES['skjaminan']['name'];
		$kk		= $_FILES['kk']['name'];
		$ktp		= $_FILES['ktp']['name'];
		$akta			= $_FILES['akta']['name'];
		$aktanikah		= $_FILES['aktanikah']['name'];
	
		if($gambar =''){}else{
			$config ['upload_path'] = './skpindah/';
			$config ['allowed_types'] = 'jpg|png|jepeg|pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('skpindah')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		};
		if($gambar =''){}else{
			$config ['upload_path'] = './skpindah/';
			$config ['allowed_types'] = 'jpg|png|jepeg|pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('pindah')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		};
		if($gambar =''){}else{
			$config ['upload_path'] = './skpindah/';
			$config ['allowed_types'] = 'jpg|png|jepeg|pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('skpindah')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		};
		if($gambar =''){}else{
			$config ['upload_path'] = './skpindah/';
			$config ['allowed_types'] = 'jpg|png|jepeg|pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('skjaminan')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		if($gambar =''){}else{
			$config ['upload_path'] = './skpindah/';
			$config ['allowed_types'] = 'jpg|png|jepeg|pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('ktp')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		if($gambar =''){}else{
			$config ['upload_path'] = './skpindah]/';
			$config ['allowed_types'] = 'jpg|png|jepeg|pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('akta')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		if($gambar =''){}else{
			$config ['upload_path'] = './skpindah/';
			$config ['allowed_types'] = 'jpg|png|jepeg|pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('aktanikah')){
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
			'skpindah'	=> $skpindah,
			'biodata'	=> $biodata,
			'skjaminan'	=> $skjaminan,
			'kk'	=> $kk,
			'ktp'	=> $ktp,
			'akta'		=> $akta,
			'aktanikah'	=> $aktanikah
			
		);

		$this->M_penduduk->tambah_pindah($data, 'datang');
		$this->session->set_flashdata('sukses','Data KK berhasil di tambahkan<br>Terimakasih');
		redirect('surat');
	}

	}

 ?>
