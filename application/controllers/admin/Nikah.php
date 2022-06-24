<?php 

	class Nikah extends CI_Controller{

		public function index()
		{
			$data['nikah']=$this->M_penduduk->tampil_nikah()->result();

			$this->load->view('back/header');
			$this->load->view('admin/nikah', $data);
			$this->load->view('back/footer');


		}


    
	}
 ?>
