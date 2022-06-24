<?php 

	class Nikah extends CI_Controller{
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
			$this->load->view('penduduk/nikah');
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
		$kk			= $_FILES['kk']['name'];
		$ktp			= $_FILES['ktp']['name'];
		$ktpi			= $_FILES['ktpi']['name'];
		$ktportu			= $_FILES['ktportu']['name'];
		$spdkel			= $_FILES['spdkel']['name'];
		$aktanikah		= $_FILES['aktanikah']['name'];
		$surat			= $_FILES['surat']['name'];
	
		if($gambar =''){}else{
			$config ['upload_path'] = './nikah/';
			$config ['allowed_types'] = 'pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('kk')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		};
		if($gambar =''){}else{
			$config ['upload_path'] = './nikah/';
			$config ['allowed_types'] = 'pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('ktp')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		if($gambar =''){}else{
			$config ['upload_path'] = './nikah/';
			$config ['allowed_types'] = 'pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('ktpi')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		if($gambar =''){}else{
			$config ['upload_path'] = './nikah/';
			$config ['allowed_types'] = 'pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('ktportu')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		if($gambar =''){}else{
			$config ['upload_path'] = './nikah/';
			$config ['allowed_types'] = 'pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('spdkel')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		if($gambar =''){}else{
			$config ['upload_path'] = './nikah/';
			$config ['allowed_types'] = 'pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('aktanikah')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		if($gambar =''){}else{
			$config ['upload_path'] = './nikah/';
			$config ['allowed_types'] = 'pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('surat')){
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
			'kk'		=> $kk,
			'ktp'	=> $ktp,
			'ktpi'	=> $ktpi,
			'spdkel'	=> $spdkel,
			'aktanikah'	=> $aktanikah,
			'surat'	=> $surat
			
		);

		$this->M_penduduk->tambah_nikah($data, 'nikah');
		$this->session->set_flashdata('sukses','Data KK berhasil di tambahkan<br>Terimakasih');
		redirect('nikah');
	}

	}

 ?>
