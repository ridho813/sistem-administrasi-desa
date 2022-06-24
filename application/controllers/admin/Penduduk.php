<?php 

	class Penduduk extends CI_Controller{

		public function index()
		{
			$data['penduduk']=$this->M_penduduk->tampil_penduduk()->result();

			$this->load->view('back/header');
			$this->load->view('admin/penduduk', $data);
			$this->load->view('back/footer');


		}
	
		public function add()
		{
			$this->load->view('back/header');
			$this->load->view('admin/add');
			$this->load->view('back/footer');
		}
		public function tambah_aksi()
		{
	
			$nama			= $this->input->post('nama');
			$nik			= $this->input->post('nik');
			$tempat_lahir				= $this->input->post('tempat_lahir');
			$tanggal_lahir			= $this->input->post('tanggal_lahir');
			$no_telp		= $this->input->post('no_telp');
			$id_rt			= $this->input->post('id_rt');
			$id_rw			= $this->input->post('id_rw');
			$id_dusun			= $this->input->post('id_dusun');
			$pendidikan			= $this->input->post('pendidikan');
			$agama			= $this->input->post('agama');
			$goldar			= $this->input->post('goldar');
			$jen_kel			= $this->input->post('jen_kel');
			$pekerjaan			= $this->input->post('pekerjaan');
			$status_kawin			= $this->input->post('status_kawin');
			$status_penduduk			= $this->input->post('status_penduduk');
		
			$data = array(
				'nama' 		=>$nama,
				'nik'		=> $nik,
				'no_telp' 		=>$no_telp,
				'id_dusun'=> $id_dusun,
				'id_rw'	=> $id_rw,
				'id_rt'	=> $id_rt,
				'pendidikan'		=> $pendidikan,
				'agama'	=> $agama,
				'goldar'	=> $goldar,
				'jen_kel'	=> $jen_kel,
				'pekerjaan'	=> $pekerjaan,
				'status_kawin'	=> $status_kawin,
				'status_penduduk'	=> $status_penduduk
				
			);
	
			$this->M_penduduk->tambah_pen($data, 'tbl_penduduk');
			$this->session->set_flashdata('sukses','Data KK berhasil di tambahkan<br>Terimakasih');
			redirect('admin/Penduduk');
		}

		public function verifikasi()
		{
			$id = $this->uri->segment(4);
			$data = array('status'  => 'aktif');
			$update = $this->M_admin->update_bidder(array('id' => $id), $data);
			$this->session->set_flashdata('sukses','Data Bidder berhasil di aktifkan<br>Terimakasih');
			redirect('back_end/users/bidder_aktif');
		}
  

    
	}
 ?>
