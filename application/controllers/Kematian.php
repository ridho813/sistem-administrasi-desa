<?php 

	class Kematian extends CI_Controller{
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
			$this->load->view('penduduk/kematian');
			$this->load->view('Tamplates/Footer');
			}

		}
	
  public function tambah_kematian()
	{

		$nama			= $this->input->post('nama');
		$nik			= $this->session-> userdata ('nik') ;
		$no				= $this->input->post('no');
		$skkem			= $_FILES['skkem']['name'];
		$sper			= $_FILES['sper']['name'];
		$akte_nikah		= $_FILES['akte_nikah']['name'];
		$ktp			= $_FILES['ktp']['name'];
		$kk				= $_FILES['kk']['name'];
		$ktppel			= $_FILES['ktppel']['name'];

		if($gambar =''){}else{
			$config ['upload_path'] = './meninggal/';
			$config ['allowed_types'] = 'pdf|doc|docx';
			$config ['encrypt_name'] = true;
			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('skkem')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		};
		if($foto =''){}else{
			$config ['upload_path'] = './meninggal/';
			$config ['allowed_types'] = 'pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('sper')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		};
		if($akta =''){}else{
			$config ['upload_path'] = './meninggal/';
			$config ['allowed_types'] = 'pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('akte_nikah')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		if($akta =''){}else{
			$config ['upload_path'] = './meninggal/';
			$config ['allowed_types'] = 'pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('akte_nikah')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('ktp');
			}
		}
		if($akta =''){}else{
			$config ['upload_path'] = './meninggal/';
			$config ['allowed_types'] = 'pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('kk')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		if($akta =''){}else{
			$config ['upload_path'] = './meninggal/';
			$config ['allowed_types'] = 'pdf|doc|docx';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('ktppel')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		$data = array(
			'nama' 			=>$nama,
			'nik'			=> $nik,
			'no' 			=>$no,
			'skkem' 		=>$skkem,
			'sper' 			=>$sper,
			'akte_nikah' 	=>$akte_nikah,
			'ktp'			=> $ktp,
			'kk'			=> $kk,
			'ktppel'		=> $ktppel
		);

		$this->M_penduduk->tambah_kematian($data, 'tbl_kematian');
		$this->session->set_flashdata('sukses','Data KK berhasil di tambahkan<br>Terimakasih');
		redirect('kematian');
	}

	}

 ?>
