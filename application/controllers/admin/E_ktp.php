<?php 

	class E_ktp extends CI_Controller{

		public function index()
		{
			$data['ktp']=$this->M_penduduk->tampil_data()->result();

			$this->load->view('back/header');
			$this->load->view('admin/ktp', $data);
			$this->load->view('back/footer');


		}
	
  

  

    
	}
 ?>
